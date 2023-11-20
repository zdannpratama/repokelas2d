<?php  
include 'koneksi.php';

if (isset($_POST['update'])) {
	$nim	=	$_POST['nim'];
	$nama	=	$_POST['nama'];
	$ttl	=	$_POST['ttl'];
	$alamat	=	$_POST['alamat'];
	$asal	=	$_POST['asal_sekolah'];

	$sql	=	"UPDATE data_mhs SET Nama='$nama', TTL='$ttl', Alamat='$alamat', Asal_sekolah='$asal' WHERE Nim='$nim' ";

	$query	=	mysqli_query($db, $sql);

	if ($query) {
		header("Location: tampil-data.php?status=sukses");
	} else {
		die("Location: tampil-data.php?status=gagal");
	}
} else {
	die("Tidak bisa menyimpan data");
}

?>