<?php
session_start();
include("database.php");
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header('Location: logout.php');
  exit;
}
$sql = "SELECT id, naam, merk, type, uitgeleend FROM apparaten";
$result = $con->query($sql);

if (isset($_POST['uitlenen'])) {
  $id = $_POST['id'];
  $sql = "UPDATE apparaten SET uitgeleend='uitgeleend' WHERE id='$id' ";
  if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $con->error;
  }
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

    .devices {
      text-align: center;
    }

    .knopje3 {
      position: absolute;
      height: 6vh;
      width: 6vw;
      background-color: #fff;
      color: #000;
      border: 5px solid black;
      border-radius: 1vw;
      text-decoration: none;
      text-align: center;
      margin-left: 5%;
    }

    .knopje3:hover {
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
  <div class="devices">
    <div class="updaten">
      <input type="hidden" name="form" value="updaten">
    </div>
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <form method="POST">
          <div>
            <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"] . " Type: " . $row["type"] . " - uitgeleend: " . $row["uitgeleend"]; ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <button type="submit" name="uitlenen">Uitlenen</button>
            </a>
          </div>
        </form>
      <?php }
    } else { ?>
      Geen items gevonden
    <?php } ?>
  </div>
</body>

</html>