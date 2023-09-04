<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDokter extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAll()
    {
        $this->db->order_by('dokter_id', 'DESC')
        ->join('departemen', 'departemen.departemen_id = dokter.departemen_id');
        return $this->db->get('dokter')->result();
    }

    public function getById($id)
    {
        $this->db->where('dokter_id', $id);
        return $this->db->get('dokter')->row();
    }

    public function insert($data)
    {
        $this->db->insert('dokter', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('dokter_id', $id);
        $this->db->update('dokter', $data);
    }

    public function delete($id)
    {
        $this->db->where('dokter_id', $id);
        $this->db->delete('dokter');
    }

}