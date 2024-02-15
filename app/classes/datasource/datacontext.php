<?php


/**
 * 	>, <, =
 * in ( 1,2,3 )
 * is null
 * in ( select??? )
 * and, or, not
 * select count() - master details count
 * search in lookups?
 * groups?
 */


define( 'dsotCONST', 0 );
define( 'dsotFIELD', 1 );
define( 'dsotLIST', 2 );	//	list of constants, array of values
define( 'dsotCONDITION', 3 );
define( 'dsotSQL', 4 ); 	// User-provided SQL expression.
define( 'dsotNULL', 5 );	//	NULL in SQL sense

class DsOperand {
	public $type;
	public $value;
	/**
	 * $value modifier
	 * @var Number
	 * 0 - $value as is
	 * 1 & more - check DBFunctions::intervalExpression... functions
	 */
	public $modifier;

	/**
	 * @var Boolean
	 * Indicates that field must be converted to char
	 */
	public $tochar;
	/**
	 * DsJoinData
	 */
	public $joinData = null;

	/**
	 * @var Array ( 'before' => ... ,  'after' => ... )
	 * Prop to store data to wrap like condition pattern
	 */
	public $likeWrapper = null;

	function __construct( $type, $value, $modifier = 0, $joinData = null, $likeWrapper = null, $tochar = false ) {
		$this->type = $type;
		$this->value = $value;
		$this->modifier = $modifier;
		$this->joinData = null;

		$this->likeWrapper = $likeWrapper;

		$this->tochar = $tochar;
	}
}


define( 'dsopMORE', '>' );
define( 'dsopLESS', '<' );
define( 'dsopEQUAL', '=' );
define( 'dsopEMPTY', 'null' );
define( 'dsopIN', 'in' );
define( 'dsopAND', 'and' );
define( 'dsopOR', 'or' );
define( 'dsopNOT', 'not' );
define( 'dsopCONTAIN', 'like' );
define( 'dsopSTART', 'start' );
define( 'dsopFALSE', 'false' );
define( 'dsopBETWEEN', 'between' );

define( 'dsopMORE_OR_EQUAL', '>=' );
define( 'dsopLESS_OR_EQUAL', '<=' );

/**
 * Second operand is a list of values
 * dsopSOME_IN_LIST - at least one of the passed values are met in the field
 * dsopALL_IN_LIST - all of the passed values are met in the field
 */
define( 'dsopSOME_IN_LIST', 'listsome' );
define( 'dsopALL_IN_LIST', 'listall' );

//	injected SQL, to accomodate for event code only
define( 'dsopSQL', 'sql' );


class DsCondition {
	/**
	 * basic array of DsOperand
	*/
	public $operands;
	/**
	 * operation, one of dsopXXX constants
	*/
	public $operation;
	public $caseInsensitive;

	function __construct( $operands, $operation, $caseInsensitive = false ) {
		$this->operands = $operands;
		$this->operation = $operation;
		$this->caseInsensitive = $caseInsensitive;
	}
}


class DsCommand {

	/**
	 * @var DsCondition
	 */
	public $filter;

	/**
	 * Associative array of keys for getSingle command:
	 * "keyfield" => value
	 * @var Array
	 */
	public $keys;

	/**
	 * @var Array of DsFieldData
	 */
	public $extraColumns = array();

	/**
	 * @var Int
	 * Records to skip from the beginning
	 */
	public $startRecord = 0;
	/**
	 * @var Int
	 * Record count. -1 = all
	 */
	public $reccount = -1;

	/**
	 * See OrderClause::getOrderFields return value specification
	 */
	public $order = array();


	/**
	 * list of totals to calculate
	 * each element is array(
	 * 		alias => "<name in result>",
	 *
	 * 		field => "<field to sum>". caseStatement must be empty if field is specified
	 * 		caseStatement => DsCaseExpression. When specified, (CASE WHEN ... ) expression is used instead of field. 
	 * 						 field must be empty in this case
	 * 
	 * 		total => "sum|count|avg|min|max|distinct" - when total is empty, the field is added to GROUP BY
	 * 		modifier => integer, 0 - as is, 1, 2 etc
	 * 		skipEmpty => boolean. for GROUP BY fields, skip empty values
	 * 		direction => "ASC|DESC". Order direction.
	 * 		caseInsensitive => boolean. for GROUP BY fields, case-insensitive
	 * 	 )
	 *
	 *  "distinct" returns list of unique values of a field. It is used for search suggest and is heavily customized for its needs
	 * 	When "distinct" is used, there can be only "distinct" fields in the $totals array.
	 *  Datasources will not check for that, but the results will be unpredictable if there are fields with other "total" values.
	 */
	public $totals = array();


