<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, type, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Camera's</title>
</head>
<body>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "camera") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"] . " Type: " . $row["type"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065631213404045322/hero_NikonZ400f4-5_96815-gk_nsp-43_article.pngs">
                    <p>Dit zijn alle camera's</p>
            <?php }
        }
    } else { ?>
            Geen camera'sgevonden
        <?php } ?>
</html>