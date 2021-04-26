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
    }

    public function index()
    {
        $data['apk'] = $this->M_apk->get_apk();
        $data['tittle'] = 'Daftar Aplikasi';
        $this->template->load('template', 'v_apk', $data);
    }
}

/* End of file Apk.php */
