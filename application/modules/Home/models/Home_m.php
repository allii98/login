<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{

    public function get_apk()
    {
        $query = $this->db->select('*')
            ->from('tb_aplikasi')
            ->order_by('id_apk', 'ASC')
            ->get()->result_array();
        return $query;
    }

    public function access_apk($id_users)
    {
        $this->db->select('*');
        $this->db->from('tb_aplikasi');
        $this->db->join('tb_role_users', 'tb_role_users.id_apk = tb_aplikasi.id_apk');
        $this->db->where('id_users', $id_users);
        $sql = $this->db->get();
        return $sql->result_array();
    }
}

/* End of file Home_m.php */
