<!DOCTYPE html>
<html lang="nl">

<head>
    <style>
        .knopje3 {
            border-radius: 7.5%;
            padding: 20px 20px 20px 20px;
        }

        .knopje3:hover {
            cursor: pointer;
            background-color: lightblue;
            border-color: #000;
        }

        .flex-container button {
            padding: 30px 70px 30px 70px;
            margin-bottom: 2%;
            margin-right: 2%;
            border-radius: 7.5%;
        }

        .flex-button:hover button {
            cursor: pointer;
            border-color: #000;
            background-color: lightblue;
        }

        .body_achter {
            background-color: #bbb;
        }
    </style>
</head>

<body>
    <div class="body_achter">
        <a href="logout.php"><button type="submit" class="knopje3">uitloggen</button></a>
        <br>
        <center>
            <div class="flex-container">
                <a class="flex-button" href="apparaten_uitlenen.php"><button type="submit">Apparaten uitlenen</button></a>
                <a class="flex-button" href="overzicht_van_alle_apparaten.php"><button type="submit">Overzicht apparaten</button></a>
            </div>
            <div class="flex-container">
                <a class="flex-button" href="retour.php"><button type="submit"> retourneren</button></a>
                <a class="flex-button" href="accounts_toevoegen_en_verwijderen.php"><button type="submit">Accounts beheren</button></a>
                <a class="flex-button" href="apparaten_toevoegen_verwijderen.php"><button type="submit">Apparaten beheren</button></a>
            </div>
    </div>
    </center>
</body>


</html