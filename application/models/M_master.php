<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('master');
        $this->db->where('visible', 1);
        $this->db->order_by('idMaster', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('master');
        $this->db->where('visible', 1);
        $this->db->where('idMaster', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');

        $this->db->insert('master', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function update($id)
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');

        $this->db->where('idMaster', $id);
        $this->db->update('master', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function delete($id)
    {
        $this->db->trans_begin();

        $data['visible'] = 0;

        $this->db->where('idMaster', $id);
        $this->db->update('master', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
