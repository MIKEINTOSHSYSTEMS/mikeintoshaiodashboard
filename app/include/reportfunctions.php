<?php
require_once(getabspath("include/xml.php"));
require_once(getabspath("classes/cipherer.php"));
require_once(getabspath("classes/searchclause.php"));


function getReportArray($name)
{
	$arr = array();
	$xml = new xml();
	$rpt_strXML = LoadSelectedReport($name);
	$arr=$xml->xml_to_array($rpt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875

			$tables_query = $arr["tables"][0];

			$strSQL = "SELECT ". $connection->addFieldWrappers("sqlcontent")." FROM ". $connection->addTableWrappers("webreport_sql")
				." WHERE ". $connection->addFieldWrappers("sqlname")."='".$tables_query."'";

			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"] = $row[0];
		}
	}
	return $arr;
}

function getChartArray($name)
{
	$arr = array();
	$xml = new xml();
	$chrt_strXML = LoadSelectedChart($name);
	$arr=$xml->xml_to_array($chrt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875

			$tables_query = $arr["tables"][0];

			$strSQL = "SELECT ".$connection->addFieldWrappers("sqlcontent")." FROM ".$connection->addTableWrappers("webreport_sql")
				." WHERE ".$connection->addFieldWrappers("sqlname")."='".$tables_query."'";

			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"]=$row[0];
		}
	}
	return $arr;
}

function GetUserGroups() {
	global $wr_is_standalone, $cman;
	if( !Security::permissionsAvailable() ) {
		return array();
	}
	if( Security::dynamicPermissions() ) {
		$arr = array(
			array(-1, "<"."Admin".">"),
			array(-2, "<"."Default".">"),
			array(-3, "<"."Guest".">")
		);

		$groupIdField = "GroupID";
		$groupLabelField = "Label";
		$groupProviderField = "Provider";

		$dataSource = Security::getUgGroupsDatasource();
		$dc = new DsCommand();
		if( storageGet( "groups_provider_field" ) ) {
			$dc->order[] = array( "column" => $groupProviderField, "dir" => "ASC" );
		}
		$dc->order[] = array( "column" => $groupLabelField, "dir" => "ASC" );
		$qResult = $dataSource->getList($dc );

		while( $data = $qResult->fetchNumeric() )
		{
			$arr[] = array($data[ $groupIdField ], $data[ $groupLabelField ] );
		}
	} else {
		//	static permissions
		$arr = array();
		if(!$wr_is_standalone)
		{
			$arr[]=array("Default","<Default>");
		}
		else
		{
			$connection = getWebreportConnection(); // #9875

			$qResult = $connection->query( "select ".$connection->addFieldWrappers("username")
				." from ".$connection->addTableWrappers("webreport_users")." order by ".$connection->addFieldWrappers("username") );

			$arr[] = array("Guest", "<Guest>");
			while( $data = $qResult->fetchNumeric() )
			{
				$arr[] = array($data[0], $data[0]);
			}
		}
	}
	return $arr;
}

function GetUserGroup()
{
	global $wr_is_standalone;
	if( !Security::permissionsAvailable() ) {
		return array();
	}

	if( Security::dynamicPermissions() )
	{
		if( !Security::isGuest() )
		{
			$userRights = &Security::dynamicUserRights();
			return $userRights[".Groups"];
		}
		else {
			return array(-3);
		}
	}
	else
	{
		if(!$wr_is_standalone)
		{
			if( !Security::isGuest() )
			{
				return array("Default");
			}
			else
			{
				return array("Guest");
			}
		}
		else
		{
			if( !Security::isGuest() )
			{
				$connection = getWebreportConnection();	// #9875

				$qResult = $connection->query("select ".$connection->addFieldWrappers("username")." from ".$connection->addTableWrappers("webreport_users")
					." order by ".$connection->addFieldWrappers("username"));
				while( $data = $qResult->fetchNumeric() )
				{
					if ( $data[0] == @$_SESSION["GroupID"] )
						return array($data[0]);
				}
				return array("Guest");
			}
			else
			{
				return array("Guest");
			}
		}
	}
}

function CheckLastID($type)
{
	$connection = getWebreportConnection(); // #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = '".$type."'";

	$qResult = $connection->query( $strSQL );

	$maxID = 0;
	while( $row = $qResult->fetchNumeric() )
	{
		if ( $maxID < $row[0] )
			$maxID = $row[0];
	}

	return ++$maxID;
}

function GetNumberFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(IsNumberType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function WRGetNBFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(!IsBinaryType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function GetChartsList()
{
	$xml = new xml();
	$arr = array();

	$arrUserGroup = GetUserGroup();
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")
		." FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'chart'"
		." order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() )
	{
		$chart_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($chart_arr['permissions']) ) {
			foreach ( $chart_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}
		if(!$chart_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedChart($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities( $rptContent[0] );
}

function SaveChart($reportname, $report, $rtitle, $rstatus, $strXML, $saveas)
{
	$connection = getWebreportConnection();// #9875

	// ?????
	// if( !Security::getUserName() )
	// 	$_SESSION["UserID"] = " ";


	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

	$data =  $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) )
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.",".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".$connection->prepareString($strXML)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus).", ".$connection->addFieldWrappers("rpt_mdate")."=".$connection->addDateQuotes( now() )
			." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

		$connection->exec( $strSQL );
	}
	else
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";

		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", ".$connection->addDateQuotes( now() ).", ".$connection->addDateQuotes( now() )
			.", ".$connection->prepareString($strXML).", ".$connection->prepareString( Security::getUserName() ).", ".$connection->prepareString($rstatus).", 'chart')";

		$connection->exec( $strSQL );
	}
}

function DeleteChart($report)
{
	$connection = getWebreportConnection(); // #9875

	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
	$connection->exec( $strSQL );
}

function GetReportsList()
{
	$connection = getWebreportConnection();// #9875

	$xml = new xml();
	$arr = array();
	$arrUserGroup = GetUserGroup();

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'report' order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() )
	{
		$report_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($report_arr['permissions']) ) {
			foreach ( $report_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}

		if(!$report_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedReport($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities($rptContent[0]);
}

function SaveReport($reportname, $report, $rtitle, $rstatus, $strXML, $saveas)
{
	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);

	// ?????
	// if( !Security::getUserName() )
	// 	$_SESSION["UserID"] = " ";

	// #9875 It's expected that webreports, webreport_style tables belong to the same db connection
	$connection = getWebreportConnection();

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$data = $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) )
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.", ".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".PrepareString4DB($strXML, $connection)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus)
			.", ".$connection->addFieldWrappers("rpt_mdate")."='".now()."' WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)
			." and ".$connection->addFieldWrappers("rpt_type")."='report'";

		$connection->exec( $strSQL );
	}
	else
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";
		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", ".$connection->addDateQuotes( now() ).", ".$connection->addDateQuotes( now() ).", ".PrepareString4DB($strXML, $connection)
			.", ".$connection->prepareString( Security::getUserName() ).", ".$connection->prepareString($rstatus).", 'report')";

		$connection->exec( $strSQL );
	}

	$strSQL = "UPDATE ".$connection->addTableWrappers("webreport_style")." set ".$connection->addFieldWrappers("repname")."=".$connection->prepareString($report)
		." where ".$connection->addFieldWrappers("repname")."='".$_SESSION['webreports_oldname']."'";
	$connection->exec( $strSQL );
}

function DeleteReport($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
		." and ".$connection->addFieldWrappers("rpt_type")."='report'";
	$connection->exec( $strSQL );
}

