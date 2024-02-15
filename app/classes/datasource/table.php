<?php

/**
 * Abstract class, contains method common for both
 * DataSourceProjectTable and DataSourceDBTable classes
 */
class DataSourceTable extends DataSource {
	protected $cipherer;

	function __construct( $name, $connection ) {
		parent::__construct( $name );
		$this->connection = $connection;
		$this->cipherer = new RunnerCipherer( $name );
	}

	public function prepareSQL( $dc ) {
		$this->buildWhereHaving( $dc );
		$order = $this->getOrderClause( $dc );
		$sql = $this->buildSQL( $dc, false );
		return array(
			"sql" => $sql,
			"where" => $dc->_cache["where"],
			"order" => $order
		);
	}

	public function overrideSQL( $dc, $sql ) {
		$dc->_cache["sql"] = $sql;
	}

	public function overrideWhere( $dc, $where, $having = "" ) {
		// unset "sql" to build a new value with a correct WHERE clause
		$dc->_cache["sql"] = NULL;

		$dc->_cache["where"] = $where;
		if( $dc->_cache["having"] )
			$dc->_cache["having"] = $where;
	}

	public function overrideOrder( $dc, $orderby ) {
		$dc->_cache["order"] = $orderby;
	}

	protected function getKeyFields() {
		return array();
	}

	protected function buildWhereHaving( $dc ) {
		if( isset( $dc->_cache["where"] ) ) {
			return;
		}
		$filter = $dc->filter;
		//	when there are $dc->keys, just add them to the WHERE expression
		if( $dc->keys ) {
			$filter = DataCondition::_And( array(
				$dc->filter,
				DataCondition::FieldsEqual( $this->getKeyFields(), $dc->keys )
			) );
		}
		$filters = $this->splitFilterWhereHaving( $dc, $filter );
		$context = new DsFilterBuildContext;
		$dc->_cache["where"] = $this->conditionToSQL( $filters["where"], $context );
		$dc->_cache["having"] = $this->conditionToSQL( $filters["having"], $context );
		$dc->_cache["context"] = $context;
	}

	protected function getWhereClause( $dc ) {
		$this->buildWhereHaving( $dc );
		return $dc->_cache["where"];
	}

	protected function getHavingClause( $dc ) {
		$this->buildWhereHaving( $dc );
		return $dc->_cache["having"];
	}

	protected function getOrderClause( $dc ) {
		if( isset( $dc->_cache["order"] ) ) {
			return $dc->_cache["order"];
		}
		$orderby = array();
		foreach( $dc->order as $of ) {
			if( $of["index"] ) {
				$orderby[] = $of["index"] . " " . $of["dir"];
			} else if( $of["column"] ) {
				$extraColumn = $dc->findExtraColumn( $of["column"] );
				if( $extraColumn ) {
					$orderby[] = $this->connection->addFieldWrappers( $extraColumn->alias ) . " " . $of["dir"];
				} else {
					$orderby[] = $this->fieldExpression( $of["column"] ) . " " . $of["dir"];
				}
			} else {
				$orderby[] = $of["expr"] . " " . $of["dir"];
			}
		}
		$orderString = $orderby ? "ORDER BY " . implode( ", ", $orderby ) : "";
		$dc->_cache["orderby"] = $orderString;
		return $dc->_cache["orderby"];
	}

	protected function getGroupByFieldList() {
		return array();
	}

	/**
	 * Split $filter into two conditions, one that will go into WHERE, another - into HAVING SQL clauses.
	 * select a, count(*) as b from c
	 * When search is specified, the query shoudl look like:
	 * select a, count(*) as b from c where a like 'a' having b like 'b'
	 */
	protected function splitFilterWhereHaving( $dc, $filter ) {
		$ret = array(
			"where" => DataCondition::_And( array() ),
			"having" => DataCondition::_And( array() )
		);
		$grouppedFields = $this->getGroupByFieldList();
		if( !$grouppedFields ) {
			$ret["where"] = $filter;
			return $ret;
		}

		$this->flattenANDs( $filter );
		if( $filter->type !== dsopAND ) {
			$ret["where"] = $filter;
			return $ret;
		}

		foreach( $filter->operands as $oper ) {
			if( $this->findField( $oper->value, $grouppedFields ) ) {
				$ret["having"]->operands[] = $oper;
			} else {
				$ret["where"]->operands[] = $oper;
			}
		}
		return $ret;
	}

