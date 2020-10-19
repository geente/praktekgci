<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authmodel extends CI_Model
{
    public function login($username)
    {
        $kueri = $this->db->get_where('users', ['username' => $username]);
        $hasil = $kueri->row();
        return $hasil;
    }
}
