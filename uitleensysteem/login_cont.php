<?php
session_start();

    include("database.php");
    include("functions.php");

$user_data = check_login($con);
?> 

<!DOCTYPE html>
<html lang="nl">
<head>

</head>
<body>
    <p>hello, <?php echo $user_data['Email']; ?> je bent ingelogd </p>
    <p>klik <a href="Docenten_pagina.php">hier</a> om verder te gaan</p>
</body>
</html>