	/**
	 * check if there is any field from the list in the condition
	 * @param DsCondition
	 * @param Array of strings
	 * @return Boolean
	 */
	protected function findField( $condition, $fields ) {
		if( !$condition ) {
			return false;
		}
		foreach( $condition->operands as $op ) {
			if( $op->type === dsotFIELD ) {
				if( array_search( $op->value, $fields ) !== false ) {
					return true;
				}
			} else if( $op->type === dsotCONDITION ) {
				if( $this->findField( $op->value, $fields ) ) {
					return true;
				}
			}
		}
		return false;
	}

	protected function conditionToSQL( $dCondition, $context ) {
		if( !$dCondition ) {
			return "";
		}
		$op = $dCondition->operation;
		if( $op == dsopAND || $op == dsopOR ) {
			$sqlConditions = array();
			foreach( $dCondition->operands as $o ) {
				$sql = trim( $this->conditionToSQL( $o->value, $context ) );
				if( $sql !== "" ) {
					$sqlConditions[] = "( " . $sql . " )";
				}
			}
			return implode( $op == dsopAND ? ' and ' : ' or ', $sqlConditions );
		}
		else if( $op == dsopSQL ) {
			return trim( $dCondition->operands[ 0 ]->value );
		}
		else if( $op == dsopNOT ) {
			$sql = trim( $this->conditionToSQL( $dCondition->operands[ 0 ]->value, $context ) );
			if( $sql ) {
				return "NOT ( " . $sql . " )";
			}
			return "";
		}
		else if( DataSource::basicFieldCondition( $op ) ) {
			return $this->basicFieldConditionSQL( $dCondition, $context );
		}
		return "";
	}

	/**
	 * This function must be overridden
	 */
	protected function getFieldType( $field ) {
		trigger_error("Unsupported datasource", E_USER_ERROR );
		return 200;
	}

	/**
	 * @return Boolean
	 * field is encrypted with code-based cipher
	 */
	protected function valueNeedsEncrypted( $field ) {
		return false;
	}

		//	basic operations: < > = like isnull etc
	protected function basicFieldConditionSQL( $dCondition, $context )
	{
		//	take care of the field operand first
		$operandType = $dCondition->operands[0]->type;
		$field = $dCondition->operands[0]->value;
		$modifier = $dCondition->operands[0]->modifier;
		$fieldType = $this->getFieldType( $field );

		//	encryption stuff
		//	either field must be decrypted or value operand encrypted
		$encryptValue = $this->valueNeedsEncrypted( $field );
		if( $operandType == dsotFIELD )
			$fieldExpr = $this->fieldExpression( $field, $modifier );
		else if( $operandType == dsotSQL )
		$fieldExpr = $field;

		//	process $field->joinData, apply criteria to a field from another table, like searching by Display field
		if( !$encryptValue && $dCondition->operands[0]->joinData ) {
			$newExpression = $this->createJoinedExpression( $field, $fieldExpr, $dCondition->operands[0], $context );
			$fieldExpr = $newExpression ? $newExpression : $fieldExpr;
		}

		// forced conversion to char
		if( $dCondition->operands[0]->tochar && !IsCharType( $fieldType ) ) {
			$fieldExpr = $this->connection->field2char( $fieldExpr, $fieldType );
			$fieldType = 200;
		}
		if( IsDateFieldType( $fieldType ) && $modifier > 0 ) {
			$fieldType = 3;	// integer
		}

		if( $encryptValue ) {
			$values = array();
			//	only EMPTY and EQUALS operations can be done on PHP-encrypted fields
			for( $i = 1; $i < count( $dCondition->operands); ++$i ) {
				$values[] = $this->cipherer->EncryptField( $field, $dCondition->operands[$i]->value );
			}
			if( $dCondition->operation == dsopBETWEEN && count( $values ) == 2 ) {
				return $fieldExpr . ' = ' . $values[0] . " or " . $fieldExpr . ' = ' . $values[1];
			}
			if( $dCondition->operation == dsopEMPTY ) {
				$encryptedEmptyString = $this->cipherer->EncryptField( $field, $dCondition->operands[$i]->value );
				return $fieldExpr . " is null or "
					. $fieldExpr . " = '' or "
					. $fieldExpr . " = " . $this->connection->prepareString( $encryptedEmptyString );
			}
			//	all other operations turn into "="
			return $fieldExpr . " = " . $this->connection->prepareString( $values[0] );
		}
		$op = $dCondition->operation;
		if( $op == dsopEQUAL ) {
			return $this->sqlExpressionEquals( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $dCondition->caseInsensitive );
		} else if( $op == dsopMORE || $op == dsopLESS ) {
			return $this->sqlExpressionMore( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $dCondition->caseInsensitive, $op == dsopMORE );
		} else if( $op == dsopEMPTY ) {
			return $this->sqlExpressionEmpty( $fieldType, $fieldExpr );
		} else if( $op == dsopSTART || $op == dsopCONTAIN ) {
			return $this->sqlExpressionLike( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value,
				$dCondition->caseInsensitive, $op == dsopSTART, $dCondition->operands[ 1 ]->likeWrapper );
		} else if( $op == dsopBETWEEN ) {
			return $this->sqlExpressionBetween( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $dCondition->operands[ 2 ]->value, $dCondition->caseInsensitive );
		} else if( $op == dsopSOME_IN_LIST || $op == dsopALL_IN_LIST ) {
			return $this->sqlExpressionInList( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $op == dsopALL_IN_LIST );
		} else if( $op == dsopFALSE ) {
			return $this->sqlExpressionFalse();
		}
		return "";
	}

