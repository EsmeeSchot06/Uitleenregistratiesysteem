<!DOCTYPE html>
<html>
<head>
<style>
.knopje{
    position:absolute;
    top: 40vh;
            height: 6vh;
            width: 6vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:60%;
}
.knopje:hover{
    cursor: pointer;
            background-color: #000;
            color: #fff;
            border-color: #000;
}
.email{
    top: 40vh;
            height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
}
.wachtwoord{
    top: 50vh;
            height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
}
</style>
</head>
<body>
    <input type="email" class="email" name="email" placeholder="School e-mailadres docent" required></br></br>
    <input type="password" class="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required></br></br>
    <button type="submit" class="knopje">Account aanmaken</button>
</body>
</html>