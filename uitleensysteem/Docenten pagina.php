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
    margin-top: 100px;
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
    <div class="flex-container">
    <div><button type="submit">Apparaten uitlenen</button></div>
    <div><button type="submit">Overzicht apparaten</button></div>
    </div>
    <div class="flex-container">
    <div><button type="submit">Apparaten retourneren</button></div>
    <div><button type="submit">Accounts beheren</button></div>
    </div>
</body>
</html>