<?php
$url="deneme.json";
$data=file_get_contents($url);
$veriler=json_decode($data);
foreach($veriler as $deger)
{
    echo "kitabın adı:".$deger->adi."<br>".
    "kitabın yazarı:".$deger->yazari."
    <br>"."<hr>";
}
?>