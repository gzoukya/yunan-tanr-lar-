<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yunan Mitolojisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('genel.css'); ?>">
    <style>
        body {
            background: #f8f9fa;
        }
        .content {
            padding: 50px 0;
        }
        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- İçerik -->
    <div class="container content">
        <h1 class="text-center mb-5">Yunan Mitolojisi Nedir?</h1>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>
                Yunan mitolojisi, Antik Yunan'da oluşmuş, tanrıların, kahramanların, doğaüstü varlıkların ve mitolojik hikâyelerin yer aldığı zengin bir anlatılar sistemidir. Bu mitler, Yunan halkının doğa olaylarını, evrenin yaratılışını, insanın kökenini ve ahlaki değerleri anlamlandırma çabasıyla gelişmiştir. En tanınmış figürler arasında baş tanrı Zeus, aşk tanrıçası Afrodit, savaş tanrısı Ares ve kahraman Herakles gibi karakterler yer alır. Yunan mitolojisi, Batı kültürünün temelini oluşturan edebiyat, felsefe ve sanat gibi alanlarda derin etkiler bırakmış ve günümüzde hâlâ popülerliğini sürdürmüştür.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://medyaveiletisim.kulup.tau.edu.tr/wp-content/uploads/2022/01/xEd34E5nHw8tVJip-636523260506552496-800x400.jpg" alt="Yunan Mitolojisi">
            </div>
        </div>
    </div>
</body>
</html>
<?= $this->endSection(); ?>
