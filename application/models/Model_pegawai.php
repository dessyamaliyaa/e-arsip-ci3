<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {

    public $table ="tbpegawai";
    
    public function get_data(){
        $query = $this->db->order_by('id_pegawai','ASC')->get('tbpegawai');
        return $query->result(); 
    }

    public function save() {
        $data = array(
            'id_pegawai'        => $this->input->post('id_pegawai', TRUE),
            'nip' => $this->input->post('nip', TRUE),
            'nama_pegawai'    => $this->input->post('nama_pegawai', TRUE),
            'pangkat'    => $this->input->post('pangkat', TRUE),
            'jabatan'    => $this->input->post('jabatan', TRUE),
            'bagian'    => $this->input->post('bagian', TRUE),
            'no_hp'    => $this->input->post('no_hp', TRUE),
            'ruang'    => $this->input->post('ruang', TRUE),
            'golongan'    => $this->input->post('golongan', TRUE)
        );
        $this->db->insert($this->table,$data);
        
    }
    
    public function update($id) {
        $id = $this->input->post('id');
        $data = array(
            'NIP' => $this->input->post('nip', TRUE),
            'nama_pegawai'    => $this->input->post('nama_pegawai', TRUE),
            'pangkat'    => $this->input->post('pangkat', TRUE),
            'jabatan'    => $this->input->post('jabatan', TRUE),
            'bagian'    => $this->input->post('bagian', TRUE),
            'ruang'    => $this->input->post('ruang', TRUE),
            'golongan'    => $this->input->post('golongan', TRUE),
            'no_hp'    => $this->input->post('no_hp', TRUE)
        );
        $this->db->where('id_pegawai',$id);
        $this->db->update($this->table,$data);
        
    }

}