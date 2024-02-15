<?php

class DataSource {

	protected $_name;

	protected $connection;

	protected $opDescriptors;

	protected $_error = "";

	protected $pSet;

	function __construct( $name ) {
		$this->_name = $name;
	}

	protected function tableBased() {
		return false;
	}

	public function setContext() {

	}

	public function updateContext( $name, $value ) {

	}

	/**
	 * return record count
	 * @return number
	 */
	public function getCount() {

	}

	/**
	 * returns recordset or array
	 */
	public function getList() {

	}

	public function delete( $keys ) {

	}

	public function getSingle( $dc ) {

	}

	public function updateSingle( $dc  ) {

	}

	/**
	 * @return Array or false
	 */
	public function insertSingle( $dc ) {

	}

	public function updateMany( $keys, $values ) {

	}

	public function add( $values ) {

	}


	public function getNextPrevKeys( $dc, &$data, $what = BOTH_RECORDS ) {

	}

	protected function basicFieldCondition( $op ) {
		return $op == dsopMORE ||
		$op == dsopLESS ||
		$op == dsopEQUAL ||
		$op == dsopEMPTY ||
		$op == dsopIN ||
		$op == dsopCONTAIN ||
		$op == dsopSTART ||
		$op == dsopALL_IN_LIST ||
		$op == dsopSOME_IN_LIST ||
		$op == dsopSTART ||
		$op == dsopBETWEEN;
	}

	public function lastAutoincValue( $field ) {
	}

	/**
	 * Test whether the condition is always false
	 * @return Boolean
	 */
	protected function falseCondition( $condition ) {
		$this->flattenANDs( $condition );
		if( !$condition ) {
			return false;
		}
		if( $condition->operation === dsopFALSE ) {
			return true;
		}
		if( $condition->operation === dsopAND ) {
			foreach( $condition->operands as $op ) {
				if( $op->value->operation === dsopFALSE )
					return true;
			}
		}
		return false;
	}

	/**
	 * Adds extra column values to each record
	 * @param DataResult result - query result to filter
	 * @param DsCommand 
	 * @return ArrayResult - filtered data
	 */
	public function addExtraColumns( $rs, $dc ) {
		if( !$dc->extraColumns )
			return $rs;
		$ret = array();
		while( $data = $rs->fetchAssoc() ) {
			foreach( $dc->extraColumns as $ec ) {
				if( $ec->field ) {
					$data[ $ec->alias ] = DataSource::groupValue( $data[ $ec->field ], $this->pSet->getFieldType( $ec->field ), $ec->modifier );
				}
			}
			$ret[] = $data;
		}
		return new ArrayResult( $ret );
			
	}


	/**
	 * Return new result with satisfying records only
	 * @param DataResult result - query result to filter
	 * @param DsCondition filter - filter condition
	 * @return ArrayResult - filtered data
	 */
	public function filterResult( $result, $filter ) {
		if( $this->falseCondition( $filter) ) {
			return new ArrayResult( array() );
		}

		$ret = array();
		while( $data = $result->fetchAssoc() ) {
			if( $this->filterRecord( $data, $filter ) ) {
				$ret[] = $data;
			}
		}
		return new ArrayResult( $ret );
	}

	/**
	 * Check whether record satisfies the condition
	 * @param Array data
	 * @param DsCondition filter - filter condition
	 * @return Boolean
	 */
	protected function filterRecord( $data, $filter ) {
		if( !$filter ) {
			return true;
		}
		$op = $filter->operation;
		if( $op == dsopAND || $op == dsopOR ) {
			foreach( $filter->operands as $o ) {
				$result = $this->filterRecord( $data, $o->value );
				if( !$result && $op == dsopAND ) {
					return false;
				}
				if( $result && $op == dsopOR ) {
					return true;
				}
			}
			return $op == dsopOR ? false : true;

		}
		else if( $op == dsopNOT ) {
			return !$this->filterRecord( $data, $filter->operands[0]->value );
		}
		else if( $op == dsopFALSE ) {
			return false;
		}
		else if( DataSource::basicFieldCondition( $op ) ) {
			return $this->checkBasicFieldCondition( $data, $filter );
		}
		return true;
	}

