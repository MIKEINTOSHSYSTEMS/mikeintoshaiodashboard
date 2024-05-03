<?php
//settings


function calendar_getGlobalSettings(){
	global $dal;
	$tableCalglobals=$dal->Table("calglobals");
	$rsCalglobals = $tableCalglobals->QueryAll();
	if ($dataCalglobals = db_fetch_array($rsCalglobals)) {
	
		$_SESSION["calendar_TimePeriod"] = $dataCalglobals["TimePeriod"]; 
		$_SESSION["calendar_FirstDayOfWeek"] = $dataCalglobals["FirstDayOfWeek"]; 
		$_SESSION["calendar_EditInPast"] = $dataCalglobals["EditInPast"];
		$_SESSION["calendar_DefaultColor"] = $dataCalglobals["DefaultColor"];
		$_SESSION["calendar_HolidayColor"] = $dataCalglobals["HolidayColor"];
		$_SESSION["calendar_WeekendColor"] = $dataCalglobals["WeekEndColor"];
		$_SESSION["calendar_RangedColor"] = $dataCalglobals["RangedColor"];
		$_SESSION["calendar_SubjectLength"] = $dataCalglobals["SubjectLength"];
		$_SESSION["calendar_DescriptionLength"] = $dataCalglobals["DescriptionLength"];
		$_SESSION["calendar_CountEvents"] = $dataCalglobals["CountEvents"];
		$_SESSION["calendar_StartTime"] = $dataCalglobals["StartTime"];
		$_SESSION["calendar_EndTime"] = $dataCalglobals["EndTime"];
	}
	
	if (!isset($_SESSION["calendar_TimePeriod"])){
		$_SESSION["calendar_TimePeriod"] = 30; 
	}
	if (!isset($_SESSION["calendar_FirstDayOfWeek"])){
		$_SESSION["calendar_FirstDayOfWeek"] = 1;
	}
	if (!isset($_SESSION["calendar_EditInPast"])){
		$_SESSION["calendar_EditInPast"] = 0;
	}
	if (!isset($_SESSION["calendar_DefaultColor"])){
		$_SESSION["calendar_DefaultColor"] = "#ffffff";
	}
	if (!isset($_SESSION["calendar_HolidayColor"])){
		$_SESSION["calendar_HolidayColor"] = "#ffffff";
	}
	if (!isset($_SESSION["calendar_WeekendColor"])){
		$_SESSION["calendar_WeekendColor"] = "#ffffff";
	}
	if (!isset($_SESSION["calendar_RangedColor"])){
		$_SESSION["calendar_RangedColor"] = "#9FC6E7";
	}
	if (!isset($_SESSION["calendar_SubjectLength"])){
		$_SESSION["calendar_SubjectLength"] = 50;
	}
	if (!isset($_SESSION["calendar_DescriptionLength"])){
		$_SESSION["calendar_DescriptionLength"] = 100;	
	}
	if (!isset($_SESSION["calendar_CountEvents"])){
		$_SESSION["calendar_CountEvents"] = 3;
	}
}

function calendar_init()
{
	global $calendarDatasourceTableNames;

	$calendarDatasourceTableNames["calendarKeys"] = array();
	$calendarDatasourceTableNames["calendarKeys"]["calendarid"] = "id"; 
	$calendarDatasourceTableNames["calendarFields"] = array();
 
	$calendarDatasourceTableNames["calendarFields"]["calendarDateField"] = "DateField"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarSubject"] = "Subject"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarDescription"] = "Description"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarCategory"] = "Category";
	$calendarDatasourceTableNames["calendarFields"]["calendarDayEvent"] = "DayEvent"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarTimeField"] = "TimeField"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarRecurrence"] = "Recurrence"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarEndTime"] = "EndTime"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarEndDate"] = "EndDate"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarPeriod"] = "Period"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarPeriodDays"] = "PeriodDays"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarOwnerID"] = "OwnerID"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarRecurType"] = "RecurType"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarRecurOnValue"] = "RecurOnValue"; 
	$calendarDatasourceTableNames["calendarFields"]["calendarRecurAfterValue"] = "RecurAfterValue"; 
}

/**
 * @param String key
 * @param String key
 * @return Boolean
 */ 
function isCalendarSettingsPropEmpty( $key, $subKey )
{
	global $calendarSettings;
	return !array_key_exists($subKey, $calendarSettings[ $key ]) || $calendarSettings[ $key ][ $subKey ] == "";
}

/**
 *
 */
