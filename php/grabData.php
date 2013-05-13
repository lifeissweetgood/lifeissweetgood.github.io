<?php

$hostname = "db446067447.db.1and1.com";
$database = "db446067447";
$username = "dbo446067447";
$password = "lololol8";

$link = mysql_connect($hostname, $username, $password);
if( !$link )
	die('Connection failed: '.mysql_error());

mysql_select_db($database, $link);
$total_rows = mysql_query('SELECT * FROM randomActs', $link);
if( !$total_rows )
	die('Connection failed: '.mysql_error());
$num_rows = mysql_num_rows($total_rows);
$rand_num = rand(0, $num_rows-1);
$query = "SELECT act FROM randomActs WHERE id=".strval($rand_num);

$result = mysql_query($query, $link);

$row = mysql_fetch_row($result);

mysql_close($link);

$row = json_encode( $row );

print_r($row);

?>
