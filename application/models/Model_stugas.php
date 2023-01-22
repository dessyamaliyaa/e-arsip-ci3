<?php

class Model_stugas extends CI_Model {

    public $table ="tbsurat_tugas";
    public $table2 ="tbdetail_surat_tugas";

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

    public function loadsuratmasuk() {
        $this->db->order_by('id_surat_masuk','asc'); 
        $result = $this->db->get('tbsurat_masuk');
        $load['']='';
        if($result->num_rows()>0){
            foreach ($result->result() as $row) {
                $load[$row->id_surat_masuk] = $row->perihal;
            }
        }
        return $load;
    }

    public function get_detail($id)
    {
        $sql = "
            SELECT 
                * 
            FROM 
                `tbdetail_surat_tugas` a 
                LEFT JOIN `tbpegawai` b ON a.`id_pegawai` = b.`id_pegawai` 
            WHERE 
                a.`id_surat_tugas` = '".$id."' 
            ORDER BY 
                a.`iddetail_surat_tugas` ASC 
        ";

        return $this->db->query($sql);
    }

    public function get_baris($id)
    {
        $sql = "
            SELECT 
                *
            FROM 
                `tbsurat_tugas` AS a 
                LEFT JOIN `tbsurat_masuk` AS b ON a.`id_surat_masuk` = b.`id_surat_masuk` 
            WHERE 
                a.`id_surat_tugas` = '".$id."' 
            LIMIT 1
        ";
        return $this->db->query($sql);
    }
    
    public function loadpegawai() {
        $query = $this->db->order_by('id_pegawai','ASC')->get('tbpegawai');
        return $query->result(); 
    }


    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tbsurat_tugas', 'tbsurat_masuk');
        $this->db->join('tbsurat_masuk','tbsurat_masuk.id_surat_masuk = tbsurat_tugas.id_surat_masuk');
        $query = $this->db->get(); 
        return $query->result();
    }

    
    public function get_no(){
    $this->db->select("max(id_surat_tugas)+1 as NO");
    $this->db->from("tbsurat_tugas");
    return $this->db->get()->result()[0]->NO;
    }

    public function save() {
        $id_klasifikasi = $this->input->post('id_klasifikasi');
        $x        = $this->db->get_where('tbklasifikasi',array('id_klasifikasi'=>$id_klasifikasi))->row_array();
        $kode = $x['kode_klasifikasi'];
        $tahun    = date('Y');
        $get_no = $this->get_no();
        $firstkode  = substr($get_no,0,3);      
        $tempnextno = $kode."/";
        $nextnoreg  = $tempnextno.sprintf('%03s',$firstkode)."/".$tahun; 
        $data = array(
            'id_klasifikasi'      => $this->input->post('id_klasifikasi', TRUE),
            'id_surat_masuk' => $this->input->post('id_surat_masuk', TRUE),
            'keperluan'    => $this->input->post('keperluan', TRUE),
            'tanggal'   => $this->input->post('tanggal', TRUE),
            'hari'    => $this->input->post('hari', TRUE),
            'waktu'   => $this->input->post('waktu', TRUE),
            'tempat'    => $this->input->post('tempat', TRUE),
            'no_surat_tugas'   => $nextnoreg,
            'ditetapkan'    => "Kesesi",
            'tgl_penetapan_stugas'   => $this->input->post('tgl_penetapan', TRUE)
        );
        $this->db->insert($this->table,$data);
    }

    public function savedetail($id_surat_tugas, $p) {
        $data = array(
            'id_pegawai'      => $p,
            'id_surat_tugas' => $id_surat_tugas
        );
        $this->db->insert($this->table2,$data);
    }
    
    public function update($id) {
        $data = array(
            'id_surat_masuk'        => $this->input->post('id_surat_masuk', TRUE),
            'keperluan'        => $this->input->post('keperluan', TRUE),
            'tanggal'    => $this->input->post('tanggal', TRUE),
            'waktu'    => $this->input->post('waktu', TRUE),
            'tempat'    => $this->input->post('tempat', TRUE),
            'tgl_penetapan_stugas'    => $this->input->post('tgl_penetapan_stugas', TRUE)
        );
        $this->db->where('id_surat_tugas',$id);
        $this->db->update($this->table,$data);
    }

}