<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPenerbit extends CI_Model{

    public function ID_Penerbit(){
        $this->db->select('RIGHT(penerbit.ID_Penerbit,3) as kode', false);
        $this->db->order_by('ID_Penerbit', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('penerbit');
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
        $this->db->where('ID_Penerbit', $ID);
        return $this->db->get('penerbit')->row_array();
    }

    public function update($ID_Penerbit, $data){
        $this->db->where('ID_Penerbit', $ID_Penerbit);
        $this->db->update('penerbit', $data);
    }

    public function hapus($ID){
        $this->db->where('ID_Penerbit', $ID);
        $this->db->delete('penerbit');
    }

}
?>