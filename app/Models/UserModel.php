<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Kullanıcıyı login için doğrula
    public function login($username, $password) {
        $query = $this->db->get_where('users', ['users' => $username]);
        $user = $query->row();

        if ($user && password_verify($password, $user->password)) {
            return $user;
        } else {
            return false;
        }
    }

    // Yeni kullanıcı kaydı
    public function register($data) {
        return $this->db->insert('users', $data);
    }
}
