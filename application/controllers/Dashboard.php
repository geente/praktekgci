<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => "Tagihan Mahasiswa"
        );

        if ($this->session->userdata('id_level') == 1) {
            $this->load->view('dashboard/pimpinan', $data);
        } elseif ($this->session->userdata('id_level') == 2) {
            $this->load->view('dashboard/bendahara', $data);
        } else {
            $this->load->view('dashboard/mahasiswa', $data);
        }
    }
}
