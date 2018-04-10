<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    function __construct(){
		parent::__construct();		
		$this->load->model('CrudModel');
		$this->load->helper('url');
        $this->load->helper(array('form', 'url'));
 	}

	public function index()
	{
		$this->load->view('index');
	}
    public function daftar()
	{
		$this->load->view('daftar');
	}
        public function read()
	{
        $data['pengajuanformulir'] = $this->CrudModel->viewdbase()->result();
		$this->load->view('read', $data);
	}
    
    public function pengunjung()
    {
        $data['pengunjung'] = $this->CrudModel->pengunjung();
        $this->load->view('pengunjung', $data);
    }

}
