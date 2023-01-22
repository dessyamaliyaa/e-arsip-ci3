<?php
class Model_login extends CI_Model{
    
    public function chekLogin($username,$password){
        $this->db->where('nama_user',$username);
        $this->db->where('kata_sandi', md5($password));
        $query = $this->db->get('tbuser')->row_array();
        return $query;
    }

    public function getSecurity() {
		$id    = $this->session->userdata('id_user'); 
		$aktif = $this->session->userdata('status');
        if (empty($id)) {
    		$this->session->set_flashdata("info", "<i class=\"ace-icon fa fa-exclamation-circle red\"></i>Masukkan Nama Pengguna dan Kata Sandi Anda!"); 
    		redirect('login');                   
        	$this->session->sess_destroy(); 
        } elseif ($aktif == 'inaktif') {
    		$this->session->set_flashdata("info", "<i class=\"ace-icon fa fa-exclamation-circle red\"></i>
                                           Akun tersebut tidak Aktif!");
    		redirect('login');
    		$this->session->sess_destroy();     
 
        }
    }
    
}
