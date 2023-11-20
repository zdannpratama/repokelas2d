<?php 

$host	=	"localhost";
$user	=	"root";
$pass	=	"";
$namadb	=	"mahasiswa2";

$db = mysqli_connect($host, $user, $pass, $namadb);

if (!$db) {
	die("Koneksi gagal".mysqli_connect_error());
}

 ?>