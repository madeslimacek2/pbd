<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: ../login.php");
	exit;
}

require 'functions.php';
$dosen = query("SELECT * FROM tabeldosen");

//tombol cari di klik

if ( isset($_POST["cari"]) ) {
	$dosen = cari($_POST["keyword"]);	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar data tabel Dosen</title>
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

    <div class="col-sm-8">
<h1>Daftar dosen</h1><br>
<a href="dtmhs.php" class="btn btn-warning">Lihat daftar Mahasiswa</a>
<br>
 <div class="table-responsive">          
  <table class="table">
    <thead>	
      <br>
      <br>
<form action="" method="POST">
	<input class="form-control" type="text" name="keyword" size="25" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
	<br><button type="submit" class="btn btn-outline-dark" name="cari">Cari!</button><bbr>
<br>
<table class="table table-sm">
	<thead>
	<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Program Studi</th>
		<th>Nomor Induk Pegawai</th>
	</tr>
</thead>
	<th scope="row"><?php $i = 1; ?>
	<?php foreach ($dosen as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><img src="../admin/image/<?= $row["gambar"]; ?>" width="100"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["prodi"]; ?></td>
		<td><?= $row["nip"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
<br><br>
<a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
</body>
</html>