<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: ../login.php");
	exit;
}

?>
<html>
<title>Tes Index</title>
<h1><a href="index3.php">CURD DOSEN</a></h1>
<h2><a href="index2.php">CURD MAHASISWA</a></h2>
<h3><a href="../curd_kemarin/">CURD PROGRAM STUDI</h3>
<h4><a href='logout.php'>Logout</a></h4>

</html>