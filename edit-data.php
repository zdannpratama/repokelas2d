<?php  

include 'koneksi.php';

$sql 	= mysqli_query($db, "SELECT * FROM data_mhs WHERE nim = '$_GET[update]'");

$mhs	= mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Formulir Pendaftaran</title>
</head>
<body>

	<h2>Edit Formulir Pendaftaran</h2>
	<h4>Silahkan Edit Data Anda</h4>

	<fieldset>
		<form action="proses-edit-data.php" method="POST">
			<table>

				<tr>
					<td><label for="nim">NIM</label></td>
					<td>:</td>
					<td>
						<input type="text" name="nim" placeholder="Masukan NIM Anda" value="<?php echo $mhs['nim']; ?>">
					</td>
				</tr>

				<tr>
					<td><label for="nama">Nama Lengkap</label></td>
					<td>:</td>
					<td>
						<input type="text" name="nama" placeholder="Masukan Nama Anda" value="<?php echo $mhs['nama']; ?>">
					</td>
				</tr>

				<tr>
					<td><label for="ttl">Tanggal Lahir</label></td>
					<td>:</td>
					<td>
						<input type="date" name="ttl" placeholder="Masukan NIM Anda" value="<?php echo $mhs['ttl']; ?>">
					</td>
				</tr>

				<tr>
					<td><label for="alamat">Alamat</label></td>
					<td>:</td>
					<td>
						<textarea name="alamat" placeholder="Masukan Alamat Anda"> <?php echo $mhs['alamat']; ?> </textarea>
					</td>
				</tr>

				<tr>
					<td><label for="asal_sekolah">Asal Sekolah</label></td>
					<td>:</td>
					<td>
						<input type="text" name="asal_sekolah" placeholder="Asal Sekolah Anda" value="<?php echo $mhs['asal_sekolah']; ?>">
					</td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="update" value="UPDATE DATA"></td>
				</tr>


			</table>
		</form>
	</fieldset>
</body>
</html>