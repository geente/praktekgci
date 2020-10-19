<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('authmodel');
    }

    public function index()
    {
        $data = array(
            'title' => "Login"
        );
        $this->load->view('auth/login', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->authmodel->login($username);
        if (empty($user)) {
            $this->session->set_flashdata('message', 'Username tidak ditemukan');
            redirect('auth');
        } else {
            if ($password == $user->password) {
                $session = array(
                    'authenticated' => true,
                    'username' => $user->username,
                    'nama' => $user->nama,
                    'id_user' => $user->id_user,
                    'id_level' => $user->id_level
                );
                $this->session->set_userdata($session);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'Password salah');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
