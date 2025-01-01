<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('genel.css'); ?>">

    <style>
        .hero {
            background: black;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }
        .hero img {
            width: 150px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>


    <!-- Hero Section -->
    <div class="hero">
        <h1>Yunan Mitolojisi</h1>
        <p>Mitolojinin büyüleyici dünyasına hoş geldiniz!</p>
    </div>
<?php 
    require 'db.php'; // MongoDB veritabanı bağlantısı

    // MongoDB'den verileri çekiyoruz
    try {
        $tanrilar = $collection->find()->toArray();  // Koleksiyondaki tüm verileri alıyoruz
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Veri çekme hatası: " . $e->getMessage();
        exit();
    }
?>
    <!-- Tanrılar Bölümü -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Yunan Tanrıları</h2>
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
    
</body>
</html>
<?= $this->endSection(); ?>
