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
    margin-left: 210px;
    text-align: center;
    font-size: 30px;
    }
    button {
    padding: 20px 40px 20px 40px;
    }
    </style>
</head>
<body>
    <div class="flex-container">
    <div><button type="submit">Uitlenen</button></div>
    <div><button type="submit">Apparaten</button></div>
    </div>
    <div class="flex-container">
    <div><button type="submit">Retourneren</button></div>
    <div><button type="submit">Accounts</button></div>
    </div>
</body>
</html>