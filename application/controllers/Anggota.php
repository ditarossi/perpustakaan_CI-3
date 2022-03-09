<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('MAnggota');
    }

    public function index(){
        //$this->MSqurity->getSqurity();
        $isi['content'] = 'anggota/anggota';
        $isi['judul'] = 'Data Anggota';
        $isi['data'] = $this->db->get('anggota')->result();
        //var_dump($isi['data']);
        $this->load->view('index', $isi);
    }

    public function tambah_anggota(){
        $isi['content'] = 'anggota/tambah';
        $isi['judul'] = 'Tambah Data Anggota';
        $isi['ID_Anggota'] = $this->MAnggota->ID_Anggota();
        $this->load->view('index', $isi);
    }

    public function input(){
        $data = array(
            'ID_Anggota' => $this->input->post('ID_Anggota'),
            'Nama_Anggota' => $this->input->post('Nama_Anggota'),
            'Gender' => $this->input->post('Gender'),
            'Alamat' => $this->input->post('Alamat'),
            'No_HP' => $this->input->post('No_HP')
        );
        $query = $this->db->insert('anggota', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Ditambahkan !');
            redirect('anggota');
        }
    }

    public function edit($ID){
        $isi['content'] = 'anggota/edit';
        $isi['judul'] = 'Edit Data Anggota';
        $isi['data'] = $this->MAnggota->edit($ID);
        $this->load->view('index', $isi);
    }

    public function update(){
        $ID_Anggota = $this->input->post('ID_Anggota');
        $data = array(
            'ID_Anggota' => $this->input->post('ID_Anggota'),
            'Nama_Anggota' => $this->input->post('Nama_Anggota'),
            'Gender' => $this->input->post('Gender'),
            'Alamat' => $this->input->post('Alamat'),
            'No_HP' => $this->input->post('No_HP')
        );
        $query = $this->MAnggota->update($ID_Anggota, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Diedit !');
            redirect('anggota');
        }
    }

    public function hapus($ID){
        $query = $this->MAnggota->hapus($ID);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Dihapus !');
            redirect('anggota');
        }
    }
}
