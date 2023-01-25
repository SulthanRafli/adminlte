<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_single extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll($date = "")
    {
        $this->db->select('*, master.text AS master');
        $this->db->from('single');
        $this->db->join('master', 'single.idMaster = master.idMaster', 'left');
        $this->db->where('single.visible', 1);

        if($date !== ""){
            $this->db->where('DATE(single.date)', $date);
        }

        $this->db->order_by('single.idSingle', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id)
    {
        $this->db->select('*, master.text AS master');
        $this->db->from('single');
        $this->db->join('master', 'single.idMaster = master.idMaster', 'left');
        $this->db->where('single.visible', 1);
        $this->db->where('single.idSingle', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function save($file)
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');
        $data['number'] = $this->input->post('number');
        $data['idMaster'] = $this->input->post('select2');
        $data['textarea'] = $this->input->post('textarea');
        $data['mask'] = $this->input->post('mask');        
        $data['radio'] = $this->input->post('radio');
        $data['date'] = $this->input->post('date');
        $data['time'] = $this->input->post('time');
        $data['file'] = $file;

        $this->db->insert('single', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function update($id, $file)
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');
        $data['number'] = $this->input->post('number');
        $data['idMaster'] = $this->input->post('select2');
        $data['textarea'] = $this->input->post('textarea');
        $data['mask'] = $this->input->post('mask');        
        $data['radio'] = $this->input->post('radio');
        $data['date'] = $this->input->post('date');
        $data['time'] = $this->input->post('time');
        $data['file'] = $file;

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
