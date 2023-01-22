<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class SSPPD extends CI_Controller {

    function __construct() { 
        parent:: __construct();
        $this->load->library('Datatables');
        $this->load->model('Model_ssppd');
    }

    public function index() {
        $this->Model_login->getSecurity();
        $data = array(
            'button' => 'Create',
            'data'      =>  $this->Model_ssppd->get_data(),
        );
        $this->template->load('template','ssppd/list',$data);
    }

    public function cetak(){
        $id_surat_sppd      = $this->uri->segment(3);
        $id_surat_tugas = $this->uri->segment(4);
        $id_pegawai =  $this->uri->segment(5);
        $data['detail'] = $this->Model_ssppd->get_detail($id_surat_tugas,$id_pegawai);
        $data['master'] = $this->Model_ssppd->get_baris($id_surat_tugas,$id_surat_sppd)->row();
        $this->load->view('ssppd/page',$data);
    }

   public function add() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_ssppd');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'loadklasifikasi' => $this->Model_ssppd->loadklasifikasi(),
            'loadstugas' => $this->Model_ssppd->loadstugas(),
            'selectedklas' => $this->input->post('klasifikasi') ? $this->input->post('klasifikasi') : '',
            'selectedstugas' => $this->input->post('perihal') ? $this->input->post('perihal') : '',
        );

        if (isset($_POST['simpan'])) {
            $this->Model_ssppd->save();
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
            redirect('ssppd');
        } else {
            $this->template->load('template', 'ssppd/add',$data);
        }
    }

    public function edit(){

        $this->Model_login->getSecurity();
        $this->load->model('Model_ssppd');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Update',
            'loadstugas' => $this->Model_ssppd->loadstugas(),
            'selectedstugas' => $this->input->post('perihal') ? $this->input->post('perihal') : '',
        );
        if(isset($_POST['simpan'])){
            $id      = $this->uri->segment(3);
            $this->Model_ssppd->update($id);
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
            redirect('ssppd');
        }else{
            $id      = $this->uri->segment(3);
            $data['ssppd'] = $this->db->get_where('tbsurat_sppd',array('id_surat_sppd'=>$id))->row_array();
            $this->template->load('template', 'ssppd/edit',$data);
        }
    }

    public function load_data() {
        $id      = $this->uri->segment(3);
        $data['ssppd'] = $this->db->get_where('tbsurat_sppd',array('id_surat_sppd'=>$id))->row_array();
        $this->template->load('template', 'ssppd/load_data',$data);
        
    }

}
