<?php
$conn = mysqli_connect("localhost","root","","akademik");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data) {
	global $conn;
	
	$nama = htmlspecialchars($data ["nama"]);
	$prodi = htmlspecialchars($data ["prodi"]);
	$nip = htmlspecialchars($data ["nip"]);

	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}
	
	$query = "INSERT INTO tabeldosen
			VALUES
		('', '$nama', '$prodi', '$nip', '$gambar')
	";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows ($conn);
	
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
  	$error = $_FILES['gambar']['error'];
  	$tmpName = $_FILES['gambar']['tmp_name'];

  	if ( $error === 4 ) {
    echo "<script>
    alert('Pilih gambar terlebih dahulu')
          </script>";
          return false;
}
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar)) ;
  if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {

    echo "<script>
    alert('Yang anda Upload bukan Gambar')
          </script>";
          return false;
}
  if ($ukuranFile > 1000000000 ) {
    echo "<script>
    alert('Ukuran Gambar terlalu besar!');
          </script>";
          return false;
  }

//generate nama file baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
// lolos upload
  move_uploaded_file($tmpName, 'image/' . $namaFileBaru);
  return $namaFileBaru;
}


function hapus($id) {
	global $conn;
	mysqli_query ($conn, "DELETE FROM tabeldosen WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	
	$id = $data["id"];
	$nama = htmlspecialchars($data ["nama"]);
	$prodi = htmlspecialchars($data ["prodi"]);
	$nip = htmlspecialchars($data ["nip"]);
	$gambarLama = htmlspecialchars($data ["gambar"]);

	//cek apakah user pilih gambar baru / tidak
	if ( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar= upload();
	}
	 
	
	$query = "UPDATE tabeldosen SET

			nama ='$nama',
			prodi = '$prodi',
			nip ='$nip',
			gambar ='$gambar'
			WHERE id = $id
			";
			
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows ($conn);
	
}

function cari($keyword) {
	$query = "SELECT * FROM tabeldosen
		WHERE
		nama LIKE '%$keyword%' OR
		nip LIKE '%$keyword%' OR
		prodi LIKE '%$keyword%'
		";

	return query($query);
}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada / belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if( mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('username telah terdaftar!');
		</script>";
		return false;
	}

	//cek konfirmasi password
	if ( $password !== $password2 ) {
		echo "<script>
		alert('konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambah userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

?>