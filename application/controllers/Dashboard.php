<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
        $this->load->helper('url');
        //$this->load->model('MAuth');
	}

    public function index(){
        $this->MSqurity->getSqurity();
        $isi['content'] = 'content';
        $isi['judul'] = 'Dashboard';
        $this->load->view('index', $isi);
    }
}
