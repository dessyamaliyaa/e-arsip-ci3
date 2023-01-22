<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaturanPass extends CI_Controller {

	public function __construct(){
        parent ::__construct();
    }

    public function index(){
        $data = array(
            'title'     => 'Pengaturan Kata Sandi '
        );
        $this->template->load('template','pengaturanpass/page',$data);
    }

    public function password() {
        
        $this->Model_login->getSecurity();

        $id_user = $this->session->userdata('id_user');
        $lama    = $this->input->post('password');
        $baru    = $this->input->post('newpass');
        $baru1   = $this->input->post('confpassword');

        $this->db->where('id_user', $id_user);
        $query = $this->db->get('tbuser');

        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $pass_lama  = $row->kata_sandi;
                $pass_lama2 = md5($lama);

                if ($pass_lama !== $pass_lama2) {
                    $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-danger\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-times\"></i>
                                                Maaf!
                                            </strong>

                                            Kata Sandi Lama Tidak Cocok!
                                            <br />
                                        </div></div>");
                    redirect('PengaturanPass');
                } else {
                    if ($baru == $baru1) {
                        $pass_baru = md5($baru);
                        $data = array(
                            'kata_sandi' => $pass_baru
                            );

                        $this->db->where('id_user',$id_user);
                        $this->db->update('tbuser',$data);
                        $this->session->set_flashdata('info',"<i class=\"ace-icon fa fa-exclamation-circle red\"></i> Kata Sandi Berhasil Diubah. Silahkan Login Ulang!" );
                        redirect('login');
                        $this->session->sess_destroy();
                    } else {
                        $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-danger\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-times\"></i>
                                                Maaf!
                                            </strong>

                                            Kata Sandi Baru dan Konfirmasi Kata Sandi Baru Tidak Cocok!
                                            <br />
                                        </div></div>");
                        redirect('PengaturanPass');
                    }
                }
            }
        }
    }

    

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */