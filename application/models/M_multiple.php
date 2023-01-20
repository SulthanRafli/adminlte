<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_multiple extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('multiple');
        $this->db->where('visible', 1);
        $this->db->order_by('idMultiple', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('multiple');
        $this->db->where('visible', 1);
        $this->db->where('idMultiple', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function getDetailById($id)
    {
        $this->db->select('*');
        $this->db->from('detail_multiple');
        $this->db->where('visible', 1);
        $this->db->where('idMultiple', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['text'] = $this->input->post('text');
        $data['number'] = $this->input->post('number');

        $this->db->insert('multiple', $data);

        $idMultiple  = $this->db->insert_id();

        $text = $this->input->post('text_detail');
        $select2 = $this->input->post('select2_detail');
        $number = $this->input->post('number_detail');

        $dataLength = count($text);

        $batch_array = array();

        for ($i = 0; $i < $dataLength; $i++) {
            $sub_data = array();

            $sub_data['idMultiple'] = $idMultiple;
            $sub_data['text'] = $text[$i];
            $sub_data['select2'] = $select2[$i];
            $sub_data['number'] = $number[$i];
            $batch_array[] = $sub_data;
        }

        $this->db->insert_batch('detail_multiple', $batch_array);

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

        $this->db->where('idMultiple', $id);
        $this->db->update('multiple', $data);  
        
        $dataDetail['visible'] = 0;

        $this->db->where('idMultiple', $id);        
        $this->db->update('detail_multiple', $dataDetail);

        $text = $this->input->post('text_detail');
        $select2 = $this->input->post('select2_detail');
        $number = $this->input->post('number_detail');

        $dataLength = count($text);

        $batch_array = array();

        for ($i = 0; $i < $dataLength; $i++) {
            $sub_data = array();

            $sub_data['idMultiple'] = $id;
            $sub_data['text'] = $text[$i];
            $sub_data['select2'] = $select2[$i];
            $sub_data['number'] = $number[$i];
            $batch_array[] = $sub_data;
        }

        $this->db->insert_batch('detail_multiple', $batch_array);

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

        $this->db->where('idMultiple', $id);
        $this->db->update('multiple', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
