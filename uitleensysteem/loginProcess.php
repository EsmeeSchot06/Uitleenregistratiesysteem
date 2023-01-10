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
        $_SESSION["id"] = $row['id'];
        $_SESSION["Email"] = $row['Email'];
        $_SESSION["password"] = $row['password'];
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
    <h1> u bent ingelogd</h1>
</body>
</html>