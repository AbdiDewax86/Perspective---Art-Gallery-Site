<?php
$server = "localhost";
$username = "perspective";
$password = "perspective";
$dbname = "perspective";

// Create connection
$mysqli = new mysqli($server, $username, $password, $dbname);
// Check connection
/*
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected";*/
?>