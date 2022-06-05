<?php

class Anggota extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'anggota/v_anggota';
        $isi['judul']   = 'Daftar Data Anggota';
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_anggota()
    {
        
    }
}