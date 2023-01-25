<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master_multiple extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('master_multiple');
        $this->db->where('visible', 1);
        $this->db->order_by('idMasterMultiple', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('master_multiple');
        $this->db->where('visible', 1);
        $this->db->where('idMasterMultiple', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function getDetailById($id)
    {
        $this->db->select('*');
        $this->db->from('detail_master_multiple');
        $this->db->where('visible', 1);
        $this->db->where('idMasterMultiple', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');        

        $this->db->insert('master_multiple', $data);

        $idMasterMultiple  = $this->db->insert_id();

        $text = $this->input->post('text_detail');

        $dataLength = count($text);

        $batch_array = array();

        for ($i = 0; $i < $dataLength; $i++) {
            $sub_data = array();

            $sub_data['idMasterMultiple'] = $idMasterMultiple;
            $sub_data['text'] = $text[$i];
            $batch_array[] = $sub_data;
        }

        $this->db->insert_batch('detail_master_multiple', $batch_array);

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

        $this->db->where('idMasterMultiple', $id);
        $this->db->update('master_multiple', $data);

        $dataDetail['visible'] = 0;

        $this->db->where('idMasterMultiple', $id);
        $this->db->update('detail_master_multiple', $dataDetail);

        $text = $this->input->post('text_detail');

        $dataLength = count($text);

        $batch_array = array();

        for ($i = 0; $i < $dataLength; $i++) {
            $sub_data = array();

            $sub_data['idMasterMultiple'] = $id;
            $sub_data['text'] = $text[$i];
            $batch_array[] = $sub_data;
        }

        $this->db->insert_batch('detail_master_multiple', $batch_array);

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

        $this->db->where('idMasterMultiple', $id);
        $this->db->update('master_multiple', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