function testAdvSearch($table)
{
	if(is_wr_project())
	{
		if($table=="events")
		{
			return 1;
		}
		if($table=="trainings")
		{
			return 1;
		}
		if($table=="candidates")
		{
			return 1;
		}
		if($table=="event_participants")
		{
			return 1;
		}
		if($table=="training_participants")
		{
			return 1;
		}
		if($table=="cities")
		{
			return 1;
		}
		if($table=="regions")
		{
			return 1;
		}
		if($table=="sub_cities")
		{
			return 1;
		}
		if($table=="zones")
		{
			return 1;
		}
		if($table=="dereja_services")
		{
			return 1;
		}
		if($table=="dereja_event_services")
		{
			return 1;
		}
		if($table=="dereja_training_services")
		{
			return 1;
		}
		if($table=="institution_types")
		{
			return 1;
		}
		if($table=="departments")
		{
			return 1;
		}
		if($table=="education_levels")
		{
			return 1;
		}
		if($table=="minor_major")
		{
			return 1;
		}
		if($table=="skills")
		{
			return 1;
		}
		if($table=="dereja_information_sources")
		{
			return 1;
		}
		if($table=="it_related_skills")
		{
			return 1;
		}
		if($table=="industry_specific_skills")
		{
			return 1;
		}
		if($table=="training_types")
		{
			return 1;
		}
		if($table=="professions")
		{
			return 1;
		}
		if($table=="participant_organization_types")
		{
			return 1;
		}
		if($table=="training_venues")
		{
			return 1;
		}
		if($table=="training_organizers")
		{
			return 1;
		}
		if($table=="training_city_towns")
		{
			return 1;
		}
		if($table=="program_areas")
		{
			return 1;
		}
		if($table=="Candidate_Employment_Tracker")
		{
			return 1;
		}
		if($table=="Companies")
		{
			return 1;
		}
		if($table=="Jobs")
		{
			return 1;
		}
		if($table=="Job_Categories")
		{
			return 1;
		}
		if($table=="Job_Types")
		{
			return 1;
		}
		if($table=="CompanySectors")
		{
			return 1;
		}
		if($table=="Disability_Types")
		{
			return 1;
		}
		if($table=="Trainer")
		{
			return 1;
		}
		if($table=="admin_rights")
		{
			return 1;
		}
		if($table=="admin_members")
		{
			return 1;
		}
		if($table=="webreports")
		{
			return 1;
		}
		if($table=="webreport_style")
		{
			return 1;
		}
		if($table=="webreport_sql")
		{
			return 1;
		}
		if($table=="webreport_admin")
		{
			return 1;
		}
		if($table=="webreports_view")
		{
			return 1;
		}
		if($table=="Languages")
		{
			return 1;
		}
		if($table=="website_data")
		{
			return 1;
		}
		if($table=="Job_Fair")
		{
			return 1;
		}
		if($table=="kbarticles")
		{
			return 1;
		}
		if($table=="kbcategories")
		{
			return 1;
		}
		if($table=="kbcomments")
		{
			return 1;
		}
		if($table=="kbusers")
		{
			return 1;
		}
		if($table=="main")
		{
			return 1;
		}
		if($table=="faicons")
		{
			return 1;
		}
		if($table=="admin_comments")
		{
			return 1;
		}
		if($table=="derejame_audit")
		{
			return 1;
		}
		if($table=="dashboard_pages")
		{
			return 1;
		}
		if($table=="dashboards")
		{
			return 1;
		}
		if($table=="candidates_view")
		{
			return 1;
		}
		if($table=="event_participants_view")
		{
			return 1;
		}
		if($table=="training_participants_view")
		{
			return 1;
		}
		if($table=="AIO_Reporting_Dashboard")
		{
			return 1;
		}
		if($table=="candidates_by_region")
		{
			return 1;
		}
		if($table=="event_participants_by_events")
		{
			return 1;
		}
		if($table=="training_participants_by_trainings")
		{
			return 1;
		}
		if($table=="candidates_reports")
		{
			return 1;
		}
		if($table=="candidates_by_gender")
		{
			return 1;
		}
		if($table=="users")
		{
			return 1;
		}
		if($table=="admin_users")
		{
			return 1;
		}
		if($table=="utilities")
		{
			return 1;
		}
		if($table=="candidates_aggrigated")
		{
			return 1;
		}
		if($table=="candidates_by_sex_age_disability")
		{
			return 1;
		}
		if($table=="indicator_targets")
		{
			return 1;
		}
		if($table=="candidates_grouped_report")
		{
			return 1;
		}
		if($table=="indicator_targets_view")
		{
			return 1;
		}
		if($table=="dereja_academy_lms")
		{
			return 1;
		}
		if($table=="Home")
		{
			return 1;
		}
		if($table=="settings")
		{
			return 1;
		}
		if($table=="database_backup")
		{
			return 1;
		}
		if($table=="performance_indicators")
		{
			return 1;
		}
		if($table=="performance_tracking")
		{
			return 1;
		}
		if($table=="performance_years")
		{
			return 1;
		}
		if($table=="Performance_Overview")
		{
			return 1;
		}
		if($table=="performance_indicators_view")
		{
			return 1;
		}
		if($table=="dereja_schema_fields")
		{
			return 1;
		}
		if($table=="dereja_tables")
		{
			return 1;
		}
		if($table=="candidate_custom_fields")
		{
			return 1;
		}
		if($table=="candidate_custom_data")
		{
			return 1;
		}
		if($table=="Employment_Status")
		{
			return 1;
		}
		if($table=="Courses")
		{
			return 1;
		}
		if($table=="Categories")
		{
			return 1;
		}
		if($table=="Branches")
		{
			return 1;
		}
		if($table=="Groups")
		{
			return 1;
		}
		if($table=="Course_Users_Status")
		{
			return 1;
		}
	}
	elseif(is_wr_db())
	{
		global $dal;
		$table_list=WRGetTablesList();
		foreach($table_list as $key=>$value)
		{
			if($table==$value)
			{
				return 1;
			}
		}
	}
	elseif(is_wr_custom())
	{
		return 1;
	}
	return 0;
}

/**
 * convert cars.Make to [cars].[Make]
 */
function WRAddFieldWrappers($field)
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$t = "";
	$f = "";
	WRSplitFieldName($field, $t, $f);

	if(!$t)
	{
		return $connection->addFieldWrappers($f);
	}
	return $connection->addTableWrappers($t).".".$connection->addFieldWrappers($f);
}

function WRSplitFieldName($str, &$table, &$field)
{
	$table="";
	$field=$str;
	$pos=strrpos($field,".");
	if($pos===false)
		return;
	$table=substr($str,0,$pos);
	$field=substr($str,$pos+1);
}

function is_groupby_chart()
{
	if(!(@$_SESSION['webcharts']))
		return false;
	$root=&$_SESSION['webcharts'];
	if(!is_array($root["group_by_condition"]))
		return false;
	return ($root["group_by_condition"]["group_by_toggle"]=="true");
}

function WRChartLabel($str)
{
	$table="";
	$field="";
	WRSplitFieldName($str,$table,$field);
	return $field;
	if(!$table)
		return $field;
	return $table.".".$field;
}

function is_wr_db()
{
	if(@$_SESSION["webobject"]["table_type"]=="db")
		return true;
	else
		return false;
}

function is_wr_project()
{
	if(@$_SESSION["webobject"]["table_type"]=="project")
		return true;
	else
		return false;
}

function is_wr_custom()
{
	if(@$_SESSION["webobject"]["table_type"]=="custom")
		return true;
	else
		return false;
}

function WRGetTablesList()
{
	if(!isset($_SESSION["WRTableList"]))
	{
		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$_SESSION["WRTableList"] = $connection->getTableList();
	}
	return $_SESSION["WRTableList"];
}

