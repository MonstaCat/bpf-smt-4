<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jurusan_model extends CI_Model
{
    public $table = 'jurusan';
    public $id = 'jurusan.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->select('j.*, d.nama as nama_kajur');
        $this->db->from('jurusan j');
        $this->db->join('dosen d', 'j.nama_kajur = d.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
