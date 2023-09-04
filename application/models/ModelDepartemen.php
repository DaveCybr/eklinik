<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDepartemen extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAll()
    {
        $this->db->order_by('departemen_id', 'DESC');
        return $this->db->get('departemen')->result();
    }

    public function getById($id)
    {
        $this->db->where('departemen_id', $id);
        return $this->db->get('departemen')->row();
    }

    public function insert($data)
    {
        $this->db->insert('departemen', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('departemen_id', $id);
        $this->db->update('departemen', $data);
    }

    public function delete($id)
    {
        $this->db->where('departemen_id', $id);
        $this->db->delete('departemen');
    }

}