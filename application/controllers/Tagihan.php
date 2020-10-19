<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tagihanmodel');
    }

    public function index()
    {
        $data = array(
            'title' => "Data Tagihan",
            'tagihan' => $this->tagihanmodel->tampilData()
        );
        $this->load->view('tagihan/data', $data);
    }

    public function add()
    {
        $data = array(
            'title' => "Tambah Tagihan"
        );
        $this->load->view('tagihan/add', $data);
    }

    public function insert()
    {
        $this->nama_tagihan = $this->input->post('nama_tagihan');
        $this->id_user = $this->input->post('id_user');
        $this->id_semester = $this->input->post('id_semester');

        $this->tagihanmodel->insert($this);
        $this->load->view('tagihan/data');
    }
}
