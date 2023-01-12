<?php
include_once ("database.php");
if(isset($_POST['save']))
{
    $naam = $_POST['naam'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $sql = "INSERT INTO apparaten (name,merk,type) VALUES ('$naam','$merk','$type')";
    if (mysqli_query($con, $sql)){
        echo "nieuw apparaat toegevoegd";
    } else{
        echo "Error: " . $sql . "
            " . mysqli_error($con);
    }
    mysqli_close($con);
}
?> 