<?php


$mysql_hostname = "localhost";

$mysql_username = "root";
$mysql_password = "root";
$port = 8889;
$db = "clients";

$conn = new mysqli( $mysql_hostname, $mysql_username, $mysql_password, $db, $port) or die("something wrong");

?>