<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        if ($this->input->method() === 'post') {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->login($email, $password);

            if ($user) {
                // Başarıyla giriş yaptı, session başlat
                $this->session->set_userdata('user_id', $user->_id);
                redirect('dashboard');
            } else {
                // Giriş başarısız
                $this->session->set_flashdata('error', 'Geçersiz e-posta veya şifre');
                redirect('login');
            }
        } else {
            // Giriş formu
            $this->load->view('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}
