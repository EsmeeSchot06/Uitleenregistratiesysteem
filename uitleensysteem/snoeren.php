<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, type, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Snoeren</title>
    <style>
        
    </style>
</head>
<body>

<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "snoer") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"] . " Type: " . $row["type"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065630183970840596/cargadorusbmultipuerto000-scaled.png">
                    <p>Dit zijn alle snoeren</p>
            <?php }
        }
    } else { ?>
            Geen snoeren gevonden
        <?php } ?>

</body>
</html>