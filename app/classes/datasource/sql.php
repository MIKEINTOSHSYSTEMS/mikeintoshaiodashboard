<?php
require_once( getabspath("classes/datasource/arrayresult.php") );

class DataSourceSQL extends DataSource {
	protected $cipherer;

	function __construct( $name, $pSet, $connection ) {
		parent::__construct( $name );

		$this->pSet = $pSet;
		$this->connection = $connection;
//		$this->cipherer = new RunnerCipherer( $this->name );
		$this->opDescriptors = $this->pSet->getDataSourceOps();
	}
	/**
	 * returns recordset or array
	 */
	public function getList( $dc ) {
		$result = $this->getListData( $dc, true );
		if( !$result ) {
			return $result;
		}
		//	apply $dc->startRecord & totals
		$result->seekRecord( $dc->startRecord );
		return $result;
	}

	public function getSingle( $dc ) {

		$op = "selectOne";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		RunnerContext::pushDataCommandContext( $dc );
		$sql = DB::PrepareSQL( $this->getSQL( $op ) );
		RunnerContext::pop();
		if( $sql ) {
			$result = $this->connection->limitedQuery( $sql, 0, 1, true );
			$result = $this->filterResult( $result, $dc->filter );
		} else {
			$result = $this->getListData( $dc, false );
		}
		//	apply filter, startRecord, reccount & totals
		return $result;
	}

	/**
	 * @param DsCommand
	 * @param Boolean
	 * @return DataResult
	 */
	protected function getListData( $dc, $listRequest ) {
		if( $dc->_cache["listData"] ) {
			return $dc->_cache["listData"];
		}
		$op = "selectList";
		if( $this->codeOp( $op ) ) {
			$res = $this->callCodeOp( $op, $dc );
			if( !$res ) {
				return $res;
			}
		} else {
			RunnerContext::pushDataCommandContext( $dc );
			$sql = DB::PrepareSQL( $this->getSQL( 'selectList' ) );
			RunnerContext::pop();
			$res = $this->connection->query( $sql );
			if( !$res )
				return $res;
			$res->setFieldSubstitutions( $this->getFieldSubs( $listRequest ) );
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
		$sql = DB::PrepareSQL( $this->getSQL( $op ) );
		if( $sql ) {
			//	dedicated count command
			$res = $this->connection->query( $sql );
			if( !$res )
				return 0;
			$res = $this->filterResult( $res, $dc->filter );
			$data = $res->fetchNumeric();
			if( !$data ) {
				return 0;
			}
			return $data[0];
		}
		else
		{
			//	use List command
			$ret = $this->getListData( $dc, true );
			if( $ret ) {
				//	apply totals
				return $ret->count();
			}
			return 0;
		}
	}

	/**
	 * @return String
	 */
	protected function getSQL( $op ) {
		return $this->opDescriptors[ $op ]["sql"];
	}

	public function updateSingle( $dc ) {
		$op = "update";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( !count($dc->values) )
			return true;
		RunnerContext::pushDataCommandContext( $dc );
		$sql = DB::PrepareSQL( $this->getSQL( $op ) );
		RunnerContext::pop();

		if( $this->connection->exec( $sql ) ) {
			return true;
		}
		$this->setError( $this->connection->lastError() );
		return false;
	}

	public function deleteSingle( $dc ) {
		$op = "delete";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if(  !count($dc->keys) )
			return true;
		RunnerContext::pushDataCommandContext( $dc );
		$sql = DB::PrepareSQL( $this->getSQL( $op ) );
		RunnerContext::pop();

		if( $this->connection->exec( $sql ) ) {
			return true;
		}
		$this->setError( $this->connection->lastError() );
		return false;
	}


	public function insertSingle( $dc ) {
		$op = "insert";
		if( $this->codeOp( $op ) ) {
			$ret = $this->callCodeOp( $op, $dc );
			if( $ret !== false && !is_array( $ret ) ) {
				$ret = array();
			}
			return $ret;
		}
		if( !count($dc->values) )
			return array();
		RunnerContext::pushDataCommandContext( $dc );
		$sql = DB::PrepareSQL( $this->getSQL( $op ) );
		RunnerContext::pop();

		if( $this->connection->exec( $sql ) ) {
			return $dc->values;
		}
		
		$this->setError( $this->connection->lastError() );
		return false;
	}

	protected function getFieldSubs( $listRequest ) {
		$ret = array();
		foreach( $this->pSet->getFieldsList() as $f ) {
			$source = $this->pSet->getFieldSource( $f, $listRequest );
			if( !$source ) {
				continue;
			}
			$ret[ $source ] = $f;
		}
		return $ret;
	}

}

?>