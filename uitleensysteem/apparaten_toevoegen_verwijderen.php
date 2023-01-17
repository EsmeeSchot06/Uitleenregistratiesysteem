<?php
?> 
<!DOCTYPE html>
<html>
<head>
<style>
    .toevoegen{
        margin-top:10%;
        border: 5px solid black;
        padding: 10px;
        border-radius: 1vw;
        height: 40vh;
        width: 50vw;
        margin-left: 20%;
    }
    .naam{
        height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:31% ;   
    }
    .merk{
        height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:31% ;
    }
    .type{
        height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:31% ;
    }
    .knopje2{
        
            height: 6vh;
            width: 6vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:60%; 
    }
    .knopje2:hover{
    cursor: pointer;
            background-color: #000;
            color: #fff;
            border-color: #000;
}
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
</style>
</head>
    <body>
        <a href="Docenten_pagina.php"><button type="submit" class="knopje3">docenten pagina</button></a>
        <br>
        <div class="toevoegen">
        <form method="POST" action="processapparatentoevoegen.php"> 
            <div class="naam">
            naam:<br>
            <input type="text" name="naam" > 
            </div>
            <br>
            <div class="merk">
            merk:<br>
            <input type="text" name="merk"  >
            </div>
            <br>
            <div class="type">
            type:<br>
            <input type="text" name="type">
            </div>
            <br><br>
            <input type="submit" name="save" value="submit" class="knopje2">
        </form> 
        </div>
    </body>
</html>