<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli - Giriş</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2c3e50; /* Koyu mavi arka plan */
            color: #ecf0f1; /* Açık renk metin */
        }
        .card {
            background-color: #34495e; /* Koyu gri kart */
        }
        .card-header {
            background-color: #1abc9c; /* Yeşil başlık */
            color: white;
        }
        .btn-primary {
            background-color: #1abc9c; /* Yeşil buton */
            border: none;
        }
        .btn-primary:hover {
            background-color: #16a085; /* Buton hover efekti */
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 25rem;">
        <div class="card-header text-center">
            <h4>Yönetim Paneli Giriş</h4>
        </div>
        <div class="card-body">
            <!-- Hata mesajı kontrolü -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="<?= site_url('login/authenticate') ?>" method="POST">
                <div class="form-group">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS ve jQuery, optional -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?= $this->endSection(); ?>
