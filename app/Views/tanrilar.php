<?php
// MongoDB veritabanı bağlantısı
require 'db.php'; // MongoDB veritabanı bağlantısı

// MongoDB'den verileri çekiyoruz
try {
    $tanrilar = $collection->find()->toArray();  // Koleksiyondaki tüm verileri alıyoruz
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Veri çekme hatası: " . $e->getMessage();
    exit();
}
?>

<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanrılar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('genel.css'); ?>">
    <style>
        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center mb-4">Tanrılar</h1>

        <div class="row">
            <?php foreach ($tanrilar as $tanri): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="<?= htmlspecialchars($tanri['resim']) ?>" class="card-img-top" alt="<?= htmlspecialchars($tanri['ad']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($tanri['ad']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($tanri['aciklama']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?= $this->endSection(); ?>