	protected function sqlExpressionFalse() {
		return "1=0";
	}

	protected function sqlExpressionEmpty( $fieldType, $fieldExpr ) {
		$ret = $fieldExpr . ' is null';

		if( IsDateFieldType( $fieldType ) && $this->connection->dbType == nDATABASE_MySQL ) {
			// skip "zero" dates '0000-00-00', '0000-00-00 00:00:00'
			return $ret
				. " or " . $fieldExpr . " = '0000-00-00'"
				. " or " . $fieldExpr . " = '0000-00-00 00:00:00'";
		}			
		
		if( !IsCharType( $fieldType ) || $this->connection->dbType == nDATABASE_Oracle ) {
			return $ret;
		}

		if( IsTextType( $fieldType ) && $this->connection->dbType == nDATABASE_MSSQLServer ) {
			return $ret . " or " . $fieldExpr . " like ''";
		} else {
			return $ret . " or " . $fieldExpr . " = ''";
		}
	}

	protected function sqlExpressionEquals( $fieldType, $fieldExpr, $value, $caseInsensitive ) {

		if( !IsCharType( $fieldType ) ) {
			return $fieldExpr . "=" . $this->prepareSQLValue( $fieldType, $value );
		}
		if( IsTextType( $fieldType ) && $this->connection->dbType != nDATABASE_MySQL ) {
			$likeWord = ( $this->connection->dbType == nDATABASE_PostgreSQL && $caseInsensitive )
				? 'ilike'
				: 'like';
			return $fieldExpr . ' ' . $likeWord . ' ' . $this->prepareSQLValue( $fieldType, $value );
		}
		return $this->connection->comparisonSQL( $fieldExpr, $this->prepareSQLValue( $fieldType, $value ), $caseInsensitive );
	}

	protected function sqlExpressionInList( $fieldType, $fieldExpr, $values, $all ) {
		if( !IsCharType( $fieldType ) )
		$fieldExpr = $this->connection->field2char( $fieldExpr, $fieldType );

		$conditions = array();
		foreach( $values as $v ) {
			$valueConds = array();
			$valueConds[] = $fieldExpr . " = " . $this->connection->prepareString( $v );
			$vp = $this->connection->escapeLIKEpattern( $v );
			$valueConds[] = $fieldExpr . " LIKE '%," . $v . "'";
			$valueConds[] = $fieldExpr . " LIKE '" . $v . ",%'";
			$valueConds[] = $fieldExpr . " LIKE '%," . $v . ",%'";
			$conditions[] = "( " . implode( ' OR ', $valueConds ) . " )";
		}
		return implode( $all ? ' AND ' : ' OR ', $conditions );
	}

