<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPaswordname = "";
$dBName = "uitleen_registratiesysteem";

$conn = mysqli_connect( $serverName, $dBUsername, $dBPaswordname, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
?>