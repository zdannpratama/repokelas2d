<?php 
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

	<h1>Tampil Data Mahasiswa</h1>

	<p></p>
	<button class="btn btn-outline-warning"><a href="tambah-data.php">+ Tambah Data Mahasiswa</a></button>
	<p></p>

	<table class="table table-striped table-hover table-warning">
		<tr>
 			<td>Nim</td>
 			<td>Nama</td>
 			<td>Alamat</td>
 			<td>TTL</td>
 			<td>Asal_sekolah</td>
 			<td></td>
 		</tr>

		<?php 
		$sql 	= "SELECT * FROM data_mhs";
		$query	= mysqli_query($db, $sql);

		while ($mhs=mysqli_fetch_array($query)) {
			echo "<tr>";
				 echo "<td>".$mhs['nim']."</td>";
                  echo "<td>".$mhs['nama']."</td>";
                  echo "<td>".$mhs['ttl']."</td>";
                  echo "<td>".$mhs['alamat']."</td>";
                  echo "<td>".$mhs['asal_sekolah']."</td>";

				echo "
				<td> 
				<a href='edit-data.php?update=$mhs[nim]'>Edit</a>  |

				<a href='hapus-data.php?update=$mhs[nim]'>Hapus</a>
				</td>
				";

			echo "</tr>";
		}
		 ?>

	</table>


</body>
</html>