	protected function sqlExpressionMore( $fieldType, $fieldExpr, $value, $caseInsensitive, $more ) {
		$operation = $more ? ' > ' : ' < ';
		$valueExpression = $this->prepareSQLValue( $fieldType, $value );
		if( IsCharType( $fieldType ) && $caseInsensitive ) {
			if( !IsTextType( $fieldType ) || $this->connection->dbType == nDATABASE_MySQL ) {
				$fieldExpr = $this->connection->upper( $fieldExpr );
				//	use database uppercase instead of PHP strtoupper because of character set issues
				$valueExpression = $this->connection->upper( $valueExpression );
			}
		}
		return $fieldExpr . $operation . $valueExpression;
	}

	protected function sqlExpressionLike( $fieldType, $fieldExpr, $value, $caseInsensitive, $starts, $likeWrapper ) {
		if( !IsCharType( $fieldType ) )
		$fieldExpr = $this->connection->field2char( $fieldExpr, $fieldType );

		$likeWord = ( $this->connection->dbType == nDATABASE_PostgreSQL && $caseInsensitive )
			? 'ilike'
			: 'like';

		$pattern = $this->connection->escapeLIKEpattern( $value )."%";
		if( !$starts )
			$pattern = "%".$pattern;

		if( $likeWrapper ) {
			$before = $this->connection->escapeLIKEpattern( $likeWrapper['before'] );
			$after = $this->connection->escapeLIKEpattern( $likeWrapper['after'] );

			if( !$starts && $before )
				$before = "%".$before;

			if( $after )
				$after = $after."%";

			$pattern = $before. $pattern .$after;
		}

		// file search [{ -->_{
		if( $this->connection->dbType == nDATABASE_Access )
			$pattern = str_replace( "[", "_", $pattern );

		$valueExpression = $this->connection->prepareString( $pattern );

		if( $caseInsensitive && $this->connection->dbType != nDATABASE_PostgreSQL ) {
			$fieldExpr = $this->connection->upper( $fieldExpr );
			//	use database uppercase instead of PHP strtoupper because of character set issues
			$valueExpression = $this->connection->upper( $valueExpression );
		}
		return $fieldExpr . ' ' . $likeWord . ' ' . $valueExpression;
	}

	protected function sqlExpressionBetween( $fieldType, $fieldExpr, $value1, $value2, $caseInsensitive ) {
		$valueExpression1 = $this->prepareSQLValue( $fieldType, $value1 );
		$valueExpression2 = $this->prepareSQLValue( $fieldType, $value2 );
		if( IsCharType( $fieldType ) && $caseInsensitive ) {
			if( !IsTextType( $fieldType ) || $this->connection->dbType == nDATABASE_MySQL ) {
				$fieldExpr = $this->connection->upper( $fieldExpr );
				//	use database uppercase instead of PHP strtoupper because of character set issues
				$valueExpression1 = $this->connection->upper( $valueExpression1 );
				$valueExpression2 = $this->connection->upper( $valueExpression2 );
			}
		}
		return $fieldExpr . ' BETWEEN ' . $valueExpression1 . ' AND ' . $valueExpression2;
	}


	/**
	 * add proper quotes, escape, convert to number etc
	 */
	protected function prepareSQLValue( $type, $value ) {
		if( IsNumberType( $type ) ) {
			return 0 + $value;
		}
		if( IsDateFieldType( $type ) ) {
			//	copied from add_db_quotes
			global $locale_info;
			$y = "(\d\d\d\d)";
			$m = "(0?[1-9]|1[0-2])";
			$d = "(0?[1-9]|[1-2][0-9]|3[0-1])";
			$delim = "(-|".preg_quote($locale_info["LOCALE_SDATE"], "/").")";
			$reg = "/".$d.$delim.$m.$delim.$y."|".$m.$delim.$d.$delim.$y."|".$y.$delim.$m.$delim.$d."/";
			if( !preg_match($reg, $value, $matches) )
				return "null";

			return $this->connection->addDateQuotes( $value );
		}
		if( IsBinaryType($type) )
			return $this->connection->addSlashesBinary( $value );
		return $this->connection->prepareString( $value );
	}



	/**
	 * return record count
	 * @return number
	 */
	public function getCount( $dc ) {
		$sql = $this->buildSQL( $dc, false );
		return $this->connection->getFetchedRowsNumber( $sql );
	}

	/**
	 * returns recordset or array
	 */
	public function getList( $dc ) {
		$sql = $this->buildSQL( $dc, true );
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}

