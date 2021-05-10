<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_m');

        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    public function index()
    {
        $session = $this->session->userdata('userlogin');
        $sql = "SELECT * FROM tbuser WHERE username = '$session'";
        $row_user = $this->db->query($sql)->row_array();
        $id_user = $row_user['user_id'];

        $data = [
            'tittle'          => 'Dashboard',
            'apkadmin' => $this->Home_m->get_apk(),
            'apk' => $this->Home_m->access_apk($id_user),
        ];
        // var_dump($data['apk']);
        $this->template->load('template', 'dashboard', $data);
        // $this->load->view('template', $data, FALSE);
    }
}
