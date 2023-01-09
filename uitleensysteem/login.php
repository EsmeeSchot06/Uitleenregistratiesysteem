
<!DOCTYPE html>
<html lang="nl">
  <head>
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
    <div>
      <form method="post">
          <input type="hidden" name="from"value="login">
          <input class="Email" type="text" name="Email" placeholder="Email" required><br>
          <input class="password" type="password" name="password" placeholder="Wachtwoord" required><br>
		      <button class="inloggen" type="submit">Inloggen</button>
      </form>
    </div> 
  </body>
</html>