	/**
	 * @return Array
	 * 		return array(
	 *		"head" => $this->HeadToSql( $oneRecordMode ),
	 *		"from" => $this->FromToSql(),
	 *		"where" => $this->WhereToSql(),
	 *		"groupby" => $this->GroupByToSql(),
	 *		"having" => $this->Having()->toSql($this)
	 *	);
	 *
	 */
	protected function getSQLComponents() {
		trigger_error("Unsupported datasource", E_USER_ERROR );
		return array();
	}

	/**
	 * @param DsCommand dc
	 * @param Boolean addOrder
	 * @param String replaceFieldList - when not empty replace everything between SELECT and FROM
	 * @return String
	 */
	protected function buildSQL( $dc, $addOrder, $replaceFieldList = "" ) {
		if( !isset( $dc->_cache["sql"] ) ) {

			$sqlParts = $this->getSQLComponents();

			$whereClause = $this->getWhereClause( $dc );
			$havingClause = $this->getHavingClause( $dc );

			//	add joins
			$context = $dc->_cache["context"];
			if( $context->joins ) {
				$sqlParts["from"] .= ' ' . implode( ' ', $context->joins );
			}
			if( $replaceFieldList ) {
				$sqlParts["head"] = "SELECT " . $replaceFieldList;
			}
			//	add extra columns
			if( $dc->extraColumns ) {
				$extras = array();
				foreach( $dc->extraColumns as $ec ) {
					$extras[] = $this->extraColumnExpression( $ec );
				}
				$sqlParts["head"] .= ', ' . implode( ', ', $extras );
			}
			//	extra columns from context
			if( $context->extraColumnSQL ) {
				$sqlParts["head"] .= ', ' . implode( ', ', $context->extraColumnSQL );
			}

			$dc->_cache["sql"] = SQLQuery::buildSQL(
				$sqlParts,
				array( $whereClause ),
				array( $havingClause )
			);
		}
		$sql = $dc->_cache["sql"];
		if( $addOrder ) {
			$sql .=  $this->getOrderClause( $dc );
		}
		return $sql;

	}

	/**
	 * SQL expression for extra column
	 * @param DsFieldData
	 * @return String
	 */
	protected function extraColumnExpression( $column ) {
		$expression = $column->sql;
		if( !$expression ) {
			$expression = $this->fieldExpression( $column->field, $column->modifier );
		}
		if( $column->alias ) {
			return $expression . ' AS ' . $this->connection->addFieldWrappers( $column->alias );
		} else {
			return $expression;
		}

	}

	/**
	 * Returns expression to use in SQL query
	 * It is overridden in DataSourceProjectTable to accomodate for encryption
	 */
	protected function fieldExpression( $field, $modifier = 0 ) {
		$fieldExpr = $this->connection->addFieldWrappers( $field );
		return $this->applyFieldModifier( $fieldExpr, $this->getFieldType($field), $modifier );
	}

	/**
	 * returns number of records in request with totals
	 * See DsCommand::totals description
	 * @return Integer
	 */
	public function getTotalCount( $dc ) {
		$sql = "SELECT COUNT(*) from ( " . $this->getTotalsSQL( $dc, true ) . " ) a";
		$result =  $this->connection->query( $sql );
		if( !$result ) {
			return 0;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return 0;
		}
		return $data[0];
	}

	/**
	 * @param DsCommand
	 * @param Boolean
	 */
	protected function getTotalsSQL( $dc, $addOrder ) {
		$baseSQL = $this->buildSQL( $dc, false );
		$selectList = array();
		$groupList = array();
		$whereList = array();
		$orderList = array();
		foreach( $dc->totals as $idx => $t ) {
			$f = $this->sqlTotalField( $dc, $t );

			if( $f === false ) {
				//	don't do the query
				return false;
			}
			$aliasClause = $t["alias"]
				? (' AS ' . $this->connection->addFieldWrappers( $t["alias"] ) )
				: "";

			$selectList[] = $f . $aliasClause;

			if( $t["direction"] ) {
				$orderList[] = ($idx + 1) . ( $t["direction"] == "ASC" ? " ASC" : " DESC" );
			}

			if( !$t["total"] ) {
				$groupList[] = $f;
			}

			if( $t["skipEmpty"] ) {
				$whereList[] = "( NOT ( " . $this->sqlExpressionEmpty(
					$this->getFieldType( $t["field"] ),
					$this->connection->addFieldWrappers( $t["field"] )
				) . " ) )";
			}
		}
		$groupbyClause = implode( ',', $groupList );
		if( count( $groupList ) ) {
			$groupbyClause = " GROUP BY " . $groupbyClause;
		}
		$whereClause = implode( ' AND ', $whereList );
		if( count( $whereList ) ) {
			$whereClause = " WHERE " . $whereClause;
		}
		$distinct = $this->totalDistinct( $dc )
			? "DISTINCT "
			: "";
		$sql = "SELECT " . $distinct . implode( ',', $selectList ) . ' FROM ( ' . $baseSQL . ' ) a ' . $whereClause . $groupbyClause;

		if( $addOrder ) {
			$order = implode( ", ", $orderList );
			if( $order ) {
				$sql .= " ORDER BY " . $order;
			}
		}
		return $sql;
	}
	/**
	 * returns result with group totals
	 * See DsCommand::totals description
	 */
	public function getTotals( $dc ) {
		$sql = $this->getTotalsSQL( $dc, true );
		if( !$sql ) {
			return new ArrayResult( array() );
		}
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}

