<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMS extends CI_Controller {

	public function __construct(){
        parent ::__construct();
        $this->load->library('Datatables');
        $this->load->model('Model_sms'); 
    }

    public function index(){
        $this->Model_login->getSecurity();
        $this->load->model('model_sms');
        $this->load->helper('form_helper');
    }

    public function sms_sent(){
        $this->Model_login->getSecurity();
        $this->load->model('model_sms');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'datasent'      =>  $this->Model_sms->get_datasent(),
            'selected' => $this->input->post('no_hp') ? $this->input->post('no_hp') : '',
        );
        $this->template->load('template','sms/list-sms-sent',$data);
    }



    public function wa(){
        $this->Model_login->getSecurity();
        $this->load->model('model_sms');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'WA',
            'data'      =>  $this->Model_sms->get_data(),
        );
        $this->template->load('template','sms/list-wa',$data);
    }

    public function sms_out(){
        $this->Model_login->getSecurity();
        $this->load->model('model_sms');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'dataoutbox'      =>  $this->Model_sms->get_dataoutbox(),
        );
        $this->template->load('template','sms/list-sms-out',$data);
    }

    public function send() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_sms');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Send',
            'loadNama' => $this->Model_sms->loadNama(),
            'selected' => $this->input->post('no_hp') ? $this->input->post('no_hp') : '',
        );

        if (isset($_POST['simpan'])) {
            $this->Model_sms->send();
            $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-block alert-success\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-check\"></i>
                                                Sukses!
                                            </strong>

                                            SMS Berhasil Dikirimkan!
                                            <br />
                                        </div></div>");
            redirect('sms/sms_out');
        } else {
            $this->template->load('template', 'sms/page',$data);
        }

    }

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */