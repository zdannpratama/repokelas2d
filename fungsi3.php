<?php 

//fungsi mengembalikan nilai
function hitungumur($thn_lahir, $thn_now)
{
	$umur = $thn_now - $thn_lahir;
	return $umur;
}
function perkenalan ($nama, $salam="selamat sore"){
	echo $salam." <br/>";
	echo "perkenalkan, nama saya ".$nama."<br/>";
	echo " senang berkenalan dengan anda ";
}

//memanggil fungsi lain
echo "umur saya adalah ".hitungumur(2005, 2023)." tahun <br/>";
echo perkenalan("zidan");


 ?>