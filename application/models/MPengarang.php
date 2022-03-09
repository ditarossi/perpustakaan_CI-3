<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPengarang extends CI_Model{

    public function ID_Pengarang(){
        $this->db->select('RIGHT(pengarang.ID_Pengarang,3) as kode', false);
        $this->db->order_by('ID_Pengarang', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengarang');
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

    public function edit($ID){
        $this->db->where('ID_Pengarang', $ID);
        return $this->db->get('pengarang')->row_array();
    }

    public function update($ID_Pengarang, $data){
        $this->db->where('ID_Pengarang', $ID_Pengarang);
        $this->db->update('pengarang', $data);
    }

    public function hapus($ID){
        $this->db->where('ID_Pengarang', $ID);
        $this->db->delete('pengarang');
    }
}
?>