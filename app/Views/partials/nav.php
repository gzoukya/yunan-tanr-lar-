<?php
// Hangi sayfanın aktif olduğunu belirlemek için dosya adını alıyoruz.
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Yunan Mitolojisi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <?=anchor(url_title(""), "Anasayfa", ['class' => $currentPage === 'index.php' ? 'nav-link fw-bold' : 'nav-link '])?>
                </li>
                <li class="nav-item">
                    <?=anchor(url_title("mitoloji"), "Mitoloji Nedir?", ['class' => $currentPage === 'mitoloji.php' ? 'nav-link fw-bold' : 'nav-link '])?>
                </li>
                <li class="nav-item">
                    <?=anchor(url_title("tanrilar"), "Tanrılar", ['class' => $currentPage === 'tanrilar.php' ? 'nav-link fw-bold' : 'nav-link '])?>
                </li>
                <li class="nav-item">
                    <?=anchor(url_title("login"), "Yönetim Paneli", ['class' => $currentPage === 'login.php' ? 'nav-link fw-bold' : 'nav-link '])?>
                </li>
            </ul>
        </div>
    </div>
</nav>