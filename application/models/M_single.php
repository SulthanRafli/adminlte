<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_single extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('single');
        $this->db->where('visible', 1);
        $this->db->order_by('idSingle', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('single');
        $this->db->where('visible', 1);
        $this->db->where('idSingle', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');
        $data['number'] = $this->input->post('number');
        $data['select2'] = $this->input->post('select2');
        $data['textarea'] = $this->input->post('textarea');
        $data['mask'] = $this->input->post('mask');        
        $data['radio'] = $this->input->post('radio');

        $this->db->insert('single', $data);

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
        $data['number'] = $this->input->post('number');
        $data['select2'] = $this->input->post('select2');
        $data['textarea'] = $this->input->post('textarea');
        $data['mask'] = $this->input->post('mask');        
        $data['radio'] = $this->input->post('radio');

        $this->db->where('idSingle', $id);
        $this->db->update('single', $data);

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

        $this->db->where('idSingle', $id);
        $this->db->update('single', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
