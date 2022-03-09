<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();		
        $this->load->helper('url');
        $this->load->model('MAuth');
	}

    public function index(){
        $this->load->view('signin');
    }
    
    function auth(){
        $Email = $this->input->post('Email', true);
        $Password = $this->input->post('Password', true);
        $result = $this->MAuth->cek_user($Email, $Password);

        if($result->num_rows() > 0 ){
            $data = $result->row_array();
            $Username = $data['Username'];
            $Email = $data['Email'];
            $Level = $data['Level'];
            $sesdata = array(
                'Username' => $Username,
                'Email' => $Email,
                'Level' => $Level,
            );
            $this->session->set_userdata($sesdata);
            if($Level === "1"){
                echo "<script>alert('Login Admin Successfully!')</script>";
                redirect('Dashboard');
            } else {
                echo "<script>alert('Login User Successfully!')</script>";
            }
        } else {
            echo "<script>alert('Login Failed!');history.go(-1);</script>";
        }
        $this->load->view('landing/signin');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth');
    }

}
