<?php
session_start();
include("database.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($Email) && !empty($password)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,Email,password) values ('$user_id','$Email','$password')";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else {
        echo "Please enter some valid information!";
    }
}
session_start();
include "config.php";
	$users_id = count($_POST["users"]);
for($i=0; $i<$users_id; $i++) 
{
	mysql_query("delete from `user_update` where `id` = '".mysql_real_escape_string(trim(strip_tags($_POST["users"][$i])))."'");
}
	header("location: index.php");
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
    <div class="toevoegen">
    <input type="email" class="email" name="email" placeholder="School e-mailadres docent" required></br></br>
    <input type="password" class="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required></br></br>
    <button type="submit" class="knopje">Account aanmaken</button></br></br></br></br></br></br></br></br></br></br>
    </div>
</br>
    <div class="verwijderen">
    <input type="email" class="email" name="email" placeholder="School e-mailadres docent" required>
    <button type="submit" class="knopje1">Account verwijderen</button></br></br></br></br></br></br></br></br></br></br></br></br>
    </div>

</body>
</html>