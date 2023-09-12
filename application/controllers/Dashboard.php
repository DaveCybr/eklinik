<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('ModelDepartemen');
        $this->load->model("Core");
    }
    public function index()
    {
        $data = array(
            'body' => 'Dashboard/index',
        );
        $this->load->view('dashboard', $data);
    }

    public function about()
    {
        $data = array(
            'body' => 'Dashboard/about',
        );
        $this->load->view('dashboard', $data);
    }


    // public function add()
    // {
    //     $data = array(
    //         'body' => 'Departemen/add',
    //     );
    //     $this->load->view('index', $data);
    // }

    // public function simpan()
    // {
    //     $data = array(
    //         'nama' => $this->input->post('nama'),
    //         'deskripsi' => $this->input->post('deskripsi'),
    //     );
    //     $execute = $this->ModelDepartemen->insert($data);
    //     if($execute){
    //         $this->Core->setMassage('Gagal', 'Data Gagal Ditambahkan!', 'danger');
    //         redirect(base_url() . 'Departemen');
    //     }else{
    //         $this->Core->setMassage('Success', 'Data Berhasil Ditambahkan!', 'success');
    //         redirect(base_url() . 'Departemen');
    //     }
    // }

    // public function edit($id)
    // {
    //     $data = array(
    //         'body' => 'Departemen/edit',
    //         'data' => $this->ModelDepartemen->getById($id),
    //     );
    //     $this->load->view('index', $data);
    // }

    // public function update()
    // {
    //     $id = $this->input->post('departemen_id');
    //     $data = array(
    //         'nama' => $this->input->post('nama'),
    //         'deskripsi' => $this->input->post('deskripsi'),
    //     );
    //     $execute = $this->ModelDepartemen->update($id, $data);
    //     if($execute){
    //         $this->Core->setMassage('Gagal', 'Data Gagal Di
}