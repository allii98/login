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
    }

    public function index()
    {
        $data['tittle'] = 'Data Department';
        $data['dept'] = $this->M_dept->get_dept();
        $this->template->load('template', 'v_dept', $data);
    }
}

/* End of file Dept.php */
