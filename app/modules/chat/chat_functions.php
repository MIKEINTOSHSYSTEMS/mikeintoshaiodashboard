<?php
function isGroupTarget($id){
	if(substr($id,0,1) == "G")
		return true;
	else
		return false;
}
function getGroupID($id){
	return substr($id,1);
}
function getGroupIDs($targetid){
	if(substr($targetid,0,1) == "G"){
		$gid = str_replace("G","",$targetid);
		$res = DBLookup("select ".AddFieldWrappers("ownerid")." from ".AddTableWrappers("chat_groups")." where ".AddFieldWrappers("id")."=".$gid);
		if(!$res)
			return 0;
		$res = $res.",".DBLookup("select ".AddFieldWrappers("targetid")." from ".AddTableWrappers("chat_groups")." where ".AddFieldWrappers("id")."=".$gid);
		return $res;
	}
	else
		return $targetid;
	
}
function getGroupIDsIn($targetid){
	global $loginKeyFields, $cLoginTable;
	$res = array();
	if(substr($targetid,0,1) == "G"){
		$gid = str_replace("G","",$targetid);
		$res[] = DBLookup("select ".AddFieldWrappers("ownerid")." from ".AddTableWrappers("chat_groups")." where ".AddFieldWrappers("id")."=".$gid);
		if(!count($res))
			return 0;
		$arr = explode(",",DBLookup("select ".AddFieldWrappers("targetid")." from ".AddTableWrappers("chat_groups")." where ".AddFieldWrappers("id")."=".$gid));
		$res = array_merge($res,$arr);
		
		/*$pSet = new ProjectSettings( $cLoginTable );
		$ftype = $pSet->getFieldType( $loginKeyFields[0] );
		if(NeedQuotes($ftype))
			$out = "'".implode("','",$res)."'";
		else
			$out = implode(",",$res);*/
		return $res;
	}
	else
		return array($targetid);
	
}

