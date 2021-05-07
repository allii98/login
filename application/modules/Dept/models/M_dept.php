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

    public function insertDept($newdept)
    {
        $this->db->insert('tb_dept', $newdept);
    }

    public function updateDept($updatedept, $iddept)
    {
        return $this->db->update('tb_dept', $updatedept, ['id_dept' => $iddept]);
    }

    public function deleteDept($iddept)
    {
        return $this->db->delete('tb_dept', ['id_dept' => $iddept]);
    }
}

/* End of file M_dept.php */
