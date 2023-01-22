<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sm extends CI_Model {

    public $table ="tbsurat_masuk";

    
    public function loadklasifikasi() {
        $this->db->order_by('id_klasifikasi','asc'); 
        $result = $this->db->get('tbklasifikasi');
        if($result->num_rows()>0){
            foreach ($result->result() as $row) {
                $load[$row->id_klasifikasi] = $row->klasifikasi;
            }
        }
        return $load;
    }

    public function get_no(){
        $this->db->select("max(id_surat_masuk)+1 as NO");
        $this->db->from("tbsurat_masuk");
        return $this->db->get()->result()[0]->NO;
    }

    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tbsurat_masuk');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_baris($id)
    {
        $sql = "
            SELECT 
               *
                   FROM 
                `tbsurat_masuk` AS a 
                 WHERE 
                a.`id_surat_masuk` = '".$id."' 
            LIMIT 1
        ";
        return $this->db->query($sql);

    }

    public function save($uploadArsip) {
        $id_klasifikasi = $this->input->post('id_klasifikasi');
        $x        = $this->db->get_where('tbklasifikasi',array('id_klasifikasi'=>$id_klasifikasi))->row_array();
        $kode = $x['kode_klasifikasi'];
        $get_no = $this->get_no();
        $firstkode  = substr($get_no,0,3);       
        $tempnextno = $kode."/";
        $nextnoreg  = $tempnextno.sprintf('%03s',$firstkode); 
        $data = array(
            'id_klasifikasi'        => $this->input->post('id_klasifikasi', TRUE),
            'tgl_terima'            => $this->input->post('tgl_terima', TRUE),
            'nomor_kendali'         => $nextnoreg,
            'asal_surat'            => $this->input->post('asal_surat', TRUE),
            'surat_tanggal'         => $this->input->post('surat_tanggal', TRUE),
            'nomor_surat'           => $this->input->post('nomor_surat', TRUE),
            'perihal'               => $this->input->post('perihal', TRUE),
            'file'                  => $uploadArsip,
            'status'                => "belum",
            'diselesaikan_tanggal'  => "-",
            'sifat'                 => "-",
            'yang_menyelesaikan'    => "-",
            'catatan'               => "-",
            'diteruskan'            => "-",
            'instruksi'             => "-"
        );
        $this->db->insert($this->table,$data);
    }
    
    
    public function update($id,$uploadArsip) {
        $id         = $this->input->post('id');
        if(empty($uploadArsip)){
            $data = array(
            'tgl_terima'            => $this->input->post('tgl_terima', TRUE),
            'asal_surat'            => $this->input->post('asal_surat', TRUE),
            'surat_tanggal'         => $this->input->post('surat_tanggal', TRUE),
            'nomor_surat'           => $this->input->post('nomor_surat', TRUE),
            'perihal'               => $this->input->post('perihal', TRUE)
        );               
        }else{ 
            $this->db->where('id_surat_masuk',$id);
                $query = $this->db->get('tbsurat_masuk');
                $row   = $query->row();
                unlink("./uploads/$row->file");
            $data = array(
            'tgl_terima'            => $this->input->post('tgl_terima', TRUE),
            'asal_surat'            => $this->input->post('asal_surat', TRUE),
            'surat_tanggal'         => $this->input->post('surat_tanggal', TRUE),
            'nomor_surat'           => $this->input->post('nomor_surat', TRUE),
            'perihal'               => $this->input->post('perihal', TRUE),
            'file'                  => $uploadArsip 
        );
            }
        $this->db->where('id_surat_masuk',$id);
        $this->db->update($this->table,$data);
        }

    public function disposisi($id) {
        $id         = $this->input->post('id');
        $data = array(
            'diselesaikan_tanggal'  => $this->input->post('diselesaikan_tanggal', TRUE),
            'yang_menyelesaikan'    => $this->input->post('yang_menyelesaikan', TRUE),
            'catatan'               => $this->input->post('catatan', TRUE),
            'diteruskan'            => $this->input->post('diteruskan', TRUE),
            'status'                => $this->input->post('status', TRUE),
            'sifat'                 => $this->input->post('sifat', TRUE),
            'instruksi'             => $this->input->post('instruksi', TRUE)
        );
        $this->db->where('id_surat_masuk',$id);
        $this->db->update($this->table,$data);
        }

}
    