	/**
	 * @return boolean
	 */
	protected function checkBasicFieldCondition( $data, $condition ) {
		$op = $condition->operation;
		$fieldName = $condition->operands[0]->value;
		$modifier = $condition->operands[0]->modifier;
		$fieldValue = $data[ $fieldName ];
		if( $modifier ) {
			$fieldValue = DataSource::groupValue( $fieldValue, $this->pSet->getFieldType( $fieldName ), $modifier );
		}
		if( $op == dsopEMPTY ) {
			return $fieldValue === '' || $fieldValue === null;
		}
		$value = $condition->operands[1]->value;
		$value1 = "";
		if( count( $condition->operands ) > 2 ) {
			$value1 = $condition->operands[2]->value;
		}
		if( $condition->caseInsensitive ) {
			$fieldValue = strtoupper( $fieldValue );
			$value = strtoupper( $value );
			$value1 = strtoupper( $value1 );
		}

		if( $op == dsopMORE ) {
			return $fieldValue > $value;
		}
		else if( $op == dsopLESS ) {
			return $fieldValue < $value;
		}
		else if( $op == dsopEQUAL ) {
			return $fieldValue == $value;
		}
		else if( $op == dsopCONTAIN ) {
			return strpos( $fieldValue, $value ) !== false;
		}
		else if( $op == dsopSTART ) {
			return strpos( $fieldValue, $value ) === 0;
		} else if( $op == dsopBETWEEN ) {
			return $fieldValue >= $value && $fieldValue <= $value1;
		}
		return false;
	}

	/**
	 * move ANDS to the top level
	 */
	protected function flattenANDs( $condition ) {
		if( !$condition || $condition->operation != dsopAND )
			return;
		$newOperands = array();
		foreach( $condition->operands as $cop ) {
			if(!$cop->value)
				continue;
			$cond = $cop->value;
			$this->flattenANDs( $cond );
			if( $cond->operation === dsopAND ) {
				foreach( $cond->operands as $op ) {
					$newOperands[] = $op;
				}
			} else {
				$newOperands[] = $cop;
			}
		}
		$condition->operands = $newOperands;
	}

	public function reorderResult( $dc, $res ) {
		$res->reorder( array( $dc, "compareRecords") );
	}

	public function getOpSubtype( $op ) {
		if( !$this->opDescriptors[ $op ] )
			return "";
		return $this->opDescriptors[ $op ]["subtype"];
	}

	/**
	 * @return Boolean
	 */
	public function codeOp( $op ) {
		return $this->getOpSubtype( $op ) == "code";
	}

	/**
	 * Returns whatever user's event returns or false
	 */
	public function callCodeOp( $op, $dc ) {
		$events = getEventObject( $this->_name );
		if( !$events )
			return false;
		if( !$events->exists( $op ) )
			return false;
		RunnerContext::pushDataCommandContext( $dc );
		$ret =  $events->$op( $this, $dc );
		RunnerContext::pop();
		return $ret;
	}

	public function lastError() {
		if( $this->_error )
			return $this->_error;
		return $this->connection->lastError();
	}

	public function setError( $str ) {
		$this->_error = $str;
	}


	/**
	 * returns number of records in request with totals
	 * See DsCommand::totals description
	 * @return Integer
	 */
	public function getTotalCount( $dc ) {
		$totals = $this->getTotals( $dc );
		if( $totals )
			return $totals->count();
		return $totals;
	}
	/**
	 * returns result with group totals
	 * See DsCommand::totals description
	 */
	public function getTotals( $dc ) {
		$rs = $this->getListData( $dc );
		if( !$rs ) {
			return false;
		}

		//prepare group fields
		$groupFields = array();
		$groupTypes = array();
		$groupModifiers = array();
		$skipEmptyGroups = array();
		foreach( $dc->totals as $t ) {
			if( !$t["total"] || $t["total"] == "distinct" ) {
				$groupFields[] = $t["field"];
				$groupTypes[ $t["field"] ] = $this->pSet->getFieldType( $t["field"] );
				$groupModifiers[ $t["field"] ] = $t["modifier"];
				if( $t["skipEmpty"] )
					$skipEmptyGroups[ $t["field"] ] = true;
			}
		}


		//	split into groups
		$records = array();
		while( $record = &$rs->fetchAssoc() ) {
			$arrPtr = &$records;
			$skipRecord = false;
			foreach( $groupFields as $gf ) {
				$gValue = DataSource::groupValue( $record[ $gf ], $groupTypes[ $gf ], $groupModifiers[ $gf ] );
				$record[ $gf ] = $gValue;
				if( $gValue == "" && $skipEmptyGroups[ $gf ] ) {
					$skipRecord = true;
					break;
				}
				if( !isset( $arrPtr[ $gValue ] ) ) {
					$arrPtr[ $gValue ] = array();
				}
				$arrPtr = &$arrPtr[ $gValue ];
			}

			if( !$skipRecord )
				$arrPtr[] = $record;
		}

		$ret = array();
		$this->calculateTotals( $dc, $records, count( $groupFields ), $ret );

		$groupRs = new ArrayResult( $ret );

		//	order the dataset
		$orderCommand = new DsCommand();
		foreach( $dc->totals as $t ) {
			if( !$t["direction"] ) {
				continue;
			}
			$totalField = $t["alias"] ? $t["alias"] : $t["field"];
			$orderCommand->order[] = array( "column" => $totalField, "dir" => $t["direction"] );
		}

		$this->reorderResult( $orderCommand, $groupRs );
		//	apply $dc->startRecord & totals
		$groupRs->seekRecord( $dc->startRecord );

		return $groupRs;
	}
	
