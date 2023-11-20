<?php 
$mobil=array("volvo","jaguar","mercedez");
sort($mobil);
$pjg=count($mobil);
for($i=0; $i<$pjg; $i++)
{
	echo $mobil[$i]."<br/>";
}
 ?>