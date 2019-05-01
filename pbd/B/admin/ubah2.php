<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'function2.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM tabeldosen WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index3.php';
			</script>
		";
} else {
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'index3.php';
			</script>
		";
	}
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Data Dosen</title>
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
	<h1>Ubah data dosen</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama"required
				value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="prodi">Prodi : </label>
				<input type="text" name="prodi" id="prodi"required
				value="<?= $mhs["prodi"]; ?>">
			</li>
			<li>
				<label for="nip">NIP : </label>
				<input type="text" name="nip" id="nip"
				value="<?= $mhs["nip"]; ?>">
			</li>
			</li>
			<li>
				<label for="gambar">Gambar : </label><br>
				<img src="image/<?= $mhs["gambar"]; ?>" width="100"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br><br>
				<button type="submit" class="btn btn-success" name="submit">ubah Data!</button>
			</li>
		</ul>
	
	</form>

</body>
</html>