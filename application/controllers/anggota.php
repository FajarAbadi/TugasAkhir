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
        $isi['content'] = 'anggota/form_anggota';
        $isi['jududl']  = 'Form Tambah Anggota';
        $this->load->view('v_dashboard', $isi);
     }
}