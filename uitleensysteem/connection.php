<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if(!$con = mysqli-connect($dbhost, $dbuser, $dbpass, $dbname))
{

    die("failed to connect!");
}