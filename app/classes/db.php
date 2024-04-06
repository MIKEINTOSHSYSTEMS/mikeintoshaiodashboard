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
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}	
			else
				$orderClause = array( "column" => $userOrder );
			
			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
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

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
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
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

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


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
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
			$dalTables[$conn->connId][] = array("name" => "derejame_uggroups", "varname" => "deredevatderejadevmerqconsulta__derejame_uggroups", "altvarname" => "derejame_uggroups", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "derejame_ugmembers", "varname" => "deredevatderejadevmerqconsulta__derejame_ugmembers", "altvarname" => "derejame_ugmembers", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "derejame_ugrights", "varname" => "deredevatderejadevmerqconsulta__derejame_ugrights", "altvarname" => "derejame_ugrights", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "derejame_users", "varname" => "deredevatderejadevmerqconsulta__derejame_users", "altvarname" => "derejame_users", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
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
			$dalTables[$conn->connId][] = array("name" => "webreport_admin", "varname" => "deredevatderejadevmerqconsulta__webreport_admin", "altvarname" => "webreport_admin", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "webreport_sql", "varname" => "deredevatderejadevmerqconsulta__webreport_sql", "altvarname" => "webreport_sql", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "webreport_style", "varname" => "deredevatderejadevmerqconsulta__webreport_style", "altvarname" => "webreport_style", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "webreports", "varname" => "deredevatderejadevmerqconsulta__webreports", "altvarname" => "webreports", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
			$dalTables[$conn->connId][] = array("name" => "zones", "varname" => "deredevatderejadevmerqconsulta__zones", "altvarname" => "zones", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql, 
		$arg1 = null,
		$arg2 = null, 
		$arg3 = null, 
		$arg4 = null, 
		$arg5 = null, 
		$arg6 = null, 
		$arg7 = null, 
		$arg8 = null, 
		$arg9 = null, 
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
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
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}
			
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

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

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
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>