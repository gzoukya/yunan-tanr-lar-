<?php
session_start();

// Oturum değişkenlerini temizler
session_unset();

// Oturumu tamamen sonlandırır
session_destroy();

// Kullanıcıyı index sayfasına yönlendirir
header('Location: ../index.php');
exit();
?>
