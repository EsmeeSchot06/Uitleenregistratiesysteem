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

    <a href="/logout.php">logout</a>
    <h1>dit is de index pagina</h1>

    <br>
    hello, Username.
</body>
</html>