	/**
	 * Associative array of field values for Insert and Update operations
	 */
	public $values = array();


	/* Datasource-specific flags */

	/**
	 * MSSQL IDENTITY_INSERT ON/OFF
	 * @var Boolean
	 */
	public $identiyInsertOff = false;

	/**
	 * Skip aggregated fields.
	 * Makes sense only for search suggest and DataSourceTable
	 * To avoid reqests like
	 * select distinct x from ( select sum(f) as x )
	 * Those results are not needed in search suggest
	 * @var Boolean
	 */
	public $skipAggregated = false;


	/**
	 * Need return all records or not
	 * @return Boolean
	 */
	public function allRecords() {
		return $this->startRecord == 0 && $this->reccount == -1;
	}

	public function clearCache() {
		$this->_cache = array();
	}

	/**
	 * Only DataSource should use this. Consider $_cache private in all other classes
	 */
	public $_cache = array();

	// search
	// filter
	// master filter
	// security
	// tab filter
	// key
    // old values
    // new values

	/**
	 * Compare two records based on the sort order
	 */
	public function compareRecords( $a, $b ) {
		foreach( $this->order as $o ) {
			$field = $o["column"];
			if( !$field )
				continue;
			if( $a[ $field ] == $b[ $field ] )
				continue;
			$orderMod = $o['dir'] == 'ASC' ? 1 : -1;
			return  $orderMod * ( $a[ $field ] > $b[ $field ] ? 1 : -1 );
		}
		return 0;
	}

	/**
	 * Update order in totals based on $this->order
	 */
	public function updateTotalOrder() {
		if(!$this->totals )
			return;
		for( $i = 0; $i< count( $this->totals ); ++$i ) {
			$t = &$this->totals[$i];
			foreach( $this->order as $o ) {
				if( $o["column"] == $t["field"] ) {
					$t["direction"] = $o["dir"];
					break;
				}
			}
		}
	}

	/**
	 * Find extra column by alias
	 * @param String
	 * @return DsFieldData or false
	 */
	public function findExtraColumn( $alias ) {
		foreach( $this->extraColumns as $ec ) {
			if( $ec->alias == $alias )
				return $ec;
		}
		return false;
	}
}


class DataCondition {


	/**
	 * field = constant
	 */
	 static function FieldEquals( $fieldname, $value, $fieldModifier = 0, $caseInsensitive = false ) {
		return new DsCondition( array(
				new DsOperand( dsotFIELD, $fieldname, $fieldModifier ),
				new DsOperand( dsotCONST, $value )
			),
			dsopEQUAL,
			$caseInsensitive
		);
	}

	/**
	 * field1=value1 AND field2=value2 etc
	 * @param Array fields
	 * @param Array associative array of values ( field => value )
	 */
	static function FieldsEqual( $fields, $data ) {
		$cond = array();
		foreach( $fields as $f ) {
			$cond[] = DataCondition::FieldEquals( $f, $data[$f] );
		}
		return DataCondition::_And( $cond );
	}


	static function FieldBetween( $fieldname, $value1, $value2, $caseInsensitive ) {
		return new DsCondition( array(
				new DsOperand( dsotFIELD, $fieldname ),
				new DsOperand( dsotCONST, $value1 ),
				new DsOperand( dsotCONST, $value2 )
			),
			dsopBETWEEN,
			$caseInsensitive
		);
	}

	static function FieldIs( $fieldname, $operation, $value, $caseInsensitive = false, $modifier = 0, $likeWrapper = null, $tochar = false ) {
		return new DsCondition( array(
				new DsOperand( dsotFIELD, $fieldname, $modifier, null, null, $tochar ),
				new DsOperand( dsotCONST, $value, 0, null, $likeWrapper )
				),
				$operation,
				$caseInsensitive
			);
	}

