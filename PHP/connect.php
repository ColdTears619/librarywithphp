<?php

$myServer = "localhost";
$myUser = "admin";
$myPass = "1";
$myDB = "books";

$dbhandle = new mysqli($myServer, $myUser, $myPass, $myDB);
  //or die("Couldn't connect to SQL Server on $myServer");
if($dbhandle->connect_error) {
  die("Couldn't connect to SQL Server on $myServer");
}
echo "Connected to the database.\n-----------------\n";

?>