<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_apk extends CI_Model {

    public function get_apk()
    {
        $query = $this->db->select('*')
            ->from('tb_aplikasi')
            ->where('is_active', 1)
            ->order_by('id_apk', 'DESC')
            ->get()->result_array();
        return $query;
    }

}

/* End of file M_apk.php */
