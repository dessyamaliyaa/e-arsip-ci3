<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Model_login');
	}

	public function index() { 
		$this->load->view('login/login');
	}

	public function chek_login() { 
		if (isset($_POST['login'])) {
			
			$username  = $this->input->post('username');
			$password  = $this->input->post('password');
			$chek_user = $this->Model_login->chekLogin($username, $password);

			if (!empty($chek_user)) {
				$this->session->set_userdata($chek_user);
				$id = $this->session->userdata('id_pegawai');
		        $data['sm'] = $this->db->get_where('tbsurat_masuk',array('id_surat_masuk'=>$id))->row_array();
		        $this->template->load('template', 'sm/load_data',$data);
				redirect('home');
			} else {
				$this->session->set_flashdata("info", "<i class=\"ace-icon fa fa-exclamation-circle red\"></i> Nama Pengguna atau Kata Sandi Tidak Valid!");
				redirect('login');
			}
		} else {
			$this->session->set_flashdata("info", "<i class=\"ace-icon fa fa-exclamation-circle red\"></i> Nama Pengguna atau Kata Sandi Tidak Valid!");
			redirect('login');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
