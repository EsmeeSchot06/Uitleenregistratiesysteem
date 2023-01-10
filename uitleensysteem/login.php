<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf_8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <Style>
      .login{
        position:absolute;
            top:10Vh;
            margin-left: 48%;
      }
      .Email{
        position:absolute;
            top: 20vh;
            height: 7vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left: 40%;
      }
      .password{
        position:absolute;
            top: 30vh;
            height: 7vh;
            width: 20vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left: 40%;
      }
      .inloggen{
        position:absolute;
            top: 40vh;
            height: 6vh;
            width: 5vw;
            background-color: #fff;
            color: #000;
            border:5px solid black;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            margin-left: 55%;
    }
    .inloggen:hover{
      cursor: pointer;
            background-color: #000;
            color: #fff;
            border-color: #000;
    }
    </Style>
</head>
<body>
  <div>
    <form action="loginProcess.php" method="post" enctype="multipart/form-data">
            <div class="login">
		        <h2>Login</h2>
            </div>
        <div>
        	    <input type="text" class="Email" name="email" placeholder="Email" required="required"><br>
        </div>
		        <div>
            <input type="password" class="password" name="pass" placeholder="Password" required="required"><br>
        </div>
		        <div >
            <button type ="submit" name="save" class="inloggen">login</button>
        </div>
    </form>
  </div> 
</body>
</html>