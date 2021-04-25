<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

    public function get_users()
    {
        $query = $this->db->select('*')
        ->from('tbuser')
        ->order_by('user_id', 'ASC')
        ->get()->result_array();
    return $query;
    }

}

/* End of file M_users.php */
