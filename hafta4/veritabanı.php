<?php
include ("baglan.php");

if(isset($_POST["girisbuton"])) {
    if(!empty($_POST["kadi"]) && !empty($_POST["ksifre"])) {
        $kadi = trim($_POST["kadi"]);
        $ksifre = trim($_POST["ksifre"]);

        
        $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = :kadi AND sifre = :ksifre");
        $sorgu->execute(['kadi' => $kadi, 'ksifre' => $ksifre]);

        if($sorgu->rowCount() > 0) {
            session_start();
            $kullanici = $sorgu->fetch();
            $_SESSION["kadi"] = $kadi;
            
            echo "<h3>Hoşgeldiniz, " . htmlspecialchars($kullanici["ad_soyad"]) . "!</h3>";
            echo "<p>Sayfamızı ziyaret ettiğiniz için teşekkür ederiz.</p>";
            echo "<a href='cikis.php'>Çıkış Yap</a>";
        } else {
            echo "<h3>Hatalı giriş yaptınız! Anasayfaya yönlendiriliyorsunuz.</h3>";
            header("refresh:3;url=form.php");
        }
    } else {
        echo "<h3>Lütfen kullanıcı adı ve şifre alanlarını doldurun!</h3>";
    }
}
?>
