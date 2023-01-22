<?php
class Model_user extends CI_Model {

    public $table ="tbuser";

    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tbuser');
        $this->db->join('tbpegawai','tbuser.id_pegawai = tbpegawai.id_pegawai');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function loadNama() {
        $this->db->order_by('id_pegawai','asc'); 
        $result = $this->db->get('tbpegawai');
        if($result->num_rows()>0){
            foreach ($result->result() as $row) {
                $load[$row->id_pegawai] = $row->nama_pegawai;
            }
        }
        return $load;
    }

    public function save() {
        $key = $this->input->post('id_pegawai', TRUE);
        $data = array(
            'id_pegawai'      => $this->input->post('id_pegawai', TRUE),
            'nama_user' => $this->input->post('nama_user', TRUE),
            'kata_sandi' => md5('123456'),
            'level_user'    => $this->input->post('level', TRUE),
            'status'   => $this->input->post('status', TRUE)
        );
        $this->db->where('id_pegawai', $key);
        $query = $this->db->get('tbuser');
        if ($query->num_rows()>0) {
            $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-danger\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-times\"></i>
                                                Maaf!
                                            </strong>

                                            Pegawai tersebut sudah terdaftar sebagai User!
                                            <br />
                                        </div></div>");
            redirect('user/add');
        } else {
            $this->db->insert($this->table,$data);
        }
    }
    
    public function update($id) {
        $id         = $this->input->post('id');
        $data       = array(
            'id_pegawai'        => $this->input->post('id_pegawai', TRUE),
            'nama_user'         => $this->input->post('username', TRUE),
            'level_user'        => $this->input->post('level', TRUE),
            'status'            => $this->input->post('status', TRUE)
        );
        $this->db->where('id_user',$key);
        $query      = $this->db->get('tbuser');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $id_tabel = $row->id;
                if ($id == $id_tabel) {

                    $this->db->where('id_user',$id);
                    $this->db->update($this->table,$data);
                } else {
                    $this->session->set_flashdata("info", "<div class=\"col-xs-12\"><div class=\"alert alert-danger\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                <i class=\"ace-icon fa fa-times\"></i>
                                            </button>

                                            <strong>
                                                <i class=\"ace-icon fa fa-times\"></i>
                                                Maaf!
                                            </strong>

                                            Pegawai tersebut sudah terdaftar sebagai User!
                                            <br />
                                        </div></div>");
                    redirect('user/');
                }
            }
        } else {
            $this->db->where('id_user',$id);
            $this->db->update($this->table,$data);
        }
    }

}
