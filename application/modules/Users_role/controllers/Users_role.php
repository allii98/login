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
        $data['tittle'] = 'Users Role';
        $data['users'] = $this->M_users_role->get_users();

        $this->template->load('template', 'v_users_role', $data);
    }

    public function get_role()
    {
        $user_id = $this->input->post('user_id');
        $output = $this->M_users_role->get_role($user_id);

        echo json_encode($output);
    }

    public function cek_role()
    {
        $user_id = $this->input->post('user_id');
        $id_apk = $this->input->post('id_apk');
        $output = $this->M_users_role->cek_role($user_id, $id_apk);

        echo json_encode($output);
    }

    public function ubah_role()
    {
        $id_apk = $this->input->post('id_apk');
        $user_id = $this->input->post('user_id');
        $output = $this->M_users_role->ubah_role($id_apk, $user_id);

        echo json_encode($output);
    }
}

/* End of file User_role.php */
