<?php

class Model_ssppd extends CI_Model {

    public $table ="tbsurat_sppd";


    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tbsurat_sppd', 'tbsurat_tugas', 'tbdetail_surat_tugas','tbpegawai');
        $this->db->join('tbsurat_tugas','tbsurat_sppd.id_surat_tugas = tbsurat_tugas.id_surat_tugas');
        $this->db->join('tbdetail_surat_tugas','tbdetail_surat_tugas.id_surat_tugas = tbsurat_tugas.id_surat_tugas');
        $this->db->join('tbpegawai','tbdetail_surat_tugas.id_pegawai = tbpegawai.id_pegawai');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_detail($id_surat_tugas,$id_pegawai)
    {
        $sql = "
            SELECT 
                * 
            FROM 
                `tbdetail_surat_tugas` a 
                LEFT JOIN `tbpegawai` b ON a.`id_pegawai` = b.`id_pegawai` 
            WHERE 
                b.`id_pegawai` = '".$id_pegawai."' and
                a.`id_surat_tugas` = '".$id_surat_tugas."'
        ";

        return $this->db->query($sql);
    }

    public function get_baris($id_surat_tugas, $id_surat_sppd)
    {
        $sql = "
            SELECT 
                *
            FROM 
                `tbsurat_sppd` AS a 
                LEFT JOIN `tbsurat_tugas` AS b ON a.`id_surat_tugas` = b.`id_surat_tugas` 
            WHERE 
                b.`id_surat_tugas` = '".$id_surat_tugas."' and
                a.`id_surat_sppd` = '".$id_surat_sppd."'
            LIMIT 1
        ";
        return $this->db->query($sql);
    }

    
    public function loadstugas() {
        $this->db->order_by('id_surat_tugas','asc'); 
        $result = $this->db->get('tbsurat_tugas');
        $load['']='';
        if($result->num_rows()>0){
            foreach ($result->result() as $row) {
                $load[$row->id_surat_tugas] = $row->keperluan;
            }
        }
        return $load;
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
    $this->db->select("max(id_surat_sppd)+1 as NO");
    $this->db->from("tbsurat_sppd");
    return $this->db->get()->result()[0]->NO;
    }


    public function save() {
        $tahun    = date('Y');
        $get_no = $this->get_no();
        $firstkode  = substr($get_no,0,3);      
        $tempnextno = "090/";
        $nextnoreg  = $tempnextno.sprintf('%03s',$firstkode)."/".$tahun; 
        $data = array(
            'id_surat_tugas'        => $this->input->post('id_surat_tugas', TRUE),
            'alat_angkut'        => $this->input->post('alat_angkut', TRUE),
            'tempat_berangkat' => $this->input->post('tempat_berangkat', TRUE),
            'tempat_tujuan'    => $this->input->post('tempat_tujuan', TRUE),
            'tanggal_berangkat'    => $this->input->post('tanggal_berangkat', TRUE),
            'tanggal_kembali'    => $this->input->post('tanggal_kembali', TRUE),
            'no_surat_sppd'    => $nextnoreg,
            'lamanya_perjalanan_dinas'    => $this->input->post('lamanya_perjalanan_dinas', TRUE),
            'tgl_penetapan_ssppd'    => $this->input->post('tgl_penetapan_ssppd', TRUE),
            'kuasa_pengguna_anggaran'    => "Kepala SMA Negeri 1 Kesesi"
        );
            $this->db->insert($this->table,$data);
    }
    
    public function update($id) {
        $id         = $this->input->post('id');
        $data = array(
            'id_surat_tugas'        => $this->input->post('id_surat_tugas', TRUE),
            'alat_angkut'        => $this->input->post('alat_angkut', TRUE),
            'tempat_berangkat' => $this->input->post('tempat_berangkat', TRUE),
            'tempat_tujuan'    => $this->input->post('tempat_tujuan', TRUE),
            'tanggal_berangkat'    => $this->input->post('tanggal_berangkat', TRUE),
            'tanggal_kembali'    => $this->input->post('tanggal_kembali', TRUE),
            'lamanya_perjalanan_dinas'    => $this->input->post('lamanya_perjalanan_dinas', TRUE),
            'tgl_penetapan_ssppd'    => $this->input->post('tgl_penetapan_ssppd', TRUE),
        );
        $this->db->where('id_surat_sppd',$id);
        $this->db->update($this->table,$data);
    }

}