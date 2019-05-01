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

function cari($keyword) {
	$query = "SELECT * FROM tabeldosen
		WHERE
		nama LIKE '%$keyword%' OR
		prodi LIKE '%$keyword%' OR
		nip LIKE '%$keyword%'
		";

	return query($query);
	return mysqli_affected_rows($conn);
}

?>