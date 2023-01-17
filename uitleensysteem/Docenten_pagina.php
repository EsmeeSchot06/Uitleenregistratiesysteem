<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
    .flex-container {
    display: flex;
    flex-wrap: wrap-reverse;
    margin-top: 100px;
    margin-right: 100px;
    margin-bottom: 100px;
    margin-left: 250px;
    text-align: center;
    font-size: 30px;
    }
    .flex-container > div {
    display: flex;
    flex-wrap: wrap-reverse;
    text-align: center;
    margin-top: 50px;
    margin-right: 100px;
    margin-bottom: 100px;
    margin-left: 120px;
    text-align: center;
    font-size: 30px;
    }
    button {
    padding: 40px 80px 40px 80px;
    }
    </style>
</head>
<body>
    <p>klik <a href="index.php"> hier </a> om uit te loggen </p>
    <div class="flex-container">
    <div><a href="apparaten_uitlenen.php"><button type="submit">Apparaten uitlenen</button></a></div>
    <div><a href="overzicht_van_alle_apparaten.php"><button type="submit">Overzicht apparaten</button></a></div>
    </div>
    <div class="flex-container">
    <div><a href="retourneer"><button type="submit"> retourneren</button></a></div>
    <div><a href="accounts_toevoegen_en_verwijderen.php"><button type="submit">Accounts beheren</button></a></div>
    </div>
    <div class="flex-container">
    <div><a href="apparaten_toevoegen_verwijderen.php"><button type="submit">Apparaten beheren</button></a></div>
    </div>
</body>
</html