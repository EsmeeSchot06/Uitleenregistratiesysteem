<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>IPads</title>
    <style>
    </style>
</head>

<body>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "ipad") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065628058758959114/9k.png">
                    <p>Dit zijn alle iPads</p>
            <?php }
        }
    } else { ?>
            Geen ipads gevonden
        <?php } ?>

</body>

</html>