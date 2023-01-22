<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class SM extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_sm');
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'title'     => 'Data Surat Masuk',
            'data'      =>  $this->Model_sm->get_data(),
        );
        $this->template->load('template','sm/list',$data);
    }

    public function cetak(){
        $id      = $this->uri->segment(3);
        $data['master'] = $this->Model_sm->get_baris($id)->row();
        $this->load->view('sm/page',$data);
    }
    
    public function disposisi(){
        $this->Model_login->getSecurity();
        $this->load->model('Model_sm');
        $this->load->helper('form_helper');
        if(isset($_POST['simpan'])){
            $id      = $this->uri->segment(3);
            $this->Model_sm->disposisi($id);
            $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-block alert-success\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>
                                            <strong>
                                                <i class=\"ace-icon fa fa-check\"></i>
                                                Sukses!
                                            </strong>
                                            Berhasil!
                                            <br />
                                        </div></div>");
            redirect('sm');
        }else{
            $id      = $this->uri->segment(3);
            $data['sm'] = $this->db->get_where('tbsurat_masuk',array('id_surat_masuk'=>$id))->row_array();
            $this->template->load('template', 'sm/disposisi',$data);
        }
    }

    public function upload_file(){
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = '2000';  
        $config['max_width']     = '3000';                          
        $config['max_height']    = '3000';

        $this->load->library('upload', $config);

        $this->upload->do_upload('file_arsip');
        $upload = $this->upload->data();
        return $upload['file_name'];

    }

    public function add() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_sm');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'loadklasifikasi' => $this->Model_sm->loadklasifikasi(),
            'selectedklas' => $this->input->post('klasifikasi') ? $this->input->post('klasifikasi') : '',
        );

        if (isset($_POST['simpan'])) {
            $uploadArsip = $this->upload_file();
            $this->Model_sm->save($uploadArsip);
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
            redirect('sm');
        } else {
            $this->template->load('template', 'sm/add',$data);
        }

    }

    public function edit(){
        $this->Model_login->getSecurity();
        $this->load->model('Model_sm');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Update',
            
        );
        if(isset($_POST['simpan'])){
            $id      = $this->uri->segment(3);
            $uploadArsip = $this->upload_file();
            $this->Model_sm->update($id,$uploadArsip);
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
            redirect('sm');
        }else{
            $id      = $this->uri->segment(3);
            $data['sm'] = $this->db->get_where('tbsurat_masuk',array('id_surat_masuk'=>$id))->row_array();
            $this->template->load('template', 'sm/edit',$data);
        }
    }

    public function load_data() {
        $id      = $this->uri->segment(3);
        $data['sm'] = $this->db->get_where('tbsurat_masuk',array('id_surat_masuk'=>$id))->row_array();
        $this->template->load('template', 'sm/load_data',$data);
    }


}
