<?php
// TODO: move to another place
date_default_timezone_set('America/Los_Angeles');

include dirname(__FILE__).'/database_conf.php';

$success = mysql_pconnect ($mysql_host, $mysql_user, $mysql_password);

if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db($database);

if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
}


$mongodbconn = new Mongo($mongodb_host);
$mongodbbase = $mongodbconn->selectDB($mongodb_dbname);
