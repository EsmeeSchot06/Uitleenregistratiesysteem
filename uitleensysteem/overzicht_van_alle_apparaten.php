<?php
session_start();
include ("database.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewerport" content="width=device-width, initial-scale=1">
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
body{
    font-family: Arial, Helvetica, sans-serif;
}
*{
    box-sizing: border-box;
}
.row{
    display: flex;
}
.left{
    flex: 35%;
    padding: 15px 0;
}
.left h2{
    padding-left: 8px;
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
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

    <ul id="myMenu">
        <li><a href="ipads.php">ipads</a></li>
        <li><a href="laptops.php">laptops</a></li>
        <li><a href="snoeren.php">snoeren</a></li>
        <li><a href="laders.php">laders</a></li>
        <li><a href="cameras.php">cameras</a></li>
    </ul>
    </div>
    

</div>
<script>
function myFunction(){
    var input, filter, ul, li, a, i;
    input= document.getElementById("mySearch");
    filter= input.value.toUpperCase();
    ul= document.getElementById("myMenu");
    li= ul.getElementsByTagName("li");
    for (i = 0; i < li.lenght; i++) {
      a= li[i].getElementsByTagName("a")[0],
      if(a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else{
        li[i].style.display = "none";
      }
    }
}
</script>
</body>
</html>