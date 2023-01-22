<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

     public function __construct(){ 
        parent ::__construct();
        $this->load->model('Model_user'); 
        $this->load->library('Datatables');
    } 

    public function index(){  
        $data = array(
            'title'     => 'Data User',
            'data'      =>  $this->Model_user->get_data()
        );
        $this->template->load('template','user/list',$data);
    }
    
    public function add() {
        $this->Model_login->getSecurity();
        $this->load->model('model_user');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'loadNama' => $this->model_user->loadNama(),
            'selected' => $this->input->post('nama_pegawai') ? $this->input->post('nama_pegawai') : '',
        );

        if (isset($_POST['simpan'])) {
            $this->Model_user->save();
            $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-block alert-success\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-check\"></i>
                                                Sukses!
                                            </strong>

                                            Data Berhasil Ditambahkan!
                                            <br />
                                        </div></div>");
            redirect('user');
        } else {
            $this->template->load('template', 'user/add',$data);
        }
    }

    public function edit(){
        $this->Model_login->getSecurity();
        $this->load->model('model_user');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Update',
            'loadNama' => $this->model_user->loadNama(), //id
            'selected' => $this->input->post('nama_pegawai') ? $this->input->post('nama_pegawai') : '', //nama

        );
        if(isset($_POST['simpan'])){
            $id      = $this->uri->segment(3);
            $this->Model_user->update($id);
            $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-block alert-success\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-check\"></i>
                                                Sukses!
                                            </strong>

                                            Data Berhasil Diubah!
                                            <br />
                                        </div></div>");
            redirect('user');
        }else{
            $id_user      = $this->uri->segment(3);
            $data['user'] = $this->db->get_where('tbuser',array('id_user'=>$id_user))->row_array();
            $this->template->load('template', 'user/edit',$data);
        }
    }

}