	/**
	 * @param String field name
	 * @param Integer operation - either dsopSOME_IN_LIST or dsopALL_IN_LIST
	 * @param Array array of values
	 */
	static function FieldHasList( $fieldname, $operation, $values ) {
		return new DsCondition( array(
				new DsOperand( dsotFIELD, $fieldname ),
				new DsOperand( dsotLIST, $values )
				),
				$operation,
				false
			);
	}


	static function SQLIs( $expr, $operation, $value, $caseInsensitive = false ) {
		return new DsCondition( array(
				new DsOperand( dsotSQL, $expr ),
				new DsOperand( dsotCONST, $value )
				),
				$operation,
				$caseInsensitive
			);
	}

	/**
	 * When $condition, return field, null otherwise
	 * @return DsCaseExpression
	 */
	static function CaseFieldOrNull( $condition, $field ) {
		return new DsCaseExpression( 
			array( $condition ), 
			array( new DsOperand( dsotFIELD, $field, 0 ) ),
			new DsOperand( dsotNULL, 0 )
		);
	}

	/**
	 * When $condition, return constant, null otherwise
	 * @return DsCaseExpression
	 */
	static function CaseConstOrNull( $condition, $value ) {
		return new DsCaseExpression( 
			array( $condition ), 
			array( new DsOperand( dsotCONST, $value, 0 ) ),
			new DsOperand( dsotNULL, 0 )
		);
	}


	/**
	 * always false
	 */
	static function _False() {
		return new DsCondition( array(), dsopFALSE );
	}

	/**
	 * ... AND ... AND ...
	 */
	static function _And( $conditions ) {
		$ret =  new DsCondition( array(), dsopAND );
		foreach( $conditions as $c ) {
			$ret->operands[] = new DsOperand( dsotCONDITION, $c );
		}
		return $ret;
	}

	static function _Or( $conditions ) {
		$ret =  new DsCondition( array(), dsopOR );
		foreach( $conditions as $c ) {
			$ret->operands[] = new DsOperand( dsotCONDITION, $c );
		}
		return $ret;
	}

	static function _Not( $condition ) {
		return new DsCondition( array( new DsOperand( dsotCONDITION, $condition ) ), dsopNOT );
	}


	/**
	 * injected WHERE SQL
	 */
	static function SQLCondition( $sql ) {
		if( !$sql )
			return null;
		return new DsCondition(
			array(
				new DsOperand( dsotCONST, $sql),
			),
			dsopSQL
		);
	}
}

/**
 * Describres additional column that shall be added to the SQL
 * SELECT ..., <expression> AS <alias>
 *
 * expression is either $sql or $field with $modifier
 * if $sql is empty, $field should be used instead
 */
class DsFieldData {
	/**
	 * @var String SQL expression goes to the select-list as is
	 */
	var $sql;

	/**
	 *  field name  and modifier
	 */
	var $field;
	/**
	 * See DsOperand::modifier
	 */
	var $modifier;

	/**
	 * @var String optional alias
	 */
	var $alias;

	function __construct( $sql, $alias, $field, $modifier = 0 ) {
		$this->sql = $sql;
		$this->alias = $alias;
		$this->field = $field;
		$this->modifier = $modifier;

	}

}

class DsCaseExpression {
	/**
	 * @var Array of DsCondition
	 */
	var $conditions = array();
	
	/**
	 * @var Array of DsOperand
	 * Only dsotCONST and dsotFIELD operands are currently supported
	 */
	var $values = array();

	/**
	 * @var DsOperand
	 * Only dsotCONST and dsotFIELD operands are currently supported
	 */
	var $defValue;

	public function __construct( $conditions, $values, $defValue ) {
		$this->conditions = $conditions;
		$this->values = $values;
		$this->defValue = $defValue;
	}

}

class DsJoinData {
	/**
	 * @var DataSource object
	 */
	public $dataSource;

	/**
	 * @var String
	 */
	public $linkField;

	/**
	 * When non-empty, display field is a table ( or query ) field
	 * Either displayField or displayExpression must be filled
	 * @var String
	 */
	public $displayField;
	/**
	 * When non-empty, display field is an SQL expression
	 * Either displayField or displayExpression must be filled
	 * @var String
	 */
	public $displayExpression;

	/**
	 * Indicates that the joined table is of substantial size
	 * @var Boolean
	 */
	public $longList;

	/**
	 * When non-empty, display field must be included into the result under the $displayAlias name
	 * @var String
	 */
	public $displayAlias;
}

?>