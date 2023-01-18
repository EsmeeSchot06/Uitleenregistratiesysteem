<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
        .knopje4{
        position:absolute;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:2%;  
    }
    .knopje4:hover{
    cursor: pointer;
            background-color: #000;
            color: #fff;
            border-color: #000;
    }
    .flex-container {
    display: flex;
    flex-wrap: wrap-reverse;
    margin-top: 40px;
    margin-right: 100px;
    margin-bottom: 60px;
    margin-left: 250px;
    text-align: center;
    font-size: 30px;
    }
    .flex-container > div {
    display: flex;
    flex-wrap: wrap-reverse;
    margin-top: 40px;
    margin-right: 100px;
    margin-bottom: 0px;
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
    <a href="logout.php"><button type="submit" class="knopje4">uitloggen</button></a>
    <div class="flex-container">
    <div><a href="apparaten_uitlenen.php"><button type="submit">Apparaten uitlenen</button></a></div>
    <div><a href="overzicht_van_alle_apparaten.php"><button type="submit">Overzicht apparaten</button></a></div>
    </div>
    <div class="flex-container">
    <div><a href="retourneer"><button type="submit"> retourneren</button></a></div>
    <div><a href="accounts_toevoegen_en_verwijderen.php"><button type="submit">Accounts beheren</button></a></div>
    <div><a href="apparaten_toevoegen_verwijderen.php"><button type="submit">Apparaten beheren</button></a></div>
    </div>
</body>
</html