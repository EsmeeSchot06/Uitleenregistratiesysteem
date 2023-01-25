<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, type FROM apparaten";
$result = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IPads</title>
<style>

</style>
</head>
<body>
<img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065628058758959114/9k.png">
<p>Dit zijn alle iPads</p>

</body>
</html>