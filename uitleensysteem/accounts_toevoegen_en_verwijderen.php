<?php
session_start();
include("database.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['email'];
    $password = $_POST['wachtwoord'];
    if(!empty($user_name) && !empty($password)) {
        //save to database
        $query = "insert into users (Email,password) values ('$user_name','$password')";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else {
        echo "Please enter some valid information!";
    }
}
    
?>

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
.toevoegen{
    border: 5px solid black;
    padding: 10px;
    border-radius: 1vw;
}
.verwijderen{
    border: 5px solid black;
    padding: 10px;
    border-radius: 1vw;
}
.knopje1{
    position:absolute;
    top: 80vh;
            height: 6vh;
            width: 6vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left:39%;
}
.knopje1:hover{
    cursor: pointer;
            background-color: #000;
            color: #fff;
            border-color: #000;
}
</style>
</head>
<body>
    <form method="POST">
    <div class="toevoegen">
    <input type="email" class="email" name="email" placeholder="School e-mailadres docent" required></br></br>
    <input type="password" class="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required></br></br>
    <button type="submit" class="knopje">Account aanmaken</button></br></br></br></br></br></br></br></br></br></br>
    </div>
    </form>
    </br>
    <form method="POST">
    <div class="verwijderen">
    <input type="email" class="email" name="email" placeholder="School e-mailadres docent" required>
    <button type="submit" class="knopje1">Account verwijderen</button></br></br></br></br></br></br></br></br></br></br></br></br>
    </div>
    </form>
</body>
</html>