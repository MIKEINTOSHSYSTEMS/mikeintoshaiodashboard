<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include('include/xtempl.php');
$xt = new Xtempl();

$conn= $cman->getDefault();

$sql_query=$_SESSION["testsql"];

if ($_SESSION["parentsql"]) {
	// we only need one record from parent recordset for test purposes
	$_SESSION["parentsql"] = addLimit($_SESSION["parentsql"], 1, $conn->dbType);
	
	$qResultParent=$conn->query($_SESSION["parentsql"]);
	$dataParent = $qResultParent->fetchAssoc();
	if ($dataParent) {
		// prepare tags
		$tags=array();
		foreach($dataParent as $field=>$value) {
			$tags["%".$_SESSION["parentAlias"].".".$field."%"] = $value;
			$tags["%".$field."%"] = $value;
		}				
		
		// process template
		$sql_query=processTemplate($sql_query, $tags, null,"");
	}
}

//echo $sql_query;

$sql_query_all=$sql_query;
	

if( $conn->dbType == nDATABASE_MSSQLServer )
{
	$pos=strrpos(strtoupper($sql_query_all),"ORDER BY");
	if($pos)
		$sql_query_all=substr($sql_query_all,0,$pos);
}

$num_rows=100;	
$sql_query = addLimit($sql_query, $num_rows, $conn->dbType);
	


$errstr="";

if($sql_query) {
	$qResult=$conn->query($sql_query);
	$data = $qResult->fetchAssoc();
}

if(!$data || !$sql_query)
{	
	if($conn->dbType==nDATABASE_Oracle && !$sql_query)
		$errstr="Query was empty";
	if(postvalue("sql")!="makesql")
	{
		$xt->assign("sql_error_block", true);
		$xt->assign("sql_error", $errstr);
	}
	else
		$result=$errstr;
}
else
{
	$firstTime=true;
	$i=0;
	$fields_type=array();
	while($i<$num_rows && $data)
	{
		$i++;

		if ($firstTime) {
			foreach( array_keys($data) as $key ) 
			{
				if(IsBinaryType($fields_type[$key]))
						continue;
				$gKey = $key;
				
				$res_head .= "<th>" . runner_htmlspecialchars($gKey) . "</th>";		
			}
		}
		$res_body .= '<tr>';
		foreach( $data as $fld=>$val ) 
		{
			if(IsBinaryType($fields_type[$fld]))
				continue;
			if(is_array($val))
			{
				$res_body .= '<td><span></span></td>';
				continue;
			}
			$s=$val;
			if(strlen($s)>$num_rows)
				$s=substr($s,0,$num_rows);
			$res_body .= '<td><span>' . runner_htmlspecialchars($s) . '</span></td>';
		}
		$res_body .= '</tr>';
		$data = $qResult->fetchAssoc();
		$firstTime=false;
	}
	if(!IsStoredProcedure($sql_query_all))
	{
		if($conn->dbType != nDATABASE_Oracle)
			$rs=$conn->query("select count(*) from (".$sql_query_all.") as t")->fetchNumeric();
		else
			$rs=$conn->query("select count(*) from (".$sql_query_all.")")->fetchNumeric();
		$total_rows=0;
		if($data=$rs)
			$total_rows=$data[0];
	}
	if($i>0)
	{

		$xt->assign("res_head", $res_head);
		$xt->assign("res_body", $res_body);
		$xt->assign("sql_result_block", true);
		$xt->assign("total_count", $total_rows);
		if($total_rows>$num_rows)
			$xt->assign("first_rec", true);
	} 
	else 
	{
		$xt->assign("sql_message_block", true);
		$result="<p>No records to display</p>";
	}
}
$templatefile = "myquery.htm";
$xt->display($templatefile);

function addLimit($sql_query, $numRows, $dbType) {
	
	if($sql_query)
	{
		if( $dbType == nDATABASE_MySQL )
		{
			if(!strpos(strtolower($sql_query)," limit "))
				$sql_query .= " LIMIT $numRows";
		}
		elseif( $dbType == nDATABASE_MSSQLServer || $dbType == nDATABASE_Access )
		{
			if(!strpos(strtolower($sql_query)," distinct "))
			{
				if(!strpos(strtolower($sql_query)," top "))
					$sql_query = str_replace("SELECT", "SELECT TOP $numRows", strtoupper($sql_query));
			}
			else
			{
				if(!strpos(strtolower($sql_query)," top "))
					$sql_query = str_replace("SELECT DISTINCT", "SELECT DISTINCT TOP $numRows", strtoupper($sql_query));
			}
		}
		elseif( $dbType == nDATABASE_Oracle )
		{
			//
		}
		elseif( $dbType == nDATABASE_PostgreSQL )
		{
			//
		}
	}
	
	return $sql_query;
}


?>
