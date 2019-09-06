


<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form class="box login" action="adminpanel.php" method="get">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input name="user" type="text" tabindex="1" placeholder="" required>
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input name="pass" type="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="3">Keep me logged in</label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>

</body>
</html>
