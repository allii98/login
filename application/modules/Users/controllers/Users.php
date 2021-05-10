<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_users');

        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }

        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['pt'] = $this->M_users->get_pt();
        $data['dept'] = $this->M_users->get_dept();
        $data['level'] = $this->M_users->get_level();
        $data['users'] = $this->M_users->get_users();

        $data['users_modal'] = $this->db->query("SELECT * FROM tbuser")->result_array();

        $data['data_users_ho'] = $this->M_users->get_data_users_ho();
        $data['tittle'] = 'Data Users';
        $this->template->load('template', 'v_users', $data);
    }

    public function addUsers()
    {
        $data = [
            'user_nama' => $this->input->post('nama'),
            'id_pt' => $this->input->post('id_pt'),
            'id_dept' => $this->input->post('id_dept'),
            'username' => $this->input->post('username'),
            'user_pass' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level' => $this->input->post('level'),
            'is_created' => date('Y-m-d H:i:s'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->M_users->saveUsers($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User has been created successfully!</div>');
        redirect('Users');
    }

    public function editUsers()
    {
        // $pw = password_hash($this->input->post('passworddef'), PASSWORD_DEFAULT);
        // var_dump($pw);
        $idUsers = $this->input->post('id_users');
        $updateusers = [
            'user_nama' => $this->input->post('nama'),
            'id_pt' => $this->input->post('id_pt'),
            'id_dept' => $this->input->post('id_dept'),
            'username' => $this->input->post('username'),
            'user_pass' => password_hash($this->input->post('passworddef'), PASSWORD_DEFAULT),
            'level' => $this->input->post('level'),
            'is_active' => $this->input->post('is_active'),
        ];

        $this->M_users->updateUsers($updateusers, $idUsers);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">User has been updated successfully!</div>');
        redirect('Users');
    }

    public function deleteUsers($idusers)
    {
        $this->M_users->deleteUsers($idusers);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User has been deleted successfully!</div>');
        redirect('Users');
    }
}

/* End of file Controllername.php */