	/**
	 * Whether the column is COUNT, SUM, MIN, MAX, AVG in the original SQL query
	 * @return Boolean
	 */
	protected function isAggregateField( $field ) {
		return false;
	}

	/**
	 * Check if the total query should include DISTINCT
	 */
	protected function totalDistinct( $dc ) {
		foreach( $dc->totals as $total ) {
			//	all fields must be "distinct"
			if( $total["total"] != "distinct" )
				return false;

			//	some field types in some databases don't support DISTINCT
			$fType = $this->getFieldType( $total["field"] );
			if( IsTextType( $fType ) &&
				( 	$this->connection->dbType == nDATABASE_MSSQLServer
					|| $this->connection->dbType == nDATABASE_Access
					|| $this->connection->dbType == nDATABASE_Oracle )
				) {
				return false;
			}

			//	don't do search suggest for aggregated fields
			if( $dc->skipAggregated && $total["total"] == "distinct" && $this->isAggregateField( $total[ "field" ] ) ) {
				return false;
			}
		}
		return true;

	}

	protected function sqlTotalField( $dc, $total ) {

		if( $dc->skipAggregated && $total["total"] == "distinct" && $this->isAggregateField( $total[ "field" ] ) ) {
			//	don't do search suggest for aggregated fields
			return false;
		}

		if( $total["time"] ) {
			$expr = $this->connection->timeToSecWrapper( $total["field"] );
		} else {
			/**
			 *  $total["field"] comes from subquery. $his->fieldExpression is not needed here
			 */
			$expr = $this->connection->addFieldWrappers( $total["field"] );
		}


		if( $total["total"] == "distinct" ) {
			//	substitute original field with the joined display field
			$context = $dc->_cache["context"];
			if( $context ) {
				if( isset( $context->joinedAliases[ $total[ "field" ] ] ) ) {
					$expr = $this->connection->addFieldWrappers( $context->joinedAliases[ $total[ "field" ] ] );
				}
			}
			return $expr;
		}

		if( $total["total"] ) {
			if( $total["total"] == 'count' && !$total["field"] ) {
				$expr = '1';
			}

			if( $total["caseStatement"] ) {
				$expr = $this->getCaseStatement( $total["caseStatement"] );
			}

			return strtoupper( $total["total"] ) . "( " . $expr . " )";
		}

		$ftype = $this->getFieldType( $total["field"] );
		return $this->applyFieldModifier( $expr, $ftype, $total["modifier"] );
	}

	/**
	 * Build SQL for DsOperand used in totals
	 * @param DsOperand
	 * @return String
	 */
	protected function totalOperandSQL( $op ) {
		if( $op ) {
			if( $op->type == dsotFIELD )
				return $this->connection->addFieldWrappers( $op->value );
			else if( $op->type == dsotCONST )
				return $op->value;
		}
		return 'NULL';

	}

