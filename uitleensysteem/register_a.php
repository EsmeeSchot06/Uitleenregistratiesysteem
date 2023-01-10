<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf_8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
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