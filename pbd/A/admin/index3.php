<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'function2.php';
$mahasiswa = query("SELECT * FROM tabeldosen");

//tombol cari di klik

if ( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD Data Dosen</title>
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

    <div class="col-sm-8"><br>
      <a href="tambah2.php" class="btn btn-warning">Tambah Data Dosen?</a></h4>
      <div class="table-responsive">          
  <table class="table">
    <thead>	
      <br>
      <br>
<form action="" method="POST">
	<input class="form-control" type="text" name="keyword" size="25" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
	<br><button type="submit" class="btn btn-outline-dark" name="cari">Cari!</button>
<br>
<table class="table table-sm">
	<thead>
	<tr>
		<th scope="col">No.</th>
		<th scope="col">Aksi</th>
		<th scope="col">Gambar</th>
		<th scope="col">Nama</th>
		<th scope="col">Prodi</th>
		<th scope="col">NIP</th>
	</tr>
</thead>
<tbody>
	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row ) : ?>
	<tr>
		<th scope="row"><?= $i; ?></td>
		<td>
			<a a class="btn btn-success" href="ubah2.php?id=<?= $row["id"]; ?>">Ubah</a>
			<a class="btn btn-danger" href="hapus2.php?id= <?= $row["id"]; ?>" onclick=" return confirm('Yakin?');">Hapus</a>
		</td>
		<td><img src="image/<?= $row["gambar"]; ?>" width="100"></td>
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