	/**
	 * Build SQL CASE expression.
	 * @param DsCaseExpression
	 * @return String
	 */
	protected function getCaseStatement( $caseExpr ) {

		$sqlCases = array();
		$tail = "";
		$context = new DsFilterBuildContext;

		foreach( $caseExpr->conditions as $idx => $condition ) {
			$sqlCondition = $this->conditionToSQL( $condition, $context );
			$sqlValue = $this->totalOperandSQL( $caseExpr->values[ $idx ] );
			if( $this->connection->dbType == nDATABASE_Access ) {
				$sqlCases[] = "IIF( " . $sqlCondition . ", " . $sqlValue . ",";
				$tail .= ")";
			} else {
				$sqlCases[] = "WHEN " . $sqlCondition . " THEN " . $sqlValue;
			}
		}
		$sqlDefault = $this->totalOperandSQL( $caseExpr->defValue );
		if( $this->connection->dbType == nDATABASE_Access ) {
			return implode( ' ', $sqlCases ) . ' ' . $sqlDefault . $tail;
		} else {
			return "( CASE " . implode( ' ', $sqlCases ) . ' ELSE ' . $sqlDefault . ' END )';
		}
	}

	protected function applyFieldModifier( $expr, $ftype, $modifier ) {
		if( IsNumberType($ftype) ) {
			$expr = $this->connection->intervalExpressionNumber( $expr, $modifier );
		} else if( IsCharType( $ftype ) ) {
			$expr = $this->connection->intervalExpressionString( $expr, $modifier );
		} else if( IsDateFieldType( $ftype ) ) {
			$expr = $this->connection->intervalExpressionDate( $expr, $modifier );
		}
		return $expr;

	}


	public function delete( $keys ) {

	}

	public function getSingle( $dc ) {
		$sql = $this->buildSQL( $dc, true );
		return $this->connection->limitedQuery( $sql, 0, 1, true );
	}


	protected function dbTableName() {
		return $this->_name;
	}



	public function getNextPrevKeys($dc, &$data, $what = BOTH_RECORDS)
	{
		$nextPrevComponents = $this->getNextPrevComponents($dc, $data);
		if (!$nextPrevComponents)
			return array();

		$baseSQL = $this->buildSQL($dc, false);
		$keysFields = array();

		$next = array();
		$prev = array();

		foreach ($this->getKeyFields() as $i => $k) {
			$keysFields[] = $this->connection->addFieldWrappers($k);
		}

		$sql = "select " . implode(',', $keysFields) . " from ( " . $baseSQL . " ) a ";

		//	next record
		if ($what == BOTH_RECORDS || $what == NEXT_RECORD) {
			$strSQL = $sql;
			if (strlen($nextPrevComponents["nextWhere"]))
				$strSQL .= "where " . $nextPrevComponents["nextWhere"];
			if (strlen($nextPrevComponents["nextOrder"]))
				$strSQL .= "order by " . $nextPrevComponents["nextOrder"];
			$rs = $this->connection->limitedQuery($strSQL, 0, 1, true);
			if ($rs)
				$next = $rs->fetchNumeric();
		}
		//	prev record
		if ($what == BOTH_RECORDS || $what == PREV_RECORD) {
			$strSQL = $sql;
			if (strlen($nextPrevComponents["prevWhere"]))
				$strSQL .= "where " . $nextPrevComponents["prevWhere"];
			if (strlen($nextPrevComponents["prevOrder"]))
				$strSQL .= "order by " . $nextPrevComponents["prevOrder"];
			$rs = $this->connection->limitedQuery($strSQL, 0, 1, true);
			if ($rs)
				$prev = $rs->fetchNumeric();
		}
		return array("next" => $next, "prev" => $prev);
	}

	protected function getNextPrevComponents($dc, &$data)
	{
		if ( !$dc->order )
			return array();

		$nextWhere = null;
		$prevWhere = null;
		$nextOrder = array();
		$prevOrder = array();

		for ($i = count($dc->order) - 1; $i >= 0; --$i) {
			$of = $dc->order[$i];
			$column = $of["column"];
			$sqlColumn = $this->connection->addFieldWrappers($column);

			$nextOrder[] = $sqlColumn . ' ' . $of["dir"];
			$prevOrder[] = $sqlColumn . ' ' . ($of["dir"] == "ASC" ? "DESC" : "ASC");

			// Build this sort of exporessions:
			// field1 > x or field1 = x and ( field2 > y or field2=y and ( field3 ... ) )
			if ($i < count($dc->order) - 1) {
				$equal = DataCondition::FieldEquals($column, $data[$column]);
				$nextWhere = $nextWhere ? DataCondition::_And(array($equal, $nextWhere)) : $equal;
				$prevWhere = $prevWhere ? DataCondition::_And(array($equal, $prevWhere)) : $equal;
			}

			$next = DataCondition::FieldIs($column, $of["dir"] == "DESC" ? dsopLESS : dsopMORE, $data[$column]);
			$prev = DataCondition::FieldIs($column, $of["dir"] == "DESC" ? dsopMORE : dsopLESS, $data[$column]);

			$nextWhere = DataCondition::_Or(array($next, $nextWhere));
			$prevWhere = DataCondition::_Or(array($prev, $prevWhere));
		}

		$context = new DsFilterBuildContext;
		return array(
			"nextWhere" => $this->conditionToSQL($nextWhere, $context),
			"prevWhere" => $this->conditionToSQL($prevWhere, $context),
			"nextOrder" => implode(", ", array_reverse($nextOrder)),
			"prevOrder" => implode(", ", array_reverse($prevOrder))
		);
	}

