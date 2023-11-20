<?php  
include 'koneksi.php';

if (isset($_POST['daftar'])) {
	$nim=$_POST['Nim'];
	$nama=$_POST['Nama'];
	$ttl =$_POST['TTL'];
	$alamat =$_POST['Alamat'];
	$asal_sekolah =$_POST['Asal_sekolah'];

	$sql = "INSERT INTO data_mhs (Nim, Nama, TTL, Alamat, Asal_sekolah) VALUES ('$nim', '$nama', '$ttl', '$alamat', '$asal_sekolah')";
    
    $stmt = mysqli_prepare($db, $sql);

	if ($query) {
			header('Location: tampil-data.php?status=sukses');
		}	else {
			header('Location: tambah-data.php?status=gagal');
		}
}

?>