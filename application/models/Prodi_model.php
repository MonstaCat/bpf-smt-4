<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi_model extends CI_Model
{
    public $table = 'prodi';
    public $id = 'prodi.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->select('p.*,j.nama as jurusan, d.nama as nama_kaprodi');
        $this->db->from('prodi p');
        $this->db->join('jurusan j', 'p.jurusan = j.id');
        $this->db->join('dosen d', 'p.nama_kaprodi = d.id');
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
