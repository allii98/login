<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pt extends CI_Model
{

    public function get_pt()
    {
        $query = $this->db->select('*')
            ->from('tb_pt')
            ->order_by('id_pt', 'ASC')
            ->get()->result_array();
        return $query;
    }
}

/* End of file ModelName.php */
