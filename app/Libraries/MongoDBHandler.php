<?php

namespace App\Libraries;

use MongoDB\Client as MongoClient;

class MongoDBHandler
{
    protected $client;
    protected $database;

    public function __construct()
    {
        // MongoDB Atlas bağlantı URL'si
        $uri = "mongodb+srv://Ahmet_Can:ADMİN123321@ahmet.1qhom.mongodb.net/?retryWrites=true&w=majority&appName=Ahmet";
        $this->client = new MongoClient($uri);
        $this->database = $this->client->mito;  // Veritabanı adı
    }

    // Veritabanına veri ekleme fonksiyonu
    public function addData($data){
        $collection = $this->database->tanrilar;  // Koleksiyon adı
        $insertResult = $collection->insertOne($data);
        return $insertResult->getInsertedId();  // Eklenen verinin ID'sini döndürüyor
    }

    public function GetUsers(){
        $users = $this->database->users;
    }
    
}
