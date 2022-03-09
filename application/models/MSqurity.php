<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSqurity extends CI_Model{

    public function getSqurity(){
        $Username = $this->session->userdata('Username');
        if(empty($Username)){
            $this->session->sess_destroy();
            redirect('Auth');
        }
    }
    
}