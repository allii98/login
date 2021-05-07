<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_pt');

        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['tittle'] = 'Data PT';
        $data['pt'] = $this->M_pt->get_pt();
        $this->template->load('template', 'v_pt', $data);
    }

    public function addPT()
    {

        $newpt = [
            'nama_pt' => $this->input->post('namapt'),
            'kode_pt' => $this->input->post('kodept'),
            'alias' => $this->input->post('alias'),
            'singkatan' => $this->input->post('singkatan'),
            // 'logo' => $this->input->post('logo'),
            // 'deskripsi' => $this->input->post('deskripsi'),
            'is_created' => date('Y-m-d'),
            'is_active' => $this->input->post('is_active'),
        ];

        $this->M_pt->insertPt($newpt);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">PT has been created successfully!</div>');
        redirect('Pt');
    }

    public function editPT()
    {
        $idpt = $this->input->post('id_pt');
        $editpt = [
            'nama_pt' => $this->input->post('namapt'),
            'kode_pt' => $this->input->post('kodept'),
            'alias' => $this->input->post('alias'),
            'singkatan' => $this->input->post('singkatan'),
            // 'logo' => $this->input->post('logo'),
            'deskripsi' => $this->input->post('deskripsi'),
            'is_active' => $this->input->post('is_active'),
            'is_created' => date('Y-m-d'),
        ];

        $this->M_pt->updatePt($editpt, $idpt);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">PT has been updated successfully!</div>');
        redirect('Pt');
    }

    public function deletePt($idpt)
    {
        $this->M_pt->deletePt($idpt);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">PT has been deleted successfully!</div>');
        redirect('Pt');
    }
}

/* End of file Pt.php */
