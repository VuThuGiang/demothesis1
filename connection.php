<?php

$hname = 'localhost';
$uname = 'root';
$pword = '';
$db = 'travel';

// Create connection
$con = new mysqli($hname, $uname, $pword, $db);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
