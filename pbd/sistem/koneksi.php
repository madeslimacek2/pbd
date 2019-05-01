<?php
function open_connection()
{
$hostname="localhost";
$username="root";
$password="";
$dbname="akademik";
$koneksi=@mysqli_connect($host,$username,$password,$dbname);
if ($koneksi)
$db=@mysqli_select_db($koneksi, $dbname) or die ("Koneksi Gagal");
return $koneksi;
}
?>