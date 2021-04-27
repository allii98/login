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

    public function insertPt($newpt)
    {
        $this->db->insert('tb_pt', $newpt);
    }

    public function updatePt($updatept, $idpt)
    {
        return $this->db->update('tb_pt', $updatept, ['id_pt' => $idpt]);
    }

    public function deletePt($idpt)
    {
        return $this->db->delete('tb_pt', ['id_pt' => $idpt]);
    }
}

/* End of file ModelName.php */
