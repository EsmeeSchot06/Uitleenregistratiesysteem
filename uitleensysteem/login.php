<?php

session_start();

include("database.php");
include("functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
   //somthing was posted 
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  
  if (!empty($Email) && !empty($password)) {
    //read from database
    $query = "select * from users where Email = '".$Email."' limit 1";

    $result = mysqli_query($con, $query);
    if($result) {
      if($result->num_rows == 1) {

        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] == $password) {
          $_SESSION['user_id'] = $user_data['id'];
          header("location: index.php");
          die;
        }
      }
    }
    echo "Email of wachtwoord is fout!";

  }else {
    echo "Email of wachtwoord is niet ingevult!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>login</title>
</head>
<body>
    <style type="text/css">
    #text{

      height: 25px;
      height: 6vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border: 5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
    }
    #button{

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
    #box{

      background-color: grey;
      margin: auto;
      width: 400px;
      padding: 20px;

    }
    </style>

    <div id="box">
      <form method="POST">
        <div style="font-size:20px;margin:10px; ">login</div>
      <input id="text" type="text" name="Email" required><br><br>
      <input id="text" type="password" name="password" required><br><br>
      <input id="button" type="submit" value="login"><br><br>
      </form>
    </div>
</body>
</html>
            