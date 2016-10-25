<?php
$dbhost = "MYHOST";
$dbuser = "MYUSERNAME";
$dbpass = "MYPASSWORD";
$dbname = "MYDATABASE";
$dbC = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
        or die('Error Connecting to MySQL DataBase');
?>