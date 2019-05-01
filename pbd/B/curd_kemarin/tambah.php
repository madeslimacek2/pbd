<?php
require 'functions.php';
if( isset($_POST["submit"]) ) {
	
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah</title>
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
<h2>Tambah data Program Studi</h2>
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
         <div class="col-sm-8">
		<ul>
				<label for="kdprodi">Kode Prodi</label>
				<input type="text" name="kdprodi" id="kdprodi"required>

			<br><br>
				<label for="nmprodi">Nama Prodi</label>
				<input type="text" name="nmprodi" id="nmprodi"required>
			</li>
			<br><br>
			<label for="akreditasi">Akreditasi   </label>
				<input type="radio" name="akreditasi" id="akreditasi" value="-"> -
				<input type="radio" name="akreditasi" id="akreditasi" value="A"> A
				<input type="radio" name="akreditasi" id="akreditasi" value="B"> B
				<input type="radio" name="akreditasi" id="akreditasi" value="C"> C
			</li>
			<br><br>
				<button type="submit" name="submit" class="btn btn-default">Tambah dan Simpan Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>