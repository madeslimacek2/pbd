<?php
session_start();

require 'functions.php';

if(isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}
if( isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM admin where username = '$username'");

	// cek username 
	if ($password == "' or 1='1")
{echo "mau hek lo ya bgst";}


elseif( mysqli_num_rows($result) === 1 ) {

		//cek password
		// $row = mysqli_fetch_assoc($result);
		// if( password_verify($password, $row["password"]) ) {

		// set session
		$_SESSION["login"] = true;

			header("Location: index.php");
			exit;
		}
	$error = true;
	}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Halaman Login Admin</title>
	<link href="stel/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>

	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">Username / Password salah!</p>
	<?php endif; ?>

	
	<form action="" method="POST">
	<table>
			<tr id="header">
				<td colspan="2"><h2>Form Login</h2></td>
			</tr>
			<tr>
				<td><label for="username">username :</label></td>
				<td><input type="text" name="username" id="username" placeholder="username"></td>
			</tr>
			<tr>
				<td><label for="password">password :</label></td>
				<td><input type="password" name="password" id="password" placeholder="password"></td>
			</tr>
			<tr>
				<td>Remember me : </td>
				<td><input type="checkbox" name="remember" id="remember"></td>
			</tr>
			<tr>
				<td><div class="medium secondary pretty btn"> 
				<input type="submit" name="login" value="submit">

	</form>
</body>
</html>