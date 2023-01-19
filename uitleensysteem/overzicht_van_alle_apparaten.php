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
#myMenu{ 
    list-style-type: none;
    padding: 0;
    margin: 0;
}
#myMenu li a {
    padding: 12px;
    text-decoration: none;
    color: black;
    display: block;
}
#myMenu li a:hover{
    background-color: #eee;
}
</style>
</head>
<body>
<div class="row">
    <div class="left" style="background-color: #bbb;">
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

    <ul id="myMenu">
        <li><a href="ipads.php">ipad</a></li>
        <li><a href="laptops.php">laptops</a></li>
        <li><a href="snoeren.php">snoeren</a></li>
        <li><a href="laders.php">laders</a></li>
        <li><a href="cameras.php">cameras</a></li>
    </ul>
    </div>
    <div class="right" style="background-color: #bbb;">

    </div>
</div>
<script>
function myFunction(){
    var input, filter, ul, li, a, i;
    
}
</script>
</body>
</html>