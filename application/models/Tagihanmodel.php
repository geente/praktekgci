<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tagihanmodel extends CI_Model
{
    public function tampilData()
    {
        $this->db->from('tagihan_mhs')
            ->join('tagihan', 'tagihan_mhs.id_tagihan=tagihan.id_tagihan')
            ->join('users', 'tagihan_mhs.id_user=users.id_user');
        $kueri = $this->db->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function getTagihan()
    {
        $this->db->order_by('id_tagihan desc')
            ->limit(1);
        $kueri = $this->db->get('tagihan');
        $hasil = $kueri->result();
        return $hasil;
    }

    public function getMhs($thn_masuk, $id_jurusan)
    {
        $kueri = $this->db->get_where('users', ['tahun_masuk' => $thn_masuk, 'id_jurusan' => $id_jurusan]);
        $hasil = $kueri->result();
        return $hasil;
    }

    public function insert($data)
    {
        $this->db->insert('tagihan', $data);
    }

    public function insertTagihanMhs($data)
    {
        $this->db->insert('tagihan_mhs', $data);
    }

    public function mahasiswa($id)
    {
        $this->db->from('tagihan_mhs')
            ->join('tagihan', 'tagihan_mhs.id_tagihan=tagihan.id_tagihan')
            ->join('users', 'tagihan_mhs.id_user=users.id_user and users.id_user=' . $id)
            ->join('jurusan', 'users.id_jurusan=jurusan.id_jurusan');
        $kueri = $this->db->get();
        $hasil = $kueri->result();
        return $hasil;
    }

    public function bayar($id)
    {
        $this->db->from('tagihan_mhs')
            ->join('tagihan', 'tagihan_mhs.id_tagihan=tagihan.id_tagihan')
            ->join('users', 'tagihan_mhs.id_user=users.id_user and users.id_user=' . $id)
            ->join('jurusan', 'users.id_jurusan=jurusan.id_jurusan')
            ->where('tagihan_mhs.status="tunda"');
        $kueri = $this->db->get();
        $hasil = $kueri->result();
        return $hasil;
    }
}
