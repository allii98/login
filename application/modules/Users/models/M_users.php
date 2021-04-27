<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{

    public function get_users()
    {
        $query = $this->db->select('tbuser.user_id,tbuser.user_nama, tbuser.username, tb_pt.nama_pt, tb_dept.nama_dept, tb_level.jenis_level, tbuser.is_created')
            ->from('tbuser')
            ->join('tb_pt', 'tb_pt.id_pt = tbuser.id_pt')
            ->join('tb_dept', 'tb_dept.id_dept = tbuser.id_dept')
            ->join('tb_level', 'tb_level.kode_level = tbuser.level')
            ->where('tbuser.is_active', 1)
            ->order_by('user_id', 'DESC')
            ->get()->result_array();
        return $query;
    }

    public function get_data_users_ho()
    {
        $query = $this->db->select('nama')
            ->from('user_ho')
            ->order_by('nama', 'ASC')
            ->get()->result_array();
        return $query;
    }

    public function get_pt()
    {
        $query = $this->db->select('id_pt, alias')
            ->from('tb_pt')
            ->where('is_active', 1)
            ->order_by('id_pt', 'ASC')
            ->get()->result_array();
        return $query;
    }

    public function get_dept()
    {
        $query = $this->db->select('id_dept, nama_dept')
            ->from('tb_dept')
            ->where('is_active', 1)
            ->order_by('id_dept', 'ASC')
            ->get()->result_array();
        return $query;
    }

    public function get_level()
    {
        $query = $this->db->select('kode_level, jenis_level')
            ->from('tb_level')
            ->where('is_active', 1)
            ->order_by('id_level', 'ASC')
            ->get()->result_array();
        return $query;
    }

    public function saveUsers($data)
    {
        return $this->db->insert('tbuser', $data);
    }
}

/* End of file M_users.php */
