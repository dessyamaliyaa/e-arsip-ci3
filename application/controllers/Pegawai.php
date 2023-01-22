<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pegawai extends CI_Controller {

    public function __construct(){
        parent ::__construct();
        $this->load->model('Model_pegawai'); 
        $this->load->library('Datatables');
    }

    public function index(){
        $this->Model_login->getSecurity();
        
        $data = array(
            'title'     => 'Data Pegawai ',
            'data'      =>  $this->Model_pegawai->get_data()
        );
        $this->template->load('template','pegawai/list',$data);

    }

    public function load_data() {

        $id_pegawai      = $this->uri->segment(3);
            $data['pegawai'] = $this->db->get_where('tbpegawai',array('id_pegawai'=>$id_pegawai))->row_array();
            $this->template->load('template', 'pegawai/load_data',$data);

    }
    
    public function add() {
        $this->Model_login->getSecurity();

        if (isset($_POST['simpan'])) {
            $this->Model_pegawai->save();
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
            redirect('pegawai');
        } else {
            $this->template->load('template', 'pegawai/add');
        }        
    }

    public function edit(){
        $this->Model_login->getSecurity();

        if(isset($_POST['simpan'])){
            $id_pegawai      = $this->uri->segment(3);
            $this->Model_pegawai->update($id_pegawai);
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
            redirect('pegawai');
        }else{
            $id_pegawai      = $this->uri->segment(3);
            $data['pegawai'] = $this->db->get_where('tbpegawai',array('id_pegawai'=>$id_pegawai))->row_array();
            $this->template->load('template', 'pegawai/edit',$data);
        }
    }



}
