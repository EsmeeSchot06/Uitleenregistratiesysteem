<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
    .flex-container {
    display: flex;
    flex-wrap: wrap-reverse;
    }
    .flex-container > div {
    text-align: center;
    width: 250px;
    margin: 10px;
    text-align: center;
    line-height: 75px;
    font-size: 30px;
    }
    </style>
</head>
<body>
    <div class="flex-container">
    <div><input type="button">Uitlenen</button></div>
    <div><input type="button">Apparaten</button></div>
    </div>
    <div class="flex-container">
    <div>Retourneren</div>
    <div>Accounts</div>
    </div>
</body>
</html>