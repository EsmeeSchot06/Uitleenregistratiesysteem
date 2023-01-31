<?php
session_start();
include ("database.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['save'])){
        $naam = $_POST['naam'];
        $merk = $_POST['merk'];
        $type = $_POST['type'];
        $categorieën = $_POST['categorieën'];
        $sql = "INSERT INTO apparaten (naam, merk, type, categorieën) VALUES ('".$naam."','".$merk."','".$type."','".$categorieën."')";
        if(mysqli_query($con, $sql)) {
            echo "nieuw apparaat toegevoegd";
        }else{
            echo "Error: " . $sql . "
                " . mysqli_error($con);
        }
        }elseif($_POST['form']=="delete"){
        $sql = "DELETE FROM apparaten WHERE id='".$_POST['art-select']."'";
        mysqli_query($con, $sql);
        echo "Apparaat verwijderd";
    }
}

$artiknaam = $con->query("SELECT * FROM apparaten");
$con->close();
?> 
<!DOCTYPE html>
<html>
<head>
<style>
    .toevoegen{
        margin-top:5%;
        border: 5px solid black;
        padding: 10px;
        border-radius: 1vw;
        height: 50vh;
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
    .categorieën{
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
    .verwijderen{
        border: 5px solid black;
        padding: 10px;
        border-radius: 1vw;
        height: 20vh;
        width: 50vw;
        margin-left: 20%;
    }
    .naam1{
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
    .knopje4{
        position: absolute;
        height: 6vh;
        width: 6vw;
        background-color: #fff;
        color: #000;
        border: 5px solid black;
        border-radius: 1vw;
        text-decoration: none;
        text-align: center;
        margin-left: -1%;
        margin-top: 5%;
    }
    .knopje4:hover{
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
        <form method="POST" > 
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
            <br>
            <div class="categorieën">
            categorie:<br>
            <input type="text" name="categorieën" >
            </div>
            <br><br>
            <input type="submit" name="save" value="submit" class="knopje2">
        </form>
        </div>
        <br>
        <div class="verwijderen">
            <div class="naam1">
            <form method="POST">
                <input type="hidden" name="form" value="delete">
                <select name="art-select" value="">
                    <option value="">Selecteer een categorie</option>
                        <?php while ($row = $artiknaam->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['naam'] ?></option>
                        <?php } ?>
                </select>
                <button type="submit" name="accept_button" class="knopje4"> apparaat verwijderen</button>
            </form>
            </div>
        </div>
    </body>
</html>