<?php

session_start();

include("database.php");
include("functions.php");

if($_SERVER["REQUEST_METHOD"] == "post")
{
   //somthing was posted 
  $Email = $_POST['Email'];
  $password = $_POST['password'];

  if (!empty($Email) && !empty($password) && !is_numeric($Email))
  {

    //read from database
    $query = "select * from users where Email = '$Email' limit 1";

    $result = mysqli_query($con, $query);
    
    if($result)
    {
      if($result && mysqli_num_rows($result)> 0)
      {

        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password)
        {
          $_SESSION['user_id'] = $user_data['user_id '];
          header("location index.php");
          die;
        }
      }
    }
    header("location index.php");
    die;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>login</title>
</head>
<bodY>
    <style type="text/css">
    
    #text{

      height: 25px;
      border-radius: 5px;
      padding: 4px;
      border: solid thin #aaa;

    }
    #button{

      padding:10px;
      width:100px;
      color: white;
      background-color: lightblue;
      border: none;

    }
    #box{

      background-color: grey;
      margin: auto;
      width: 300px;
      padding: 20px;

    }
    </style>

    <div id="box">
      <form method="post">
        <div style="font-size:20px;margin:10px; ">login</div>
      <input id="text" type="text" name="Email"><br><br>
      <input id="text" type="password" name="password"><br><br>
      <input id="button" type="submit" value="login"><br><br>
      </form>
    </div>
</bodY>
</html>
            