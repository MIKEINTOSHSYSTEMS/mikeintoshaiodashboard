<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once( getabspath( "classes/controls/Control.php" ) );
require_once( getabspath( "classes/controls/LookupField.php" ) );

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$shortTable = postvalue("table");
$table = GetTableByShort( $shortTable );
if( !$table )
	exit(0);


$pageType = postvalue("pageType");
$pageName = postvalue("page");
$field = postvalue('searchField');

if( !Security::userHasFieldPermissions( $table, $field, $pageType, $pageName, true ) )
	return;

$pSet = new ProjectSettings( $table, $pageType, $pageName );

// if suggest for dashboard search
if( $pSet->getEntityType() == titDASHBOARD )
{
	$dashboard = $table;
	$dashFields = $pSet->getDashboardSearchFields();
    $table = $dashFields[ $field ][0]["table"];
	$field = $dashFields[$field][0]["field"];
	
    $pSet = new ProjectSettings($table, $pageType, $pageName, $dashboard );
}



$cipherer = new RunnerCipherer($table);

$masterTable = postvalue('masterTable');
if ( $masterTable != "" && isset($_SESSION[ $masterTable . "_masterRecordData" ]) )
{
	$contextParams["masterData"] = $_SESSION[ $masterTable . "_masterRecordData" ];
}

$contextParams["data"] = my_json_decode( postvalue('data') );
RunnerContext::push( new RunnerContextItem( $pageType, $contextParams));

$isExistParent = postvalue('isExistParent');
$searchByLinkField = postvalue('searchByLinkField');
$parentCtrlsData = my_json_decode( postvalue('parentCtrlsData') );

$value = postvalue('searchFor');
$values = postvalue('multiselection') ? splitvalues($value) : array($value);


$lookupField = "";
if( $pSet->getEditFormat($field) == EDIT_FORMAT_LOOKUP_WIZARD )
{
	$LookupType = $pSet->getLookupType($field);
	if(  $LookupType == LT_LOOKUPTABLE || $LookupType == LT_QUERY )
	{
		$lookupField = $field;
	}
}

if( !$lookupField ) 
{
	$respObj = array('success' => false, 'data' => array());
	echo printJSON($respObj);
	exit();	
}


$lookupTable = $pSet->getLookupTable($lookupField);
$lookupPSet = null;
if( $pSet->getLookupType($field) == LT_QUERY )
	$lookupPSet = new ProjectSettings( $lookupTable );

$linkFieldName = $pSet->getLinkField($lookupField);
$displayFieldName = $pSet->getDisplayField( $field );
$linkAndDisplaySame = $displayFieldName == $linkFieldName;

//	create DsCommand
$dcDisplay = LookupField::makeLookupDataCommand( $field, $pSet, $parentCtrlsData, $value, true, $searchByLinkField, true, $searchByLinkField );
$dc = $dcDisplay["dc"];
$displayFieldAlias = $dcDisplay["displayField"];

if( !$searchByLinkField ) {
	$displayFieldCondition = $pSet->getCustomDisplay( $field ) 
		? DataCondition::SQLIs( $displayFieldName, dsopCONTAIN, $value )
		: DataCondition::FieldIs( $displayFieldName, dsopCONTAIN, $value );
	
	// add display field filter
	$dc->filter = DataCondition::_And( array( 
		$dc->filter,
		$displayFieldCondition
	) );
} 

