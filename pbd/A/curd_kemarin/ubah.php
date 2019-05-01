<?php
require 'functions.php';

//Ambil data di URL 
$idprodi = $_GET["id"];

// Kueri berdasarkan idprodi
$dt_prodi = query ("SELECT * FROM dt_prodi WHERE idprodi = $idprodi")[0];
// Ambil elemen pertama (0)


//Ketika tombol submit di tekan
if( isset($_POST["submit"]) ) {

//Terus kirim ke function ubah	
if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>
		";
} else {
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'index.php';
			</script>
		";
	}
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah</title>
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
	<h1>Ubah data Program Studi</h1>
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="idprodi" value="<?= $dt_prodi["idprodi"]; ?>">
			<ul>
			
				<label for="kdprodi">Kode Prodi : </label>
				<input type="text" name="kdprodi" id="kdprodi"required value="<?= $dt_prodi["kdprodi"]; ?>">
			
			<br><br>
			
				<label for="nmprodi">Nama Prodi : </label>
				<input type="text" name="nmprodi" id="nmprodi"required value="<?= $dt_prodi["nmprodi"]; ?>">
			</li>
			<br><br>
			
			<label for="akreditasi">Akreditasi : </label>
			<input type="radio" name="akreditasi" value="-" <?php if($dt_prodi["akreditasi"]=='-' || $dt_prodi["akreditasi"]=='') { echo "checked=\"checked\""; } else {echo ""; } ?>> -
			<input type="radio" name="akreditasi" value="A" <?php if($dt_prodi["akreditasi"]=='A') {echo "checked=\"checked\""; } else {echo ""; } ?> > A
			<input type="radio" name="akreditasi" value="B" <?php if($dt_prodi["akreditasi"]=='B') {echo "checked=\"checked\""; } else {echo ""; } ?> > B
			<input type="radio" name="akreditasi" value="C" <?php if($dt_prodi["akreditasi"]=='C') {echo "checked=\"checked\""; } else {echo ""; } ?> > C
			
			<br><br>
			
				<button type="submit" class="btn btn-default" name="submit">Simpan dan Ubah Data!</button>
			
		</ul>
	
	</form>

</body>
</html>