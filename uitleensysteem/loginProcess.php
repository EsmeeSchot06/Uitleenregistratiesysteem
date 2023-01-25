<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * from users");
    $row = mysqli_fetch_array($sql);
    if(is_array($row));
    {
        $_SESSION["Email"] = $row['Email'];
        $_SESSION["password"] = $row['password'];
        echo 'ingelogd';
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
    </style>
</head>
<body>
</body>
</html>