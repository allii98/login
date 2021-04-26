<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_users_role extends CI_Model
{

    public function get_users()
    {
        $query = $this->db->select('*')
            ->from('tbuser')
            ->where('is_active', 1)
            ->order_by('user_id', 'DESC')
            ->get()->result_array();
        return $query;
    }
}

/* End of file M_user_role.php */
