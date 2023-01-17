<?php
?> 
<!DOCTYPE html>
<html>
<head>
<style>
    .naam{
        height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
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
    }
</style>
</head>
    <body>
        <form method="POST" action="processapparatentoevoegen.php"> 
            naam:<br>
            <input type="text" name="naam" class="naam"> 
            <br>
            merk:<br>
            <input type="text" name="merk" class="merk">
            <br>
            type:<br>
            <input type="text" name="type"class="type">
            <br><br>
            <input type="submit" name="save" value="submit">
        </form> 
    </body>
</html>