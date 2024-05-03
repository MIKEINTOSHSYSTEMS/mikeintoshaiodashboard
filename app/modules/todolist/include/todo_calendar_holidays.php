<?php

function add_federal_holidays (){
	global $dal;
	$thisMoment = getDatePart(db2time(now()));
	$tblholidays = $dal->Table("calholidays");
	$year = $thisMoment[0];
	$newDate = $thisMoment;
	$rsHoliday = $tblholidays->QueryAll();
	if ($data = db_fetch_array($rsHoliday)) {
		return;
	}

	for ($i=0; $i<3; $i++){
		//New Year's Day
		$holDate = date2db(array($year, 1, 1));
		$tblholidays->Value["name"] = "New Year's Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Independence Day
		$holDate = date2db(array($year, 7, 4));
		$tblholidays->Value["name"] = "Independence Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Veterans Day
		$holDate = date2db(array($year, 11, 11));
		$tblholidays->Value["name"] = "Veterans Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Christmas
		$holDate = date2db(array($year, 12, 25));
		$tblholidays->Value["name"] = "Christmas";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Birthday of Martin Luther King, Jr.
		$tmpDate = array($year, 1, 1);
		$numDay = getdayofweek($tmpDate);
		if ($numDay != 1) {
			//find first monday
			$countDays = 8 - $numDay;
			$firstMon = adddays($tmpDate, $countDays);
		}
		else {
			$firstMon = $tmpDate;
		}
		//find third Mon
		$thirdMon = adddays($firstMon,7*2);
		$holDate = date2db($thirdMon);
		$tblholidays->Value["name"] = "Birthday of Martin Luther King, Jr.";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Washington's Birthday
		$tmpDate = array($year, 2, 1);
		$numDay = getdayofweek($tmpDate);
		if ($numDay != 1) {
			//find first monday
			$countDays = 8 - $numDay;
			$firstMon = adddays($tmpDate, $countDays);
		}
		else {
			$firstMon = $tmpDate;
		}
		//find third Mon
		$thirdMon = adddays($firstMon,7*2);
		$holDate = date2db($thirdMon);
		$tblholidays->Value["name"] = "Washington's Birthday";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Memorial Day ПРОВЕРИТЬ
		$tmpDate = array($year, 5, 1);
		$numDay = getdayofweek($tmpDate);
		if ($numDay != 1) {
			//find first monday
			$countDays = 8 - $numDay;
			$firstMon = adddays($tmpDate, $countDays);
		}
		else {
			$firstMon = $tmpDate;
		}
		//find last Mon
		$lastMon = adddays($firstMon,7);
		while ($lastMon[1]!=6){
			$lastMon = adddays($lastMon,7);
		}
		$lastMon = adddays($lastMon,-7);
				
		$holDate = date2db($lastMon);
		$tblholidays->Value["name"] = "Memorial Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Labor Day
		$tmpDate = array($year, 9, 1);
		$numDay = getdayofweek($tmpDate);
		if ($numDay != 1) {
			//find first monday
			$countDays = 8 - $numDay;
			$firstMon = adddays($tmpDate, $countDays);
		}
		else {
			$firstMon = $tmpDate;
		}
		
		$holDate = date2db($firstMon);
		$tblholidays->Value["name"] = "Labor Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Columbus Day
		$tmpDate = array($year, 10, 1);
		$numDay = getdayofweek($tmpDate);
		if ($numDay != 1) {
			//find first monday
			$countDays = 8 - $numDay;
			$firstMon = adddays($tmpDate, $countDays);
		}
		else {
			$firstMon = $tmpDate;
		}
		//find third Mon
		$secondMon = adddays($firstMon,7);
		$holDate = date2db($secondMon);
		$tblholidays->Value["name"] = "Columbus Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		//Thanksgiving Day
		$tmpDate = array($year, 11, 1);
		
		$numDay = getdayofweek($tmpDate);
		if ($numDay != 1) {
			//find first monday
			$countDays = 8 - $numDay;
			$firstMon = adddays($tmpDate, $countDays);
		}
		else {
			$firstMon = $tmpDate;
		}
	
		if ($firstMon[2]>4) {
			$firstThu = adddays($firstMon, -4);	
		}
		else {
			$firstThu = adddays($firstMon, 3);	
		}
				
		//find third Mon
		$fourThu = adddays($firstThu,7*3);

		$holDate = date2db($fourThu);
		$tblholidays->Value["name"] = "Thanksgiving Day";
		$tblholidays->Value["date"] = $holDate;
		$tblholidays->Add();
		
		$newDate = addyears($newDate, 1);
		$year = $newDate[0];
	}
}
?>