	/**
	 * Get case statement operand value
	 * @param DsOperand	 
	 * @param Array Record data
	 * @return mixed 
	 */	
	protected function getTotalOperantValue( $op, &$record ) {
		if( $op ) {
			if( $op->type == dsotFIELD )
				return $record[ $op->value ];
			
			if( $op->type == dsotCONST )
				return $op->value;
		}
		return NULL;
	}
	
	/**
	 * Get a case statement result value 
	 * @param DsCaseExpression	 
	 * @param Array		Record data
	 * @return Array 
	 */
	protected function getCaseStatementResult( $caseExpr, &$record ) {
		foreach( $caseExpr->conditions as $idx => $condition ) {
			if( $this->filterRecord( $record, $condition) ) {
				return array( 
					"value" => $this->getTotalOperantValue( $caseExpr->values[ $idx ], $record ),
					"skipRecordTotal" => $caseExpr->values[ $idx ]->type == dsotNULL
				);
			}
		}
	
		return array( 
			"value" => $this->getTotalOperantValue( $caseExpr->defValue, $record ),
			"skipRecordTotal" => $caseExpr->defValue->type == dsotNULL
		);	
	}
	
	
	/**
	 * @param DsCommand
	 * @param Array of records
	 * @return Array - single record with totals
	 */
	protected function getGroupTotals( $dc, &$records ) {
		$ret = array();
		$recordCounts = array();
		foreach( $records as $r ) {
			$needContinue = false;
			foreach(  $dc->totals as $t ) {
				$sourceField = $t["field"];
				$totalField = $t["alias"] ? $t["alias"] : $t["field"];

				if( $t["total"] && $t["total"] != "distinct" )
					$needContinue = true; 				
				
				if( $t["caseStatement"] ) {
					$caseResult = $this->getCaseStatementResult( $t["caseStatement"], $r );
					$sourceFieldValue = $caseResult["value"];
					$skipRecordTotal = $caseResult["skipRecordTotal"];
				} else {
					$sourceFieldValue = $r[ $sourceField ];
					$skipRecordTotal = false;
				}
				
				// skip totals calculation for dsotNULL 
				if( $skipRecordTotal ) {
					continue;
				}
				
				if( !$t["total"] || $t["total"] == "distinct" )
				{
					if( !isset( $ret[ $totalField ] ) ) {
						$ret[ $totalField ] = $sourceFieldValue;
					}
				}
				else if( $t["total"] != "count" )
				{
					//$needContinue = true;
					//	calculate actual totals
					if( $t["total"] == "sum" || $t["total"] == "avg" ) {
						//	TODO: time summing
						if( !isset( $ret[ $totalField ] ) ) {
							$ret[ $totalField ] = 0;
						}
						$ret[ $totalField ] += $sourceFieldValue;
						
						//	each AVG field needs its own record count
						if( !$recordCounts[ $totalField ] ) {
							$recordCounts[ $totalField ] = 0;
						}
						++$recordCounts[ $totalField ];
					}
					if( $t["total"] == "min" || $t["total"] == "max" ) {
						//	TODO: time summing
						if( !isset( $ret[ $totalField ] ) ) {
							$ret[ $totalField ] = $sourceFieldValue;
						} else {
							if( $t["total"] == "min" && $sourceFieldValue < $ret[ $totalField ]
								|| $t["total"] == "max" && $sourceFieldValue > $ret[ $totalField ] )
							{
								$ret[ $totalField ] = $sourceFieldValue;
							}
						}
					}
				} else {
					//$needContinue = true;
					if( !isset( $ret[ $totalField ] ) ) {
						$ret[ $totalField ] = 0;
					}

					$ret[ $totalField ] += 1;
				}

			}
			if( !$needContinue )
				break;
		}

		//	post-process
		foreach(  $dc->totals as $t ) {
			$totalField = $t["alias"] ? $t["alias"] : $t["field"];

			if( $t["total"] == "avg" && $recordCounts[ $totalField ] ) {
				$ret[ $totalField ] /= $recordCounts[ $totalField ];
			}
		}

		return $ret;
	}

