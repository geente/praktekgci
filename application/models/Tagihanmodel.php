<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tagihanmodel extends CI_Model
{
    public function tampilData()
    {
        $this->db->from('tagihan')
            ->join('users', 'tagihan.id_user=users.id_user')
            ->join('semester', 'tagihan.id_semester=semester.id_semester');
        $kueri = $this->db->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('tagihan', $data);
    }
}
