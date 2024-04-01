<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}

		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(" AND ", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList();

		//	exact match
		foreach( $dalTables[$conn->connId] as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList()
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "deredevatderejadevmerqconsulta" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "Candidate_Employment_Tracker", "varname" => "deredevatderejadevmerqconsulta__Candidate_Employment_Tracker", "altvarname" => "Candidate_Employment_Tracker", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "candidates", "varname" => "deredevatderejadevmerqconsulta__candidates", "altvarname" => "candidates", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "cities", "varname" => "deredevatderejadevmerqconsulta__cities", "altvarname" => "cities", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "Companies", "varname" => "deredevatderejadevmerqconsulta__Companies", "altvarname" => "Companies", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "CompanySectors", "varname" => "deredevatderejadevmerqconsulta__CompanySectors", "altvarname" => "CompanySectors", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "departments", "varname" => "deredevatderejadevmerqconsulta__departments", "altvarname" => "departments", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "dereja_event_services", "varname" => "deredevatderejadevmerqconsulta__dereja_event_services", "altvarname" => "dereja_event_services", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "dereja_information_sources", "varname" => "deredevatderejadevmerqconsulta__dereja_information_sources", "altvarname" => "dereja_information_sources", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "dereja_services", "varname" => "deredevatderejadevmerqconsulta__dereja_services", "altvarname" => "dereja_services", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "dereja_training_services", "varname" => "deredevatderejadevmerqconsulta__dereja_training_services", "altvarname" => "dereja_training_services", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "Disability_Types", "varname" => "deredevatderejadevmerqconsulta__Disability_Types", "altvarname" => "Disability_Types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "education_levels", "varname" => "deredevatderejadevmerqconsulta__education_levels", "altvarname" => "education_levels", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "event_participants", "varname" => "deredevatderejadevmerqconsulta__event_participants", "altvarname" => "event_participants", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "events", "varname" => "deredevatderejadevmerqconsulta__events", "altvarname" => "events", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "industry_specific_skills", "varname" => "deredevatderejadevmerqconsulta__industry_specific_skills", "altvarname" => "industry_specific_skills", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "institution_types", "varname" => "deredevatderejadevmerqconsulta__institution_types", "altvarname" => "institution_types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "it_related_skills", "varname" => "deredevatderejadevmerqconsulta__it_related_skills", "altvarname" => "it_related_skills", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "Job_Categories", "varname" => "deredevatderejadevmerqconsulta__Job_Categories", "altvarname" => "Job_Categories", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "Job_Types", "varname" => "deredevatderejadevmerqconsulta__Job_Types", "altvarname" => "Job_Types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "Jobs", "varname" => "deredevatderejadevmerqconsulta__Jobs", "altvarname" => "Jobs", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "minor_major", "varname" => "deredevatderejadevmerqconsulta__minor_major", "altvarname" => "minor_major", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "participant_organization_types", "varname" => "deredevatderejadevmerqconsulta__participant_organization_types", "altvarname" => "participant_organization_types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "professions", "varname" => "deredevatderejadevmerqconsulta__professions", "altvarname" => "professions", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "program_areas", "varname" => "deredevatderejadevmerqconsulta__program_areas", "altvarname" => "program_areas", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "regions", "varname" => "deredevatderejadevmerqconsulta__regions", "altvarname" => "regions", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "skills", "varname" => "deredevatderejadevmerqconsulta__skills", "altvarname" => "skills", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "sub_cities", "varname" => "deredevatderejadevmerqconsulta__sub_cities", "altvarname" => "sub_cities", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "Trainer", "varname" => "deredevatderejadevmerqconsulta__Trainer", "altvarname" => "Trainer", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "training_city_towns", "varname" => "deredevatderejadevmerqconsulta__training_city_towns", "altvarname" => "training_city_towns", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "training_organizers", "varname" => "deredevatderejadevmerqconsulta__training_organizers", "altvarname" => "training_organizers", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "training_participants", "varname" => "deredevatderejadevmerqconsulta__training_participants", "altvarname" => "training_participants", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "training_types", "varname" => "deredevatderejadevmerqconsulta__training_types", "altvarname" => "training_types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "training_venues", "varname" => "deredevatderejadevmerqconsulta__training_venues", "altvarname" => "training_venues", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "trainings", "varname" => "deredevatderejadevmerqconsulta__trainings", "altvarname" => "trainings", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "zones", "varname" => "deredevatderejadevmerqconsulta__zones", "altvarname" => "zones", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		}
	}


	public static function PrepareSQL($sql)
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}

			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			if ($conn->positionQuoted($sql, $offset))
				$repl["insert"] = $conn->addSlashes($val);
			else
				$repl["insert"] = DB::prepareNumberValue($val);

			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{(.*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			return str_replace(",",".",$strvalue);
		return 0;
	}

}

?>