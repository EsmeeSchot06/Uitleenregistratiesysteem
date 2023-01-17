<?php
include ("database.php");
if(isset($_POST['save']))
{
    mysqli_close($con);
    }elseif($_POST['form']=="delete"){
    $sql = "DELETE FROM apparaten WHERE naam='".$_POST['naam']."'";
    mysqli_query($con, $sql);
    }
?> 