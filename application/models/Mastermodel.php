<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mastermodel extends CI_Model
{
    public function mahasiswa()
    {
        $kueri = $this->db->get_where('users', ['id_level' => 3]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function semester()
    {
        $kueri = $this->db->get('semester');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function jurusan()
    {
        $kueri = $this->db->get('jurusan');
        $hasil = $kueri->result();
        return $hasil;
    }
}
