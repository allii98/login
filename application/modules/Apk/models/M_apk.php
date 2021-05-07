<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_apk extends CI_Model
{

    public function get_apk()
    {
        $query = $this->db->select('*')
            ->from('tb_aplikasi')
            ->where('is_active', 1)
            ->order_by('id_apk', 'DESC')
            ->get()->result_array();
        return $query;
    }

    public function insertapk($newapk)
    {
        $this->db->insert('tb_aplikasi', $newapk);
    }

    public function updateApk($updateapk, $idapk)
    {
        return $this->db->update('tb_aplikasi', $updateapk, ['id_apk' => $idapk]);
    }

    public function deleteApk($idapk)
    {
        return $this->db->delete('tb_aplikasi', ['id_apk' => $idapk]);
    }
}

/* End of file M_apk.php */
