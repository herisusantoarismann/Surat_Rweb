<?php

class Model extends CI_Model
{
    public function get_surat()
    {
        $query = $this->db->get('tb_mahasiswa');
        return $query->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get_dekan()
    {
        return $this->db->get('dekan')->row_array();
    }
    public function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}