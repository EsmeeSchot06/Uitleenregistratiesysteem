<?php

$dbhost = "localhost";
$dBUsername = "root";
$dBPaswordname = "";
$dBName = "uitleen_registratiesysteem";

$con = mysqli_connect( $dbhost, $dBUsername, $dBPaswordname, $dBName);

if ($con = mysqli_connect( $dbhost, $dBUsername, $dBPaswordname, $dBName)) {
    die("faild to connect!");
}
?>