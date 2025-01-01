<?php

namespace Config;

use MongoDB\Client as MongoClient;
use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config{
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;
    public string $defaultGroup = 'default';
    public array $default = [
        'DSN'          => '',
        'hostname'     => 'mongodb+srv://Ahmet_Can:ADMİN123321@ahmet.1qhom.mongodb.net/?retryWrites=true&w=majority&appName=Ahmet',
        'username'     => '',
        'password'     => '',
        'database'     => '',
        'DBDriver'     => 'mongodb',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];
    public function __construct(){
        parent::__construct();
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
