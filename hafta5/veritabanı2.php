<?php
try
{
    $db=new PDO("mysql:host=localhost;
    dbname=haberler;charset=utf8","root","");
}
catch(PDOException $e)
{
    print $e->getMessage();
}
$sorgu=$db->query("SELECT * FROM
haber_detay",PDO::FETCH_ASSOC);
$sonuc=$sorgu->fetchAll(PDO::FETCH_ASSOC);
$json_veri=json_encode($sonuc,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents('haberler2.json',$json_veri);



?>