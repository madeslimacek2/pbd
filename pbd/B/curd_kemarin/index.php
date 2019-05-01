<?php
require 'functions.php';
$dt_prodi = query("SELECT * FROM dt_prodi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Program Studi</title>
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

    <div class="col-sm-5"><br>
      <a href="tambah.php" class="btn btn-default">Tambah Data Program Studi</a></h4>

      <hr>
      <div class="table-responsive">          
  <table class="table">
    <thead>	
	<tr>
		<th>ID</th>
		<th>Kode</th>
		<th>Nama Prodi</th>
		<th>Akreditasi</th>
		<th>Aksi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ($dt_prodi as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["kdprodi"]; ?></td>
		<td><?= $row["nmprodi"]; ?></td>
		<td><?= $row["akreditasi"]; ?></td>
		<td>
			<a class="btn btn-success" href="ubah.php?id=<?= $row["idprodi"]; ?>">Ubah</a>
			<a class="btn btn-danger" href="hapus.php?id= <?= $row["idprodi"]; ?>" onclick=" return confirm('Yakin?');">Hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</thead>
</table>
</body>
</html>