	/**
	 * @param String fieldExpression - original field expression
	 * @param DsOperand fieldOperand - parameter dsotFIELD type operand with non-empty joinData
	 * @param DsFilterBuildContext context
	 * @return String|Boolean - returns new field expression or false if nothing's changed
	 */
	protected function createJoinedExpression( $field, $fieldExpr, $fieldOperand, $context ) {
		$jd = $fieldOperand->joinData;
		if( !$jd->dataSource->tableBased() || $jd->dataSource->connection !== $this->connection ) {
			return false;
		}
		$joinQuery = $jd->dataSource->getJoinedQuery( $fieldExpr, $fieldOperand );
		if( !$joinQuery ) {
			return false;
		}
		$context->joins[] = $joinQuery["join"];
		if( $jd->displayAlias ) {
			$context->extraColumnSQL[] = $joinQuery["column"] . " AS " . $this->connection->addFieldWrappers( $jd->displayAlias );
			$context->joinedAliases[ $field ] = $jd->displayAlias;
		}
		return $joinQuery["column"];
	}

	protected function tableBased() {
		return true;
	}

	/**
	 * @param String fieldExpression - original field expression
	 * @param DsOperand fieldOperand - parameter dsotFIELD type operand with non-empty joinData
	 * @return false | Array(
	 *		"join" => LEFT JOIN expression
	 *		"alias" => subquery alias
	 *		"column" => expression to use in the WHERE clause
	 *	)
	 */
	protected function getJoinedQuery( $fieldExpr, $fieldOperand ) {

		$jd = $fieldOperand->joinData;
		if( $jd->longList && !$this->connection->checkIfJoinSubqueriesOptimized() ) {
			//	too slow
			return false;
		}
		$dc = new DsCommand;

		$tableAlias = generateAlias();
		$linkAlias =  generateAlias();
		$displayAlias =  generateAlias();

		if( $jd->displayExpression ) {
			$displayExpression = $jd->displayExpression;
		} else {
			$displayExpression = $this->fieldExpression( $jd->displayField );
		}
		$linkExpression = $this->fieldExpression( $jd->linkField );

		$selectList = array();
		$selectList[] = $displayExpression . " AS " . $displayAlias;
		$selectList[] = $linkExpression . " AS " . $linkAlias;

		$column = $tableAlias.".".$displayAlias;

		$sql = $this->buildSQL( $dc, false, implode( ', ', $selectList ) );
		$join =  "LEFT JOIN (" . $sql . ") ". $tableAlias
			." ON " . $linkAlias . " = ".$fieldExpr;
		return array(
			"join" => $join,
			"alias" => $alias,
			"column" => $column
		);
	}
	public function lastError() {
		return $this->connection->lastError();
	}

	/**
	 * NOT USED! delete
	 * Get multiple field values,
	 * @param DsFieldData - field description
	 * @param DsCommand
	 * @return QueryResult
	 */
	public function getFieldValues( $field, $dc ) {
		$sql = $this->buildSQL( $dc, false, $this->extraColumnExpression( $field ) );
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}
}

class DsFilterBuildContext {
	/**
	 * <join SQL clause>
	 * @var Array of strings
	 */
	public $joins = array();

	/**
	 * additional columns, to be added as is to SQL query
	 * @var Array
	 */
	public $extraColumnSQL = array();
	/**
	 * displayFieldAliases
	 * @var Array
	 * Associative array of display field aliases
	 * "<field>" => "<display field alias>"
	 */
	public $joinedAliases = array();
}

?>