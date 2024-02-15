<?php

class DataSourceREST extends DataSource {
	protected $cipherer;

	function __construct( $name, $pSet, $connection ) {
		parent::__construct( $name );

		$this->pSet = $pSet;
		$this->connection = $connection;
		$this->opDescriptors = $this->pSet->getDataSourceOps();
	}
	/**
	 * returns recordset or array
	 */
	public function getList( $dc ) {
		$result = $this->getListData( $dc );
		if( !$result ) {
			return $result;
		}
		//	apply $dc->startRecord & totals
		$result->seekRecord( $dc->startRecord );
		return $result;
	}

	public function updateSingle( $dc ) {
		$op = "update";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( !count($dc->values) )
			return true;
		$ret = $this->runRequest( $op, $dc );
		return $ret !== false;
	}

	public function insertSingle( $dc ) {
		$op = "insert";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( !count($dc->values) ) {
			$this->setError( "nothing to insert");
			return false;
		}
		$ret = $this->runRequest( $op, $dc );
		return $ret !== false
			? $dc->values
			: $ret;
	}

	public function deleteSingle( $dc ) {
		$op = "delete";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( !count($dc->keys) )
			return true;
		$ret = $this->runRequest( $op, $dc );
		return $ret !== false;
	}

	public function getSingle( $dc ) {
		$op = "selectOne";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( $this->opDescriptors[ $op ] ) {
			$result = $this->runRequest( $op, $dc );
			$result = $this->resultFromJson( $result, false );
			if( $result === false ) {
				trigger_error( $this->lastError(), E_USER_ERROR );
				return false;
			}
			$result = $this->filterResult( $result, $dc->filter );

		} else {
			$result = $this->getListData( $dc );
		}
		return $result;
	}

	protected function getListData( $dc ) {
		if( $dc->_cache["listData"] ) {
			return $dc->_cache["listData"];
		}

		$op = "selectList";
		if( $this->codeOp( $op ) ) {
			$res =  $this->callCodeOp( $op, $dc );
		} else {
			$res = $this->runRequest( "selectList", $dc );
			$res = $this->resultFromJson( $res, true );
		}
		if( $res === false ) {
			trigger_error( $this->lastError(), E_USER_ERROR );
			return false;
		}
		if( $this->codeOp( $op ) ) {
			$res = $this->addExtraColumns( $res, $dc );
		} else {
			$res = $this->addExtraColumns( $res, $dc );
			$res = $this->filterResult( $res, $dc->filter );
			$this->reorderResult( $dc, $res );
		}
		$dc->_cache["listData"] = $res;
		return $dc->_cache["listData"];
	}

	public function getCount( $dc ) {
		$op = "count";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		//	use List command
		$ret = $this->getListData( $dc );
		if( $ret ) {
				//	apply totals
			return $ret->count();
		}
		return 0;
	}

	/**
	 * @return Array
	 * "header"=> array( key => value )
	 * "form"=> array( key => value )
	 * "url"=> array( key => value )
	 */
	public function preparePayload( $payload ) {
		$payloadForm = array();
		$payloadUrl = array();
		$payloadHeaders = array();
		foreach( $payload as $p ) {
			$value = RunnerContext::PrepareRest( $p["value"] );
			if( $p["skipEmpty"] && $value == "" )
				continue;
			if( $p["location"] == "url" ) {
				$payloadUrl[ $p["name"] ] = $value;
			} else if( $p["location"] == "header" ) {
				$payloadHeaders[ $p["name"] ] = $value;
			} else {
				$payloadForm[ $p["name"] ] = $value;
			}
		}
		return array(
			"url" => $payloadUrl,
			"form" => $payloadForm,
			"header" => $payloadHeaders
		);
	}

	/**
	 * @return parsed JSON or FALSE
	 */
	protected function runRequest( $op, $dc ) {
		RunnerContext::pushDataCommandContext( $dc );
		$urlRequest = RunnerContext::PrepareRest( $this->opDescriptors[ $op ]["request"] );
		$payload = $this->preparePayload( my_json_decode( $this->opDescriptors[ $op ]["payload"] ) );
		RunnerContext::pop();
		$method = $this->opDescriptors[ $op ]["method"];
		$res = &$this->connection->requestJson( $urlRequest, $method, $payload["form"], $payload["header"], $payload["url"] );
		if( !$res ) {
			$this->setError( $this->connection->lastError() );
			return false;
		} else {
			return  $res;
		}
	}

	/**
	 * Convert JSON onject into recordset
	 * @param Array data - parsed JSON result
	 * @param Boolean - type of request- list or single
	 * @return ArrayResult
	 */
	public function resultFromJson( &$data, $listRequest ) {
		if( $data === false )
			return $data;
		$fieldPaths = $this->getFieldPaths( $listRequest );
		$recNo = 0;
		$recCount = -1;
		$ret = array();
		$foundAny = false;
		while( true ) {
			$record = array();
			foreach( $fieldPaths as $field => $path ) {
				$foundValue = true;
				$pointer = &$data;
				foreach( $path as $pi ) {
					
					$p = $pi;	// .net stuff

					if( $p == '*') {
						if( $recCount == -1) {
							$recCount = count( $pointer );
						}
						$p = $recNo;
						$foundAny = true;
					}
					if( !isset( $pointer[$p] ) ) {
						$foundValue	= false;
						break;
					}
					$pointer = &$pointer[$p];
				}
				if( $foundValue ) {
					$foundAny = true;
					$record[ $field ] = $pointer;
				}
			}
			if( $record ) {
				$ret[] = $record;
			}
			++$recNo;
			if( $recNo >= $recCount ) {
				break;
			}
		}
		if( !$foundAny ) {
			$this->setError( my_json_encode( $data ) );
			return false;
		}
		return new ArrayResult( $ret );
	}

	/**
	 *  get all field paths as arrays
	 * 	@return Array
	 * 	"Make" => array( "data", "*", "Make" );
	 */
	protected function getFieldPaths( $listRequest ) {
		$ret = array();
		foreach( $this->pSet->getFieldsList() as $f ) {
			$source = $this->pSet->getFieldSource( $f, $listRequest );
			if( !$source ) {
				continue;
			}
			$ret[ $f ] = explode( '/', $source );
		}
		return $ret;
	}





}
?>