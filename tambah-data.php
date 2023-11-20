<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulir Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="header" align=" center">
		<h2>Formulir Pendaftaran</h2>
		<h4>Silahkan Daftarkan Diri Anda ke Dalam Sistem</h4>
	</div>


	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid">
					<a class="navbar-brand" href="tampil-data.php"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="tampil-data.php">Lihat data</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="tambah-data.php">Tambah Data</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Dropdown link
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="array.php">array1</a></li>
									<li><a class="dropdown-item" href="array2.php">Array2</a></li>
									<li><a class="dropdown-item" href="cf1.php">cf1</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div class="row">

			<div class="col-1">
				
			</div>
			<div class="col-12">
				<fieldset>
					<form action="proses-data.php" method="POST" enctype="multypart/form-data">
						<table class="table table-striped">

							<tr>
								<td><label for="nim">Nim</label></td>
								<td>
									<div class="col-sm-4">
										<input class="form-control" type="text" name="nim" placeholder="Masukan NIM Anda">
									</div>
								</td>
							</tr>

							<tr>
								<td><label for="nama">Nama Lengkap</label></td>

								<td>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Anda">
									</div>
								</td>

							</tr>

							<tr>
								<td><label for="ttl">Tanggal Lahir</label></td>

								<td>
									<div class="col-sm-4">
										<input class="form-control" type="date" name="ttl" placeholder="Masukan NIM Anda">
									</div>
								</td>
							</tr>

							<tr>
								<td><label for="alamat">Alamat</label></td>

								<td>
									<div class="col-sm-10">
										<textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
									</div>
								</td>
							</tr>

							<tr>
								<td><label for="asal_sekolah">asal Sekolah</label></td>

								<td>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="asal_sekolah" placeholder="Asal Sekolah Anda">
									</div>
								</td>
							</tr>

							<tr>
								<td></td>

								<td>
									<input class="btn btn-danger" type="submit" name="daftar" value="SUBMIT DATA">
								</td>
							</tr>

						</table>
					</form>
				</fieldset>
			</div>
		</div>

	</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>