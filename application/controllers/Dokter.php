<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDokter');
        $this->load->model('ModelDepartemen');
        $this->load->model("Core");
    }

    public function index()
    {
        $data = array(
            'body' => 'Dokter/index',
            'data' => $this->ModelDokter->getAll(),
        );
        $this->load->view('index', $data);
    }

    public function add()
    {
        $data = array(
            'body' => 'Dokter/add',
            'departemen' => $this->ModelDepartemen->getAll(),
        );
        $this->load->view('index', $data);
    }

    public function simpan()
    {
        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT, array("cost" => 10)),
            'alamat' => $this->input->post('alamat'),
            'phone' => $this->input->post('phone'),
            'departemen_id' => $this->input->post('departemen_id'),
        );
        $execute = $this->ModelDokter->insert($data);
        if($execute){
            $this->Core->setMassage('Gagal', 'Data Gagal Ditambahkan!', 'danger');
            redirect(base_url() . 'Dokter');
        }else{
            $this->Core->setMassage('Success', 'Data Berhasil Ditambahkan!', 'success');
            redirect(base_url() . 'Dokter');
        }
    }

    public function edit($id)
    {
        $data = array(
            'body' => 'Dokter/edit',
            'data' => $this->ModelDokter->getById($id),
            'departemen' => $this->ModelDepartemen->getAll(),
        );
        $this->load->view('index', $data);
    }

    public function update()
    {
        $id = $this->input->post('dokter_id');
        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT, array("cost" => 10)),
            'alamat' => $this->input->post('alamat'),
            'phone' => $this->input->post('phone'),
            'departemen_id' => $this->input->post('departemen_id'),
        );
        $execute = $this->ModelDokter->update($id, $data);
        if($execute){
            $this->Core->setMassage('Gagal', 'Data Gagal Diupdate!', 'danger');
            redirect(base_url() . 'Dokter');
        }else{
            $this->Core->setMassage('Success', 'Data Berhasil Diupdate!', 'success');
            redirect(base_url() . 'Dokter');
        }
    }

    public function delete($id)
    {
        $execute = $this->ModelDokter->delete($id);
        if($execute){
            $this->Core->setMassage('Gagal', 'Data Gagal Dihapus!', 'danger');
            redirect(base_url() . 'Dokter');
        }else{
            $this->Core->setMassage('Success', 'Data Berhasil Dihapus!', 'success');
            redirect(base_url() . 'Dokter');
        }
    }

}