<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dept extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_dept');

        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }

        date_default_timezone_set("Asia/Bangkok");
    }

    public function index()
    {
        $data['tittle'] = 'Data Department';
        $data['dept'] = $this->M_dept->get_dept();
        $this->template->load('template', 'v_dept', $data);
    }

    public function addDept()
    {
        $newdept = [
            'kode_dept' => $this->input->post('kodedept'),
            'nama_dept' => $this->input->post('namadept'),
            'alias' => $this->input->post('alias'),
            // 'logo' => $this->input->post('logo'),
            'deskripsi' => $this->input->post('deskripsi'),
            'is_created' => date('Y-m-d H:i:s'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->M_dept->insertDept($newdept);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Department has been created successfully!</div>');
        redirect('Dept');
    }

    public function editDept()
    {
        $iddept = $this->input->post('id_dept');
        $editdept = [
            'kode_dept' => $this->input->post('kodedept'),
            'nama_dept' => $this->input->post('namadept'),
            'alias' => $this->input->post('alias'),
            // 'logo' => $this->input->post('logo'),
            'deskripsi' => $this->input->post('deskripsi'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->M_dept->updateDept($editdept, $iddept);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Department has been updated successfully!</div>');
        redirect('Dept');
    }

    public function deleteDept($iddept)
    {
        $this->M_dept->deleteDept($iddept);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Department has been deleted successfully!</div>');
        redirect('Dept');
    }
}

/* End of file Dept.php */
