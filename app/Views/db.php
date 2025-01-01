<?php
require '../vendor/autoload.php';  // MongoDB için autoload

$uri = "mongodb+srv://Ahmet_Can:ADMİN123321@ahmet.1qhom.mongodb.net/?retryWrites=true&w=majority&appName=Ahmet";  // MongoDB Atlas bağlantı URL'si
$client = new MongoDB\Client($uri);  // MongoDB client'ı başlatıyoruz

$database = $client->mito;  // Veritabanı adınızı buraya yazın
$collection = $database->tanrilar;  // Koleksiyon adı: tanrilar
