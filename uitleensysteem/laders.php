<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, type, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laders</title>
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

        img {
            position: absolute;
            width: 400px;
            height: 300px;
            margin-left: 5%;
        }
        </style>
</head>
<body>
<a href="index.php"><button type="submit" class="knopje3">terug</button></a>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "lader") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"] . " Type: " . $row["type"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065630183970840596/cargadorusbmultipuerto000-scaled.png">
                    <p>Dit zijn alle laders</p>
            <?php }
        }
    } else { ?>
            Geen laders gevonden
        <?php } ?>

</body>
</html>