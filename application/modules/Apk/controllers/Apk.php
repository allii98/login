<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Apk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_apk');

        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }

        date_default_timezone_set("Asia/Bangkok");
    }

    public function index()
    {
        $data['apk'] = $this->M_apk->get_apk();
        $data['tittle'] = 'Daftar Aplikasi';
        $this->template->load('template', 'v_apk', $data);
    }

    public function addApk()
    {
        $newapk = [
            'nama_apk' => $this->input->post('nama_apk'),
            'link_apk' => $this->input->post('link_apk'),
            'ctrl_admin' => $this->input->post('ctrl_admin'),
            // 'logo' => $this->input->post('logo'),
            'icon_apk' => $this->input->post('icon_apk'),
            'deskripsi' => $this->input->post('deskripsi'),
            'is_created' => date('Y-m-d H:i:s'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->M_apk->insertApk($newapk);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Application has been created successfully!</div>');
        redirect('Apk');
    }
    public function editApk()
    {
        $idapk = $this->input->post('id_apk');
        $editapk = [
            'nama_apk' => $this->input->post('nama_apk'),
            'link_apk' => $this->input->post('link_apk'),
            'ctrl_admin' => $this->input->post('ctrl_admin'),
            // 'logo' => $this->input->post('logo'),
            'icon_apk' => $this->input->post('icon_apk'),
            'deskripsi' => $this->input->post('deskripsi'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->M_apk->updateapk($editapk, $idapk);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Application has been updated successfully!</div>');
        redirect('Apk');
    }

    public function deleteApk($idapk)
    {
        $this->M_apk->deleteApk($idapk);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Application has been deleted successfully!</div>');
        redirect('Apk');
    }
}

/* End of file Apk.php */
