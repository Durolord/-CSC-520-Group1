<?php
//CreateConnection("localhost", "root", "new-password", "STMS");
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "pcdoc";
foreach ($db as $key => $value) {
define(strtoupper($key),$value);
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if ($connection) {
// echo "We are connected";
} 


	// $dblink = mysql_pconnect("localhost", "root", "") or die("Could not connect".mysql_error());
	// 	mysqli_connect("pcdoc", $dblink)or die("Cannot open database".mysql_error());
	
?>