<?php
require("../sistem/koneksi.php");
$hub = open_connection();
read_data();
mysqli_close($hub);
?>

<?php
function read_data() {
	global $hub;
	$query = "select * from dt_prodi";
	$result = mysqli_query ($hub, $query);
?>
<h2>Read Data Program Studi</h2>
<table border="1" cellpadding="5" cellspacing="1">
<tr><td>ID</td><td>KODE</td><td>NAMA
PRODI</td><td>AKREDITASI</td></tr>
<?php
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['idprodi']; ?></td>
<td><?php echo $row['kdprodi']; ?></td>
<td><?php echo $row['nmprodi']; ?></td>
<td><?php echo $row['akreditasi']; ?></td>
</tr>
<?php
}
?>
</table>
<?php
}
?>