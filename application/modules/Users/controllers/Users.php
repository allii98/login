<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'v_users');
    }
}

/* End of file Controllername.php */
