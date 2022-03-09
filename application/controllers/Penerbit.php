<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('MPenerbit');
    }

    public function index(){
        $isi['content'] = 'penerbit/penerbit';
        $isi['judul'] = 'Data Penerbit';
        $isi['data'] = $this->db->get('penerbit')->result();
        $this->load->view('index', $isi);
    }

    public function tambah_penerbit(){
        $isi['content'] = 'penerbit/tambah';
        $isi['judul'] = 'Tambah Data Penerbit';
        $isi['ID_Penerbit'] = $this->MPenerbit->ID_Penerbit();
        $this->load->view('index', $isi);
    }

    public function input(){
        $data = array(
            'ID_Penerbit' => $this->input->post('ID_Penerbit'),
            'Nama_Penerbit' => $this->input->post('Nama_Penerbit')
        );
        $query = $this->db->insert('penerbit', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Ditambahkan !');
            redirect('penerbit');
        }
    }

    public function edit($ID){
        $isi['content'] = 'penerbit/edit';
        $isi['judul'] = 'Edit Data Penerbit';
        $isi['data'] = $this->MPenerbit->edit($ID);
        $this->load->view('index', $isi);
    }

    public function update(){
        $ID_Penerbit = $this->input->post('ID_Penerbit');
        $data = array(
            'ID_Penerbit' => $this->input->post('ID_Penerbit'),
            'Nama_Penerbit' => $this->input->post('Nama_Penerbit')
        );
        $query = $this->MPenerbit->update($ID_Penerbit, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Diedit !');
            redirect('penerbit');
        }
    }

    public function hapus($ID){
        $query = $this->MPenerbit->hapus($ID);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Dihapus !');
            redirect('penerbit');
        }
    }

}