/*
$lookupOrderBy = $pSet->getLookupOrderBy($lookupField);

if( $lookupConnection->dbType == nDATABASE_MSSQLServer )
	$strUniqueOrderBy = $lookupOrderBy;
								
if($LookupType == LT_QUERY)
{
	$lookupPSet = new ProjectSettings($lookupTable, $pageType);
	$lookupCipherer = new RunnerCipherer($lookupTable);
	$lookupQueryObj = $lookupPSet->getSQLQuery();
	
	if($pSet->getCustomDisplay($lookupField))
		$lookupQueryObj->AddCustomExpression($displayFieldName, $lookupPSet, $table, $lookupField);
	
	$lookupQueryObj->ReplaceFieldsWithDummies($lookupPSet->getBinaryFieldsIndices());
}
else
{
	$LookupSQLTable = "SELECT ";
	$lwLinkField = $lookupConnection->addFieldWrappers($pSet->getLinkField($lookupField));
	if ($pSet->isLookupUnique($lookupField))
	{
		$LookupSQLTable .= "DISTINCT ";
	}
	$LookupSQLTable .= $cipherer->GetLookupFieldName($lwLinkField, $lookupField, null, true);
	if( $lookupConnection->dbType == nDATABASE_MSSQLServer )
	{
		if( $strUniqueOrderBy && $pSet->isLookupUnique($lookupField) )
			$LookupSQLTable .= ",".$lookupConnection->addFieldWrappers( $strUniqueOrderBy );
	}
	
	$lwDisplayField = RunnerPage::sqlFormattedDisplayField($lookupField, $lookupConnection, $pSet);
	
	if(!$linkAndDisplaySame)
		$LookupSQLTable .= ",".($lwDisplayField == $lwLinkField ? $cipherer->GetFieldName($lwDisplayField, $lookupField, true) : $lwDisplayField);
	
	$LookupSQLTable .= " FROM ".$lookupConnection->addTableWrappers($lookupTable)." ";
}

$strLookupWhere = prepareLookupWhere( $lookupField, $pSet );

if($LookupType == LT_QUERY)
{	
	$secOpt = $lookupPSet->getAdvancedSecurityType();
	if($secOpt == ADVSECURITY_VIEW_OWN)
		$strLookupWhere = whereAdd($strLookupWhere, SecuritySQL("Search", $lookupTable));
}
if ($strLookupWhere)
{
	$strLookupWhere = " (".$strLookupWhere.")  AND ";
}

if( $LookupType == LT_QUERY )
{
	if($pSet->getCustomDisplay($lookupField))
		$likeField = $searchByLinkField ? $linkFieldName : $displayFieldName;
	else
		$likeField = RunnerPage::_getFieldSQLDecrypt($searchByLinkField ? $linkFieldName : $displayFieldName, $lookupConnection ,$lookupPSet, $cipherer);
}
else
	$likeField = $cipherer->GetFieldName($lwDisplayField, $lookupField);

if( $searchByLinkField ) 	
	$likeConditionField = $LookupType == LT_QUERY ? $linkFieldName : $lookupField;
else 
	$likeConditionField = $LookupType == LT_QUERY ? $displayFieldName : $lookupField;
	
$likeWheres = array();
foreach($values as $fieldValue) 
{
	if( $fieldValue == "" )
		continue;
	if( $LookupType == LT_QUERY )
		$likeWheres[] = $likeField.$lookupCipherer->GetLikeClause($likeConditionField, $fieldValue);
	else	
		$likeWheres[] = $likeField.$cipherer->GetLikeClause($likeConditionField, $fieldValue);
}
if( !count( $likeWheres ) ) 
{
	$likeWheres[] = "1=0";
}
$strLookupWhere.= implode(' OR ', $likeWheres);


if( $isExistParent && $pSet->useCategory($lookupField) )
{
	$parentWhereParts = array();
	
	foreach( $pSet->getParentFieldsData($lookupField) as $cData )
	{
		$arLookupWhere = array();
					
		$category = $parentCtrlsData[ $cData["main"] ];
		// convert into an array as parent ctrl can have multiple values
		$lookupCategory = $category == "" ? array() : splitvalues( $category );
		foreach($lookupCategory as $arLookupCategory)
		{
			$cvalue = make_db_value( $cData["main"] , $arLookupCategory);
			
			if( $lookupPSet )
				$catField = RunnerPage::_getFieldSQLDecrypt($cData["lookup"], $lookupConnection ,$lookupPSet, $cipherer);
			else
				$catField = $lookupConnection->addFieldWrappers($cData["lookup"]);
			
			$arLookupWhere[] = $catField . "=" . $cvalue;
		}

		if( count($arLookupWhere) )
			$parentWhereParts[] = "(".implode(" OR ", $arLookupWhere).")";
	}
	
	if( count($parentWhereParts) == count($pSet->getParentFieldsData($lookupField)) )
		$strLookupWhere = whereAdd($strLookupWhere, "(".implode(" AND ", $parentWhereParts).")");
	else
	{
		$respObj = array('success' => false, 'data' => array());
		echo printJSON($respObj);
		exit();	
	}
}

if( strlen($lookupOrderBy) )
{
	$lookupOrderBy = $lookupConnection->addFieldWrappers($lookupOrderBy);
	if( $pSet->isLookupDesc($lookupField) )
		$lookupOrderBy .= ' DESC';
}

if($LookupType == LT_QUERY)
{
	$LookupSQL = $lookupQueryObj->buildSQL_default( $strLookupWhere );
	if( strlen($lookupOrderBy) )
	{		
		$LookupSQL .= ' ORDER BY '.$lookupOrderBy;
	}
	else
	{
		$LookupSQL .= $lookupQueryObj->OrderByToSql();
	}
}
else
{
	$LookupSQL = $LookupSQLTable." where ".$strLookupWhere;
	if ( !$pSet->isLookupUnique($lookupField) || nDATABASE_Access != $lookupConnection->dbType )
	{
		if ($lookupOrderBy)
		{
			$LookupSQL.= " ORDER BY ".$lookupOrderBy;
		}
	}
}

$lookupIndices = GetLookupFieldsIndexes($pSet, $lookupField);
$linkFieldIndex = $lookupIndices["linkFieldIndex"];
$displayFieldIndex = $lookupIndices["displayFieldIndex"];

require_once getabspath('classes/controls/ViewControlsContainer.php');
$viewContainer = new ViewControlsContainer( $pSet, PAGE_LIST, null );

$response = array();
$qResult = $lookupConnection->query( $LookupSQL );
*/

