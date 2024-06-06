<?php

//   require_once("../include/dbcommon.php"); // DataBase PHPRunner

include __DIR__."/mysqldump-php_2.9/autoload.php";

use Ifsnop\Mysqldump as IMysqldump;

$host = $_SESSION['db_host'];
$user = $_SESSION['db_user'];
$pwd = $_SESSION['db_pwd'];
$port = $_SESSION['db_port'];
$sys_dbname = $_SESSION['db_sys_dbname'];

$now = date("Y-m-d H:i:s");  // Date by now
$specials = array(":", " ");
$now = str_replace($specials, "_", $now);

$dumpSettings = array(
    // 'exclude-tables' => array('/^travis*/'),
    // 'compress' => IMysqldump\Mysqldump::GZIP,
    'no-data' => false,
    'add-drop-table' => true,
    'single-transaction' => true,
    'lock-tables' => true,
    'add-locks' => true,
    'extended-insert' => false,
    'disable-keys' => true,
    'skip-triggers' => false,
    'add-drop-trigger' => true,
    'routines' => true,
    'databases' => false,
    'add-drop-database' => false,
    'hex-blob' => true,
    'no-create-info' => false,
    // 'where' => '',
    'default-character-set' => IMysqldump\Mysqldump::UTF8MB4,
    'complete-insert' => true
    );
$pref_file_backup = 'derejamedb_backup_';

$http_referer = $_SERVER['HTTP_REFERER'];
$http_referer_ar = explode('/',$http_referer);
// Adjust to the characteristics of your URL | Adjust the characteristics of your URL
$file = $http_referer_ar[0].'//'.$http_referer_ar[2].'/'.$http_referer_ar[3].'/'.$http_referer_ar[4].'/'.'backup/backup_files/'.$pref_file_backup.$now.'.sql';
// Adjust to the characteristics of your URL | Adjust the characteristics of your URL


try {
    //$dump = new IMysqldump\Mysqldump('mysql:host='.$host.';dbname='.$sys_dbname , $user, $pwd , $dumpSettings);
    $dump = new IMysqldump\Mysqldump('mysql:host=localhost;dbname=dere_dev', 'dere_admin', 'dere_admin');
    $dump->start(__DIR__.'/backup_files/'.$pref_file_backup.$now.'.sql');
} catch (\Exception $e) {
    echo 'mysqldump-php error: ' . $e->getMessage();
}

//Leave only the 5 most recent database export. | LEAVE ONLY THE 5 Recent Database Export.
$arrFiles = glob(__DIR__.'/backup_files/'.$pref_file_backup.'*');

rsort($arrFiles);  // Order

if (count($arrFiles) > 5 ) {
    for ($i = 5; $i < count($arrFiles); $i++) {
        unlink($arrFiles[$i]); // Delete ancient files
    }   
}
