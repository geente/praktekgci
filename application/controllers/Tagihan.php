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
        $id_tagihan = $this->tagihanmodel->getTagihan();
        $this->nama_tagihan = $this->input->post('nama_tagihan');
        $this->angkatan = $this->input->post('angkatan');
        $this->jumlah = $this->input->post('jumlah');
        $id_jurusan = $this->input->post('id_jurusan');

        $this->tagihanmodel->insert($this);

        $mhs = $this->tagihanmodel->getMhs($this->angkatan, $id_jurusan);

        for ($i = 0; $i < count($mhs); $i++) {
            $data = [
                'id_user' => $mhs[$i]->id_user,
                'id_tagihan' => $id_tagihan[0]->id_tagihan + 1 + $i
            ];
            $this->tagihanmodel->insertTagihanMhs($data);
        }

        $this->session->set_flashdata('success', 'Berhasil menambah data aset');
        header('location:' . base_url('tagihan'));
        exit;
    }

    public function mahasiswa($id)
    {
        $data = array(
            'title' => "Data Tagihan Mahasiswa",
            'tagihan' => $this->tagihanmodel->mahasiswa($id)
        );
        $this->load->view('tagihan/datamahasiswa', $data);
    }

    public function bayar($id)
    {
        $data = array(
            'title' => "Data Tagihan Mahasiswa",
            'tagihan' => $this->tagihanmodel->bayar($id)
        );
        $this->load->view('tagihan/detailmahasiswa', $data);
    }

    public function pimpinan()
    {
        $data = array(
            'title' => "Data Tagihan",
            'tagihan' => $this->tagihanmodel->tampilData()
        );
        $this->load->view('tagihan/pimpinan', $data);
    }

    public function grafik()
    {
        $data = array(
            'title' => "Data Tagihan",
            'tagihan' => $this->tagihanmodel->tampilData()
        );
        $this->load->view('tagihan/grafik', $data);
    }
}
