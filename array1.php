<?php 
$mhs = array(
array ('A12.2010.04567','Anita Larasati', 3.5),
array ('A12.2010.05678','dude harmono', 3),
array ('A12.2010.06789','erniwati listyani', 2.75)
);

// untuk mengakses elemen array multidimensi, misalkan akan di cetak maka kodenya:

echo "NIM : " . $mhs[0][0]. " NAMA : " . $mhs[0] [1] . " IPK : " . $mhs[0] [2] . "<br /> ";
echo "NIM : " . $mhs[1][0]. " NAMA  : " . $mhs[1][1] . " IPK  : " . $mhs[1][2] . "<br />"; 
echo "NIM : " . $mhs[2][0]. " NAMA  : " . $mhs[2][1] . " IPK  : " . $mhs[2][2] . "<br />"; 

//Menghitung panjang suatu array

$mobil=array("Volvo" , "Jaguar" , "Mercedez");
echo "panjang array adalah : ".count($mobil);

//Mencetak seluruh elemen array

$mobil=array("Volvo" , "Jaguar" , "Mercedez");
$jum=count($mobil);
for ($i=0; $i<$jum; $i++){
	echo $mobil[$i]. '<br/>';
}

//Array Assosiatif
$umur = array("joni"=>"17" , "indra"=>"18" , "susi"=>"16");
echo "joni berusia".$umur["joni"]."tahun";

foreach ($umur as $x => $nilaiX) {
	// code...
}
 
 ?>