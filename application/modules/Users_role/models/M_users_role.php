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

    // public function get_apk()
    // {
    //     $query = $this->db->select('*')
    //         ->from('tb_aplikasi')
    //         ->where('is_active', 1)
    //         ->order_by('id_apk', 'DESC')
    //         ->get()->result_array();
    //     return $query;
    // }

    public function get_role($user_id)
    {
        $query_apk = $this->db->select('*')
            ->from('tb_aplikasi')
            ->where('is_active', 1)
            ->order_by('id_apk', 'DESC')
            ->get()->result_array();

        return $query_apk;
    }

    public function cek_role($user_id, $id_apk)
    {
        $query_role = $this->db->select('*')
            ->from('tb_role_users')
            ->where(['id_users' => $user_id, 'id_apk' => $id_apk])
            ->get()->row_array();
        return $query_role;
    }
}

/* End of file M_user_role.php */