	/**
	 * @param DsCommand
	 * @param Array of records
	 * @param Integer levels to iterate in $records
	 * @param Array ( out )
	 * @return Array - records with totals
	 */
	protected function calculateTotals( $dc, &$records, $levelsLeft, &$ret ) {
		if( !$levelsLeft ) {
			$ret[] = $this->getGroupTotals( $dc, $records );
		} else {
			--$levelsLeft;
			foreach( $records as $ptr ) {
				$this->calculateTotals( $dc, $ptr, $levelsLeft, $ret );
			}
		}
	}

	/**
	 * Similar to DataSourceTable::applyFieldModifier, but calcualtes group value right away, not in SQL
	 * @param String field value
	 * @param Integer modifier 0 - ...
	 */
	public static function groupValue( $value, $ftype, $modifier ) {
		if( !$modifier )
			return $value;
		if( IsNumberType($ftype) ) {
			return DataSource::groupValueNumber( $value, $modifier );
		} else if( IsCharType( $ftype ) ) {
			return DataSource::groupValueChar( $value, $modifier );
		} else if( IsDateFieldType( $ftype ) ) {
			return DataSource::groupValueDate( $value, $modifier );
		}
		return $value;
	}

	public static function groupValueNumber( $value, $modifier ) {
		if( !$modifier )
			return $value;
		if( $value >= 0 ) {
			return floor( $value / $modifier ) * $modifier;
		} else {
			return ceil( $value / $modifier ) * $modifier;
		}
	}
	protected static function groupValueChar( $value, $modifier ) {
		if( !$modifier ) {
			return $value;
		}
		return substr( $value, 0, $modifier );
	}

	/**
	 * @param String - date or datetime in 'YYYY-DD-MM HH:MI:SS' format
	 * @param Integer modifier 0 - ...
	 * Returns exaclty the same the Connection::intervalExpressionDate calculates
	 */
	public static function groupValueDate( $value, $modifier ) {
		$time = db2time($value); //[y,mo,d,h,mi,s];
		if(!count($time))
			return $value;

		if($modifier == 1) // DATE_INTERVAL_YEAR
			return $time[0]*10000 + 101;
		if($modifier == 2) { // DATE_INTERVAL_QUARTER
			$quarter = floor(($time[1] - 1) / 3) + 1;
			return  $time[0]*10000 + $quarter*100+1;
		}
		if($modifier == 3) // DATE_INTERVAL_MONTH
			return  $time[0]*10000 +  $time[1]*100+1;
		if($modifier == 4) { // DATE_INTERVAL_WEEK
			$week = weeknumber($time);
			return  $time[0]*10000 + $week*100+01;
		}
		if($modifier == 5) // DATE_INTERVAL_DAY
			return  $time[0]*10000 +  $time[1]*100 +  $time[2];
		if($modifier == 6) // DATE_INTERVAL_HOUR
			return  $time[0]*1000000 +  $time[1]*10000 +  $time[2]*100 +  $time[3];
		if($modifier == 7) // DATE_INTERVAL_MINUTE
			return  $time[0]*100000000 +  $time[1]*1000000 +  $time[2]*10000 +  $time[3]*100 + $time[4];
		return $value;
	}

	public function overrideSQL( $dc, $sql ) {
	}

	public function overrideWhere( $dc, $where, $having = "" ) {
	}

	public function overrideOrder( $dc, $orderby ) {
	}

	public function getConnection() {
		return $this->connection;
	}

}

require_once( getabspath( 'classes/datasource/table.php') );
require_once( getabspath( 'classes/datasource/projecttable.php') );
require_once( getabspath( 'classes/datasource/dbtable.php') );
require_once( getabspath( 'classes/datasource/sql.php') );
require_once( getabspath( 'classes/datasource/rest.php') );

?>