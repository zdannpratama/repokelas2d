<?php  
include 'koneksi.php';

if (isset($_GET['update'])) {


	$sql	=	"DELETE FROM data_mhs WHERE Nim=$_GET[update] ";

	$query	=	mysqli_query($db, $sql);

	if ($query) {
		header('Location: tampil-data.php?pesan=sukses');
	} else {
		die("Tidak berhasil hapus data");
	}
} else {
	die("Tidak bisa mengakses data ini");
}
?>