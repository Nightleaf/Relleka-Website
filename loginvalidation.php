<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "forum";
$_GET['name'] = str_replace("_"," ",$_GET['name']);
if($_GET['crypt'] != 67348193){
	echo '-1';
	exit;
}
if(!@mysql_connect($host, $user, $pass))  {
	die("error connecting to mysql server - " . mysql_error());	
}
if(!@mysql_select_db($name))  {
	die("error selecting mysql database - " . mysql_error());	
}

$sanitizedName = mysql_real_escape_string($_GET['name']);

$query = mysql_query("SELECT * FROM user WHERE username = '".$sanitizedName."'");
if($row = mysql_fetch_array($query)){
$pass2 = md5(md5($_GET['pass']).$row["salt"]);

if($pass2 == $row["password"])
	echo ''.(2+$row["usergroupid"]);
else
	echo '1';
} else
echo '0';
?>