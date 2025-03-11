<?php
session_start();
if($_SESSION["kullaniciadi"]=="Bakanım" && $_SESSION["kullanicisifre"]==123456)
{
    echo "<h3>Bu sayfa size özel sayfadır. Oturumunuz başarıyla gerçekleştiği için bu sayfaya yönlendirildiniz. </h3>"."<br>".
    "<a href='index.php'>Anasayfa</a> | <a href='cıkıs.php'>Çıkış Yap</a>";
}
else{
    header("Location:giris.php");
}
?>