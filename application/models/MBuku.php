<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBuku extends CI_Model{

    public function ID_Buku(){
        $this->db->select('RIGHT(buku.ID_Buku,3) as kode', false);
        $this->db->order_by('ID_Buku', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('buku');
        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode=1;
        }

        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "AG".$kodemax;
        return $kodejadi;
    }

    
}