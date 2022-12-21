<?php
session_start();
$message = "";
if(count($_POST)>0) {
    include_once 'datadase.php';
    $result = mysqli_query($conn, "SELECT * FROM users WHERE Email='" . $POST['Email'] . "' password='" . $_POST['password'] . "' ");
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>

</head>
<body>
    
</body>
</html>