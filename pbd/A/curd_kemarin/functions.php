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
	
	$kdprodi = htmlspecialchars($data ["kdprodi"]);
	$nmprodi = htmlspecialchars($data ["nmprodi"]);
	$akreditasi = htmlspecialchars($data ["akreditasi"]);

	$query = "INSERT INTO dt_prodi
			VALUES
		('', '$kdprodi', '$nmprodi', '$akreditasi')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows ($conn);
	
}


function hapus($id) {
	global $conn;
	mysqli_query ($conn, "DELETE FROM dt_prodi WHERE idprodi = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	
	$query = "update `dt_prodi`";
	$query.= "SET kdprodi='".$_POST['kdprodi']."', nmprodi='".$_POST['nmprodi']."', akreditasi='".$_POST['akreditasi']."'";
	$query.= "Where idprodi = ".$_POST['idprodi'];
			
	mysqli_query($conn, $query);
	return mysqli_affected_rows ($conn);
	
}

?>