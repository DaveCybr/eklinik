<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDepartemen');
        $this->load->model("Core");
    }

    public function index()
    {
        $data = array(
            'body' => 'Departemen/index',
            'data' => $this->ModelDepartemen->getAll(),
        );
        $this->load->view('index', $data);
    }

    public function add()
    {
        $data = array(
            'body' => 'Departemen/add',
        );
        $this->load->view('index', $data);
    }

    public function simpan()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        $execute = $this->ModelDepartemen->insert($data);
        if($execute){
            $this->Core->setMassage('Gagal', 'Data Gagal Ditambahkan!', 'danger');
            redirect(base_url() . 'Departemen');
        }else{
            $this->Core->setMassage('Success', 'Data Berhasil Ditambahkan!', 'success');
            redirect(base_url() . 'Departemen');
        }
    }

    public function edit($id)
    {
        $data = array(
            'body' => 'Departemen/edit',
            'data' => $this->ModelDepartemen->getById($id),
        );
        $this->load->view('index', $data);
    }

    public function update()
    {
        $id = $this->input->post('departemen_id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
       
        if($this->ModelDepartemen->update($id, $data)){
            $this->Core->setMassage('Gagal', 'Data Gagal Diubah!', 'danger');
            redirect(base_url() . 'Departemen');
        }else{
            $this->Core->setMassage('Success', 'Data Berhasil Diubah!', 'success');
            redirect(base_url() . 'Departemen');
        }
    }

    public function delete($id)
    {
        if($this->ModelDepartemen->delete($id)){
            $this->Core->setMassage('Gagal', 'Data Gagal Dihapus!', 'danger');
            redirect(base_url() . 'Departemen');
        }else{
            $this->Core->setMassage('Success', 'Data Berhasil Dihapus!', 'success');
            redirect(base_url() . 'Departemen');
        }
        
    }
    
}