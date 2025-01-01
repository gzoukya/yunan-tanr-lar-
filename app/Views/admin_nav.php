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
                    <a class="nav-link <?= $currentPage === 'index.php' ? 'fw-bold' : '' ?>" href="../index.php">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'mitoloji.php' ? 'fw-bold' : '' ?>" href="../mitoloji.php">Mitoloji Nedir?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'tanrilar.php' ? 'fw-bold' : '' ?>" href="../tanrilar.php">Tanrılar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger <?= $currentPage === 'logout.php' ? 'fw-bold' : '' ?>" href="logout.php">Çıkış Yap</a>
                </li>
                

            </ul>
        </div>
    </div>
</nav>
