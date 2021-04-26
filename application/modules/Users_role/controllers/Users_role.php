<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_role extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_users_role');

        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['users'] = $this->M_users_role->get_users();
        $this->template->load('template', 'v_users_role', $data);
    }
}

/* End of file User_role.php */
