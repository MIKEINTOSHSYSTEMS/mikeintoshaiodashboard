<?php

function sortKBArticles($param_a,$param_b)
{
    #region pass-by-value parameters
    $a = $param_a;
    $b = $param_b;
    #endregion

    if ($a["word_matches"] == $b["word_matches"])
    {
        return 0;
    }
    if ($a["word_matches"] < $b["word_matches"])
    {
        return -1;
    }
    return 1;
}
function getHowAgo($date) {
    $time_ago = strtotime($date);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed;
    $minutes    = round($time_elapsed / 60);
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400);
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640);
    $years      = round($time_elapsed / 31207680);
    if ($seconds <= 60) {
        return GetCustomLabel("just_now");
    }
    //Minutes
    else if ($minutes <= 60) {
        if ($minutes == 1) {
            return GetCustomLabel("one_minute_ago");
        } else {
            return str_replace("%minutes%",$minutes,GetCustomLabel("count_minutes_ago"));
        }
    }
    //Hours
    else if ($hours <= 24) {
        if ($hours == 1) {
            return GetCustomLabel("an_hour_ago");
        } else {
            return str_replace("%hours%",$hours,GetCustomLabel("count_hours_ago"));
        }
    }
    //Days
    else if ($days <= 7) {
        if ($days == 1) {
            return GetCustomLabel("yesterday");
        } else {
            return str_replace("%days%",$days,GetCustomLabel("count_days_ago"));
        }
    }
    //Weeks
    else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            return GetCustomLabel("a_week_ago");
        } else {
            return str_replace("%weeks%",$weeks,GetCustomLabel("count_week_ago"));
        }
    }
    //Months
    else if ($months <= 12) {
        if ($months == 1) {
            return GetCustomLabel("a_month_ago");
        } else {
            return str_replace("%months%",$months,GetCustomLabel("count_month_ago"));
        }
    }
    //Years
    else {
        if ($years == 1) {
            return GetCustomLabel("one_year_ago");
        } else {
            return str_replace("%years%",$years,GetCustomLabel("count_year_ago"));
        }
    }
}

function getusersInTicket($ticket_id) {
    $userData = Security::currentUserData();
    $active_time = time() - 30; 
    $active_time_format = date("Y-m-d H:i:s",$active_time);
    DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
    $sql = DB::PrepareSql("select * from ".AddTableWrappers($_SESSION["user_table_for_query"])." where ".AddFieldWrappers("last_activity").">=':1' and ".AddFieldWrappers($_SESSION["user_keyfield_for_query"])."<>:2 and ".AddFieldWrappers("usertype")." in('admin','user') and ".AddFieldWrappers("viewing_page")."=:3 and ".AddFieldWrappers("repling_in")."<>:3 order by last_activity",
    $active_time_format,$userData[$_SESSION["user_keyfield_for_query"]],$ticket_id);
    $user_list_rs = DB::Query( $sql );
    DB::SetConnection(DB::DefaultConnection());

    $user_online = array();
    $i = 0;
    while($user = $user_list_rs->fetchAssoc() ){
        if($i>10) break;
        $i++;
        $user_online[] = $user[GetDisplayNameField()];
    }
    return $user_online;
}
function getReplingInTicket($ticket_id) {
    $userData = Security::currentUserData();
    $active_time = time() - 30; 
    $active_time_format = date("Y-m-d H:i:s",$active_time);

    DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
    $sql = DB::PrepareSql("select * from ".AddTableWrappers($_SESSION["user_table_for_query"])." where ".AddFieldWrappers("last_activity").">=':1' and ".AddFieldWrappers($_SESSION["user_keyfield_for_query"])."<>:2 and ".AddFieldWrappers("usertype")." in('admin','user') and ".AddFieldWrappers("viewing_page")."=:3 and ".AddFieldWrappers("repling_in")."=:3 order by last_activity",
    $active_time_format,$userData[$_SESSION["user_keyfield_for_query"]],$ticket_id);
    $user_list_rs = DB::Query( $sql );
    DB::SetConnection(DB::DefaultConnection());


    $user_online = array();
    while($user = $user_list_rs->fetchAssoc() ){
        $user_online[] = $user[GetDisplayNameField()];
    }
    return $user_online;
}
function getFirstReplingUserInticket($ticket_id){
    $user = null;
    $users = getReplingInTicket($ticket_id);
    if( count($users) > 0 )
        $user = array_shift($users);
    return $user;

}
function getFirstViewingUserInticket($ticket_id){
    $user = null;
    $users = getusersInTicket($ticket_id);
    if( count($users) > 0 )
        $user = array_shift($users);
    return $user;
}

?>