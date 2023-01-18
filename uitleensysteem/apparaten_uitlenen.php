<?php
session_start();
include("database.php");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT id, name, merk, type FROM apparaten";
$result = $con->query($sql);

$sql = "UPDATE apparaten SET type='uitgeleend' WHERE id='1'";

if ($con->query($sql) === TRUE) {
  echo "Apparaat is uitgeleend";
} else {
  echo "Er is iets misgegaan, probeer opnieuw: " . $con->error;
}

$con->close();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<style>
input {
    padding-right: 500px;
    margin-left: 400px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.price {
  color: grey;
  font-size: 22px;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}
.flex-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
  width: 100%;
  height: 200px;
}
.devices {
  text-align: center;
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
      <div class="flex-container">
      </div>
      <div class="devices">
        <?php
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
          <div><a><?= $row["name"]." ".$row["merk"]." ".$row["type"] ;?></a></div>
        <?php }}else{?>Geen items gevonden<?php }?>
      </div>
  </body>
</html>