function WRGetFieldsList($table)
{
	if(is_wr_project()){
		$pSet = new ProjectSettings($table);
		return $pSet->getFieldsList();
	}

	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldsList($table);
		}
		return dbinfoFieldsList($table);
	}

	if(is_wr_custom())
	{
		$res = array();
		$sql = $_SESSION["object_sql"];

		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$arr = $connection->getFieldsList($sql);

		foreach($arr as $val)
		{
			$res[] = $val["fieldname"];
		}
		return $res;
	}
}

function dbinfoFieldsList($table)
{
	if( isset($_SESSION["WRFieldList"][$table]) )
		return $_SESSION["WRFieldList"][$table];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = array();
	foreach($arr as $val)
	{
		$res[] = $val["fieldname"];
	}

	$_SESSION["WRFieldList"][$table] = $res;
	return $res;
}

function WRCustomGetFieldType($table,$field)
{
	global $conn;
	if(is_wr_project())
	{
		$pSet = new ProjectSettings($_SESSION['webreports']['tables'][0]);
		$type = $pSet->getFieldType($field);
		if($type)
			return $type;
	}
	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldType($table,$field);
		}
		return dbinfoFieldsType($table,$field);
	}

	if(is_wr_custom())
	{
		$res = "";
		$sql = $_SESSION["object_sql"];
		if($sql)
		{
			//The default connection is temporary used #9875
			$connection = getDefaultConnection();

			$arr = $connection->getFieldsList( $sql );
			foreach($arr as $val)
			{
				if($val["fieldname"] == $field)
					$res = $val["type"];
			}
		}
		return $res;
	}
}

function WRGetAllCustomFieldType()
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$res = array();
	$sql = $_SESSION["object_sql"];
	$arr = $connection->getFieldsList($sql);
	foreach($arr as $val)
	{
		$res[ $val["fieldname"] ] = $val["type"];
	}
	return $res;
}

function WRGetFieldType($fld)
{
	$table="";
	$field="";
	WRSplitFieldName($fld,$table,$field);
	return WRCustomGetFieldType($table,$field);
}

function dbinfoFieldsType($table,$field)
{
	if( isset($_SESSION["WRFieldType"][ $table ][ $field ]) )
		return $_SESSION["WRFieldType"][ $table ][ $field ];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = "";
	foreach($arr as $val)
	{
		if( $val["fieldname"] == $field )
			$res = $val["type"];

		$_SESSION["WRFieldType"][$table][$val["fieldname"]]=$val["type"]   ;
	}
	return $res;
}

function WRUseTimepicker($table,$field)
{
	return false;
}

function WRUseListLookup($table,$field)
{
	return false;
}

function getCaptionTable($table)
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
	if($table=="events")
	{
		return "Events";
	}
	if($table=="trainings")
	{
		return "Trainings";
	}
	if($table=="candidates")
	{
		return "Candidates";
	}
	if($table=="event_participants")
	{
		return "Event Participants";
	}
	if($table=="training_participants")
	{
		return "Training Participants";
	}
	if($table=="cities")
	{
		return "Cities";
	}
	if($table=="regions")
	{
		return "Regions";
	}
	if($table=="sub_cities")
	{
		return "Sub Cities";
	}
	if($table=="zones")
	{
		return "Zones";
	}
	if($table=="dereja_services")
	{
		return "Dereja Services";
	}
	if($table=="dereja_event_services")
	{
		return "Dereja Event Services";
	}
	if($table=="dereja_training_services")
	{
		return "Dereja Training Services";
	}
	if($table=="institution_types")
	{
		return "Institution Types";
	}
	if($table=="departments")
	{
		return "Departments";
	}
	if($table=="education_levels")
	{
		return "Education Levels";
	}
	if($table=="minor_major")
	{
		return "Minor Major";
	}
	if($table=="skills")
	{
		return "Skills";
	}
	if($table=="dereja_information_sources")
	{
		return "Dereja Information Sources";
	}
	if($table=="it_related_skills")
	{
		return "It Related Skills";
	}
	if($table=="industry_specific_skills")
	{
		return "Industry Specific Skills";
	}
	if($table=="training_types")
	{
		return "Training Types";
	}
	if($table=="professions")
	{
		return "Professions";
	}
	if($table=="participant_organization_types")
	{
		return "Participant Organization Types";
	}
	if($table=="training_venues")
	{
		return "Training Venues";
	}
	if($table=="training_organizers")
	{
		return "Training Organizers";
	}
	if($table=="training_city_towns")
	{
		return "Training City Towns";
	}
	if($table=="program_areas")
	{
		return "Program Areas";
	}
	if($table=="Candidate_Employment_Tracker")
	{
		return "Candidate Employment Tracker";
	}
	if($table=="Companies")
	{
		return "Companies";
	}
	if($table=="Jobs")
	{
		return "Jobs";
	}
	if($table=="Job_Categories")
	{
		return "Job Categories";
	}
	if($table=="Job_Types")
	{
		return "Job Types";
	}
	if($table=="CompanySectors")
	{
		return "Company Sectors";
	}
	if($table=="Disability_Types")
	{
		return "Disability Types";
	}
	if($table=="Trainer")
	{
		return "Trainer";
	}
	if($table=="admin_rights")
	{
		return "Admin Rights";
	}
	if($table=="admin_members")
	{
		return "Admin Members";
	}
	if($table=="webreports")
	{
		return "Webreports";
	}
	if($table=="webreport_style")
	{
		return "Webreport Style";
	}
	if($table=="webreport_sql")
	{
		return "Webreport Sql";
	}
	if($table=="webreport_admin")
	{
		return "Webreport Admin";
	}
	if($table=="webreports_view")
	{
		return "Webreports View";
	}
	if($table=="Languages")
	{
		return "Languages";
	}
	if($table=="website_data")
	{
		return "Website Data";
	}
	if($table=="Job_Fair")
	{
		return "Job Fair";
	}
	if($table=="kbarticles")
	{
		return "Articles";
	}
	if($table=="kbcategories")
	{
		return "Categories";
	}
	if($table=="kbcomments")
	{
		return "Comments";
	}
	if($table=="kbusers")
	{
		return "Users";
	}
	if($table=="main")
	{
		return "";
	}
	if($table=="faicons")
	{
		return "Faicons";
	}
	if($table=="admin_comments")
	{
		return "Admin Comments";
	}
	if($table=="derejame_audit")
	{
		return "Derejame Audit";
	}
	if($table=="dashboard_pages")
	{
		return "Dashboard Pages";
	}
	if($table=="dashboards")
	{
		return "Dashboards";
	}
	if($table=="candidates_view")
	{
		return "Candidates View";
	}
	if($table=="event_participants_view")
	{
		return "Event Participants View";
	}
	if($table=="training_participants_view")
	{
		return "Training Participants View";
	}
	if($table=="AIO_Reporting_Dashboard")
	{
		return "AIO Reporting Dashboard";
	}
	if($table=="candidates_by_region")
	{
		return "Candidates By Region";
	}
	if($table=="event_participants_by_events")
	{
		return "Event Participants By Events";
	}
	if($table=="training_participants_by_trainings")
	{
		return "Training Participants By Trainings";
	}
	if($table=="candidates_reports")
	{
		return "Candidates Reports";
	}
	if($table=="candidates_by_gender")
	{
		return "Candidates By Gender";
	}
	if($table=="users")
	{
		return "Users";
	}
	if($table=="admin_users")
	{
		return "Admin Users";
	}
	if($table=="utilities")
	{
		return "Utilities";
	}
	if($table=="candidates_aggrigated")
	{
		return "Candidates Aggrigated";
	}
	if($table=="candidates_by_sex_age_disability")
	{
		return "Candidates By Sex Age Disability";
	}
	if($table=="indicator_targets")
	{
		return "Indicator Targets";
	}
	if($table=="candidates_grouped_report")
	{
		return "Candidates Grouped Report";
	}
	if($table=="indicator_targets_view")
	{
		return "Indicator Targets View";
	}
	if($table=="dereja_academy_lms")
	{
		return "Dereja Academy Lms";
	}
	if($table=="Home")
	{
		return "Home";
	}
	if($table=="settings")
	{
		return "Settings";
	}
	if($table=="database_backup")
	{
		return "Database Backup";
	}
	if($table=="performance_indicators")
	{
		return "Performance Indicators";
	}
	if($table=="performance_tracking")
	{
		return "Performance Tracking";
	}
	if($table=="performance_years")
	{
		return "Performance Years";
	}
	if($table=="Performance_Overview")
	{
		return "Performance Overview";
	}
	if($table=="performance_indicators_view")
	{
		return "Performance Indicators View";
	}
	if($table=="dereja_schema_fields")
	{
		return "Dereja Schema Fields";
	}
	if($table=="dereja_tables")
	{
		return "Dereja Tables";
	}
	if($table=="candidate_custom_fields")
	{
		return "Candidate Custom Fields";
	}
	if($table=="candidate_custom_data")
	{
		return "Candidate Custom Data";
	}
	if($table=="Employment_Status")
	{
		return "Employment Status";
	}
	if($table=="Courses")
	{
		return "Courses";
	}
	if($table=="Categories")
	{
		return "Categories";
	}
	if($table=="Branches")
	{
		return "Branches";
	}
	if($table=="Groups")
	{
		return "Groups";
	}
	if($table=="Course_Users_Status")
	{
		return "Course Users Status";
	}
	return $table;
}


