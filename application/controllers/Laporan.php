<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
        parent ::__construct();
	}
	
    public function index(){
        $this->Model_login->getSecurity();
        
        $data = array(
            'sm'      =>  'Cetak',
        );
        $this->load->view('laporan/page',$data);
    }
    
    public function cetak(){
        $this->Model_login->getSecurity();
        $data = array(
            'title'     => 'Cetak',
        );
        $this->load->view('laporan/page',$data);
    }
}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */