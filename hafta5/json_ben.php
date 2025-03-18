<?php
$json_ben = 
'
{
    "isim": "Ayla",
    "soyisim": "Bilal",
    "memleket": "bulgaristan"
}
';

$veri = json_decode($json_ben);

echo $veri->isim . "<br>" .
     $veri->soyisim . "<br>" .
     $veri->memleket;
?>
