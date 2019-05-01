<?php

$conn = mysqli_connect("localhost", "root", "", "akademik");

function query($query){
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $row = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;

    }
    return $rows;
}

?>