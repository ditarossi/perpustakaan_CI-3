<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('MBuku');
    }

    public function index(){
        $isi['content'] = 'buku/buku';
        $isi['judul'] = 'Data Buku';
        //$isi['data'] = $this->db->get('buku')->result();
        $this->load->view('index', $isi);
    }

    public function tambah_buku(){
        $isi['content'] = 'buku/tambah';
        $isi['judul'] = 'Tambah Data Buku';
        $isi['ID_Buku'] = $this->MBuku->ID_Buku();
        $this->load->view('index', $isi);
    }

    public function input(){
        $data = array(
            'ID_Buku' => $this->input->post('ID_Buku'),
            'ID_Pengarang' => $this->input->post('ID_Pengarang'),
            'ID_Penerbit' => $this->input->post('ID_Penerbit'),
            'Judul_Buku' => $this->input->post('Judul_Buku'),
            'Tahun_Terbit' => $this->input->post('Tahun_Terbit'),
            'Jumlah' => $this->input->post('Jumlah')
        );
        $query = $this->db->insert('buku', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil Ditambahkan !');
            redirect('buku');
        }
    }

}