function getChartTablesList()
{
	return WRGetQueryTables('webcharts');
}

function getReportTablesList()
{
	return WRGetQueryTables('webreports');
}

function WRGetQueryTables($type)
{
	$root=&$_SESSION[$type];
	$ret=array($root['tables'][0]);
	if (strlen(@$root['table_relations']["relations"]) && strpos($root['table_relations']['join_tables'], ",") !== false)
	{
		$joined = explode(",", $root['table_relations']['join_tables']);
		foreach($joined as $t)
		{
			if(strlen($t))
				$ret[]=$t;
		}
	}
	return $ret;
}

function GetDefaultViewFormat($type)
{
	if(IsBinaryType($type))
		return FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return FORMAT_DATE_SHORT;
	else
		return FORMAT_NONE;
}

function GetDefaultEditFormat($type)
{
	if(IsBinaryType($type))
		return EDIT_FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return EDIT_FORMAT_DATE;
	else
		return EDIT_FORMAT_TEXT_FIELD;
}

function GetGenericViewFormat($table,$field)
{
	return GetDefaultViewFormat(WRGetFieldType($table.".".$field));
}


function GetGenericEditFormat($table,$field)
{
	return GetDefaultEditFormat(WRGetFieldType($table.".".$field));
}

function GenericStrWhereAdv($strTable, $strField, $SearchFor, $strSearchOption, $SearchFor2, $etype)
{
	global $dal;
	$sfield=$strField;
	$stable="";
	if(is_wr_db())
	{
		WRSplitFieldName($strField,$stable,$sfield);
		$type=WRGetFieldType($strField);
	}
	else
		$type=WRCustomGetFieldType($strTable,$strField);

	if(GetDatabaseType() != nDATABASE_MSSQLServer)
		$ismssql=false;
	else
		$ismssql=true;

		$btexttype=IsTextType($type);
	if(GetDatabaseType() == nDATABASE_MySQL)
		$btexttype=false;

	if(IsBinaryType($type))
		return "";

	if(GetDatabaseType() == nDATABASE_MSSQLServer)
	{
		if($btexttype && $strSearchOption!="Contains" && $strSearchOption!="Starts with ..." )
			return "";
	}
	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype))
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)."='')";
		elseif ($ismssql && $btexttype)
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)." LIKE '')";
		else
			return WRAddFieldWrappers($strField)." is null";
	}
	if(GetDatabaseType() == nDATABASE_PostgreSQL)
		$like="ilike";
	else
		$like="like";
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($strTable);
		if($pSet->multiSelect($sfield))
			$SearchFor=splitLookupValues($SearchFor);
		else
			$SearchFor=array($SearchFor);
		$ret="";
		foreach($SearchFor as $searchItem)
		{
			$value = $searchItem;
			if(!($value=="null" || $value=="Null" || $value==""))
			{
				if(strlen($ret))
					$ret.=" or ";
				if($strSearchOption=="Equals")
				{
					$value=WRmake_db_value($sfield,$value,$strTable);
					if(!($value=="null" || $value=="Null"))
						$ret.=WRAddFieldWrappers($strField).'='.$value;
				}
				else
				{
					$connection = getWebreportConnection();
					if(strpos($value,",")!==false || strpos($value,'"')!==false)
						$value = '"'.str_replace('"','""',$value).'"';
					$ret.=WRAddFieldWrappers($strField)." = ".$connection->prepareString($value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value.",%");
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString($value.",%");
				}
			}
		}
		if(strlen($ret))
			$ret="(".$ret.")";
		return $ret;
	}
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_CHECKBOX)
	{
		if($SearchFor=="none")
			return "";
		if(NeedQuotes($type))
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>'0' and ".WRAddFieldWrappers($strField)."<>'' and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."='0' or ".WRAddFieldWrappers($strField)."='' or ".WRAddFieldWrappers($strField)." is null)";
		}
		else
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>0 and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."=0 or ".WRAddFieldWrappers($strField)." is null)";
		}
	}
	$value1=WRmake_db_value($sfield,$SearchFor,$strTable);
	$value2=false;
	if($strSearchOption=="Between")
		$value2=WRmake_db_value($sfield,$SearchFor2,$strTable);
	if($strSearchOption!="Contains" && $strSearchOption!="Starts with ..." && ($value1==="null" || $value2==="null" ))
		return "";

	$connection = getWebreportConnection();
	if(IsCharType($type) && !$btexttype)
	{
		$value1=$connection->upper($value1);
		$value2=$connection->upper($value2);
		$strField=$connection->upper(WRAddFieldWrappers($strField));
	}
	elseif ($ismssql && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField="convert(varchar,".WRAddFieldWrappers($strField).")";
	elseif(GetDatabaseType() == nDATABASE_PostgreSQL && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField = "CAST(".WRAddFieldWrappers($strField)." AS TEXT)";
	else
		$strField=WRAddFieldWrappers($strField);
	$ret="";
	if($strSearchOption=="Contains")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString("%".$SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString("%".$SearchFor."%");
	}
	else if($strSearchOption=="Equals")
	{
		return $strField."=".$value1;
	}
	else if($strSearchOption=="Starts with ...")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString($SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString($SearchFor."%");
	}
	else if($strSearchOption=="More than ...") return $strField.">".$value1;
	else if($strSearchOption=="Less than ...") return $strField."<".$value1;
	else if($strSearchOption=="Equal or more than ...") return $strField.">=".$value1;
	else if($strSearchOption=="Equal or less than ...") return $strField."<=".$value1;
	else if($strSearchOption=="Between")
	{
		$ret=$strField.">=".$value1;
		$ret.=" and ".$strField."<=".$value2;
		return $ret;
	}
	return "";
}



function GetAdvSearchOptions($table,$field)
{
	$format=GetGenericEditFormat($table,$field);
	$options=array();
	if($format==EDIT_FORMAT_DATE)
	{
		$options[]=array("type"=>"Equals","label"=>"Equals");
		$options[]=array("type"=>"More than ...","label"=>"More than");
		$options[]=array("type"=>"Less than ...","label"=>"Less than");
		$options[]=array("type"=>"Equal or more than ...","label"=>"Equal or more than");
		$options[]=array("type"=>"Equal or less than ...","label"=>"Equal or less than");
		$options[]=array("type"=>"Between","label"=>"Between");
		$options[]=array("type"=>"Empty","label"=>"Empty");
	}
	elseif($format==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($table, PAGE_REPORT);
		if($pSet->multiSelect($field))
			$options[]=array("type"=>"Contains","label"=>"Contains");
		else
			$options[]=array("type"=>"Equals","label"=>"Equals");
	}
	elseif($format==EDIT_FORMAT_TEXT_FIELD
	|| $format==EDIT_FORMAT_TEXT_AREA
	|| $format==EDIT_FORMAT_PASSWORD
	|| $format==EDIT_FORMAT_HIDDEN
	|| $format==EDIT_FORMAT_READONLY	)
	{
		$options[]=array("type"=>"Contains","label"=>"Contains");
		$options[]=array("type"=>"Equals","label"=>"Equals");
		$options[]=array("type"=>"Starts with ...","label"=>"Starts with");
		$options[]=array("type"=>"More than ...","label"=>"More than");
		$options[]=array("type"=>"Less than ...","label"=>"Less than");
		$options[]=array("type"=>"Equal or more than ...","label"=>"Equal or more than");
		$options[]=array("type"=>"Equal or less than ...","label"=>"Equal or less than");
		$options[]=array("type"=>"Between","label"=>"Between");
		$options[]=array("type"=>"Empty","label"=>"Empty");
	}
	else
	{
		$options[]=array("type"=>"Equals","label"=>"Equals");
}
	return $options;
}

function CalcSearchParam( $sessPrefix )
{
	$sWhere = "";

	if(@$_SESSION[$sessPrefix."_search"]==2)
//	 advanced search
	{
		foreach(@$_SESSION[$sessPrefix."_asearchfor"] as $f => $sfor)
		{
			$strSearchFor=trim($sfor);
			$strSearchFor2="";
			$type=@$_SESSION[$sessPrefix."_asearchfortype"][$f];
			if(array_key_exists($f,@$_SESSION[$sessPrefix."_asearchfor2"]))
				$strSearchFor2=trim(@$_SESSION[$sessPrefix."_asearchfor2"][$f]);
			if($strSearchFor!="" || true)
			{
				if (!$sWhere)
				{
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
						$sWhere="1=1";
					else
						$sWhere="1=0";
				}
				$strSearchOption=trim($_SESSION[$sessPrefix."_asearchopt"][$f]);
				$where = GenericStrWhereAdv(@$_SESSION[$sessPrefix."_asearchtable"][$f], $f, $strSearchFor, $strSearchOption, $strSearchFor2,$type);
				if($where)
				{
					if($_SESSION[$sessPrefix."_asearchnot"][$f])
						$where="not (".$where.")";
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
	   					$sWhere .= " and ".$where;
					else
	   					$sWhere .= " or ".$where;
				}
			}
		}
	}
	return $sWhere;
}

function WRViewFormat($field,$table="")
{
	$pSet = new ProjectSettings($table);
	return $pSet->getViewFormat($field);
}

function get_chart_series_fields(&$arr_data_series,&$arr_label_series)
{
	if(is_groupby_chart())
		return get_chart_groupbyseries_fields($arr_data_series,$arr_label_series);
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();

	$arr_join_tables = getChartTablesList();

	for ($i=0; $i < count($arr_join_tables); $i++ )
	{
		$t = $arr_join_tables[$i];
		$arr_fields = GetNumberFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_data_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_data_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
		$arr_fields = WRGetNBFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_label_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_label_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
	}
	if(!($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function get_chart_groupbyseries_fields(&$arr_data_series,&$arr_label_series)
{
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();
	for ($i=0; $i < count($root['group_by_condition'])-1; $i++)
	{
		$arr = &$root['group_by_condition'][$i];
		$field=$arr["field_opt"];
		$strLabel=WRChartLabel($field);
		$isLabel=false;
		$isData=false;
		if($arr["group_by_value"]!="-1" && $arr["group_by_value"]!="GROUP BY")
		{
			$field=$arr["group_by_value"]."(".$field.")";
			$isData=true;
			$isLabel=true;
		}
		else if($arr["group_by_value"]=="GROUP BY")
		{
			$type = WRGetFieldType($field);
			if(IsNumberType($type))
				$isData=true;
			$isLabel=true;
		}

		$ret = array("field"=>$field,"label"=>$strLabel);
		if($isLabel)
			$arr_label_series[]=$ret;
		if($isData)
			$arr_data_series[]=$ret;
	}
	if(!($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function WRProcessLargeText($text,$field,$recid,$chars,$mode,$strLabel, $isProgectTable = false)
{
	if(!$chars)
		return $text;
	if($mode!=MODE_LIST && $mode!=MODE_PRINT || strlen($text)<$chars+10)
		return $text;

	if($isProgectTable)
		$shortening = GetShorteningForLargeText($text, $cNumberOfChars);
	else
		$shortening = substr($text,0,$chars);

	if($mode==MODE_PRINT)
	{
		return $shortening."...";
	}
//	List page
	$id="textbox_".GoodFieldName($field).$recid;
	$textbox="<span style=\"display:none\" id=\"".$id."\">".$text."</span>";
	$link="<a href=# onclick=\"

	var offset = $(this).offset();
	offset.left -= $(window).scrollLeft();
	offset.top -= $(window).scrollTop();
	$('#".$id."').clone().dialog(
	{
title: '".jsreplace($strLabel)."',
		draggable: true,
		resizable: true,
		bgiframe: true,
		modal: false,
		minheight:400,
		position:[offset.left-50,offset.top-50]
	}
	);
	return false;
	\">&nbsp;"."More"."...</a>";
	return $shortening.$link.$textbox;
}

function JumpTo()
{
	return "$(\"#jumpto\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
		var jumpto = $(\"#jumpto\"), menujump = $(\"#menujump\"), framejump = $(\"#framejump\");
		if (jumpto.top + jumpto.height() + menujump.height() + $(window).scrollTop() > $(window).height()) {
			if(menujump.height() - jumpto.offset().top + $(window).scrollTop()>0)
			{
				menujump.css(\"top\", $(window).scrollTop()+\"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", $(window).scrollTop()+\"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
			else
			{
				menujump.css(\"top\", ($(this).offset().top - menujump.height()) + \"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", ($(this).offset().top - framejump.height()) + \"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
		} else {
			menujump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
			framejump.css(\"width\", menujump.width());
			framejump.css(\"height\", menujump.height());
			framejump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
		}
		framejump.show();
		menujump.show();
	});

	$(\"#jumpto\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(\"#menujump td\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	});

	$(\"#menujump td\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(document.body).click(function(){
		$(\"#menujump\").hide();
		$(\"#framejump\").hide();
	});	";
}

function alertDialog()
{
return	"$(\"#alert\").dialog({
		open: function(event,ui){
			var alertParent = $(\"#alert\").parent(\".ui-dialog\"), aframe = $(\"#aframe\");
			w = alertParent.width();
			h = alertParent.height();
			t = alertParent.offset().top;
			l = alertParent.offset().left;
			aframe.css(\"width\",w+6);
			aframe.css(\"height\",h+6);
			aframe.css(\"top\",t + \"px\");
			aframe.css(\"left\",l + \"px\");
			aframe.show();
		},
		beforeclose: function(event,ui){
			$(\"#aframe\").hide();
		},
		title: \"Message\",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog(\"close\");
			}
		}
	});";
}

function DBGetTableKeys($table)
{
	global $dal,$wr_is_standalone;
	if(!$wr_is_standalone)
	{
		if($dal->Table($table))
			return $dal->GetDBTableKeys($table);
		return array();
	}
	else
		return array();
}

function colorPickerMouse()
{
return "

function GiveDec(Hex)
{
   if(Hex == \"A\")
	  Value = 10;
   else
   if(Hex == \"B\")
	  Value = 11;
   else
   if(Hex == \"C\")
	  Value = 12;
   else
   if(Hex == \"D\")
	  Value = 13;
   else
   if(Hex == \"E\")
	  Value = 14;
   else
   if(Hex == \"F\")
	  Value = 15;
   else
	  Value = eval(Hex);

   return Value;
}

function GiveHex(Dec)
{
   if(Dec == 10)
	  Value = \"A\";
   else
   if(Dec == 11)
	  Value = \"B\";
   else
   if(Dec == 12)
	  Value = \"C\";
   else
   if(Dec == 13)
	  Value = \"D\";
   else
   if(Dec == 14)
	  Value = \"E\";
   else
   if(Dec == 15)
	  Value = \"F\";
   else
	  Value = \"\" + Dec;

   return Value;
}

function HexToDec(value)
{
   Input = value.toUpperCase();

   a = GiveDec(Input.substring(0, 1));
   b = GiveDec(Input.substring(1, 2));
   c = GiveDec(Input.substring(2, 3));
   d = GiveDec(Input.substring(3, 4));
   e = GiveDec(Input.substring(4, 5));
   f = GiveDec(Input.substring(5, 6));

   x = (a * 16) + b; // Red
   y = (c * 16) + d; // Green
   z = (e * 16) + f; // Blue

	return [x,y,z]
}

function DecToHex(Red, Green, Blue)
{
   a = GiveHex(Math.floor(Red / 16));
   b = GiveHex(Red % 16);
   c = GiveHex(Math.floor(Green / 16));
   d = GiveHex(Green % 16);
   e = GiveHex(Math.floor(Blue / 16));
   f = GiveHex(Blue % 16);

   z = a + b + c + d + e + f;

	return z;
}

function rgbToHex(str)
{
	if(str==undefined)
		return \"\";
	if(str.substr(0,1)==\"#\")
		return str.substr(1);
	str=str.substring(4);
	str=str.replace(\")\",\"\");
	arr = new Array();
	arr=str.split(\",\");
	return DecToHex(arr[0],arr[1],arr[2]);
}

	$(\".ColorPickerDivSample\").css(\"cursor\",\"pointer\");

	$(\"#colorPickerVtd td\").each(function(){
        $(this).css(\"border\",\"1px solid \" + $(this).css(\"backgroundColor\"));
    })
		.css(\"cursor\",\"pointer\");

	$(\".selector,.ColorPickerDivSample\").click(function(){
	    click_color_event(this);
	});

	$(\"#colorPickerVtd\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
	}).mouseout(function(){
		closetimerpicker = window.setTimeout(function (){
				$('#colorPickerVtd').hide();
				$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(\"div.ColorPickerDivSample.active\").attr(\"color1\"));
			}, timeoutpicker);
	});

	$(\"#colorPickerVtd td\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		$(this).css(\"border\", \"1px dotted #fff\");
		$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(this).css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").mouseout(function(){
		$(this).css(\"border\", \"1px solid \"+$(\"div.ColorPickerDivSample.active\").css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").click(function(){
		if ( this.id == \"nocolor\" ) {
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", \"\");
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", \"\");
		} else {
			bgcol=$(this).css(\"backgroundColor\");
			if(bgcol.substring(0,1)!=\"#\")
				bgcol=rgbToHex(bgcol);
			else
				bgcol=bgcol.substring(1);
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", bgcol);
			arr = HexToDec(bgcol);
			red = parseInt( arr[0] * 0.85 );
			green = parseInt( arr[1] * 0.85 );
			blue = parseInt( arr[2] * 0.85 );
			hex = DecToHex( red, green, blue );
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", hex);
		}
		$(\"#colorPickerVtd\").hide();
	});

	function click_color_event(th)
	{
		if($(th).css(\"cursor\")==\"pointer\")
	    {
			if(closetimerpicker) {
				window.clearTimeout(closetimerpicker);
				closetimerpicker = null;
		}
		if($(th).attr(\"class\")==\"selector\")
			bc=$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").css(\"background-color\");
		else
			bc=$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").css(\"background-color\");

		var activeDiv = $(\"div.ColorPickerDivSample.active\"), colorPicker = $(\"#colorPickerVtd\");
		if(activeDiv.length){
			activeDiv.css(\"background-color\", activeDiv.attr(\"color1\"));
			activeDiv.removeClass(\"active\");
		}

		if($(th).attr(\"class\")==\"selector\")
			$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").addClass(\"active\");
		else
			$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").addClass(\"active\");


		colorPicker.css(\"top\", $(th).offset().top + \"px\");
		colorPicker.css(\"left\", $(th).offset().left + $(th).width() + 3 + \"px\");
		colorPicker.show();
		$(\"td\", colorPicker).each(function(){
			$(this).css(\"border\", \"1px solid \"+$(this).css(\"background-color\"));
			if(bc==$(this).css(\"background-color\"))
				$(this).css(\"border\", \"1px dotted #fff\");
		});
	    }
	}

	";
}

function MoveTdTotal()
{
return "
function total_td_move(th,direct)
{
	tr=$(th).parent().parent().parent();

	if(direct==\"up\")
		tr2=$(tr).prev();
	else
		tr2=$(tr).next();
	// || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).type=='checkbox'
	if(!$(tr2).find(\"td\").eq(3).find(\"input\").get(0) || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).disabled)
		tr2=\"\";
	if(tr2!=\"\")
	{
		if(direct==\"up\")
			$(tr).insertBefore(tr2);
		else
			$(tr).insertAfter(tr2);
	}
}";
}

/**
 * @param String str
 * @param Connection connection
 * @return String
 */
function PrepareString4DB($str, $connection)
{
	if($connection->dbType != nDATABASE_Oracle)
	{
		return $connection->prepareString($str);
	}

	if( strlen($str) < 4000 )
		return $connection->prepareString($str);

	$chunklen = 3900;
	$chunks = floor(strlen($str) / $chunklen);
	if( strlen($str) % $chunklen != 0 )
		$chunks++;

	$out = "";
	for($i = 0; $i < $chunks; $i++)
	{
		if(strlen($out))
			$out.="||";

		$out.="to_clob(";
		$out.= $connection->prepareString( substr($str, $i*$chunklen, $chunklen) );
		$out.=")";
	}
	return $out;
}

function WRmake_db_value($field,$value,$table="")
{
	$ret=WRprepare_for_db($field,$value,$table);

	if($ret===false)
		return $ret;
	return WRadd_db_quotes($field,$ret,$table);
}

function WRadd_db_quotes($field,$value,$table="")
{
	$connection = getWebreportConnection();

	$type = WRGetFieldType($table.".".$field);
	if(IsBinaryType($type))
	{
		return $connection->addSlashesBinary($value);
	}
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "null";
	if(NeedQuotes($type))
	{
		if(!IsDateFieldType($type))
			$value=$connection->prepareString($value);
		else
			$value=$connection->addDateQuotes($value);
	}
	else
	{
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
	}
	return $value;
}

function WRprepare_for_db($field,$value,$table="")
{
	$type=WRGetFieldType($table.".".$field);
	if(is_array($value))
		$value=combinevalues($value);
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "";
	if(IsDateFieldType($type))
		$value=localdatetime2db($value);
	return $value;
}

function DBGetTablesList()
{
	global $dal;
	$tables = WRGetTablesList();
	$ret=array();

	foreach($tables as $value)
	{
		$val_lower=wr_getTableName(strtolower($value));
		if(substr($val_lower,-6)!="_audit" && substr($val_lower,-8)!="_locking" && substr($val_lower,-9)!="_ugrights" && substr($val_lower,-9)!="_uggroups"
		&& substr($val_lower,-10)!="_ugmembers" && $val_lower!="admin_rights" && $val_lower!="admin_users"
		&& $val_lower!="admin_members" && $val_lower!="webreports" && $val_lower!="webreport_style"
		&& $val_lower!="webreport_admin" && $val_lower!="webreport_settings" && $val_lower!="webreport_sql")
			$ret[]=$value;
	}
	return $ret;
}

function WRGetTableListAdmin($db_type)
{
	$connection = getWebreportConnection();// #9875

	$ret = array();
	$sql = "select ".$connection->addFieldWrappers("tablename").",".$connection->addFieldWrappers("group_name")
		." from ".$connection->addTableWrappers("webreport_admin")." where ".$connection->addFieldWrappers("db_type")."='".$db_type."'" ;

	$qResult = $connection->query( $sql );
	while( $data = $qResult->fetchNumeric() )
	{
		$ret[] = array("tablename" => $data[0], "group" => $data[1]);
	}
	return $ret;
}

function GetTablesListReport()
{
	$arr=array();
	$securityFlag = true;
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("events");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="events";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="events";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("trainings");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="trainings";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="trainings";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("candidates");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="candidates";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="candidates";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("event_participants");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="event_participants";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="event_participants";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("training_participants");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="training_participants";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="training_participants";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("cities");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="cities";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="cities";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("regions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="regions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="regions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("sub_cities");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="sub_cities";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="sub_cities";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("zones");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="zones";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="zones";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_services");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_services";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_services";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_event_services");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_event_services";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_event_services";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_training_services");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_training_services";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_training_services";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("institution_types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="institution_types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="institution_types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("departments");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="departments";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="departments";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("education_levels");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="education_levels";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="education_levels";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("minor_major");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="minor_major";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="minor_major";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("skills");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="skills";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="skills";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_information_sources");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_information_sources";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_information_sources";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("it_related_skills");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="it_related_skills";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="it_related_skills";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("industry_specific_skills");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="industry_specific_skills";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="industry_specific_skills";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("training_types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="training_types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="training_types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("professions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="professions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="professions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("participant_organization_types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="participant_organization_types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="participant_organization_types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("training_venues");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="training_venues";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="training_venues";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("training_organizers");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="training_organizers";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="training_organizers";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("training_city_towns");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="training_city_towns";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="training_city_towns";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("program_areas");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="program_areas";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="program_areas";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Candidate_Employment_Tracker");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Candidate_Employment_Tracker";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Candidate_Employment_Tracker";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Companies");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Companies";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Companies";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Jobs");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Jobs";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Jobs";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Job_Categories");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Job_Categories";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Job_Categories";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Job_Types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Job_Types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Job_Types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("CompanySectors");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="CompanySectors";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="CompanySectors";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Disability_Types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Disability_Types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Disability_Types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Trainer");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Trainer";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Trainer";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_rights");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_rights";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_rights";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_members");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_members";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_members";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("webreports");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="webreports";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="webreports";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("webreport_style");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="webreport_style";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="webreport_style";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("webreport_sql");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="webreport_sql";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="webreport_sql";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("webreport_admin");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="webreport_admin";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="webreport_admin";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Languages");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Languages";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Languages";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("website_data");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="website_data";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="website_data";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Job_Fair");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Job_Fair";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Job_Fair";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbarticles");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbarticles";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbarticles";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbcategories");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbcategories";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbcategories";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbcomments");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbcomments";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbcomments";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbusers");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbusers";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbusers";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("main");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="main";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="main";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("faicons");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="faicons";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="faicons";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_comments");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_comments";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_comments";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("derejame_audit");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="derejame_audit";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="derejame_audit";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dashboard_pages");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dashboard_pages";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dashboard_pages";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dashboards");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dashboards";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dashboards";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("users");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="users";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="users";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_users");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_users";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_users";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("utilities");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="utilities";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="utilities";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("candidates_aggrigated");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="candidates_aggrigated";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="candidates_aggrigated";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("indicator_targets");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="indicator_targets";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="indicator_targets";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_academy_lms");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_academy_lms";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_academy_lms";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("settings");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="settings";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="settings";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("database_backup");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="database_backup";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="database_backup";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("performance_indicators");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="performance_indicators";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="performance_indicators";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("performance_tracking");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="performance_tracking";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="performance_tracking";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("performance_years");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="performance_years";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="performance_years";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_schema_fields");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_schema_fields";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_schema_fields";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("dereja_tables");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="dereja_tables";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="dereja_tables";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("candidate_custom_fields");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="candidate_custom_fields";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="candidate_custom_fields";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("candidate_custom_data");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="candidate_custom_data";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="candidate_custom_data";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("Employment_Status");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="Employment_Status";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Employment_Status";
	}
	return $arr;
}

function GetTablesListCustom()
{
	$connection = getWebreportConnection();// #9875
	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("sqlname" => $data["sqlname"], "isStorProc" => IsStoredProcedure($data["sqlcontent"]));
	}
	return $arr;
}

function DBGetTablesListByGroup($db="db")
{
	if($db=="db")
		$tables = DBGetTablesList();
	elseif($db=="project")
		$tables = GetTablesListReport();
	else
		$tables = GetTablesListCustom();
	$ret=array();
	if($db=="db")
		$tables_admin = WRGetTableListAdmin("db");
	elseif($db=="project")
		$tables_admin = WRGetTableListAdmin("project");
	else
		$tables_admin = WRGetTableListAdmin("custom");

	$userGroups = GetUserGroup();

//	all tables
	foreach($tables as $table_name)
	{
		if($db=="custom")
			$tablename=$table_name["sqlname"];
		else
			$tablename=$table_name;
//	permissions
		foreach($tables_admin as $tablerights)
		{
			if($tablerights["tablename"]!=$tablename)
				continue;
//	user groups
			$found=false;
			if(!($userGroups))
			{
//	no groups at all
				$found=true;
			}
			elseif($tablerights["group"]=="")
			{
//	initial table initialization
				$found=true;
			}
			else
			{
				foreach($userGroups as $group)
				{
					if((string)$group == $tablerights["group"])
					{
						$found=true;
						break;
					}
				}
			}
			if($found)
			{
				$ret[]=$table_name;
				break;
			}
		}
	}
	return $ret;
}

function isWRAdmin()
{
	if( !Security::permissionsAvailable() ) {
		return @$_SESSION["WRAdmin"];
	}
	$sUserGroup=@$_SESSION["GroupID"];
	if( !Security::dynamicPermissions() ) {
	} else {
		return IsAdmin();
	}
}

function sortUserGroup($a,$b)
{
	if($a[1]<$b[1])
		return -1;
	else
		return 1;
}

function Convert_Old_Chart($arr)
{
	switch($arr["chart_type"]["type"])
	{
		case "3d_column":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "3d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "2d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_column":
			$arr["chart_type"]["type"]="2d_column";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "line":
			$arr["chart_type"]["type"]="line";
			if(!isset($arr["appearance"]["linestyle"]))
				$arr["appearance"]["linestyle"]=0;
			break;
		case "spline":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=1;
			break;
		case "step_line":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=2;
			break;
		case "area_stacked":
			$arr["chart_type"]["type"]="area";
			$arr["appearance"]["isstacked"]="true";
			break;
	}
	if(!isset($arr['appearance']["cscroll"]))
	{
		$arr['appearance']["cscroll"]="true";
		$arr['appearance']["autoupdate"]="false";
		$arr['appearance']["maxbarscroll"]="10";
		$arr['appearance']["update_interval"]="5";
	}

	for($i=0;$i<4;$i++)
	{
		if(isset($arr['appearance']['color'.($i+1).'1']))
			$arr['parameters'][$i]['series_color']=$arr['appearance']['color'.($i+1).'1'];
	}
	return $arr;
}

function WRGetListCustomSQL()
{
	$connection = getWebreportConnection();// #9875

	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("id" => $data["id"], "sqlname" => $data["sqlname"], "sqlcontent" => $data["sqlcontent"]);
	}
	return $arr;
}

function WRgetCurrentCustomSQL($id)
{
	if( !$id )
		return array(0, "", "");

	$connection = getWebreportConnection();	// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("id")."=".$id;
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);

	return "";
}

function getCustomSQLbyName($sqlname)
{
	$connection = getWebreportConnection();// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("sqlname")."='".$sqlname."'";
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);

	return "";
}

function update_report_totals()
{
	$root=&$_SESSION["webreports"];
//	ensure all fields in reports are listed in the tables
	$tables=getReportTablesList();
	if(is_wr_custom())
		$fields = WRGetFieldsList('');
	$arr_unset=array();
	foreach($root["totals"] as $idx=>$fld)
	{
		if(array_search($fld["table"],$tables)!==false || is_null($fld["table"]) && is_wr_custom())
		{
			if(!is_wr_custom())
				$fields = WRGetFieldsList($fld["table"]);
			if(array_search($fld["name"], $fields)!==false)
				continue;
		}
//	remove $total if found
		$arr_unset[]=$idx;
	}
	foreach($arr_unset as $idx=>$fld)
	{
		unset($root["totals"][$fld]);
	}

//	ensure all fields appear in the totals
	$all_fields=array();
	foreach($tables as $t)
	{
		$fields=WRGetFieldsList($t);
		foreach($fields as $f)
		{
			if(is_wr_db())
				$all_fields[]=$t.".".$f;
			else
				$all_fields[]=$f;
		}
	}

//	ensure all series  fields appear in the totals
	foreach($all_fields as $fieldItem)
	{
		$f = $fieldItem;
		$table="";
		$fld="";
		if(is_wr_db())
			WRSplitFieldName($f,$table,$fld);
		else
		{
			$table=$tables[0];
			$fld=$f;
			$f=$table."_".$f;
		}
		if(array_key_exists(GoodFieldName($f),$root["totals"]))
			continue;
		$pSet = new ProjectSettings($table, PAGE_LIST);
        $root['totals'][GoodFieldName($f)] = array();
        $root['totals'][GoodFieldName($f)]["name"] = $fld;
        $root['totals'][GoodFieldName($f)]["table"] = $table;
		$root['totals'][GoodFieldName($f)]["label"] = $pSet->label($fld);
        $root['totals'][GoodFieldName($f)]["show"] = "true";
        $root['totals'][GoodFieldName($f)]["min"] = "false";
        $root['totals'][GoodFieldName($f)]["max"] = "false";
        $root['totals'][GoodFieldName($f)]["sum"] = "false";
        $root['totals'][GoodFieldName($f)]["avg"] = "false";
		$root['totals'][GoodFieldName($f)]["curr"] = "false";
        $root['totals'][GoodFieldName($f)]["search"] = "";
        $root['totals'][GoodFieldName($f)]["view_format"] = GetGenericViewFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["edit_format"] = GetGenericEditFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["display_field"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["linkfield"] = $pSet->getLinkField($fld);
        $root['totals'][GoodFieldName($f)]["show_thumbnail"] = $pSet->showThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["need_encode"] = $pSet->NeedEncode($fld);
        $root['totals'][GoodFieldName($f)]["thumbnail"] = $pSet->getStrThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgwidth"] = $pSet->getImageWidth($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgheight"] = $pSet->getImageHeight($fld);
        $root['totals'][GoodFieldName($f)]["hlprefix"] = $pSet->getLinkPrefix($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_filename"] = $pSet->getFilenameField($fld);
        $root['totals'][GoodFieldName($f)]["lookupobj_lookuptype"] = $pSet->getLookupType($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_customdispaly"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_table"] = $pSet->getLookupTable($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_where"] = prepareLookupWhere( $fld, $pSet );
	}
	$_SESSION["webreports"]=$root;
}

function Reload_Report($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webreports']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	if(postvalue("edit")=="style" && isset($_SESSION['webreports']))
		return true;
	$arr=getReportArray($name);
	if(!$arr)
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webreports'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webreports']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webreports']['settings']['name'];
}

function Reload_Chart($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webcharts']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	$arr=getChartArray($name);
	if(!$arr)
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webcharts'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webcharts']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webcharts']['settings']['name'];
}

function wr_getTableName($name)
{
	$pos = strrpos($name,".");
	if($pos !== false)
		$name = substr($name, $pos+1);
	return $name;
}

/**
 * Get the conneciton object corresponding to the wizard werbreport tables
 * @return Connetion
 */
function getWebreportConnection()
{
	global $cman;
	return $cman->getForWebReports();
}

/**
 * @param xTempl xt
 * @param String prefix
 */
function SetWRLangVars($xt, $prefix)
{
	$xt->assign("lang_label", true);

	$var = GoodFieldName( mlang_getcurrentlang() )."_langattrs";
	$xt->assign($var, "selected");

	$is508 = isEnableSection508();
	if($is508)
		$xt->assign_section("lang_label","<label for=\"lang\">","</label>");

	$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")
		."onchange=\"javascript: window.location='".GetTableLink($prefix)."?language='+this.options[this.selectedIndex].value\"");
}

/**
 * @param String tName
 * @param Array sortFields
 * @param ProjectSettings pSet
 * @param Boolean editmode
 * @return DsCommand
 */
function getProjectWRSubsetDataCommand( $tName, &$sortFields, $pSet, $editmode = false ) {
	$subsetDataCommand = new DsCommand();

	$subsetDataCommand->order = array();
	foreach ( $sortFields as $field ) {
		$subsetDataCommand->order[] = array( "column" => $field['name'], "dir" => $field['desc'] ? "DESC" : "ASC" );
	}

	$subsetDataCommand->filter = Security::SelectCondition( "S", $pSet );

	if ( !$editmode ) {
		/*$cipherer = new RunnerCipherer( $tName );

		$params = array();
		$params['tName'] = $tName;
		$params['cipherer'] = $cipherer;
		$params['searchFieldsArr'] = WRGetFieldsList( $tName );

		$searchClauseObj = new SearchClause( $params );
		$searchClauseObj->parseRequest();*/
		;

		$searchClauseObj = SearchClause::getSearchObject( $tName );
		$searchClauseObj->searchFieldsArr = WRGetFieldsList( $tName );

		$subsetDataCommand->filter = DataCondition::_And( array(
			$subsetDataCommand->filter,
			$searchClauseObj->getSearchDataCondition()
		));
	}

	return $subsetDataCommand;
}
?>