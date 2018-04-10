<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    
    function __construct(){
		parent::__construct();		
		$this->load->model('CrudModel'); /*membuka file m_data yg terdapat di folder model*/ 
		$this->load->helper('url');
        $this->load->helper(array('form', 'url'));
 	}
	
    function insert(){
		$nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $status = $this->input->post('status');
        $alamat = $this->input->post('alamat');
        $usia = $this->input->post('usia');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'usia' => $usia,
            'email' => $email,
            'status' => $status
			);
		$this->CrudModel->input_data($data,'pengajuanformulir');
        redirect(base_url());
	}
    
    function update(){
        $status = $this->input->post('status');
        $email = $this->input->post('email');
        
        $data = array(
            'status' => $status
        );
        
        $where = $email;
        
        $this->CrudModel->update_data($data, 'pengajuanformulir', $where );
        redirect(base_url().'Welcome/read');
	}
    
    function delete(){
        $email = $this->input->post('email');
        $where = $email;
        
        $this->CrudModel->delete_data('pengajuanformulir', $where );
        redirect(base_url().'Welcome/read');
	}
    
    public function upload(){
		$config['upload_path']          = './img/uploads/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 10000;
 
		// load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = 'Upload Success';
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
	}
    
    function sendMail() {
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $message = $this->input->post('message');
        $subject = $this->input->post('subject');
        
        $isi = 'Feedback : '.$nama.' | '.$email.' | '.$message;
        
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "emailpercobaangienzka@gmail.com";
        $config['smtp_pass'] = "emailpercobaangienzkaemailpercobaangienzka";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from($email, $nama);
        $list = array('emailpercobaangienzka@gmail.com');
        $ci->email->to('emailpercobaangienzka@gmail.com');
        $ci->email->subject($subject);
        $ci->email->message($isi);
        if ($this->email->send()) {
            redirect(base_url());
        } else {
            show_error($this->email->print_debugger());
        }
    }
    
    function exportDB(){
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Report.xls");
    
        $data['pengajuanformulir'] = $this->CrudModel->viewdbase()->result();
        $this->load->view('read',$data);
    }

}
