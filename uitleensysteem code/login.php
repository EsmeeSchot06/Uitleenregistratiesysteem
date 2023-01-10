<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
  <meta charset="utf_8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <Style>
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
  <meta charset="utf_8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="signup-form">
    <form action="loginProcess.php" method="post" enctype="multipart/form-data">
		        <h2>Login</h2>
                <p class="hint-text">Enter Login Details</p>
        <div class="form-group">
        	    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		        <div class="form-group">
            <button type ="submit" name="save" class="btn btn-success btn-lgn btn-block">login</button>
        </div>
    </form>
</div> 
  </body>
</html>