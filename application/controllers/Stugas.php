<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Stugas extends CI_Controller {

    public function __construct(){
        parent ::__construct();
        $this->load->model('Model_stugas');
    } 

    public function index(){   
        $data = array(
            'title'     => 'Data Surat Tugas',
            'data'      =>  $this->Model_stugas->get_data(),
        );
        $this->template->load('template','stugas/list',$data);
    }

    public function add() {

        $this->Model_login->getSecurity();
        $this->load->model('Model_stugas');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'loadklasifikasi' => $this->Model_stugas->loadklasifikasi(),
            'loadsuratmasuk' => $this->Model_stugas->loadsuratmasuk(),
            'selectedsuratmasuk' => $this->input->post('asal_surat') ? $this->input->post('asal_surat') : '',
            'selectedklas' => $this->input->post('klasifikasi') ? $this->input->post('klasifikasi') : '',

        );

        if (isset($_POST['simpan'])) {
            $this->Model_stugas->save(); 
            redirect('stugas/add_pegawai');
        } else {
            $this->template->load('template', 'stugas/add',$data);
        }
    }

    public function add_pegawai() {

        $this->Model_login->getSecurity();
        $this->load->model('Model_stugas');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'loadpegawai' => $this->Model_stugas->loadpegawai(),
            'selectedpegawai' => $this->input->post('nama_pegawai') ? $this->input->post('nama_pegawai') : '',
            
        );
        
        if (isset($_POST['simpan'])) {
            $query = $this->db->query("SELECT Max(tbsurat_tugas.id_surat_tugas) AS maxID 
                                FROM tbsurat_tugas");

        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $id_surat_tugas = $row->maxID;                   
                $id_pegawai = $this->input->post('id');
                $data = $this->input->post();
                $authKey = "";
                unset($data['submit']);
                $id = implode('', $data['id']);
                $arr = str_split($id,"");
                $numbers = implode(",", $arr);
                foreach ($id_pegawai as $p) {
                $query = $this->Model_stugas->savedetail($id_surat_tugas, $p);
                }
                if($query){
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
                        redirect('stugas');
                }else{
                    $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-block alert-danger\">
                                             <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                 <i class=\"ace-icon fa fa-times\"></i>
                                             </button>

                                             <strong>
                                                 <i class=\"ace-icon fa fa-check\"></i>
                                                 Gagal!
                                             </strong>

                                             Data Gagal Ditambahkan!
                                             <br />
                                         </div></div>");
                }
            }

        }
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
            redirect('stugas');
        } else {
            $this->template->load('template', 'stugas/add_pegawai', $data);
        }
    }

   public function edit(){

        $this->Model_login->getSecurity();
        $this->load->model('Model_stugas');
        $this->load->helper('form_helper');
        $id      = $this->uri->segment(3);
        $data = array(
            'button' => 'Update',
            'loadpegawai' => $this->Model_stugas->loadpegawai(),
            'selectedpegawai' => $this->input->post('nama_pegawai') ? $this->input->post('nama_pegawai') : '',

           'loadsuratmasuk' => $this->Model_stugas->loadsuratmasuk(),
            'selectedsuratmasuk' => $this->input->post('asal_surat') ? $this->input->post('asal_surat') : ''
            
        );
        if(isset($_POST['simpan'])){
            $id      = $_POST['id_stugas'];
            $this->Model_stugas->update($id);
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
            redirect('stugas');
        }else if(isset($_POST['simpan_peg'])){
                $id_stugas      = $_POST['id_stugas'];
                $this->db->where('id_surat_tugas',$id_stugas);
                $this->db->delete('tbdetail_surat_tugas');
                $id_pegawai = $this->input->post('id');
                $data = $this->input->post();
                $authKey = "";
                unset($data['submit']);
                $id = implode('', $data['id']);
                $arr = str_split($id,"");
                $numbers = implode(",", $arr);
                foreach ($id_pegawai as $p) {
                $query = $this->Model_stugas->savedetail($id_stugas, $p);
                }
                if($query){
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
                        redirect('stugas');
                }
                else{
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
            redirect('stugas');
                }
        }else{
            $id      = $this->uri->segment(3);
            $data['master'] = $this->Model_stugas->get_baris($id)->row();
            $data['detail'] = $this->Model_stugas->get_detail($id);
            $this->template->load('template', 'stugas/edit',$data);
        }
    }


    public function cetak(){
        $id      = $this->uri->segment(3);
        $data['detail'] = $this->Model_stugas->get_detail($id);
        $data['master'] = $this->Model_stugas->get_baris($id)->row();
        $this->load->view('stugas/page',$data);
    }

    public function load_data(){
        $id      = $this->uri->segment(3);
        $data['master'] = $this->Model_stugas->get_baris($id)->row();
        $data['detail'] = $this->Model_stugas->get_detail($id);
        $this->template->load('template', 'stugas/load_data',$data);
    }
    

}
