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
        $isi['content'] = 'anggota/from_anggota';
        $isi['judul']   = 'Form Tambah Anggota';
        $this->load->view('v_dashboard',$isi);
    }
}