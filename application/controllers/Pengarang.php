<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengarang extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('MPengarang');
    }

    public function index(){
        $isi['content'] = 'pengarang/pengarang';
        $isi['judul'] = 'Data Pengarang';
        $isi['data'] = $this->db->get('pengarang')->result();
        $this->load->view('index', $isi);
    }

    public function tambah_pengarang(){
        $isi['content'] = 'pengarang/tambah';
        $isi['judul'] = 'Tambah Data Pengarang';
        $isi['ID_Pengarang'] = $this->MPengarang->ID_Pengarang();
        $this->load->view('index', $isi);
    }

    public function input(){
        $data = array(
            'ID_Pengarang' => $this->input->post('ID_Pengarang'),
            'Nama_Pengarang' => $this->input->post('Nama_Pengarang')
        );
        $query = $this->db->insert('pengarang', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Ditambahkan !');
            redirect('pengarang');
        }
    }

    public function edit($ID){
        $isi['content'] = 'pengarang/edit';
        $isi['judul'] = 'Edit Data Pengarang';
        $isi['data'] = $this->MPengarang->edit($ID);
        $this->load->view('index', $isi);
    }

    public function update(){
        $ID_Pengarang = $this->input->post('ID_Pengarang');
        $data = array(
            'ID_Pengarang' => $this->input->post('ID_Pengarang'),
            'Nama_Pengarang' => $this->input->post('Nama_Pengarang')
        );
        $query = $this->MPengarang->update($ID_Pengarang, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Diedit !');
            redirect('pengarang');
        }
    }

    public function hapus($ID){
        $query = $this->MPengarang->hapus($ID);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Dihapus !');
            redirect('pengarang');
        }
    }

}
