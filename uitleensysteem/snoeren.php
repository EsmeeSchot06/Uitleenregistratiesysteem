<?php
session_start();
include("database.php");
$sql = "SELECT id, naam, merk, categorieën FROM apparaten";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Snoeren</title>
</head>
<body>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["categorieën"] === "lader") { ?>
                <a><?= "Name: " . $row["naam"] . " Merk: " . $row["merk"]; ?>
                    <img src="https://cdn.discordapp.com/attachments/1065628030187339876/1065629827744403476/550x358.png">
                    <p>Dit zijn alle snoeren</p>
            <?php }
        }
    } else { ?>
            Geen snoeren gevonden
        <?php } ?>
</body>
</html>