$dataSource = getLookupDataSource( $lookupField, $pSet );
$qResult = $dataSource->getList( $dc );
if( !$qResult ) {
	showError( $dataSource->lastError() );
}

$multiselect = $pSet->multiSelect( $lookupField );
$linkField = $pSet->getLinkField( $field );
$response = array();
while( $data = $qResult->fetchAssoc() ) 
{
	if( $LookupType == LT_QUERY && $pSet->isLookupUnique($lookupField) )
	{
		if( !isset($uniqueArray) )
			$uniqueArray = array();
			
		if( in_array($data[ $displayFieldAlias ], $uniqueArray) )
			continue;
		
		$uniqueArray[] = $data[ $displayFieldAlias ];
	}
	
	$data[ $linkField ] = $cipherer->DecryptField($lookupField, $data[ $linkField ]);
	if( $LookupType == LT_QUERY )
		$data[ $displayFieldAlias ] = $cipherer->DecryptField($displayFieldName, $data[ $displayFieldAlias ]);
	
	
	$displayedValue = $data[ $displayFieldAlias ];
	if (  in_array( $pSet->getViewFormat( $lookupField ), array(FORMAT_DATE_SHORT, FORMAT_DATE_LONG, FORMAT_DATE_TIME) ) )
	{			
		$ctrlData = array();
		//if( $multiselect )
			$ctrlData[ $lookupField ] = $data[ $linkField ];
		/*else
			$ctrlData[ $lookupField ] = $displayedValue;*/			
		
		$displayedValue = $viewContainer->getControl( $lookupField )->getTextValue( $ctrlData );
	}		
	
	$response[] = $data[ $linkField ];
	$response[] = $displayedValue;
}

$respObj = array('success' => true, 'data' => array_slice($response, 0, 40));
echo printJSON($respObj);
exit();
?>