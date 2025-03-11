<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

            <form name="form" action="" method="post" class="row g-3 needs-validation" novalidate>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" id="validationCustom01" name="kadi" required>
    
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Şifre</label>
    <input type="text" class="form-control" id="validationCustom02" name="ksifre" required>
    
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="girisbuton">Giriş Yap</button>
  </div>
</form>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if(isset($_POST["girisbuton"]))
{
    $_SESSION["kullaniciadi"]=$_POST["kadi"];
    $_SESSION["kullanicisifre"]=$_POST["ksifre"];
    header("Location:index.php");
}
?>