<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dept extends CI_Model
{

    public function get_dept()
    {
        $query = $this->db->select('*')
            ->from('tb_dept')
            ->order_by('id_dept', 'ASC')
            ->get()->result_array();
        return $query;
    }
}

/* End of file M_dept.php */
