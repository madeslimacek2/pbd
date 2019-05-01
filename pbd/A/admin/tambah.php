<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
if( isset($_POST["submit"]) ) {
	
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index2.php';
			</script>
		";
	}else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index2.php';
			</script>
		";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<body>
<div class="container-fluid">
  <div class="row content">
    <div class="">
      <div class="input-group">
        <span class="input-group-btn">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-4">
      <br>
      <a href="index.php" class="btn btn-default">Kembali ke Home</a>
      <hr>
      <div class="table-responsive">          
  
<div class="container">
	<h1>Tambah Data Mahasiswa</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama"required>
			</li>
			<br>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm"required>
			</li>
			<br>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email"required>
			</li>
			<br>
			<li>
				<label for="prodi">Prodi : </label>
				<input type="text" name="prodi" id="prodi"required>
			</li>
			<br>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar"required>
			</li>
			<br><br>
				<button type="submit" class="btn btn-success" name="submit">Tambah Data!</button>
			</li>
		</ul>
	
	</form>

</body>
</html>