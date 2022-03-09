<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAnggota extends CI_Model{

    public function ID_Anggota(){
        $this->db->select('RIGHT(anggota.ID_Anggota,3) as kode', false);
        $this->db->order_by('ID_Anggota', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('anggota');
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
        $this->db->where('ID_Anggota', $ID);
        return $this->db->get('anggota')->row_array();
    }

    public function update($ID_Anggota, $data){
        $this->db->where('ID_Anggota', $ID_Anggota);
        $this->db->update('anggota', $data);
    }

    public function hapus($ID){
        $this->db->where('ID_Anggota', $ID);
        $this->db->delete('anggota');
    }
    
}
?>