function getGroupMenu(){
	global $loginKeyFields;
	$userdata = Security::currentUserData();
	$countGroups = 0;
	$groups = "";
	$rs = DB::Select("chat_groups","");
	while($data = $rs->fetchAssoc()){
		$targetArr = explode(",",$data["targetid"]);
		if($data["ownerid"] == $userdata[$loginKeyFields[0]]){
			if($groups)
				$groups.=",";
			$groups.= $data["id"];
		}
		if(in_array($userdata[$loginKeyFields[0]],$targetArr)){
			if($groups)
				$groups.=",";
			$groups.= $data["id"];
		}
		
		$countGroups++;
	}
	$_SESSION["countGroups"] = $countGroups;
	
	$menu = "";
	// create group menu
	if($groups){
		$menu.= "<table width=100% >";
		$rs = DB::Select("chat_groups",AddFieldWrappers("id")." in (".$groups.")");
		while($data = $rs->fetchAssoc()){
				$author = $data["groupname"];
				if(!$author)
					$author = "Group chat";
				$isType = 0;
				$cnt_messages = 0;
				$sql = DB::PrepareSQL("select * from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("ownerid")."<>':1' and ".AddFieldWrappers("targetid")."=':2'",$userdata[$loginKeyFields[0]],"G".$data["id"]);
				$rs2 = DB::Query($sql);
				while($data2 = $rs2->fetchAssoc()){
					$arr = explode(",",$data2["isread"]);
					if(!in_array($userdata[$loginKeyFields[0]],$arr))
						$cnt_messages++;
				}
				if($cnt_messages>0)
					$cnt_messages = "<div class='indicator'>".$cnt_messages."</div>";
				else
					$cnt_messages = "";
				$avatar = "<span class='menu_typing isTypingG".$data["id"]."' id='searching-ellipsis' style='display:none;'><span>.</span><span>.</span><span>.</span></span>";
				$display_author = $author;
				if(strlen($display_author)>27)
					$display_author = substr($display_author,0,24)."...";
				$s = "";
				if($_SESSION["targetid"] == "G".$data["id"])
					$s = " td_users_selected";
				$type_popup = "user";
				if($data["ownerid"] == $userdata[$loginKeyFields[0]])
					$type_popup = "admin";
				
				$menu.= "<tr><td class='td_groups".$s."' userid='G".$data["id"]."'>".$avatar."<div style='display:inline-table' id='menuusernameG".$data["id"]."'>".$display_author."</div>".$cnt_messages;

				
				if($data["ownerid"] == $userdata[$loginKeyFields[0]]){
					$menu.= "<span class='caret_down_grchat_".$data["id"]."' rid='".$data["id"]."' owner='".$type_popup."'><svg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='currentColor' class='bi bi-caret-down-fill' viewBox='0 0 16 16'>
				  <path class='_bi-caret' d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/>
				</svg></span>";
					$menu.= "<span class='caret_up_grchat_".$data["id"]."' rid='".$data["id"]."' owner='".$type_popup."'><svg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='currentColor' class='bi bi-caret-right-fill' viewBox='0 0 16 16'>
					  <path class='_bi-caret' d='m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
					</svg></span></td><td>".$typing."</td></tr>";
				}
				else{
					$menu.= "<span class='caret_down_grchat_".$data["id"]."' rid='".$data["id"]."' owner='".$type_popup."'><svg width='1em' height='1em' viewBox='0 0 12 12' class='bi bi-x' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
					  <path class='_bi-caret' fill-rule='evenodd' d='M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z'/>
					  <path class='_bi-caret' fill-rule='evenodd' d='M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z'/>
					</svg></span>";
					$menu.= "<span class='caret_up_grchat_".$data["id"]."' rid='".$data["id"]."' owner='".$type_popup."'><svg width='1em' height='1em' viewBox='0 0 12 12' class='bi bi-x' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
					  <path class='_bi-caret' fill-rule='evenodd' d='M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z'/>
					  <path class='_bi-caret' fill-rule='evenodd' d='M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z'/>
					</svg></span></td><td>".$typing."</td></tr>";
				}
				if(!$_SESSION["targetid"])
					$_SESSION["targetid"] = "G".$data["id"];
		}
		$menu.= "</table>";
		$menu = "<div class='div_users'>".$menu."</div>";
	}
	
	return $menu;
}


function getMenu(){
	global $loginKeyFields, $cLoginTable,$cDisplayNameField, $cUserpicField, $cUserNameField;
	if(!$cDisplayNameField)
		$cDisplayNameField = $cUserNameField;
	$userdata = Security::currentUserData();
	$users = array();
	if(!isGroupTarget($_SESSION["targetid"]) && $_SESSION["targetid"])
		$users[] = $_SESSION["targetid"];
	$sql = DB::PrepareSQL("select ".AddFieldWrappers("ownerid")." from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("targetid")."=':1' group by ".AddFieldWrappers("ownerid"),$userdata[$loginKeyFields[0]]);
	$rs = DB::Query($sql);
	$countUsers = 0;
	while($data = $rs->fetchAssoc()){
		if(!isGroupTarget($data["ownerid"])){
			$users[] = $data["ownerid"];
			$countUsers++;
		}
	}
	$sql = DB::PrepareSQL("select ".AddFieldWrappers("targetid")." from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("ownerid")."=':1' group by ".AddFieldWrappers("targetid"),$userdata[$loginKeyFields[0]]);
	$rs = DB::Query($sql);
	while($data = $rs->fetchAssoc()){
		if(!isGroupTarget($data["targetid"])){
			$users[] = $data["targetid"];
			$countUsers++;
		}
	}
	$_SESSION["countUsers"] = $countUsers;
	$menu = "";
	
	
	$menu = "<div class='div_users'>";
	
	// create menu
	if(count($users)){
		$menu.= "<table width=100% >";
		$dc = new DsCommand();
		$conditions = array();
		$conditions[] = DataCondition::FieldIs( $loginKeyFields[0], dsopIN, $users );
		$dc->filter = DataCondition::_And( $conditions );
		$datasource = getLoginDataSource();
		$rs = $datasource->getList( $dc );
		while($data = $rs->fetchAssoc()){
				$author = $data[$cDisplayNameField];
				if(!$author)
					$author = $data[$cUserNameField];
				$rs2 = DB::Select("chat_users",array("userid"=>$data[$loginKeyFields[0]]));
				$isType = 0;
				if($data2 = $rs2->fetchAssoc()){
					if(strtotime(date("Y-m-d H:i:s")) - strtotime($data2["lastaccess"]) > $_SESSION["loginTime"])
						$cl = "offline";
					else
						$cl = "online";
					$isType = $data2["isTyping"];
				}
				else
					$cl = "offline";
				$cnt_messages = "";
				$sql = DB::PrepareSQL("select count(".AddFieldWrappers("id").") as cnt from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("isread")."='0' and ".AddFieldWrappers("ownerid")."=':1' and ".AddFieldWrappers("targetid")."=':2'",$data[$loginKeyFields[0]],$userdata[$loginKeyFields[0]]);
				$rs2 = DB::Query($sql);
				$data2 = $rs2->fetchAssoc();
				if($data2["cnt"]>0)
					$cnt_messages = "<div class='indicator'>".$data2["cnt"]."</div>";
				$onoffline = "<div id='userIsOnline_".$data[$loginKeyFields[0]]."' class='".$cl." ind_state' align=center></div>";
				$avatar = getAvatar($data,"",false)."<span class='menu_typing isTyping".$data[$loginKeyFields[0]]."' id='searching-ellipsis' style='display:none;'><span>.</span><span>.</span><span>.</span></span>";
				$display_author = $author;
				if(strlen($display_author)>27)
					$display_author = substr($display_author,0,24)."...";
				$s = "";
				if($_SESSION["targetid"] == $data[$loginKeyFields[0]])
					$s = " td_users_selected";
				$menu.= "<tr><td class='td_users".$s."' userid='".$data[$loginKeyFields[0]]."'>".$onoffline.$avatar."<div style='display:inline-table' id='menuusername".$data[$loginKeyFields[0]]."'>".$display_author."</div>".$cnt_messages."</td><td>".$typing."</td></tr>";
				if(!$_SESSION["targetid"])
					$_SESSION["targetid"] = $data[$loginKeyFields[0]];
		}
			
		$menu.= "</table></div>";
	}
	return $menu;
}

function getAjaxMenu(){
	$userdata = Security::currentUserData();
	global $loginKeyFields, $cLoginTable,$cDisplayNameField, $cUserpicField, $cUserNameField;
	if(!$cDisplayNameField)
		$cDisplayNameField = $cUserNameField;

	$users = array();
	if(!isGroupTarget($_SESSION["targetid"]) && $_SESSION["targetid"])
		$users[] = $_SESSION["targetid"];
	$sql = DB::PrepareSQL("select ".AddFieldWrappers("ownerid")." from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("targetid")."=':1' group by ".AddFieldWrappers("ownerid"),$userdata[$loginKeyFields[0]]);
	$rs = DB::Query($sql);
	$countUsers = 0;
	while($data = $rs->fetchAssoc()){
		if(!isGroupTarget($data["ownerid"])){
			$users[] = $data["ownerid"];
			$countUsers++;
		}
	}
	$sql = DB::PrepareSQL("select ".AddFieldWrappers("targetid")." from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("ownerid")."=':1' group by ".AddFieldWrappers("targetid"),$userdata[$loginKeyFields[0]]);
	$rs = DB::Query($sql);
	while($data = $rs->fetchAssoc()){
		if(!isGroupTarget($data["targetid"])){
			$users[] = $data["targetid"];
			$countUsers++;
		}
	}
	if($_SESSION["countUsers"] == $countUsers){
		$arrMenu = array();
		if(count($users)){
			$dc = new DsCommand();
			$conditions = array();
			$conditions[] = DataCondition::FieldIs( $loginKeyFields[0], dsopIN, $users );
			$dc->filter = DataCondition::_And( $conditions );
			$datasource = getLoginDataSource();
			$rs = $datasource->getList( $dc );
			while($data = $rs->fetchAssoc()){
				$elemMenu = array();
				$rs2 = DB::Select("chat_users", array("userid"=>$data[$loginKeyFields[0]]));
				$isType = 0;
				if($data2 = $rs2->fetchAssoc()){
					if(strtotime(date("Y-m-d H:i:s")) - strtotime($data2["lastaccess"]) > $_SESSION["loginTime"])
						$cl = "offline";
					else{
						$cl = "online";
						if(!isGroupTarget($data2["isTyping"]))
							$isType = $data2["isTyping"];
					}
				}
				else
					$cl = "offline";
				
				//$isType = $data2["isTyping"];
				
				
				$cnt_messages = "";
				$sql = DB::PrepareSQL("select count(".AddFieldWrappers("id").") as cnt from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("isread")."='0' and ".AddFieldWrappers("ownerid")."=':1' and ".AddFieldWrappers("targetid")."=':2'",$data[$loginKeyFields[0]],$userdata[$loginKeyFields[0]]);
				$rs2 = DB::Query($sql);
				$data2 = $rs2->fetchAssoc();
				if($data2["cnt"]>0)
					$cnt_messages = $data2["cnt"];
				$elemMenu["notify"] = $cnt_messages;
				$elemMenu["status"] = $cl;
				$elemMenu["typing"] = $isType;
				$elemMenu["username"] = $data[$cUserNameField];
				$arrMenu[$data[$loginKeyFields[0]]] = $elemMenu;
				
				if(!$_SESSION["targetid"])
					$_SESSION["targetid"] = $data[$loginKeyFields[0]];

			}
		}
	}
	else{
		$arrMenu["menu"] = getMenu();
		$_SESSION["countUsers"] = $countUsers;
	}
	return $arrMenu;
}

function getGroupAjaxMenu(){
	global $loginKeyFields;
	$userdata = Security::currentUserData();
	$countGroups = 0;
	$groups = "";
	$rs = DB::Select("chat_groups","");
	while($data = $rs->fetchAssoc()){
		if($data["ownerid"] == $userdata[$loginKeyFields[0]]){
			if($groups)
				$groups.=",";
			$groups.= $data["id"];
			$countGroups++;
		}
		$targetArr = explode(",",$data["targetid"]);
		if(in_array($userdata[$loginKeyFields[0]],$targetArr) && $data["ownerid"] != $userdata[$loginKeyFields[0]]){
			if($groups)
				$groups.=",";
			$groups.= $data["id"];
			$countGroups++;
		}
	}
	$arrMenu = array();
	//$arrMenu["tmp"] = $_SESSION["countGroups"]."---".$countGroups;
	if($_SESSION["countGroups"] == $countGroups){
	// create group menu
		if($groups){
			$countGroups = 0;
			$rs = DB::Select("chat_groups",AddFieldWrappers("id")." in (".$groups.")");
			while($data = $rs->fetchAssoc()){
				$elemMenu = array();
				$isType = 0;
				$rs2 = DB::Select("chat_users", array("isTyping"=>"G".$data["id"]));
				$isType = 0;
				if($data2 = $rs2->fetchAssoc()){
					if(isGroupTarget($data2["isTyping"]) && $data2["userid"]!=$userdata[$loginKeyFields[0]])
							$isType = $data2["isTyping"];
				}
				$cnt_messages = 0;
				$sql = DB::PrepareSQL("select * from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("ownerid")."<>':1' and ".AddFieldWrappers("targetid")."=':2'",$userdata[$loginKeyFields[0]],"G".$data["id"]);
				$rs2 = DB::Query($sql);
				while($data2 = $rs2->fetchAssoc()){
					$arr = explode(",",$data2["isread"]);
					if(!in_array($userdata[$loginKeyFields[0]],$arr))
						$cnt_messages++;
				}
				$elemMenu["notify"] = $cnt_messages;
				$elemMenu["typing"] = $isType;
				$elemMenu["name"] = $data["groupname"];
				$arrMenu["G".$data["id"]] = $elemMenu;
				$countGroups++;
			}
			if($_SESSION["countGroups"] != $countGroups){
				$arrMenu["menu"] = getGroupMenu();
				$_SESSION["countGroups"] = $countGroups;
			}
		}
	}
	else{
		$arrMenu["menu"] = getGroupMenu();
		$_SESSION["countGroups"] = $countGroups;
	}
	
	return $arrMenu;
}


function getUserStatus($targetid){
	
	$rs2 = DB::Select("chat_users", array("userid"=>$targetid));
	if($data2 = $rs2->fetchAssoc()){
		if(strtotime(date("Y-m-d H:i:s")) - strtotime($data2["lastaccess"]) > $_SESSION["loginTime"]){
			$cl = "offline_header";
		}
		else{
			$cl = "online";
		}
	}
	else
		$cl = "offline_header";
	return $cl;
}

function getUserStatusHeader($targetid){
	$resArray = array();
	if(isGroupTarget($targetid)){
		$ids = getGroupIDs($targetid);
		$usersArray = explode(",",$ids);
		foreach($usersArray as $tid)
			$resArray[] = getStatusUser($tid);
	}
	else{
		$resArray[] = getStatusUser($targetid);
	}
	return $resArray;
}

function getStatusUser($targetid){
	$rs2 = DB::Select("chat_users", array("userid"=>$targetid));
	if($data2 = $rs2->fetchAssoc()){
		if(strtotime(date("Y-m-d H:i:s")) - strtotime($data2["lastaccess"]) > $_SESSION["loginTime"]){
			$resArray = array( $targetid => "offline_header");
		}
		else{
			$resArray = array( $targetid => "online");
		}
	}
	else
		$resArray = array( $targetid => "offline_header");
	return $resArray;
}

function getHeader(){
	global $loginKeyFields, $cLoginTable,$cDisplayNameField,$cUserNameField;
	if(!$cDisplayNameField)
		$cDisplayNameField = $cUserNameField;
	if(!$_SESSION["targetid"])
		$_SESSION["targetid"]=0;
	$hiddenInput  = "<input type='hidden' id=search_input value=''><input type='hidden' id=save_anchor value='".$_SESSION["anchor"]."'><input type='hidden' id=searchanchor value=''>";
	$userdata = Security::currentUserData();
	if(isGroupTarget($_SESSION["targetid"])){	
		$currentUserName.= "<div class='currUserNameDiv'>";
		$rs = DB::Select("chat_groups", array("id" => getGroupID($_SESSION["targetid"])));
		$data = $rs->fetchAssoc();
		$currentUserName.= "<div class='header_groupname'>".$data["groupname"]."</div>";
		$type_popup = "user";
		if($data["ownerid"] == $userdata[$loginKeyFields[0]])
			$type_popup = "admin";
		$currentUserName.= "<div class='header_groupname_edit' rid='".$data["id"]."' owner='".$type_popup."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg></div>";
		$usersArray = explode(",",$data["targetid"]);
		$usersArray[] = $data["ownerid"];
		sort($usersArray);
		foreach($usersArray as $users){
			if($userdata[$loginKeyFields[0]] != $users){
				DB::SetConnection(DB::ConnectionByTable($cLoginTable));
				$rs2 = DB::Select( $cLoginTable, array( $loginKeyFields[0] => $users ) );
				DB::SetConnection(DB::DefaultConnection());
				if($data2 = $rs2->fetchAssoc()){
					$avatar = getAvatar($data2,"",true);
					$cl = getUserStatus($data2[$loginKeyFields[0]]);
					$onoffline = "<div class='".$cl." ind_state_header_group' align=center id='headerstatus".$data2[$loginKeyFields[0]]."'></div>";
					$uname = $data2[$cDisplayNameField];
					if(!$uname)
						$uname = $data2[$cUserNameField];
					$currentUserName.= "<div style='padding-right:1px;padding-top:0px'>".$onoffline.$avatar." <span class='header_group'>".$uname."</span></div>";
				}
			}
		}
		$currentUserName.= "</div>";
		/*$userdata = Security::currentUserData();
		if($userdata[$loginKeyFields[0]] == $data["ownerid"])
			$currentUserName.= "<div class='close_chat'><button id='delete_chat' class='btn btn-primary btn-xs'>".getCustomLabel("delete_chat")."</button></div>";
		else
			$currentUserName.= "<div class='close_chat'><a id='leave_chat' href='javascript:void(0);'>".getCustomLabel("leave_chat")."</a></div>";*/
	}
	else{
		$currentUserName = "";
		DB::SetConnection(DB::ConnectionByTable($cLoginTable));
		$rs = DB::Select( $cLoginTable, array( $loginKeyFields[0] => $_SESSION["targetid"] ) );
		DB::SetConnection(DB::DefaultConnection());
		if($data = $rs->fetchAssoc()){
			$avatar = getAvatar($data, "_message", false);
			$cl = getUserStatus($data[$loginKeyFields[0]]);
			$uname = $data[$cDisplayNameField];
			if(!$uname)
				$uname = $data[$cUserNameField];
			$onoffline = "<div class='".$cl." ind_state_header' align=center id='headerstatus".$data[$loginKeyFields[0]]."'></div>";
			$currentUserName = $onoffline.$avatar." <span class='header_name'>".$uname."</span>";
		}
	}
	return $currentUserName.$hiddenInput;
}

function getMessageRecordSet(){
	$userdata = Security::currentUserData();
	global $loginKeyFields, $cLoginTable,$cDisplayNameField, $cUserpicField, $cUserNameField;
	$dc = new DsCommand();
	$conditions1 = array();
	$conditions2 = array();
	if(!isGroupTarget($_SESSION["targetid"])){
		if(!$_SESSION["searchValue"]){
			//$sqlGlobal = "select * from chat_history where targetid='".$userdata[$loginKeyFields[0]]."' and ownerid='".$_SESSION["targetid"]."' or targetid='".$_SESSION["targetid"]."' and ownerid='".$userdata[$loginKeyFields[0]]."' order by id";	
			$conditions1[] = DataCondition::FieldIs( "targetid", dsopEQUAL, $userdata[$loginKeyFields[0]] );
			$conditions1[] = DataCondition::FieldIs( "ownerid", dsopEQUAL, $_SESSION["targetid"] );
			$conditions2[] = DataCondition::FieldIs( "targetid", dsopEQUAL, $_SESSION["targetid"] );
			$conditions2[] = DataCondition::FieldIs( "ownerid", dsopEQUAL, $userdata[$loginKeyFields[0]] );
			$dc->filter = DataCondition::_Or( array(
				DataCondition::_And( $conditions1 ),
				DataCondition::_And( $conditions2 ),
			));
		}
		else{
			
			//$sqlGlobal = "select * from chat_history where targetid='".$userdata[$loginKeyFields[0]]."'".$_SESSION["searchSQLValue"]." or ownerid='".$userdata[$loginKeyFields[0]]."'".$_SESSION["searchSQLValue"]." order by id";	
			$conditions1[] = DataCondition::FieldIs( "targetid", dsopEQUAL, $userdata[$loginKeyFields[0]] );
			$conditions1[] = DataCondition::FieldIs( "messages", dsopCONTAIN, $_SESSION["searchValue"] );
			$conditions2[] = DataCondition::FieldIs( "ownerid", dsopEQUAL,  $userdata[$loginKeyFields[0]] );
			$conditions2[] = DataCondition::FieldIs( "messages", dsopCONTAIN, $_SESSION["searchValue"] );
			$dc->filter = DataCondition::_Or( array(
				DataCondition::_And( $conditions1 ),
				DataCondition::_And( $conditions2 ),
			));
		}
	}
	else{
		if(!$_SESSION["searchValue"]){
			//$sqlGlobal = "select * from chat_history where targetid='".$_SESSION["targetid"]."' and ownerid in (".getGroupIDsIn($_SESSION["targetid"]).") order by id";	
			$conditions1[] = DataCondition::FieldIs( "targetid", dsopEQUAL, $_SESSION["targetid"] );
			$conditions1[] = DataCondition::FieldIs( "ownerid", dsopIN, getGroupIDsIn($_SESSION["targetid"]) );
			$dc->filter = DataCondition::_And( $conditions1 );
		}
		else{
			//$sqlGlobal = "select * from chat_history where ownerid in (".getGroupIDsIn($_SESSION["targetid"]).")".$_SESSION["searchSQLValue"]." order by id";	
			$conditions1[] = DataCondition::FieldIs( "messages", dsopCONTAIN, $_SESSION["searchValue"] );
			$conditions1[] = DataCondition::FieldIs( "ownerid", dsopIN, getGroupIDsIn($_SESSION["targetid"]) );
			$dc->filter = DataCondition::_And( $conditions1 );
		}
	}
	$dc->order = array(array( "column" => "id", "dir" => "ASC" ));
	$datasource = getDataSource("chat_history");
	$rs = $datasource->getList( $dc ); 
	return $rs;
}

function getMessage($isStart){
	$scrollStep = 14;
	$userdata = Security::currentUserData();
	global $loginKeyFields, $cLoginTable,$cDisplayNameField, $cUserpicField, $cUserNameField;
	if(!$cDisplayNameField)
		$cDisplayNameField = $cUserNameField;
	$period = DBLookup("select ".addFieldWrappers("timeperiod")." from ".addTableWrappers("chat_settings"));
	$res_msg = "";
	$rs = getMessageRecordSet();
	$totalMessages = 0;
	while($data = $rs->fetchAssoc()){
		if(isAddMessage($data,$period,$isStart) && $data["status"]!="delete")
			$totalMessages++;
	}
	$rs = getMessageRecordSet();
	$counter = 0;
	$counterTrue = 0;
	$res_msg = array();
	$firstID = "";
	while($data = $rs->fetchAssoc()){
		if(isAddMessage($data,$period,$isStart) && $data["status"]!="delete" && !$data["isVideo"]){
			if(isCounter($counter,$totalMessages,$scrollStep,$data)){
				DB::SetConnection(DB::ConnectionByTable($cLoginTable));
				$rs2 = DB::Select($cLoginTable, array($loginKeyFields[0]=>$data["ownerid"]));
				DB::SetConnection(DB::DefaultConnection());
				$data2 = $rs2->fetchAssoc();
				$avatar = getAvatar($data2,"_message", false);
				$author = $data2[$cDisplayNameField];
				if(!$author)
					$author = $data2[$cUserNameField];
				$timeArray = array();
				$arrtmp = explode(" ",$data["created"]);
				$arrtmp1 = explode("-",$arrtmp[0]);
				$arrtmp2 = explode(":",$arrtmp[1]);
				$timeArray[0] = $arrtmp1[0];
				$timeArray[1] = $arrtmp1[1];
				$timeArray[2] = $arrtmp1[2];
				$timeArray[3] = $arrtmp2[0];
				$timeArray[4] = $arrtmp2[1];
				$timeArray[5] = "00";
				$not_read = "";
				if(!$firstID)
					$firstID = $data["id"];
				if($data["ownerid"]==$userdata[$loginKeyFields[0]]){   //// || isGroupTarget($_SESSION["targetid"])
					if(!$data["isread"] || $data["isread"] == $data["ownerid"])
						$not_read = '<span class="not_read'.$data["id"].'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18" width="14" height="18"><path fill="currentColor" d="M12.502 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span>';
					else{
						if(!isGroupTarget($_SESSION["targetid"]))
							$not_read = '<span class="not_read'.$data["id"].'" style="color:#48D1CC"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18" width="14" height="18"><path fill="currentColor" d="M12.502 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span>';						else{
							$ids = getGroupIDs($_SESSION["targetid"]);
							$arrayIDs = explode(",",$ids);
							sort($arrayIDs);
							$arrayRead = explode(",",$data["isread"]);
							sort($arrayRead);
							if($arrayIDs == $arrayRead)
								$not_read = '<span class="not_read'.$data["id"].'" style="color:#48D1CC"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span>';
							else
								$not_read = '<span class="not_read'.$data["id"].'" style="color:#48D1CC"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18" width="14" height="18"><path fill="currentColor" d="M12.502 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span>';
						}
					}
				}
				if(date("Y-m-d",strtotime($data["created"])) == date("Y-m-d"))
					$current_date = str_format_time($timeArray);
				else
					$current_date = str_format_datetime($timeArray);
				$current_date = str_replace(":00 "," ",$current_date);
				$message_block_search = "";
				if($_SESSION["searchValue"])
					$message_box_search = " message_block_search";
				$actpoint = "";
				if($data["ownerid"] == $userdata[$loginKeyFields[0]])
					$actpoint = " addpoint";
				$search_class="";
				if(postvalue("searchanchor") == $data["id"])
					$search_class=" select_search_result";
				
				$res_msg[$data["id"]] = "<div class='message_block".$message_box_search.$actpoint.$search_class."' anchor=".$data["id"]."><div>";
				if($_SESSION["searchValue"]){
					$targetid = $data["targetid"];
					if($targetid == $userdata[$loginKeyFields[0]])
						$targetid = $data["ownerid"];

					if(!isGroupTarget($targetid)){
						DB::SetConnection(DB::ConnectionByTable($cLoginTable));
						$rslog = DB::Select($cLoginTable, array($loginKeyFields[0]=>$targetid));
						DB::SetConnection(DB::DefaultConnection());
						$datalog = $rslog->fetchAssoc();
						$channel = $datalog[$cDisplayNameField];
						if(!$channel)
							$channel = $datalog[$cUserNameField];
					}
					else{
						$id = getGroupID($targetid);
						$rslog = DB::Select("chat_groups", array("id"=>$id));
						$datalog = $rslog->fetchAssoc();
						$channel = $datalog["groupname"];
					}
					$res_msg[$data["id"]].="<div class='message_search'>".$channel." - ".date("M dS,Y",strtotime($data["created"]));
					if($_SESSION["searchValue"])
						$res_msg[$data["id"]].="<a class='a_channel' href='#' onclick='clickAnchor(".$data["id"].",\"".$targetid."\");return false;'>".GetCustomLabel("view_in_channel")."</a>";
					$res_msg[$data["id"]].="</div>";
				}
				$res_msg[$data["id"]].="<div class='message_avatar'>".$avatar."</div>";
				$res_msg[$data["id"]].="<div class='message_header'><table><tr><td><b>".$author."</b> <span class='message_date'>".$current_date.$not_read."</span></td>";
				
				$res_msg[$data["id"]].="</tr></table></div>";
				$text = str_replace("\n","<br>",$data["messages"]);
				if($_SESSION["searchValue"]){
					$text = str_replace(postvalue("search"),"<span style='background:rgba(242,199,68,.4);'>".postvalue("search")."</span>",$text);
				}
				if($data["soundRecord"]){
					$arr = my_json_decode($data["soundRecord"]);
					foreach($arr as $src)
						$text.= "<div><audio class='' controls='controls' autobuffer='autobuffer'><source src='".$src."'></audio></div>";
				}
				$res_msg[$data["id"]].= "<div class='message_author'>".$text."</div>";
				$strfiles = getAttachment($data);
				if($strfiles)
					$res_msg[$data["id"]].= "<div class='message_author'>".$strfiles."</div>";
				$res_msg[$data["id"]].= "</div>";
				$res_msg[$data["id"]].= "<div apid='".$data["id"]."' class='action_point'></div></div>";
				$counterTrue++;
			}
			$counter++;			
		}
		
	}
	if($firstID)
		$_SESSION["firstMessID"] = $firstID;
	if(postvalue("searchanchor")){
		$_SESSION["scroll_step"] = floor($counterTrue/$scrollStep);
	}
	if($counter == 0 && $isStart=="true")
		$res_msg[0] = "<span class='nomessage'>".GetCustomLabel("nomessage_id")."</span>";

	return $res_msg;
}
function getAttachment($data){
	global $loginKeyFields, $cLoginTable,$cDisplayNameField, $cUserpicField, $cUserNameField;
	if(!$cDisplayNameField)
		$cDisplayNameField = $cUserNameField;
	$rs2 = DB::Select("chat_files", array("messageid"=>$data["id"]));
	$strfiles = "";
	$data2 = $rs2->fetchAssoc();
	$filesArray = my_json_decode($data2["files"]);
	foreach($filesArray as $ind=>$val){
		if($strfiles)
			$strfiles.="&nbsp;&nbsp;&nbsp;";
		$fileType = getContentTypeByExtension(substr($val["usrName"], strrpos($val["usrName"], '.')));
		$icon = "<img src='images/icons/".getIconByFileType($fileType, $val["usrName"])."' />";
		$p = strrpos($val["usrName"],".");
		$ext = CheckImageExtension($val["usrName"]);
		if( $ext ){
			$strfiles.= "<div style='display:inline-block;vertical-align:top;padding-right:10px;' class='fname_preview'>".$val["usrName"]."</div>";
			$file = file_get_contents(getabspath($val["name"]));
			$src = "data:image/png;base64,".base64_encode($file);
			$strfiles.= "<div style='display:none1'><a class='message_files' dir='LTR' href='javascript:void(0)' onclick='showPictureInPopup(\"".$val["usrName"]."\",".$data2["id"].");'><img width=200px src='".$src."'></a></div>";
		}
		else{
			$fsize = $val["size"];
			if($val["size"]<1000)
				$fsize = $val["size"]." B";
			else
				$fsize = round($val["size"]/1000)." kB";
			$fname = "<table><tr><td rowspan=2>".$icon."&nbsp;</td><td><b>".$val["usrName"]."</b></td></tr><tr><td>".$fsize."</td></tr></table>";
			$strfiles.= "<div style='display:inline-block;vertical-align:top;padding-right:10px;' class='fname_preview'>".$val["usrName"]."</div>";
			$strfiles.= "<div style='display:none1'><a class='message_files' href='mfhandler.php?file=".$val["usrName"]."&table=chat_files&field=files&pageType=list&page=list&key1=".$data2["id"]."'>";
			$strfiles.= "<div class='files_border'>".$fname."</div>";
			$strfiles.= "</a></div>";
		}
	}
	return $strfiles;
}

function getAvatar($data, $cl = "", $needLetter = false){
	global $loginKeyFields, $cLoginTable,$cDisplayNameField, $cUserpicField, $cUserNameField;
	if(!$cDisplayNameField)
		$cDisplayNameField = $cUserNameField;
	if($data[$cUserpicField]){
		DB::SetConnection(DB::ConnectionByTable($cLoginTable));
		$rs2 = DB::Select($cLoginTable, array($loginKeyFields[0]=>$data[$loginKeyFields[0]]));
		DB::SetConnection(DB::DefaultConnection());
		$data2 = $rs2->fetchAssoc();
		$src = "data:image/png;base64,".base64_encode($data2[$cUserpicField]);
		$avatar = "<img id='menuAvatar".$data[$loginKeyFields[0]]."' class='menu_avatar".$cl."' src='".$src."' />";
	}
	else{
		$letter = "";
		if($needLetter){
			if($data[$cDisplayNameField])
				$letter = substr($data[$cDisplayNameField],0,1);
			else
				$letter = substr($data[$cUserNameField],0,1);
			$letter = "<span class='user_letter usernamepopup'>".strtoupper($letter)."</span>";
		}
		$avatar = "<img class='menu_avatar".$cl." usernamepopup' src='images/no_avatar.jpg' />".$letter;
	}
	return $avatar;
}

function isAddMessage($data,$period,$isStart){
	$t = explode(" ",this_microtime());
	$now = date("Y-m-d H:i:s",$t[1]).substr((string)$t[0],1,4)."000";
	if(strtotime($data["created"])>strtotime($now)-$period || $isStart=="true")
		return true;
	else
		return false;
	
}

function isCounter($counter,$totalMessages,$scrollStep,$data){
	if(postvalue("searchanchor")){
		if($data["id"] >= postvalue("searchanchor"))
			return true;
		else
			return false;
	}
	else{
		if($counter>=$totalMessages-$scrollStep-$_SESSION["scroll_step"]*$scrollStep)
			return true;
		else
			return false;
	}
}

function getDeleteMessage(){
	$res = array();
	$period = DBLookup("select ".AddFieldWrappers("timeperiod")." from ".AddTableWrappers("chat_settings"));	
	$rs = DB::Select("chat_history", array("status"=>"delete"));
	while($data = $rs->fetchAssoc()){
		$res[] = $data["id"];
		if(strtotime(date("Y-m-d H:i:s")) - strtotime($data["status_created"])>=$period*2)
			DB::Delete("chat_history", array("id"=>$data["id"]));
	}
	return $res;
}
function getEditMessage(){
	$res = array();
	$period = DBLookup("select ".AddFieldWrappers("timeperiod")." from ".AddTableWrappers("chat_settings"));	
	$rs = DB::Select("chat_history", array("status"=>"edit"));
	while($data = $rs->fetchAssoc()){
		$res[] = $data["id"];
		if(strtotime(date("Y-m-d H:i:s")) - strtotime($data["status_created"])>=$period*2)
			DB::Delete("chat_history", array("id"=>$data["id"]));
	}
	return $res;
}
function updateIsRead(){
	global $loginKeyFields, $cLoginTable;
	$userdata = Security::currentUserData();
		if($_SESSION["targetid"]){
		if(strpos(postvalue("url"),"chat_history_add")>0 || strpos(postvalue("url"),"chat_history/add")>0){
			if(!isGroupTarget($_SESSION["targetid"])){
				DB::Update("chat_history",array("isread"=>$userdata[$loginKeyFields[0]]),array("ownerid"=>$_SESSION["targetid"],"targetid"=>$userdata[$loginKeyFields[0]]));
			}
			else{
				$targetIDs = getGroupIDsIn($_SESSION["targetid"]);
				/*$pSet = new ProjectSettings( $cLoginTable );
				$ftype = $pSet->getFieldType( $loginKeyFields[0] );
				$val = $userdata[$loginKeyFields[0]];
				if(NeedQuotes($ftype))
					$val = "'".$userdata[$loginKeyFields[0]]."'";
				$rs2 = DB::Query("select * from chat_history where status<>'delete' and targetid='".$_SESSION["targetid"]."' and ".$val." in (".$targetIDs.")");*/
				
				$dc = new DsCommand();
				$conditions = array();
				$conditions[] = DataCondition::FieldIs( "targetid", dsopEQUAL, $_SESSION["targetid"] );
				//$conditions[] = DataCondition::FieldIs( $userdata[$loginKeyFields[0]], dsopIN, $targetIDs );
				$conditions[] = DataCondition::_Not( DataCondition::FieldIs( "status", dsopEQUAL, 'delete' ) );
				$dc->filter = DataCondition::_And( $conditions );
				$datasource = getDataSource("chat_history");
				$rs2 = $datasource->getList( $dc );

				while($data2 = $rs2->fetchAssoc()){
					if(in_array($userdata[$loginKeyFields[0]],$targetIDs)){
						$arrayRead = array();
						$arrayRead = explode(",",$data2["isread"]);
						$key = array_search(0, $arrayRead);
						if (false !== $key && $arrayRead[0]=="0")
							unset($arrayRead[$key]);
						if(!in_array($userdata[$loginKeyFields[0]],$arrayRead)){
							$arrayRead[] = $userdata[$loginKeyFields[0]];
							$isRead = implode(",",$arrayRead);
							DB::Update("chat_history",array("isread"=>$isRead),"id=".$data2["id"]);
						}
					}
				}
			}
		}
	}
}

function getIsReadStatus(){
	global $loginKeyFields;
	$userdata = Security::currentUserData();
	$isRead = array();
	$rs = DB::Select("chat_history",array("targetid"=>$_SESSION["targetid"],"ownerid"=>$userdata[$loginKeyFields[0]]));
	while($data = $rs->fetchAssoc()){
		if($data["isread"] && $data["isread"] != $data["ownerid"] && $data["id"]>=$_SESSION["firstMessID"]){
			if(!isGroupTarget($_SESSION["targetid"]))
				$isRead[$data["id"]] = 2;
			else{
				$ids = getGroupIDs($_SESSION["targetid"]);
				$arrayIDs = explode(",",$ids);
				if(!in_array($userdata[$loginKeyFields[0]],$arrayIDs))
					$arrayIDs[] = $userdata[$loginKeyFields[0]];
				sort($arrayIDs);
				$arrayRead = explode(",",$data["isread"]);
				sort($arrayRead);
				if($arrayIDs == $arrayRead)
					$isRead[$data["id"]] = 3;
				else
					$isRead[$data["id"]] = 2;
			}
		}
	}
	return $isRead;
}

function getVideoCallData(){
	global $loginKeyFields, $cLoginTable, $cUserpicField, $cUserNameField;
	$userdata = Security::currentUserData();
	$userid = $userdata[$loginKeyFields[0]];
	$sql = DB::PrepareSQL("select * from ".AddTableWrappers("chat_history")." where ".AddFieldWrappers("targetid")."=:1 and ".AddFieldWrappers("isVideo").">0",$userid);
	$rs = DB::Query($sql);
	if($data = $rs->fetchAssoc()){
		$_SESSION["targetid"] = $data["ownerid"];
		DB::SetConnection(DB::ConnectionByTable($cLoginTable));
		$rs2 = DB::Select( $cLoginTable, array( $loginKeyFields[0] => $data["ownerid"]) );
		DB::SetConnection(DB::DefaultConnection());
		$data2 = $rs2->fetchAssoc();
		
		DB::Delete("chat_history", array("targetid"=>$userid, "isVideo"=>1));		
		
		if($data2[$cUserpicField])
			$src = "data:image/png;base64,".base64_encode($data2[$cUserpicField]);
		else
			$src = "images/no_avatar.jpg";
		
		return array("msg"=>$data["messages"],"avatar"=>$src, "name"=>$data2[$cUserNameField], "isVideo"=>$data["isVideo"]);
	}
	else
		return array("isVideo"=>0);
}

function this_microtime(){
	return microtime();
}
?>