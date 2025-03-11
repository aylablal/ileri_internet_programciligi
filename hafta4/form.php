<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Formu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Giriş Yap</h2>
                <form action="veritabanı.php" method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="kadi" class="form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="kadi" name="kadi" required>
                    </div>
                    <div class="mb-3">
                        <label for="ksifre" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="ksifre" name="ksifre" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="girisbuton">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