function checkCalendarUserSettings() 
{
	$message = "";	
	
	if ( isCalendarSettingsPropEmpty( "calendarKeys", "calendarid" ) ) 
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarKeys\'][\'calendarid\']".<br>';
	
	if ( isCalendarSettingsPropEmpty( "calendarFields", "calendarDateField" ) && isCalendarSettingsPropEmpty( "calendarFields", "calendarDateTime" ) )
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarDateField\']".<br>';
	
	if ( isCalendarSettingsPropEmpty( "calendarFields", "calendarSubject" ) ) 
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarSubject\']".<br>';
	
//	if ( isCalendarSettingsPropEmpty( "calendarFields", "calendarEndDate" ) ) 
//		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarEndDate\']".<br>';
		
	if ( !isCalendarSettingsPropEmpty( "calendarFields", "calendarEndTime" ) && isCalendarSettingsPropEmpty( "calendarFields", "calendarTimeField" ) 
		&& isCalendarSettingsPropEmpty( "calendarFields", "calendarDateTime" ) ) 
	{
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarTimeField\']".<br>';
	}
	
	if ( !isCalendarSettingsPropEmpty( "calendarFields", "calendarRecurrence" ) && ( isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriod" ) 
		|| isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriodDays" ) ) )
	{
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarPeriodDays\']" or "$calendarSettings[\'calendarFields\'][\'calendarPeriod\']"<br>';
	}
	
/*	
	if ( isCalendarSettingsPropEmpty( "calendarFields", "calendarEndDate" ) && (!isCalendarSettingsPropEmpty( "calendarFields", "calendarRecurrence" ) 
		|| !isCalendarSettingsPropEmpty( "calendarFields", "calendarRecurrence" ) || !isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriodDays" )) )
	{
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarRecurrence\']" , "$calendarSettings[\'calendarFields\'][\'calendarPeriod\']" and "$calendarSettings[\'calendarFields\'][\'calendarPeriodDays\']" <br>';
	}
*/
	
	if ( !isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriod" ) && ( isCalendarSettingsPropEmpty( "calendarFields", "calendarRecurrence" ) || 
		isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriodDays" ) ) )
	{
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarPeriodDays\']" or "$calendarSettings[\'calendarFields\'][\'calendarRecurrence\']"<br>';
	}
	
	if ( !isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriodDays" ) && ( isCalendarSettingsPropEmpty( "calendarFields", "calendarRecurrence" ) || 
		isCalendarSettingsPropEmpty( "calendarFields", "calendarPeriod" ) ) )
	{
		$message .= 'Key field not found,<br> Add "$calendarSettings[\'calendarFields\'][\'calendarPeriod\']" or "$calendarSettings[\'calendarFields\'][\'calendarRecurrence\']"<br>';
	}
	
	if ( strlen($message) ) 
	{
		echo $message;
		exit();
	}
}

/**
 * @return Boolean
 */
function isClanedarTableUserDefined()
{
	global $calendarSettings, $calendarDatasourceTableNames;
	return $calendarSettings["calendarTable"] != "" && $calendarSettings["calendarTable"] != $calendarDatasourceTableNames["calcalendar"];
} 

/**
 * Fill in calendar Settings
 */
function checkCalendarSettings()
{
	global $calendarSettings, $calendarDatasourceTableNames;
	
	if ( isClanedarTableUserDefined() ) 
	{
		checkCalendarUserSettings();
		return;
	}

	if ( $calendarSettings["calendarTable"] == "" )
		$calendarSettings["calendarTable"] = $calendarDatasourceTableNames["calcalendar"];
	
	if ( !$calendarSettings["calendarKeys"]["calendarid"] ) 
		$calendarSettings["calendarKeys"]["calendarid"] = $calendarDatasourceTableNames["calendarKeys"]["calendarid"];
		
	if ( !$calendarSettings["calendarFields"] )
		$calendarSettings["calendarFields"] = $calendarDatasourceTableNames["calendarFields"];

	foreach( $calendarDatasourceTableNames["calendarFields"] as $key => $val )
	{
		if ( array_key_exists($key, $calendarSettings["calendarFields"]) )
		{
			if ( $calendarSettings["calendarFields"][ $key ] == "" ) 
				$calendarSettings["calendarFields"][ $key ] = $val;
		}
	}	
}

/**
 * Get value from calendarSettings by key
 * @param {string} key - key of value
 * @return {mixed} 
 */
function calendarGetSetting($key)
{
	global $calendarSettings;
	
	if( !$key ) 
		return null;
	
	if ( $key == "calendarTable" )
		return $calendarSettings[ $key ];
	
	if ( array_key_exists($key, $calendarSettings["calendarKeys"]) ) 
		return $calendarSettings["calendarKeys"][ $key ];
	
	return $calendarSettings["calendarFields"][ $key ];	
}

function calendarFieldIsset($findField)
{
	if ( isset($findField) ) 
		return $findField;
	
	return null;
}

/**
 * Get value from calendarDatasourceTableNames by key
 * @param {string} key - key of value
 * @return {string} 
 */
function calendarGetDataSourceSetting($key){
	global $calendarDatasourceTableNames;

	if ($key == "calcalendar")
		return $calendarDatasourceTableNames[$key];
	
	if (array_key_exists($key, $calendarDatasourceTableNames["calendarKeys"])) 
		return $calendarDatasourceTableNames["calendarKeys"][$key];
	
	if (array_key_exists($key, $calendarDatasourceTableNames["calendarFields"])) 
		return $calendarDatasourceTableNames["calendarFields"][$key];
	
	return $key;
}

/**
 * add name days 
 */
function add_daysname(){
	global $dal;
	$tbweekdays = $dal->Table("calweekdays");
	$rsweekdays = $tbweekdays->QueryAll();
	if ($data = db_fetch_array($rsweekdays)) {
		return;
	}
	for ($i=1; $i<=7; $i++){
		$tbweekdays->Value["daynum"] = $i;
		$tbweekdays->Value["dayname"] = getDayNameByNumber($i,"ddd");
		$tbweekdays->Add();
	}	
}


/**
 * Get date or time from calendarSettings type
 * @param {string} typeVal - if typeVal = date return Date, time-time
 * @return {string} 
 */
function calendarGetDateOrTimeKey($typeVal){
	global $calendarSettings;
		
	if (array_key_exists("calendarDateTime", $calendarSettings["calendarFields"]) &&

		($calendarSettings["calendarFields"]["calendarDateTime"] != "")) {
		return "calendarDateTime";
	}
	if (array_key_exists("calendarDateField", $calendarSettings["calendarFields"]) && ($typeVal == "date")){
		return "calendarDateField";
	}
	if (array_key_exists("calendarTimeField", $calendarSettings["calendarFields"]) && ($typeVal == "time")){
		return "calendarTimeField";
	}
}

function calendar_formatTimeInDropdown( $tm )
{
	global $locale_info;
	if( $locale_info["LOCALE_ITIME"] ) {
		//24h format
		$format = "H" . $locale_info["LOCALE_STIME"] . "mm";
	} else {
		//12h format
		$format = "h" . $locale_info["LOCALE_STIME"] . "mmtt";
	}		
	return strtolower( calendar_format_datetime_custom( $tm, $format ) );
}

function dbvalue2time($value)
{
global $locale_info;
$t = "";
if ($value!="")
{
	if( strlen($value)<12 )
		$value = "1970-01-01 ".$value;
	$tm1 = db2time($value);
	$arr = array(0,0,0,$tm1[3],$tm1[4],0);
	$oldLocalInfo = $locale_info["LOCALE_STIMEFORMAT"];
	$locale_info["LOCALE_STIMEFORMAT"] = str_replace($locale_info["LOCALE_STIME"].'ss tt','tt',$locale_info["LOCALE_STIMEFORMAT"]);
	$locale_info["LOCALE_S1159"] = strtolower($locale_info["LOCALE_S1159"]);
	$locale_info["LOCALE_S2359"] = strtolower($locale_info["LOCALE_S2359"]);
	$t = str_format_time($arr);
	$locale_info["LOCALE_STIMEFORMAT"] = $oldLocalInfo;
	$locale_info["LOCALE_S1159"] = strtoupper($locale_info["LOCALE_S1159"]);
	$locale_info["LOCALE_S2359"] = strtoupper($locale_info["LOCALE_S2359"]);
	 
}
return $t;
	
}

/**
 * Get first occurrence of the event in date range
 * @param {array(6)} rangeFrom - beginning of range interval
 * @param {array(6)} rangeTo - end of range interval. NOT INCLUSIVE!
 * @param {array(6)} eventStart - first day of the event
 * @param {array(6)} eventLast - last day of the event - INCLUSIVE! 
 * @param {string} eventPeriod 
 * @param {array} eventWeekdays 
 * @return {array(6)} or null if no event
 */

function calendar_getFirstEventOccurence($rangeFrom, $rangeTo, $eventStart, $eventLast, $eventPeriod)
{
	if( !$eventPeriod )
	{
		
		// conference event
		$eventEnd = calendar_adddays( $eventLast, 1 );
		if (comparedates( $eventStart, $eventEnd ) != 0){
			if( comparedates( $eventStart, $rangeTo ) >= 0 || comparedates( $eventEnd, $rangeFrom ) <= 0 )
				return false;
			if( comparedates( $eventStart, $rangeFrom ) >=0 && comparedates( $eventStart, $rangeTo ) < 0 ){
				return $eventStart;
			}
			
			if( comparedates( $rangeFrom, $eventStart ) >=0 && comparedates( $rangeFrom, $eventEnd ) < 0 ) {
				return $rangeFrom;
			}
				
			return null;
		}
		//	non-recurrent event
		if( comparedates( $eventStart, $rangeFrom ) >= 0 &&  comparedates( $eventStart, $rangeTo ) < 0 )
			return $eventStart;
		return null;
	}
	//	recursive
	$eventEnd = calendar_adddays( $eventLast, 1 );
	if( comparedates( $eventStart, $rangeTo ) >= 0 || comparedates( $eventEnd, $rangeFrom ) <= 0 )
		return false;
	if( "yyyy" == $eventPeriod )
	{
		//	find the first event date after the range start
		$event = $eventStart;
		if( comparedates( $eventStart, $rangeFrom ) < 0 )
		{
			$event[0] = $rangeFrom[0];
			if( comparedates($event, $rangeFrom) < 0 )
				++$event[0];
		}
		//if( comparedates($event, $rangeTo) < 0 && comparedates( $event, $eventEnd ) < 0 )
		if( comparedates( $event, $eventEnd ) < 0 )
			return $event;
		return null;
	}
	if( "m" == $eventPeriod )
	{
		//	find the first event date after the range start
		$event = $eventStart;
		if( comparedates( $eventStart, $rangeFrom ) < 0 )
		{
			$event[0] = $rangeFrom[0];
			$event[1] = $rangeFrom[1];
			if( $event[2] > calendar_getMonthDays($event[0], $event[1]) )
			{
				$event[2] = calendar_getMonthDays($event[0], $event[1]);
			}
			if( comparedates($event, $rangeFrom) < 0 )
			{
				++$event[1];
				if( $event[1] == 13 )
				{
					$event[1] = 1;
					++$event[0];
				}
				$event[2] = $eventStart[2];
				if( $event[2] > calendar_getMonthDays($event[0], $event[1]) )
				{
					$event[2] = calendar_getMonthDays($event[0], $event[1]);
				}
			}
		}
		//if( comparedates($event, $rangeTo) < 0 && comparedates( $event, $eventEnd ) < 0 )
		if( comparedates( $event, $eventEnd ) < 0 )
			return $event;
		return null;
	}
	if( "ww" == $eventPeriod )
	{
		//	find the first event date after the range start
		$weekDayEvent = getdayofweek( $eventStart );
		$weekDayRangeFrom = getdayofweek( $rangeFrom );
		if( comparedates( $eventStart, $rangeFrom ) < 0 )
		{
			$event = $rangeFrom;
			if( $weekDayRangeFrom > $weekDayEvent )
			{
				$event = calendar_adddays( $event, 7 + $weekDayEvent - $weekDayRangeFrom );
			}
			else
			{
				$event = calendar_adddays( $event, $weekDayEvent - $weekDayRangeFrom );
			}
		}
		else
		{
			$event = $eventStart;
		}
		//if( comparedates($event, $rangeTo) < 0 && comparedates( $event, $eventEnd ) < 0 )
		if( comparedates( $event, $eventEnd ) < 0 )
			return $event;
		return null;
		
	}
	if( "d" == $eventPeriod )
	{
		if( comparedates( $eventStart, $rangeFrom ) >=0 && comparedates( $eventStart, $rangeTo ) < 0 ){
			return $eventStart;
		}
		if( comparedates( $rangeFrom, $eventStart ) >=0 && comparedates( $rangeFrom, $eventEnd ) < 0 ) {
			return $rangeFrom;
		}
			
		return null;
	}
}


/**
 * Check whether the event fires in the particular date range
 * @param {array(6)} rangeFrom - beginning of range interval
 * @param {array(6)} rangeTo - end of range interval. NOT INCLUSIVE!
 * @param {array(6)} eventStart - first day of the event
 * @param {array(6)} eventLast - last day of the event - INCLUSIVE! 
 * @param {string} eventPeriod 
 * @return {boolean}
 */

function calendar_isEventInRange($rangeFrom, $rangeTo, $eventStart, $eventLast, $eventPeriod)
{
	return calendar_getFirstEventOccurence( $rangeFrom, $rangeTo, $eventStart, $eventLast, $eventPeriod) ? true : false;
}



/**
 * Check whether the event fires in the particular date range
 * @param {array(6)} rangeFrom - beginning of range interval
 * @param {array(6)} rangeTo - end of range interval. NOT INCLUSIVE!
 * @return {array} - array of event records from the database ordered by event TIME!
 *		The sortEvents function relies on the records order by time of the day.
 */
function calendar_getListOfEventsInRange($rangeFrom, $rangeTo, $searchWhereClause, $connection)
{
	$calendarTable = $connection->addTableWrappers(calendarGetSetting("calendarTable"));
	$dateField = $connection->addFieldWrappers(calendarGetSetting(calendarGetDateOrTimeKey("date")));
		
	$fromDate = $connection->addDateQuotes( date2db( $rangeFrom ) );
	$toDate = $connection->addDateQuotes( date2db( $rangeTo ) );
	
	
	if( !$searchWhereClause )
		$searchWhereClause = " 1=1 ";
	
	$sqlCategoryField = "";
	$sqlCategoryJoin = "";
	$sqlTimeField = "";
	$sqlRecurrence = "";
	
	if (calendarFieldIsset(calendarGetSetting("calendarCategory"))) {
		/*$categoriesTable = $connection->addTableWrappers("calcategory");
		$categoryField = $connection->addFieldWrappers(calendarGetSetting("calendarCategory"));
		$sqlCategoryField = ",".$categoriesTable . "." . $connection->addFieldWrappers("Color");*/
		$categoriesTable = $connection->addTableWrappers("todocategories");
		$categoryField = $connection->addFieldWrappers(calendarGetSetting("calendarCategory"));
		$sqlCategoryField = ",".$categoriesTable . "." . $connection->addFieldWrappers("color");
		$sqlCategoryJoin = " left join " . $categoriesTable . " on " . $categoriesTable . "." . $connection->addFieldWrappers("id") . " = " . $calendarTable . "." . $categoryField;
	}
	
	$timeKey = calendarGetDateOrTimeKey("time");
	
	if ( $timeKey && calendarFieldIsset( calendarGetSetting($timeKey) ) ) 
	{
		$TimeField = $connection->addFieldWrappers( calendarGetSetting($timeKey) );
		$sqlTimeField = " order by " . $TimeField;
	}
	if(postvalue("orderby")){
		$d = substr(postvalue("orderby"),0,1);
		$orderby = substr(postvalue("orderby"),1);
		$sqlTimeField = " order by " . $orderby;
		if( $d == "d" )
			$sqlTimeField.= " desc";
		$sqlTimeField.= ", ".$TimeField;
	}
	$ownerIdField = $connection->addFieldWrappers(calendarGetSetting("calendarOwnerID"));
	if (calendarFieldIsset(calendarGetSetting("calendarRecurrence"))) {
		$endDateField = $connection->addFieldWrappers(calendarGetSetting("calendarEndDate"));
		$recurrenceField = $connection->addFieldWrappers(calendarGetSetting("calendarRecurrence"));
		$sqlRecurrence = " or " . $recurrenceField . " = 1 and " . $dateField . " < " . $toDate . " and " . $endDateField . " >= " . $fromDate ;
		//$sqlRecurrence = " or " . $dateField . " < " . $toDate . " and " . $endDateField . " >= " . $fromDate ;
	}
	$pSet = new ProjectSettings( "calcalendar", "list" );
	$strPerm = $pSet->getAdvancedSecurityType();
	$whereOwnerID = "1=1";
	$perm = Security::getPermissions("calcalendar"); 
	if( $strPerm==1 && !$perm["M"])
		$whereOwnerID = $ownerIdField."='".strtoupper((string)$_SESSION["UserID"])."'";
//(" . $searchWhereClause . ") and 
	$sql = "select " . $calendarTable . ".* ".$sqlCategoryField.
			" from " . $calendarTable . 
			$sqlCategoryJoin . 
			" where (" . 
			$dateField . " >= " . $fromDate . " and " . $dateField . " < " . $toDate . 
			$sqlRecurrence .  " ) and (".$whereOwnerID." or ".$connection->addFieldWrappers("assign")."=".$_SESSION["UserData"]["id"].")" .
			$sqlTimeField;
	$result = $connection->query( $sql );
	$output = array();

	while( $data = $result->fetchAssoc() )
	{
		$period = $data[ calendarGetSetting("calendarPeriod") ];
		if( !$data[calendarGetSetting( "calendarRecurrence" )] )
			$period = false;
				
		$startDate = db2time( $data[ calendarGetSetting(calendarGetDateOrTimeKey("date")) ] );
		$endDate = db2time( $data[ calendarGetSetting("calendarEndDate" ) ] );
		if(!$endDate)
			$endDate=$startDate;
			if( calendar_isEventInRange($rangeFrom, $rangeTo, $startDate, $endDate, $period ))	
				$output[] = $data;
	}
	
	return $output;
}

function inDayPeriod($fireDate, $weekdays){
	
	if (count($weekdays)==0){
		return false;
		
	}
	else {
		$daynum = getdayofweek($fireDate);
		if (in_array($daynum, $weekdays)){
			return true;
		}
		else {
			return false;
		}
	}
}

/**
 * Sort events into separate arrays by date.
 * Recurrent events will appear in multiple instances.
 *
 * @param {array(6)} rangeFrom - beginning of range interval
 * @param {array(6)} rangeTo - end of range interval. NOT INCLUSIVE!
 * @return {array} - array of event records from the database
 *		<date in YYYY-MM-DD format> - array ordered by event time
			<0 - N> - array - record from DB
 */
function calendar_sortEvents( $rangeFrom, $rangeTo, $events )
{
	$result = array();
	foreach( $events as $idx=>$e )
	{
		$startDate = db2time( $e[ calendarGetSetting(calendarGetDateOrTimeKey("date")) ] );
		$endDate = db2time( $e[ calendarGetSetting("calendarEndDate")] );
		if(!$endDate)
			$endDate=$startDate;
		
		$period = $e[ calendarGetSetting("calendarPeriod")];
		$weekdays = array();
		if ($period=='d') {
			$weekdaysStr = $e[ calendarGetSetting("calendarPeriodDays")];
			if ($weekdaysStr!=""){
				$weekdays = explode(",",$weekdaysStr);
			}
		}
		
		if( !$e[ calendarGetSetting("calendarRecurrence")] ) {
			$period = false;
		}
				
		if( !$e[ calendarGetSetting("calendarRecurrence")] )
			$period = false;
					
		$tempRangeFrom = $rangeFrom;
		while( $fireDate = calendar_getFirstEventOccurence( $tempRangeFrom, $rangeTo, $startDate, $endDate, $period) )
		{
			if (($period=="d") && !inDayPeriod($fireDate, $weekdays)) {
				$tempRangeFrom = calendar_adddays( $fireDate, 1 );
				continue;
			}
			$dbdate = date2db( $fireDate );
			if( !isset( $result[ $dbdate ] ) )
			{
				$result[ $dbdate ] = array();
			}
			$result[ $dbdate ][] = &$events[$idx];
			$tempRangeFrom = calendar_adddays( $fireDate, 1 );
		}
	}	
	$result = calendar_sortEventsByType($result);
	return $result;
}

function calendar_isRecurrenceEvent($event){

	if ($event[calendarGetSetting("calendarRecurrence")] == 1){
		return $event[calendarGetSetting("calendarRecurrence")];
	}
	$DateStart = db2time($event[calendarGetSetting(calendarGetDateOrTimeKey("date"))]);
	$DateEnd = db2time($event[calendarGetSetting("calendarEndDate")]);
	if (comparedates($DateStart,$DateEnd) != 0) {
		return 1;
	}
	return 0;	
}

function calendar_outputSubject($calendarSubject, $eventInThePast){
	$eventInPastClass = '';
	$outputSubj = '';
	if ( $eventInThePast )
		$eventInPastClass = 'calendar_eventinpast';
	
	$outputSubj = '<span class="calendar-subject '.$eventInPastClass.'">';
		
	$strtmp = $calendarSubject;
	if (strlen(trim($strtmp))==0 )
			$strtmp="&lt;Empty&gt;";
	if (strlen($strtmp)>$_SESSION["calendar_SubjectLength"])
		$strtmp = substr($strtmp,0,$_SESSION["calendar_SubjectLength"])."...";
	$outputSubj .= $strtmp."</span>";
	return $outputSubj;
}

function calendar_getHolidayHTML($holiday)
{	
	$holidayColor = "#FFF";
	if ($_SESSION["calendar_HolidayColor"])
		$holidayColor = $_SESSION["calendar_HolidayColor"];
	$ret = '<div class="calendar-c-pos te te-holiday" style="background-color:'.$holidayColor.';" >';
	$ret .= $holiday["name"];
	$ret .= '</div>';
	return $ret;
}

function calendar_getEventHTML($event, $fireDbDate, $allowEditInPast, $pageType="list", $pageName="")
{
	$thisMoment = db2time(now());

	$ret = "";
		
	$timeField = calendarGetSetting(calendarGetDateOrTimeKey("time"));
	$eventDate = db2time($event[calendarGetSetting(calendarGetDateOrTimeKey("date")) ]);
	$eventEndDate = db2time($event[calendarGetSetting("calendarEndDate")]);
	if(!$eventEndDate)
			$eventEndDate=$eventDate;
	$dbDate2 = db2time( $fireDbDate );
	if (calendarFieldIsset( $timeField )) {
		$dbDateTime2 = db2time( $fireDbDate . " " . $event[$timeField] );
	}
	else {
		$dbDateTime2 = db2time( $fireDbDate );
	}
	$eventInThePast =  $event[calendarGetSetting("calendarDayEvent")] != 1 && comparedates( $thisMoment, $dbDateTime2 ) >= 0 || $event[calendarGetSetting("calendarDayEvent")] == 1 && comparedates( $thisMoment, $dbDate2 ) > 0;
	
	//for drag and drop on Monthly
	$draggableValue = "";
	$draggableClass = "";
	if ($pageName == "monthly" && Security::getUserName()!="Guest" && Security::userCan( "E", "calcalendar", $event["OwnerID"] ) ){
		$draggableValue = "draggable";
		$draggableClass = "calendar_draggable";
		if ($eventInThePast && !$allowEditInPast){
			$draggableValue = "";
			$draggableClass = "";
		}
	}
	
	$editViewLink = '';
	
	if($event[calendarGetSetting(calendarGetDateOrTimeKey("date"))])
	{		
		if ($pageType != "print" || $pageName != "yearly") {
			if (Security::getUserName()=="Guest" || $eventInThePast && !$allowEditInPast || !Security::userCan( "E", "calcalendar", $event["OwnerID"] )) 
				$editViewLink = " type=viewButton".$event[calendarGetSetting("calendarid")]."   days=" . $dbDate2[2] . " mon=" . $dbDate2[1] . " yr=" . $dbDate2[0]; 
			else
				$editViewLink = " type=editButton".$event[calendarGetSetting("calendarid")]."  recur='".calendar_isRecurrenceEvent($event)."'  days=" . $dbDate2[2] . " mon=" . $dbDate2[1] . " yr=" . $dbDate2[0]; 
		}
	}
	
	if ($event["Color"]) {
		$strColor = $event["Color"];
	}
	else if (comparedates($eventEndDate,$eventDate) != 0 && $event[calendarGetSetting("calendarRecurrence")] == 0) {
			$strColor = $_SESSION["calendar_RangedColor"];
	}
	
	$eventContent = '';
	
	if (comparedates($eventEndDate,$eventDate) == 0 || $event[calendarGetSetting("calendarRecurrence")] == 1)  {
	
		if ($event[calendarGetSetting("calendarDayEvent")]!=1){
			$eventContent .= '<span class="calendar_time">'. calendar_formatTimeInDropdown( $dbDateTime2 ).'&nbsp;</span>';
		}
		
		$eventContent .= calendar_outputSubject($event[calendarGetSetting("calendarSubject")], $eventInThePast);
	}
	else {
		if ($_SESSION["calendar_FirstDayOfWeek"]) {
			// we need 0-Monday, 6-Sunday
			$firstWeekDay = ( $_SESSION["calendar_FirstDayOfWeek"]  + 6 ) % 7; 
			$lastWeekDay = 6;
		}
		else {
			$firstWeekDay = 6; //	6 - sunday
			$lastWeekDay = 5;
		}
		if (($firstWeekDay+1) == getdayofweek($dbDate2) && comparedates($dbDate2,$eventDate) != 0){
			$triangleClass = 'calendar-triangle-left';
			$eventContent .= '<div class="triangle-left" style="border-right-color:'.$strColor.'"></div>';
		}
		else if (($lastWeekDay+1) == getdayofweek($dbDate2) && comparedates($dbDate2,$eventEndDate) != 0){
			$triangleClass = 'calendar-triangle-right';
			$eventContent .= '<div class="triangle-right" style="border-left-color:'.$strColor.'"></div>';
		}
		if (comparedates($dbDate2,$eventDate) == 0 || ($dbDate2[1]!=$eventDate[1] && $dbDate2[2]==1) ){
			if ($event[calendarGetSetting("calendarDayEvent")]!=1){
				$eventContent .= '<span class="calendar_time">'. calendar_formatTimeInDropdown( $dbDateTime2 ).'&nbsp;</span>';
			}
			$eventContent .= calendar_outputSubject($event[calendarGetSetting("calendarSubject")], $eventInThePast);
		}
		else {
			if ($pageName == 'weekly' || $pageName == 'yearly'){
				$eventContent .= calendar_outputSubject($event[calendarGetSetting("calendarSubject")], $eventInThePast);
			}
			else {
				$eventContent .= '<span>&nbsp;</span>';
			}
		}
	}
	
	$ret = '<div class="calendar-c-pos te  '.$triangleClass.' '.$draggableClass.'" style="border:1px solid transparent;background-color:'.$strColor.'" id=edit'.$event[calendarGetSetting("calendarid")].' idrec='.$event[calendarGetSetting("calendarid")].'  '.$editViewLink.' '.$draggableValue.'>';
	$ret .= $eventContent;
	$ret .= '</div>';
	
	return $ret;
}
/**
 * Get dates with events in a rang
 * @param {array(6)} rangeFrom - beginning of range interval
 * @param {array(6)} rangeTo - end of range interval. NOT INCLUSIVE!
 * @return {array} - array of event records from the database ordered by event TIME!
 *		The sortEvents function relies on the records order by time of the day.
 */
function _calendar_getListOfDatesInRange($rangeFrom, $rangeTo, $searchWhereClause, $connection)
{
	$calendarTable = $connection->addTableWrappers(calendarGetSetting("calendarTable"));
	$dateField = $connection->addFieldWrappers(calendarGetSetting(calendarGetDateOrTimeKey("date")));
	$fromDate = $connection->addDateQuotes( date2db( $rangeFrom ) );
	$toDate = $connection->addDateQuotes( date2db( $rangeTo ) );
	
	if( !$searchWhereClause )
		$searchWhereClause = " 1=1 ";
	
	$sqlTimeField = "";	
	$sqlRecurrence = "";
	
	if (calendarFieldIsset(calendarGetSetting(calendarGetDateOrTimeKey("time")))) {
		$TimeField = $connection->addFieldWrappers(calendarGetSetting(calendarGetDateOrTimeKey("time")));
		$sqlTimeField = " order by " . $TimeField;
	}
	
	if (calendarFieldIsset(calendarGetSetting("calendarRecurrence"))) {
		$endDateField = $connection->addFieldWrappers(calendarGetSetting("calendarEndDate"));
		$recurrenceField = $connection->addFieldWrappers(calendarGetSetting("calendarRecurrence"));
		$sqlRecurrence = " or " . $recurrenceField . " = 1 and " . $dateField . " < " . $toDate . " and " . $endDateField . " >= " . $fromDate ;
	}
	$ownerIdField = $connection->addFieldWrappers(calendarGetSetting("calendarOwnerID"));
	$pSet = new ProjectSettings( "calcalendar", "list" );
	$strPerm = $pSet->getAdvancedSecurityType();
	$whereOwnerID = "1=1";
	$perm = Security::getPermissions("calcalendar"); 
	if( $strPerm==1 && !$perm["M"])
		$whereOwnerID = $ownerIdField."='".strtoupper((string)$_SESSION["UserID"])."'";
//(" . $searchWhereClause . ") and 
	$sql = "select " . $calendarTable . ".* " . 
	" from " . $calendarTable . 
	" where (" . 
		$dateField . " >= " . $fromDate . " and " . $dateField . " < " . $toDate . 
		$sqlRecurrence  . " )  and (".$whereOwnerID." or ".$connection->addFieldWrappers("assign")."=".$_SESSION["UserData"]["id"].")" .
	$sqlTimeField ;

	$result = $connection->query( $sql );
	$output = array();
	$pSet = new ProjectSettings( "calcalendar", "list" );
	while( $data = $result->fetchAssoc() )
	{
		$period = $data[ calendarGetSetting("calendarPeriod") ];
		if( !$data[ calendarGetSetting("calendarRecurrence") ] )
			$period = false;
		$startDate = db2time( $data[ calendarGetSetting(calendarGetDateOrTimeKey("date"))] );
		$endDate = db2time( $data[ calendarGetSetting("calendarEndDate") ] );
		if( calendar_isEventInRange($rangeFrom, $rangeTo, $startDate, $endDate, $period ) && (Security::userCan( "E", "calcalendar", $data[$pSet->getTableOwnerID()] ) || Security::userCan( "S", "calcalendar", $data[$pSet->getTableOwnerID()] )) )
			$output[] = $data;
	}
	return $output;
}

/**
 * Sort dates into separate arrays by date.
 * Recurrent events will appear in multiple instances.
 *
 * @param {array(6)} rangeFrom - beginning of range interval
 * @param {array(6)} rangeTo - end of range interval. NOT INCLUSIVE!
 * @return {array} - array of event records from the database
 *		<date in YYYY-MM-DD format> - array ordered by event time
			<0 - N> - array - record from DB
 */
function calendar_sortDates( $rangeFrom, $rangeTo, $events )
{
	$result = array();
	foreach( $events as $idx=>$e )
	{
		$startDate = db2time( $e[ calendarGetSetting(calendarGetDateOrTimeKey("date") )] );
		$endDate = db2time( $e[ calendarGetSetting("calendarEndDate" )] );
		
		$period = $e[ calendarGetSetting("calendarPeriod")];
		$weekdays = array();
		if ($period=='d') {
			$weekdaysStr = $e[ calendarGetSetting("calendarPeriodDays")];
			if ($weekdaysStr!=""){
				$weekdays = explode(",",$weekdaysStr);
			}
		}
		if( !$e[ calendarGetSetting("calendarRecurrence" ) ] )
			$period = false;
			
		$tempRangeFrom = $rangeFrom;

		while( $fireDate = calendar_getFirstEventOccurence( $tempRangeFrom, $rangeTo, $startDate, $endDate, $period ) )
		{
			if (($period=="d") && !inDayPeriod($fireDate, $weekdays)) {
				$tempRangeFrom = calendar_adddays( $fireDate, 1 );
				continue;
			}
			$dbdate = date2db( $fireDate );
			
			$result[] = $dbdate;
			$tempRangeFrom = calendar_adddays( $fireDate, 1 );
		}
	}	
	return $result;
}

//input events
/**
 *
 */
function calendar_outputDayEventsHTML($events, $fireDbDate, $allowEditInPast, $dataHolidais, $pageType="list", $pageName="")
{
	$eventsHTML = "";
	
	$fireDbDateKey = date2db( $fireDbDate );
	$event = $events[ $fireDbDateKey ]; 
	$holiday = $dataHolidais[ $fireDbDateKey ];
	
	if( isset($event) && count($event) )
	{
		$l = 0;
		
		if( $pageName != "monthly") 
		{
			while( $l < $_SESSION["calendar_CountEvents"] && $l < count($event) ) 
			{
				$eventsHTML .= calendar_getEventHTML( $event[$l], $fireDbDateKey, $allowEditInPast, $pageType, $pageName );
				$l++;	
			}
			
			$hIndex = 0;
			while( $hIndex < count($holiday) )
			{
				$eventsHTML .= calendar_getHolidayHTML( $holiday[ $hIndex ] );
				$hIndex++;
			}
		}
		else 
		{	
			$outHolidais = false;
			while( $l < $_SESSION["calendar_CountEvents"] ) 
			{
				if( $event[$l] )
					$eventsHTML .= calendar_getEventHTML( $event[$l], $fireDbDateKey, $allowEditInPast, $pageType, $pageName );
				else if ( count($holiday) > 0 )
				{
					$hIndex = 0;
					while( $hIndex < count($holiday) && !$outHolidais )
					{
						$eventsHTML .= calendar_getHolidayHTML( $holiday[ $hIndex ] );
						$hIndex++;
					}
					$outHolidais = true;
				}
				else 
				{
					$eventsHTML .= "<div class='calendar_bg_ev'>&nbsp;</div>";
				}
				$l++;	
			}
		}

		if( count($event) > $_SESSION["calendar_CountEvents"] ) 
		{
			$eventsHTML .= "<a href='#' id=moreButton".$fireDbDate[2]." yr=".$fireDbDate[0]. " mon=" . $fireDbDate[1] 
				. " days=" .$fireDbDate[2].">".GetCustomCode("more")."</a> (".GetCustomCode("total").": ".count($event).")";
		}
		
	}
	else if( isset($holiday) && (count($event)==0) )
	{
		$hIndex = 0;
		while( $hIndex < count($holiday) )
		{
			$eventsHTML .= calendar_getHolidayHTML( $holiday[ $hIndex ] );
			$hIndex++;
		}
	}
	
	return $eventsHTML;
}

function calendar_tempValidateEvent(&$values, &$ret, &$message)
{
	global $conn;
	
	if ($_SESSION["calendar_EditInPast"]) {
		$EditInPast = $_SESSION["calendar_EditInPast"];
	}
	else {
		$EditInPast = 0; //edit events in past 0 - No, 1 - Yes
	}
	
	$DateField = date("Y-m-d",strtotime($values["DateField"]));
	$EndDate = date("Y-m-d",strtotime($values["EndDate"]));
	
	
	if (!$DateField || !$EndDate )
	{
		  $message="<span  class=message calendar_error>Invalid event date</span>";
			 $ret=false;
	}
	else
	{
		$thisMoment = db2time(now());
		$dbDate = db2time( $DateField );
		
		if (calendarFieldIsset(calendarGetSetting(calendarGetDateOrTimeKey("time")))){
			$dbDateTime = db2time( $DateField . " " . $values["TimeField"] );
			$dbDateTimeEnd = db2time( $EndDate . " " . $values["EndTime"] );
		}
		else {
			$dbDateTime = db2time( $DateField );
			$dbDateTimeEnd = db2time( $EndDate );
		}
		
		$eventInThePast =  $values["DayEvent"] != 1 && comparedates( $thisMoment, $dbDateTime ) >= 0 || $values["DayEvent"] == 1 && comparedates( $thisMoment, $dbDate ) > 0;
		$dbEndDate = db2time( $EndDate );
		if( $values["Recurrence"] != 1 && $eventInThePast  && !$EditInPast )
		{
			$message="<span class=message calendar_error>".GetCustomLabel("invalid_message_1")."</span>";
			$ret=false;
		}
		else if (calendarFieldIsset(calendarGetSetting("calendarEndTime")) && comparedates($dbDateTimeEnd, $dbDateTime)<0) {
			$message="<span class=message calendar_error>".GetCustomLabel("invalid_message_2")."</span>";
			$ret=false;
		}
		else if (comparedates( $dbEndDate, $dbDate) < 0 )
		{
			$message="<span  class=message calendar_error>".GetCustomLabel("invalid_message_3")."</span>";
			$ret=false;
		}
		else if($values["DayEvent"]!=1 && !$values["TimeField"] && calendarFieldIsset(calendarGetSetting(calendarGetDateOrTimeKey("time"))))
		{
			$message="<span class=message calendar_error>".GetCustomLabel("invalid_message_2")."</span>";
			$ret=false;
		}
		else if($values["Recurrence"]==1 && $values["Period"]=='d' && !$values["PeriodDays"] )
		{
			$message="<span class=message calendar_error>".GetCustomLabel("day_of_week")."</span>";
			$ret=false;
		}
		else 
		{
			$ret=true;
		}
	}

	if($ret)
	{
		if($values["Recurrence"] == 0)
		{
			$values["Period"] = null;
			$values["PeriodDays"] = null;
		}
		
		if ($values["Recurrence"] == 1 && !calendarFieldIsset(calendarGetSetting("calendarPeriod")) ){
			$values["Period"] = "d";
			$currentDate = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
			$values["PeriodDays"] = getdayofweek($currentDate);
		}
		if ($values["Period"]!="d"){
			$values["PeriodDays"] = null;
		}
		
		if($values["DayEvent"]==1)
		{
			$values["EndTime"] = null;
			$values["TimeField"] = null;
		}
	}
	
}

function calendar_initSessionVariable(){

	$today = getDatePart( db2time( now() ) );

	if ($_REQUEST["mon"]) 
		$mon=$_REQUEST["mon"];
	else
		if (!@$_SESSION["mon"]) 
			$mon=$today[1];
		else
			$mon=$_SESSION["mon"];

	if ($_REQUEST["yr"]) 
		$yr=$_REQUEST["yr"];
	else
		if (!@$_SESSION["yr"]) 
			$yr=$today[0];
		else
			$yr=$_SESSION["yr"];

	if ($_REQUEST["days"]) 
		$days=$_REQUEST["days"]+0;
	else
		if (!$_SESSION["days"]) 
			$days=$today[2];
		else
			$days=$_SESSION["days"];

	if ($_REQUEST["editid1"]) {
		$id = $_REQUEST["editid1"];
	}
	else {
		$id = 1;
	}
	
	if($_REQUEST["timeStart"])
		$_SESSION["timeStart"] = $_REQUEST["timeStart"];
	else
		$_SESSION["timeStart"] = "";
	
	if($_REQUEST["timeEnd"])
		$_SESSION["timeEnd"] = $_REQUEST["timeEnd"];
	else
		$_SESSION["timeEnd"] = "";	
		
	$_SESSION["id"]=$id;
	$daysEnd=$_SESSION["days"]=$days;
	$monEnd=$_SESSION["mon"]=$mon;
	$yrEnd=$_SESSION["yr"]=$yr;
	
	//for Add page
	if ($_REQUEST["monEnd"]) 
		$monEnd=$_REQUEST["monEnd"];

	
	if ($_REQUEST["yrEnd"]) 
		$yrEnd=$_REQUEST["yrEnd"];
	
	if ($_REQUEST["daysEnd"]) 
		$daysEnd=$_REQUEST["daysEnd"];
	
	$_SESSION["daysEnd"]=$daysEnd;
	$_SESSION["monEnd"]=$monEnd;
	$_SESSION["yrEnd"]=$yrEnd;
}

function calendar_getHolidais($rangeFrom, $rangeTo, $connection){
	
	$calholidaysTable = $connection->addTableWrappers("calholidays");
	$dateField = $connection->addFieldWrappers("date");
	$fromDate = $connection->addDateQuotes( date2db( $rangeFrom ) );
	$toDate = $connection->addDateQuotes( date2db( $rangeTo ) );
	$sql = "select " . $calholidaysTable . ".* " . 
		" from " . $calholidaysTable . 
		"where ". $dateField . " >= " . $fromDate . " and " . $dateField . " < " . $toDate ;
	$result = $connection->query( $sql );
	$output = array();
	while( $data = $result->fetchAssoc() )
	{
		$output[] = $data; 
	}
	return calendar_sortHolidais($output);
	
}

function calendar_sortHolidais($holidais){
	$result = array();
	foreach($holidais as $idx=>$holiday){
		$hDate = date2db(getDatePart(db2time($holiday["date"])));
		if( !isset( $result[ $hDate ] ) )
		{
			$result[ $hDate ] = array();
		}
		$result[ $hDate ][] = &$holidais[$idx];
	}
	return $result;
}

function calendar_validateAfterProcessed(&$data, &$record, $wind, $typePage="list"){
	
	if ($_SESSION["calendar_EditInPast"]) {
		$EditInPast = $_SESSION["calendar_EditInPast"];
	}
	else {
		$EditInPast = 0; //edit events in past 0 - No, 1 - Yes
	}
		
	if(!$data[calendarGetDataSourceSetting("calendarSubject")])
		$record["Subject_value"]="&lt;Empty&gt;";
	if ($data[calendarGetDataSourceSetting(calendarGetDateOrTimeKey("date"))]){
		$thisMoment = getDatePart(db2time(now()));
		$dateField = getDatePart( db2time( $data[calendarGetDataSourceSetting(calendarGetDateOrTimeKey("date"))] ));
		$record["DateValue_value"] = "days=".$dateField[2]."&mon=".$dateField[1]."&yr=".$dateField[0];
	
		$dataDayEvent = $data[calendarGetDataSourceSetting("calendarDayEvent")];
		if (comparedates($thisMoment, $dateField) >=0  && $dataDayEvent!=1  && $EditInPast==0  || comparedates($thisMoment, $dateField) > 0  && $dataDayEvent==1  && $EditInPast==0  
			|| (comparedates($thisMoment, $dateField) > 0  && $dataDayEvent==1  && strcmp($typePage,"print")==0)
			|| (comparedates($thisMoment, $dateField) >=0  && $dataDayEvent!=1  && strcmp($typePage,"print")==0)){
			$record["Subject_value"]="<span class=calendar_eventinpast>".$record["Subject_value"]."</span>";
			$record["edit_link"]=false;
		}
		
		if (comparedates($dateField,$record["EndDate_value"])==0){
			$record["EndDate_value"] = '';		
		}
		
		
	}
	if ($data[calendarGetDataSourceSetting("calendarRecurrence")] == 1){
		$record["Subject_value"].="&nbsp;<img src='images/repeat.gif' border=0>"; 
	}
	$record["bg_color"]="style=\"background-color:" . $data["Color"] . "\"";

	if($dataDayEvent==1)
	{
		$record["TimeField_value"]="";
		$record["EndTime_value"]="";
	}
	//if ($data[calendarGetDataSourceSetting("calendarRecurrence")]==0)
	//	$record["EndDate_value"]="";
	

	if ($typePage != "print")
	{
		if ( !isClanedarTableUserDefined() ) 
		{
			$record["my_editlink_attrs"]="href=\"caldaily_edit.php?editid1=" . $data[calendarGetDataSourceSetting("calendarid")] . "&wind=".$wind."\"";
			$record["my_viewlink_attrs"]="href=\"caldaily_view.php?editid1=" . $data[calendarGetDataSourceSetting("calendarid")] . "&wind=".$wind."\"";
		} 
		else
		{
			global $calendarSettings;
			$record["my_editlink_attrs"]="href=\"".GetTableURL($calendarSettings["calendarTable"])."_edit.php?editid1=" . $data[calendarGetDataSourceSetting("calendarid")] . "&wind=".$wind."\"";
			$record["my_viewlink_attrs"]="href=\"".GetTableURL($calendarSettings["calendarTable"])."_view.php?editid1=" . $data[calendarGetDataSourceSetting("calendarid")] . "&wind=".$wind."\"";			
		}		
	}
	
}

function calendar_getSearchWhereClause($pageObj){
	
	global $calendarSettings, $calendarDatasourceTableNames;
	$searchWhereClause = "";
	$fieldsArr = array();
	
	foreach ($calendarSettings["calendarFields"] as $key=>$val){
		$newKey = $calendarDatasourceTableNames["calendarFields"][$key];
		$fieldsArr[$newKey] = $val;
		
	}
		
	foreach ($fieldsArr as $key=>$val){
		calendar_setFullFieldName($pageObj->pSet, $key, $val); 
		
	}
	
	$searchWhereClause = $pageObj->searchClauseObj->getWhere( $pageObj->pSet->getListOfFieldsByExprType(false) );
	
	foreach ($fieldsArr as $key=>$val){
		calendar_setFullFieldName($pageObj->pSet, $key, $key); 
	}
	return $searchWhereClause;
	
}

function str_format_lengthEvent($hours){
	if ($hours==0)
		return $hours." mins";
	if ($hours>0 && $hours<1)
		return ($hours*60)." mins";
	if ($hours==1)
		return $hours." hr";
	return $hours." hrs";
}

function calendar_outputTimeFieldsEdit($recID){
	global $dal, $locale_info;
	
	if ($recID==""){
		$recID = $_SESSION["id"];
	}
	
	//	read settings
	if ($_SESSION["calendar_TimePeriod"]) {
		$selectTimePeriod = $_SESSION["calendar_TimePeriod"];
	}
	else {
		$selectTimePeriod = 60; //edit events in past 0 - No, 1 - Yes
	}
		
	$recTimeField = "";
	$recEndTime = "";
	$recDateField = "";
	//get data for selected record
	if($recID>0){
		$dal_calcalendar = $dal->Table(calendarGetSetting("calendarTable"));
		$CalendarRS = $dal_calcalendar->Query(AddFieldWrappers(calendarGetSetting("calendarid"))."=" . $recID,"");
		if($CalendarData = db_fetch_array($CalendarRS)) {
			$recDateField = date2db(db2time($CalendarData[calendarGetSetting(calendarGetDateOrTimeKey("date"))])); 
			$recTimeField = $CalendarData[calendarGetSetting(calendarGetDateOrTimeKey("time"))]; 
			$recEndTime = $CalendarData[calendarGetSetting("calendarEndTime")];
		}
	}
	else{
		$recDateField = date2db(db2time(date("Y-m-d"))); 
		$recTimeField = $_SESSION["calendar_StartTime"]; 
		$recEndTime = $_SESSION["calendar_EndTime"];
	}
		
	$timeArray = array(0,0,0,0,0,0);
	$timeArrayEnd = array(0,0,0,0,0,0);
	$dbDateTime = getTimePart(db2time( $recDateField . " " .$recTimeField )); 
	$dbDateTimeEnd = getTimePart(db2time( $recDateField . " " . $recEndTime )); 
	$selectNumberTF = 0;
	$selectNumberET = 0;
	
	echo "var times=[{value: '',display:'Please select'}";
	for ($i=0; $i<(1440/$selectTimePeriod);$i++)
	{
		$timeArray = addMinutes($timeArray, $selectTimePeriod); 
			if (comparedates($timeArray,$dbDateTime)==0 && $selectNumberTF == 0){
					$selectNumberTF = $i+1;	
					//$timeArrayEnd = $timeArray;
			}
			
			
			echo ",{value: '". calendar_time2db($timeArray)."',display:'". calendar_formatTimeInDropdown($timeArray)."'}";
	}
	echo "];";
	echo "var timesEnd=[{value: '',display:'".GetCustomLabel("please_select")."'}";
	$curTimeBegin = $timeArray;
	for ($i=0; $i<(1440/$selectTimePeriod); $i++)
	{
		$timeArrayEnd = addMinutes($timeArrayEnd, $selectTimePeriod); 
		if (comparedates($timeArrayEnd,$dbDateTimeEnd)==0 && $selectNumberET == 0){
			$selectNumberET = $i+1;	
		}
		$lengthEvent = ($selectTimePeriod*$i)/60; 
		
		echo ",{value: '". calendar_time2db($timeArrayEnd)."',display:'". calendar_formatTimeInDropdown($timeArrayEnd)."'}";
		//$timeArrayEnd = addMinutes($timeArrayEnd, $selectTimePeriod); 
	}
	echo "];";
	echo "var selectedTimeField=".$selectNumberTF.";";
	echo "var selectedEndTime=".$selectNumberET.";";
}


function calendar_outputTimeFieldsAdd (){
	global $dal, $locale_info;
	//	read settings
	if ($_SESSION["calendar_TimePeriod"]) {
		$selectTimePeriod = $_SESSION["calendar_TimePeriod"];
	}
	else {
		$selectTimePeriod = 60; 
	}
		
	$timeArray = array(0,0,0,0,0,0);
	if($_SESSION["timeStart"]){
		$arr = explode(":",$_SESSION["timeStart"]);
		$nowTime = array(0,0,0,(int)$arr[0],(int)$arr[1],1);
	}
	else
		$nowTime = getTimePart( db2time( now() ) );
	$selectNumber = 0;
	echo "var times=[{value: '',display:'".GetCustomLabel("please_select")."'}";
	for ($i=0; $i<(1440/$selectTimePeriod);$i++)
	{
		$timeArray = addMinutes($timeArray, $selectTimePeriod); 
			if (comparedates($timeArray,$nowTime)>=0 && $selectNumber == 0){
					$selectNumber = $i;	
			}
			echo ",{value: '". calendar_time2db($timeArray)."',display:'". calendar_formatTimeInDropdown($timeArray)."'}";
	}
	echo "];";
	echo "selectedTime=".$selectNumber.";";
	if($_SESSION["timeEnd"]){
		$selectNumber = 0;
		$timeArray = array(0,0,0,0,0,0);
		$arr = explode(":",$_SESSION["timeEnd"]);
		$nowTime = array(0,0,0,(int)$arr[0],(int)$arr[1],1);
		for ($i=0; $i<(1440/$selectTimePeriod);$i++)
		{
			$timeArray = addMinutes($timeArray, $selectTimePeriod); 
				if (comparedates($timeArray,$nowTime)>=0 && $selectNumber == 0){
						$selectNumber = $i;	
				}
		}
		echo "selectedEndTime=".$selectNumber.";";
	}
	else
		echo "selectedEndTime=0;";
}
function calendar_getDataOfCategoryLookup(){
	global $dal;
	
	$CategoryCount =0;
	$dal_calcategory=$dal->Table("calcategory");
	$CategoryRS = DB::Select("todocategories");
	
	$retOutput = "var catLookup = [];";
	while ($CategoryData = $CategoryRS->fetchAssoc) {
		$retOutput = $retOutput. "catLookup[".$CategoryData["id"]."]='".$CategoryData["color"]."';";
		$CategoryCount++;
	}
	echo $retOutput;
}

/**
 * Delete one record 
 *
 * @param {int} idRecord - id selected record
 */
/*function calendar_deleteOneEvent($idRecord){
	global $dal;
	
	$tblCalendar = $dal->Table(calendarGetSetting("calendarTable"));
	$idField = calendarGetSetting("calendarid");
	$tblCalendar->Param[$idField]=$idRecord;
	$tblCalendar->Delete();
}*/

function calendar_subDates($tm1, $tm2){
	if ($tm1[1]==$tm2[1]){
		return $tm1[2] - $tm2[2];
	}
	else {
		$startDate = $tm2;
		$subDays = 0;
		while (comparedates($startDate,$tm1)!=0){
			$subDays++;
			$startDate = calendar_adddays($startDate,1);
		}
		return $subDays;
	}
}

/**
 * Copy record with drag and drop method
 *
 * @param {int} idRecord - id selected record
 * @param {int} newDay - id cell for copy 
 */
/*function calendar_copyRecord($idRecord, $anewDay){
	global $dal;
	$newDay = str_replace("add","",$anewDay); 
	$newDayArr = explode("_",$newDay);
	$tblCalendar = $dal->Table(calendarGetSetting("calendarTable"));
	$idField = AddFieldWrappers(calendarGetSetting("calendarid"));
	$rsCalendar = $tblCalendar->Query($idField . " = " . $idRecord,"");
	
	$insertValues = array();
	if ( $dataRec = db_fetch_array($rsCalendar) ) {
		$insertValues[calendarGetSetting("calendarSubject")] = $dataRec[calendarGetSetting("calendarSubject")];
		if (!$insertValues[calendarGetSetting("calendarSubject")]) 
			$insertValues[calendarGetSetting("calendarSubject")] = "";
		$insertValues[calendarGetSetting("calendarCategory")] = $dataRec[calendarGetSetting("calendarCategory")];
		if(!$insertValues[calendarGetSetting("calendarCategory")])
			$insertValues[calendarGetSetting("calendarCategory")] = 0;
		$insertValues[calendarGetSetting("calendarDescription")]=$dataRec[calendarGetSetting("calendarDescription")];
		if(!$insertValues[calendarGetSetting("calendarDescription")])
			$insertValues[calendarGetSetting("calendarDescription")] = "";
		$insertValues[calendarGetSetting("calendarDayEvent")]=$dataRec[calendarGetSetting("calendarDayEvent")];
		if(!$insertValues[calendarGetSetting("calendarDayEvent")])
			$insertValues[calendarGetSetting("calendarDayEvent")] = 0;
		$insertValues[calendarGetSetting("calendarRecurrence")]=$dataRec[calendarGetSetting("calendarRecurrence")];
		if(!$insertValues[calendarGetSetting("calendarRecurrence")])
			$insertValues[calendarGetSetting("calendarRecurrence")] = 0;
		$insertValues[calendarGetSetting("calendarEndTime")] = $dataRec[calendarGetSetting("calendarEndTime")];
		if(!$insertValues[calendarGetSetting("calendarEndTime")])
			$insertValues[calendarGetSetting("calendarEndTime")] = "";
		$insertValues[calendarGetSetting("calendarEndDate")] = $dataRec[calendarGetSetting("calendarEndDate")];
		if(!$insertValues[calendarGetSetting("calendarEndDate")])
			$insertValues[calendarGetSetting("calendarEndDate")] = null;
		$insertValues[calendarGetSetting("calendarPeriod")] = $dataRec[calendarGetSetting("calendarPeriod")];
		if(!$insertValues[calendarGetSetting("calendarPeriod")])
			$insertValues[calendarGetSetting("calendarPeriod")] = null;
		$insertValues[calendarGetSetting("calendarPeriodDays")] = $dataRec[calendarGetSetting("calendarPeriodDays")];
		if(!$insertValues[calendarGetSetting("calendarPeriodDays")])
			$insertValues[calendarGetSetting("calendarPeriodDays")] = null;
		$insertValues[calendarGetSetting(calendarGetDateOrTimeKey("time"))] = $dataRec[calendarGetSetting(calendarGetDateOrTimeKey("time"))];
		if(!$insertValues[calendarGetSetting(calendarGetDateOrTimeKey("time"))])
			$insertValues[calendarGetSetting(calendarGetDateOrTimeKey("time"))] = "";
		$insertValues[calendarGetSetting("calendarOwnerID")] = $dataRec[calendarGetSetting("calendarOwnerID")];
			
	}
	
	$dbDateField = db2time( $dataRec[ calendarGetSetting(calendarGetDateOrTimeKey("date")) ] );
	$dbEndDate = db2time( $insertValues[ calendarGetSetting("calendarEndDate") ] );
	
	$insertDateField = array($newDayArr[0], $newDayArr[1], $newDayArr[2]);
	
	if( calendarGetDateOrTimeKey("date") == "calendarDateTime" ) 
	{
		$insertDTFData = array($newDayArr[0], $newDayArr[1], $newDayArr[2], $dbDateField[3], $dbDateField[4], $dbDateField[5]);
		$outputValue = str_format_datetime( $insertDTFData );
		$insertValues[ calendarGetSetting("calendarDateTime") ] = localdatetime2db( $outputValue );
	}
	else 
	{
		$insertValues[ calendarGetSetting( calendarGetDateOrTimeKey("date") ) ] = date2db($insertDateField);
	}
	
	if( $insertValues[calendarGetSetting("calendarRecurrence")] != 0 || comparedates($dbDateField,$dbEndDate) != 0 )
	{
		$insertDateField = array($newDayArr[0], $newDayArr[1], $newDayArr[2]); 
		$subDays = calendar_subDates($dbEndDate, $dbDateField); 
		$insertValues[calendarGetSetting("calendarEndDate")] = date2db( calendar_adddays($insertDateField, $subDays) );
	}
	else 
	{
		$insertValues[calendarGetSetting("calendarEndDate")] = date2db( $insertDateField );
	}
	
	foreach ($insertValues as $key => $val)
	{
		$tblCalendar->Value[ $key ] = $val;
	}
	
	$tblCalendar->Add();
	
	calendar_deleteOneEvent($idRecord);
}*/



/**
 * Delete selection records 
 *
 * @param {array} arrRecords - ids selected record
 */
/*function calendar_deleteEvents($arrRecords){
	for ($i = 0; $i < count($arrRecords); $i++ ){
		calendar_deleteOneEvent($arrRecords[$i]);
	}
}*/


function calendar_AddRecord($valuesRecord){
	$values = array();
	foreach ($valuesRecord as $key=>$val){
		
		if (($key!="DateField") || ($key!="TimeField")) {
			if (calendarGetSetting("calendar".$key)!="")
				$values[calendarGetSetting("calendar".$key)] = $val;
			else
				$values[$key] = $val;
		}
	}
	if (calendarGetDateOrTimeKey("date")=="calendarDateTime"){
		$values[calendarGetSetting("calendarDateTime")] = date("Y-m-d",strtotime($valuesRecord["DateField"]))." ".$valuesRecord["TimeField"];
	}
	else {
		$values[calendarGetSetting("calendarDateField")] = $valuesRecord["DateField"];
		$values[calendarGetSetting("calendarTimeField")] = $valuesRecord["TimeField"];
	}
	DB::Insert(calendarGetSetting("calendarTable"),$values);
}

function calendar_UpdateRecord($valuesRecord, $oldvaluesRecord, $keysRecord){
	$params = array();
	$values = array();
	foreach ($keysRecord as $key1=>$val1){
		$params[calendarGetSetting("calendar".$key1)] = $val1;
	}
	foreach ($valuesRecord as $key2=>$val2){
		if (($key2!="DateField") && ($key2!="TimeField")) {
			if (calendarGetSetting("calendar".$key2)!="")
				$values[calendarGetSetting("calendar".$key2)] = $val2;
			else
				$values[$key2] = $val2;
		}
		else {
			if (calendarGetDateOrTimeKey("date")=="calendarDateTime"){
				$values[calendarGetSetting("calendarDateTime")] = date("Y-m-d",strtotime($valuesRecord["DateField"]))." ".$valuesRecord["TimeField"];
			}
			else {
				$values[calendarGetSetting("calendarDateField")] = $valuesRecord["DateField"];
				$values[calendarGetSetting("calendarTimeField")] = $valuesRecord["TimeField"];
			}
		}
	}
	DB::Update(calendarGetSetting("calendarTable"),$values,$params);
}

function calendar_getDbValuesById($aId, $connection){
	if ($aId==""){
		$aId = $_SESSION["id"];
	}
	$calendarTable = $connection->addTableWrappers(calendarGetSetting("calendarTable"));
	$condition = $calendarTable.".".$connection->addFieldWrappers(calendarGetSetting("calendarid")) ." = ". $aId;
	
	if (calendarFieldIsset(calendarGetSetting("calendarCategory"))) {
		/*$categoriesTable = $connection->addTableWrappers("calcategory");
		$categoryField = $connection->addFieldWrappers(calendarGetSetting("calendarCategory"));
		$sqlCategoryField = ",".$categoriesTable . "." . $connection->addFieldWrappers("Color");*/
		$categoriesTable = $connection->addTableWrappers("todocategories");
		$categoryField = $connection->addFieldWrappers(calendarGetSetting("calendarCategory"));
		$sqlCategoryField = ",".$categoriesTable . "." . $connection->addFieldWrappers("color");
		$sqlCategoryJoin = " left join " . $categoriesTable . " on " . $categoriesTable . "." . $connection->addFieldWrappers("id") . " = " . $calendarTable . "." . $categoryField;
	}
	
	$sql = "select " . $calendarTable . ".* ".$sqlCategoryField.
			" from " . $calendarTable . 
			$sqlCategoryJoin . 
			" where (" . $condition . ")";
	return $sql;
}

function calendar_getKeyByValue($arr, $findVal){
 if( in_array($findVal, $arr["calendarFields"]) )
  return array_search($findVal, $arr["calendarFields"]);
 if( in_array($findVal, $arr["calendarKeys"]) )
  return array_search($findVal, $arr["calendarKeys"]);;
 return null;
}

function calendar_convertValues(&$values){
	global $calendarDatasourceSettings, $calendarSettings;
	
	$outputValues = $values;
	
	foreach ($outputValues as $key=>$val){
		$keyFromCalendarSettings = calendar_getKeyByValue($calendarSettings, $key);
		if ($keyFromCalendarSettings){
			unset($values[$key]);
			if ($keyFromCalendarSettings == "calendarDateTime"){
				
				$values["DateField"] = date2db(getDatePart(db2time($val)));
				$values["TimeField"] = calendar_time2db(getTimePart(db2time($val)));
			}
			else {
				$newKey = calendarGetDataSourceSetting($keyFromCalendarSettings);
				$values[$newKey] = $val;
			}
		}
	}
	
	return $values;
}

function calendar_getMaxDateField($connection){
	$tblCalendar = $connection->addTableWrappers(calendarGetSetting("calendarTable"));
	$dateField = $connection->addFieldWrappers(calendarGetSetting(calendarGetDateOrTimeKey("date")));
	$sql = "select max(" . $tblCalendar . ".".$dateField.") as ".$connection->addFieldWrappers("maxdate")." " . 
		" from " . $tblCalendar;
	
	$result = $connection->query( $sql );
	if ( $dataCalendar = $result->fetchNumeric()) {
	
		return $dataCalendar[0];
	}

	return null;
}

function calendar_getMinDateField($connection){
	$tblCalendar = $connection->addTableWrappers(calendarGetSetting("calendarTable"));
	$dateField = $connection->addFieldWrappers(calendarGetSetting(calendarGetDateOrTimeKey("date")));
	$sql = "select min(" . $tblCalendar . ".".$dateField.") as ".$connection->addFieldWrappers("mindate")." " . 
		" from " . $tblCalendar;
		
	$result = $connection->query( $sql );
	if ( $dataCalendar = $result->fetchNumeric() ) {
		return $dataCalendar[0];
	}
	return null;
}

/**
 * Hide fields on Add, Edit, View field 
 *
 */
function calendar_hideFields(&$pageObject){
	global $calendarSettings, $calendarDatasourceTableNames;
	foreach ($calendarDatasourceTableNames["calendarFields"] as $fieldKey => $fieldName){
	
		if (!array_key_exists("calendar".$fieldName, $calendarSettings["calendarFields"])) {
			
			if (($fieldName == "DateField") || ($fieldName == "TimeField") && 
				array_key_exists("calendarDateTime", $calendarSettings["calendarFields"])) {
				continue;
			}
			$pageObject->hideField($fieldName);
		}
	}
}

/**
 * Hide empty fields on View page 
 *
 */
function calendar_hideEmptyFields(&$pageObject, $values){
	global $calendarSettings, $calendarDatasourceTableNames;
	foreach ($calendarDatasourceTableNames["calendarFields"] as $fieldKey => $fieldName){
		if (($fieldName == "Period") && $values[$fieldName]!='d'){
			$pageObject->hideField("PeriodDays");
		}
		elseif (!array_key_exists("calendar".$fieldName, $calendarSettings["calendarFields"]) || !$values[$fieldName]) {

			if (($fieldName == "DateField") || ($fieldName == "TimeField")  && 
				array_key_exists("calendarDateTime", $calendarSettings["calendarFields"])) {
					if (($fieldName == "TimeField") && 
						(array_key_exists("calendarDayEvent", $calendarSettings["calendarFields"]) && $values["DayEvent"]!='')) {
							$pageObject->hideField($fieldName);
					}
				continue;
			}
			
			
			$pageObject->hideField($fieldName);
		}
	}
}


function calendar_hideGridColumn (&$p_xt){
	global $calendarSettings, $calendarDatasourceTableNames, $xt;
	foreach ($calendarDatasourceTableNames["calendarFields"] as $fieldKey => $fieldName){
		if (!array_key_exists("calendar".$fieldName, $calendarSettings["calendarFields"])) {
			if (($fieldName == "DateField") || ($fieldName == "TimeField") && 
				array_key_exists("calendarDateTime", $calendarSettings["calendarFields"])) {
				continue;
			}
			$p_xt->assign($fieldName."_fieldheadercolumn",false);
			$p_xt->assign($fieldName."_fieldcolumn",false);
			if ($fieldName == "TimeField"){
				$p_xt->assign("EndTime_fieldheadercolumn",false);
				$p_xt->assign("EndTime_fieldcolumn",false);	
			}
		}
	}
}

function setDefaultPeriodDay(){
	$currentDate = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
	return getdayofweek($currentDate);
}

function calendar_setUpdatePeriodDay($connection){
	$currentDate = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
	if (!$_REQUEST["editid1"]){
		return getdayofweek($currentDate);
	}
	global $dal;
	$tableCalendar = $dal->Table(calendarGetSetting("calendarTable"));
	$rsCalendar = $tableCalendar->Query($connection->addFieldWrappers(calendarGetSetting("calendarid")).' = '.$_REQUEST["editid1"],"");
	if ($dataCalendar = db_fetch_array($rsCalendar)) {
		if ($dataCalendar[calendarGetSetting("calendarPeriodDays")]==''){
			return getdayofweek($currentDate);
		}
		else 
			return $dataCalendar[calendarGetSetting("calendarPeriodDays")];
	}
}

function calendar_time2db( $tm )
{
	return mysprintf("%02d:%02d:%02d",array($tm[3],$tm[4],$tm[5]));
}

function calendar_setFullFieldName( $ps, $field, $value) {
	$key = "FullName";
	$oldValue = $ps->getFieldData( $field, $key );
	global $g_settingsType;
		
	$settingType = $g_settingsType[$key];
	if($settingType == null)
		$settingType = "";
	// for .net	
	if( $settingType == SETTING_TYPE_VIEW )	{
		$viewPage = $ps->getEffectiveViewPage( $field );
		$ps->_tableData[$field][FORMAT_VIEW][$viewPage][$key] = $value;
	}
	else if( $settingType == SETTING_TYPE_EDIT ) {
		$editPage = $ps->getEffectiveEditPage( $field );
		$ps->_tableData[$field][FORMAT_EDIT][$editPage][$key] = $value;
	}
	else {
		$ps->_tableData[$field][$key] = $value;
	}
	return $oldValue;
	
}

function calendar_getMonthDays($year, $month)
{
	global $_gmdays;
	$month = (int)$month;
	$year = (int)$year;
	if( $month != 2 )
		return $_gmdays[ $month ];
	return isleapyear( $year ) ? 29 : 28;
}

function calendar_adddays($tm,$days)
{
	$time = $tm;

	if($days>0)
	{
		$time[2] += $days;
		while( $time[2] > calendar_getMonthDays($time[0], $time[1]) )
		{
			$time[2] -= calendar_getMonthDays($time[0], $time[1]);
			$time[1]++;
			if( $time[1] == 13 )
			{
				$time[1] = 1;
				$time[0]++; 
			}
		}
	}
	else
	{
		$time[2] += $days;
		while( $time[2] < 1 )
		{
			//	calendar_getMonthDays accepts 0 as a month ( December )!
			$time[2] += calendar_getMonthDays($time[0], $time[1] - 1 );
			$time[1]--;
			if( $time[1] == 0 )
			{
				$time[1] = 12;
				$time[0]--; 
			}
		}
	}
	return $time;
}

function calendar_format_datetime_custom($time,$format)
{
	global $locale_info;
	if(count($time)<3)
		return "";
	$i=0;
	$subst=array();
	if( strpos( $format, "ddd" ) !== false ) {
		$weekday=getdayofweek($time);
		$subst["dddd"]=$locale_info["LOCALE_SDAYNAME".$weekday];
		$subst["ddd"]=$locale_info["LOCALE_SABBREVDAYNAME".$weekday];
	}
	$subst["dd"]=mysprintf("%02d",array($time[2]));
	$subst["d"]=$time[2];
	if(array_key_exists("LOCALE_SMONTHNAME".$time[1],$locale_info))
	{
		$subst["MMMM"]=$locale_info["LOCALE_SMONTHNAME".$time[1]];
		$subst["MMM"]=$locale_info["LOCALE_SABBREVMONTHNAME".$time[1]];
		$subst["MM"]=mysprintf("%02d",array($time[1]));
	}
	else
	{
		$subst["MMMM"]="";
		$subst["MMM"]="";
		$subst["MM"]="00";
	}
	$subst["M"]=$time[1];
	$subst["yyyy"]=mysprintf("%04d",array($time[0]));
	$subst["yy"]=mysprintf("%02d",array($time[0]%100));
	$subst["y"]=$time[0]%10;
	$subst["gg"]="";
	$subst["HH"]=mysprintf("%02d",array($time[3]));
	$subst["H"]=$time[3];
	$subst["mm"]=mysprintf("%02d",array($time[4]));
	$subst["m"]=$time[4];
	$subst["ss"]=mysprintf("%02d",array($time[5]));
	$subst["s"]=$time[5];
	$hour12=$time[3];
	$am=1;
	if($hour12>=12)
	{
		$am=0;
		$hour12-=12;
	}
	if(!$hour12)
		$hour12=12;
	$subst["hh"]=mysprintf("%02d",array($hour12));
	$subst["h"]=$hour12;
	if($am)
	{
		$subst["tt"]=$locale_info["LOCALE_S1159"];
		$subst["t"]=substr($locale_info["LOCALE_S1159"],0,1);
	}
	else
	{
		$subst["tt"]=$locale_info["LOCALE_S2359"];
		$subst["t"]=substr($locale_info["LOCALE_S2359"],0,1);
	}
	$out=$format;
	$inquot=0;
	while($i<strlen($out))
	{
		if($out[$i]=="'")
		{
			$inquot=1-$inquot;
			$out=substr($out,0,$i).substr($out,$i+1);
			continue;
		}
		else if(!$inquot)
		{
			foreach($subst as $key=>$value)
				if(substr($out,$i,strlen($key))==$key)
				{
					$out=substr($out,0,$i).$value.substr($out,strlen($key)+$i);
					$i+=strlen($value)-1;
					break;
				}
		}
		$i++;
	}
	return $out;
}
function calendar_sortByDateField($event1,$event2){
	
	$ev1DateField = db2time($event1["DateField"]);
	$ev1EndDate = db2time($event1["EndDate"]);
	$ev2DateField = db2time($event2["DateField"]);
	$ev2EndDate = db2time($event2["EndDate"]);
	if(comparedates($ev2DateField,$ev1DateField) < 0)  {
		return 1;
	}
	else if(comparedates($ev1DateField,$ev2DateField) < 0){
		return -1;
	}
	else if (comparedates($ev2DateField,$ev1DateField) == 0) {
		//compare time
		if ($event1["DayEvent"]==1)
			return -1;
		else if ($event2["DayEvent"]==1)
			return 1;
		else {
			$ev1DateTime = db2time($event1["DateField"]." ".$event1["TimeField"]);
			$ev2DateTime = db2time($event2["DateField"]." ".$event2["TimeField"]);
			if (comparedates($ev1DateTime,$ev2DateTime) <= 0) {
				return -1;
			}
			else 
				return 1;
		}
		return 0;
	}
	return 0;
}

function calendar_sortEventsByType($events){

	foreach ($events as $key=>&$eventVal){
		usort($eventVal,"calendar_sortByDateField");
	}
	return $events;
}

function refineHref( $link )
{
	return $link;
}

function setEndValue($eventEnd, $data){
	$eventStart = $data[ calendarGetSetting(calendarGetDateOrTimeKey("date")) ];
	$period = $data[ calendarGetSetting("calendarPeriod") ];
	if( !$data[calendarGetSetting( "calendarRecurrence" )] )
		return $eventEnd;
	$recurType = $data[calendarGetSetting("calendarRecurType")];
	if($recurType == "On")
		$recurValue = $data[calendarGetSetting("calendarRecurOnValue")];
	if($recurType == "After")
		$recurValue = $data[calendarGetSetting("calendarRecurAfterValue")];
		
	if($recurType == "Never"){
		$add_days = 0;
		for($i=0;$i<10;$i++){
			if(isleapyear( date("Y", $eventStart ) + $i))
				$add_days+=366;
			else
				$add_days+=365;
		}
		$arrEvStart = explode("-",$eventStart);
		$arrEvStart = calendar_adddays($arrEvStart,$add_days);
		$eventEnd = $arrEvStart[0]."-".$arrEvStart[1]."-".$arrEvStart[2];
		//$eventEnd = date("Y-m-d",strtotime("+10 year",strtotime($eventStart)));
	}
	if($recurType == "On")
		$eventEnd = $recurValue;
	if($recurType == "After"){
		$arrEvStart = explode("-",$eventStart);
		$add_days = 0;
		if("yyyy" == $period && $recurValue>0){
			for($i=0;$i<$recurValue;$i++){
				if(isleapyear( date("Y", $eventStart ) + $i))
					$add_days+=366;
				else
					$add_days+=365;
			}
			//echo $add_days;
			$arrEvStart = calendar_adddays($arrEvStart,$add_days);
			$eventEnd = $arrEvStart[0]."-".$arrEvStart[1]."-".$arrEvStart[2];
			//$eventEnd = date("Y-m-d",strtotime("+".$add_days." day",strtotime($eventStart)));
		}
		if("m" == $period){
			$view_days = 1;
			while($view_days != $recurValue){
				//$eventStart = date("Y-m-d",strtotime("+1 month",strtotime($eventStart)));
				$adays = calendar_getMonthDays($arrEvStart[0], $arrEvStart[1]);
				$arrEvStart = calendar_adddays($arrEvStart,$adays);
				$eventStart = $arrEvStart[0]."-".$arrEvStart[1]."-".$arrEvStart[2];
				$view_days++;
			}
			$eventEnd = $eventStart;
		}
		if("ww" == $period){
			$view_days = 1;
			while($view_days != $recurValue){
				$arrEvStart = calendar_adddays($arrEvStart,7);
				$eventStart = $arrEvStart[0]."-".$arrEvStart[1]."-".$arrEvStart[2];
//				$eventStart = date("Y-m-d",strtotime("+1 week",strtotime($eventStart)));
				$view_days++;
			}
			$eventEnd = $eventStart;
		}
		if("d" == $period){
			$weekdaysStr = $data[calendarGetSetting("calendarPeriodDays")];
			$weekdays = array();
			if ($weekdaysStr!=""){
				$weekdays = explode(",",$weekdaysStr);
			}	
			$view_days = 0;
			while($view_days != $recurValue){
				$weekDayEvent = getdayofweek( db2time($eventStart) );
				if(in_array($weekDayEvent, $weekdays)){
					$view_days++;
				}
				if($view_days != $recurValue){
					//$eventStart = date("Y-m-d",strtotime("+1 day",strtotime($eventStart)));
					$arrEvStart = calendar_adddays($arrEvStart,1);
					$eventStart = $arrEvStart[0]."-".$arrEvStart[1]."-".$arrEvStart[2];
				}
			}
			$eventEnd = $eventStart;

		}
	}
	return $eventEnd;
}
function getLastID($table){
	$rs = DB::Query("select max(".addFieldWrappers("id").") as MID from ".addFieldWrappers($table));
	if($data = $rs->fetchAssoc())
		return $data["MID"];
	else
		return 0;
}

?>