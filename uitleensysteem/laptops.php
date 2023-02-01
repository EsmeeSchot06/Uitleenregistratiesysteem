<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Laptops</title>
    <style>
        img{
            width: 533px;
            height: 300px;
        }
        </style>
</head>
<body>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "lader") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065628577669857350/RE4LqQX.png">
                    <p>Dit zijn alle laptops</p>
            <?php }
        }
    } else { ?>
            Geen laptops gevonden
        <?php } ?>

</body>
</html>