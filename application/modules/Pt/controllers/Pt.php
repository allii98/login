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
}

/* End of file Pt.php */
