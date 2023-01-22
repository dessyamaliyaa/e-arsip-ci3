<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class SK extends CI_Controller {
 
    public function __construct(){
        parent ::__construct();
        $this->load->model('Model_sk');
        $this->load->helper(array('form', 'url', 'file'));
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'title'     => 'Data Surat Keluar',
            'data'      =>  $this->Model_sk->get_data()
        );
        $this->template->load('template','sk/list',$data);
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
        $this->load->model('Model_sk');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'loadklasifikasi' => $this->Model_sk->loadklasifikasi(),
            'selectedklas' => $this->input->post('klasifikasi') ? $this->input->post('klasifikasi') : '',
        );

        if (isset($_POST['simpan'])) {
            $uploadArsip = $this->upload_file();
            $this->Model_sk->save($uploadArsip);
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
            redirect('sk');
        } else {
            $this->template->load('template', 'sk/add',$data);
        }

    }

    public function cetak(){
        $id      = $this->uri->segment(3);
        $data['data'] = $this->Model_sk->get_baris($id)->row();
        $this->load->view('sk/page',$data);
    }

    public function edit(){
        $this->Model_login->getSecurity();
        $this->load->model('Model_sk');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Update',
            'loadklasifikasi' => $this->Model_sk->loadklasifikasi(),
            'selectedklas' => $this->input->post('klasifikasi') ? $this->input->post('klasifikasi') : '',
        );
        if(isset($_POST['simpan'])){
            $uploadArsip = $this->upload_file();
            $id      = $this->uri->segment(3);
            $this->Model_sk->update($id,$uploadArsip);
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
            redirect('sk');
        }else{
            $id      = $this->uri->segment(3);
            $data['sk'] = $this->db->get_where('tbsurat_keluar',array('id_surat_keluar'=>$id))->row_array();
            $this->template->load('template', 'sk/edit',$data);
        }
    }

    public function load_data() {

        $id      = $this->uri->segment(3);
        $data['sk'] = $this->db->get_where('tbsurat_keluar',array('id_surat_keluar'=>$id))->row_array();
        $this->template->load('template', 'sk/load_data',$data);
        
    }

    

}
