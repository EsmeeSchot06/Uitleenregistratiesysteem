<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, type, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>IPads</title>
    <style>
        .knopje3 {
            height: 6vh;
            width: 6vw;
            background-color: #fff;
            color: #000;
            border: 2px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
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
<a href="index.php"><button type="submit" class="knopje3">terug</button></a>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "ipad") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"] . " Type: " . $row["type"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065628058758959114/9k.png">
                    <p>Dit zijn alle iPads</p>
            <?php }
        }
    } else { ?>
            Geen ipads gevonden
        <?php } ?>

</body>

</html>