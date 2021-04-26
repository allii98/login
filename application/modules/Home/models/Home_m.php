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
}

/* End of file Home_m.php */
