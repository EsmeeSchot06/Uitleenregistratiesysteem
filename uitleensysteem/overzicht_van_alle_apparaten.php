<?php
session_start();
include ("database.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
.knopje3{
        position:absolute;
            height: 6vh;
            width: 6vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:5%;  
    }
    .knopje3:hover{
    cursor: pointer;
            background-color: #000;
            color: #fff;
            border-color: #000;
}
#mySearch{
    width: 100%;
    font-size: 18px;
    padding: 11px;
    border: 2px solid black;
}
</style>
</head>
<body>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

    <ul id="myMenu">
        <li><a href="">ipad</a></li>
        <li><a href="">laptops</a></li>
        <li><a href="">snoeren</a></li>
        <li><a href="">laders</a></li>
        <li><a href="">cameras</a></li>
    </ul>
</body>
</html>