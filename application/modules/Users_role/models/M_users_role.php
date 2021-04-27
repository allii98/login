<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_users_role extends CI_Model
{

    public function get_users()
    {
        $query = $this->db->select('tbuser.user_id,tbuser.user_nama, tbuser.username, tb_pt.nama_pt, tb_dept.nama_dept, tb_level.jenis_level')
            ->from('tbuser')
            ->join('tb_pt', 'tb_pt.id_pt = tbuser.id_pt')
            ->join('tb_dept', 'tb_dept.id_dept = tbuser.id_dept')
            ->join('tb_level', 'tb_level.kode_level = tbuser.level')
            ->where('tbuser.is_active', 1)
            ->order_by('user_id', 'DESC')
            ->get()->result_array();
        return $query;
    }

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

    public function ubah_role($id_apk, $user_id)
    {
        $query_role = $this->db->select('*')
            ->from('tb_role_users')
            ->where(['id_users' => $user_id, 'id_apk' => $id_apk])
            ->get()->num_rows();

        if ($query_role >= 1) {
            return $this->db->delete('tb_role_users', array('id_users' => $user_id, 'id_apk' => $id_apk));
        } else {
            return $this->db->insert('tb_role_users', array('id_users' => $user_id, 'id_apk' => $id_apk));
        }
    }
}

/* End of file M_user_role.php */
