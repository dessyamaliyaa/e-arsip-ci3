<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sms extends CI_Model {

    public $table = "outbox";

	public function get_datasent(){
        $this->db->select('*');
        $this->db->from('sentitems');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_dataoutbox(){
        $this->db->select('*');
        $this->db->from('outbox');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function loadNama() {
        $this->db->order_by('id_pegawai','asc'); 
        $result = $this->db->get('tbpegawai');
        $load['']='';
        if($result->num_rows()>0){
            foreach ($result->result() as $row) {
                $load[$row->no_hp] = $row->nama_pegawai;
            }
        }
        return $load;
    }

    public function get_data(){
        $query = $this->db->order_by('id_pegawai','ASC')->get('tbpegawai');
        return $query->result(); 
    }

    public function send() {
        $id = $this->input->post('id_pegawai', TRUE);
        $data = array(
            'DestinationNumber'         => $id,
            'TextDecoded'               => $this->input->post('isi', TRUE),
            'CreatorID'                 => "SIMASKU"
        );
        $this->db->insert($this->table,$data);
        
    }
}

/* End of file model_pengaturan.php */
/* Location: ./application/models/model_pengaturan.php */