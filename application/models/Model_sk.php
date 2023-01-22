<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sk extends CI_Model {

    public $table ="tbsurat_keluar";
    
    public function get_data(){
        $query = $this->db->order_by('id_surat_keluar','ASC')->get('tbsurat_keluar');
        return $query->result(); 
    }

    
    public function loadklasifikasi() {
        $this->db->order_by('id_klasifikasi','asc'); 
        $result = $this->db->get('tbklasifikasi');
        $load['']='';
        if($result->num_rows()>0){
            foreach ($result->result() as $row) {
                $load[$row->id_klasifikasi] = $row->klasifikasi;
            }
        }
        return $load;
    }

    public function get_no(){
    $this->db->select("max(id_surat_keluar)+1 as NO");
    $this->db->from("tbsurat_keluar");
    return $this->db->get()->result()[0]->NO;
  }

    public function get_baris($id){
            $sql = "
                SELECT 
                   *
                       FROM 
                    `tbsurat_keluar` AS a 
                     WHERE 
                    a.`id_surat_keluar` = '".$id."' 
                LIMIT 1
            ";
            return $this->db->query($sql);

        }

    public function save($uploadArsip) {
        $id_klasifikasi = $this->input->post('id_klasifikasi');
        $x        = $this->db->get_where('tbklasifikasi',array('id_klasifikasi'=>$id_klasifikasi))->row_array();
        $kode = $x['kode_klasifikasi'];
        $tahun    = date('Y');
        $get_no = $this->get_no();
        $firstkode  = substr($get_no,0,3);       
        $tempnextno = $kode."/";
        $nextnoreg  = $tempnextno.sprintf('%03s',$firstkode)."/".$tahun;  
        $data = array(
            'no_surat'                  => $nextnoreg,
            'id_klasifikasi'            => $this->input->post('id_klasifikasi', TRUE),
            'perihal'                   => $this->input->post('perihal', TRUE),
            'isi'                       => $this->input->post('isi', FALSE),
            'tgl_penetapan_skeluar'     => $this->input->post('tgl_penetapan', TRUE),
            'jenis_surat_keluar'        => $this->input->post('jenis_surat_keluar', TRUE),
            'file'                      => $uploadArsip,
            'dikirim'                   => $this->input->post('dikirim', TRUE),
        );

            $this->db->insert($this->table,$data);
        
    }


    public function update($id,$uploadArsip) {
        $id         = $this->input->post('id');
        if(empty($uploadArsip)){
            $data = array(
            'perihal'                   => $this->input->post('perihal', TRUE),
            'isi'                       => $this->input->post('isi', FALSE),
            'tgl_penetapan_skeluar'     => $this->input->post('tgl_penetapan', TRUE),
            'jenis_surat_keluar'        => $this->input->post('jenis_surat_keluar', TRUE),
            'dikirim'                   => $this->input->post('dikirim', TRUE),
        );
                           
        }else{ 
            $this->db->where('id_surat_keluar',$id);
                $query = $this->db->get('tbsurat_keluar');
                $row   = $query->row();
                unlink("./uploads/$row->file");
            $data = array(
            'perihal'                   => $this->input->post('perihal', TRUE),
            'isi'                       => $this->input->post('isi'),
            'tgl_penetapan_skeluar'     => $this->input->post('tgl_penetapan', TRUE),
            'jenis_surat_keluar'        => $this->input->post('jenis_surat_keluar', TRUE),
            'file'                      => $uploadArsip,
            'dikirim'                   => $this->input->post('dikirim', TRUE),
        );
            }
        $this->db->where('id_surat_keluar',$id);
        $this->db->update($this->table,$data);
        }
    
    

        
}