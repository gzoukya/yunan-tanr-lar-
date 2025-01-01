<?php

namespace App\Models;

use CodeIgniter\Model;

class TanriModel extends Model
{
    protected $table = 'tanrilar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ad', 'aciklama', 'resim'];

    // Tüm tanrıları getir
    public function getAllTanrilar()
    {
        return $this->findAll();
    }

    // Yeni tanrı ekle
    public function addTanri($data)
    {
        return $this->insert($data);
    }
}
