<?php
//anahtar değerleri olmayan diziyi json dizisine çevirme
$diller=array("PHP","C#","Java");
$json_dizisi=json_encode($diller);
echo $json_dizisi."<br>";


//anahtar değerleri olan bir diziyi json dizisi haline çevirme

$ArabaMarkasi=array(
    "araba1"=>"mercedes",
    "araba2"=>"bmw",
    "araba3"=>"volvo"
);
$json_nesnesi=json_encode($ArabaMarkasi);
echo $json_nesnesi."<br>";


$json_ben=
'
{
"isim":"Ayla",
"soyisim":"Bilal",
"memleket":"bulgaristan"
}
';
$veri=$json_decode($json_ben);
echo $veri->isim."<br>".
$veri->soyisim."<br>".
$veri->memleket;




?>