<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_crud extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_login');
        $this->load->model('M_single');
        $this->load->model('M_multiple');
        $this->load->model('M_master');
        $this->load->model('M_master_multiple');
    }

    public function list_login()
    {
        $data['page'] = "crud/list_login";
        $data['data'] = $this->M_login->getAll();

        $this->load->view('template/index', $data);
    }

    public function add_login()
    {
        $data['page'] = "crud/add_login";

        $this->load->view('template/index', $data);
    }

    public function view_login($id)
    {
        $data['page'] = "crud/view_login";
        $data['data'] = $this->M_login->getById($id);

        $this->load->view('template/index', $data);
    }

    public function edit_login($id)
    {
        $data['page'] = "crud/edit_login";
        $data['data'] = $this->M_login->getById($id);

        $this->load->view('template/index', $data);
    }

    public function save_login()
    {
        $checkUsername  = $this->M_login->checkUsernameExist();
        if ($checkUsername) {
            $status     = 204;
            echo json_encode(array(
                'status' => $status,
            ));
            return;
        } else {
            $result         = $this->M_login->save();
            $status         = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        }
    }

    public function update_login($id)
    {
        $result     = $this->M_login->update($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function delete_login($id)
    {
        $result     = $this->M_login->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function list_single()
    {
        $date = $this->input->post("date") ? $this->input->post("date") : "";

        $data['page'] = "crud/list_single";
        $data['data'] = $this->M_single->getAll($date);

        $this->load->view('template/index', $data);
    }

    public function add_single()
    {
        $data['page'] = "crud/add_single";
        $data['data_master'] = $this->M_master->getAll();

        $this->load->view('template/index', $data);
    }

    public function view_single($id)
    {
        $data['page'] = "crud/view_single";
        $data['data'] = $this->M_single->getById($id);

        $this->load->view('template/index', $data);
    }

    public function edit_single($id)
    {
        $data['page'] = "crud/edit_single";
        $data['data'] = $this->M_single->getById($id);
        $data['data_master'] = $this->M_master->getAll();

        $this->load->view('template/index', $data);
    }

    public function save_single()
    {
        $file = !empty($_FILES) ?  $_FILES['file']['name'] : null;

        if ($file) {
            $config['upload_path']          = realpath(APPPATH . '../upload');
            $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx|xlsx';
            $config['max_size']             = 5048;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->do_upload('file');

            $tempFile = $this->upload->data();
            $fileName = $tempFile['file_name'];

            $result     = $this->M_single->save($fileName);
            $status     = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        }
    }

    public function update_single($id)
    {
        $file  = !empty($_FILES) ?  $_FILES['file']['name'] : null;

        if ($file) {
            $config['upload_path']          = realpath(APPPATH . '../upload');
            $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx|xlsx';
            $config['max_size']             = 5048;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->do_upload('file');

            $tempFile = $this->upload->data();
            $fileName = $tempFile['file_name'];

            $oldImage = $this->input->post("oldFile");
            unlink(FCPATH . 'upload/' . $oldImage);

            $result = $this->M_single->update($id, $fileName);
            $status = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        } else {
            $fileName = $this->input->post("oldFile");
            $result = $this->M_single->update($id, $fileName);
            $status = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        }

    
    }

    public function delete_single($id)
    {
        $result     = $this->M_single->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function list_multiple()
    {
        $data['page'] = "crud/list_multiple";
        $data['data'] = $this->M_multiple->getAll();

        $this->load->view('template/index', $data);
    }

    public function add_multiple()
    {
        $data['page'] = "crud/add_multiple";

        $this->load->view('template/index', $data);
    }

    public function view_multiple($id)
    {
        $data['page'] = "crud/view_multiple";
        $data['data'] = $this->M_multiple->getById($id);
        $data['data_detail'] = $this->M_multiple->getDetailById($id);

        $this->load->view('template/index', $data);
    }

    public function edit_multiple($id)
    {
        $data['page'] = "crud/edit_multiple";
        $data['data'] = $this->M_multiple->getById($id);
        $data['data_detail'] = $this->M_multiple->getDetailById($id);

        $this->load->view('template/index', $data);
    }

    public function save_multiple()
    {
        $result     = $this->M_multiple->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function update_multiple($id)
    {
        $result     = $this->M_multiple->update($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function delete_multiple($id)
    {
        $result     = $this->M_multiple->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function list_master()
    {
        $data['page'] = "crud/list_master";
        $data['data'] = $this->M_master->getAll();

        $this->load->view('template/index', $data);
    }

    public function add_master()
    {
        $data['page'] = "crud/add_master";

        $this->load->view('template/index', $data);
    }

    public function view_master($id)
    {
        $data['page'] = "crud/view_master";
        $data['data'] = $this->M_master->getById($id);

        $this->load->view('template/index', $data);
    }

    public function edit_master($id)
    {
        $data['page'] = "crud/edit_master";
        $data['data'] = $this->M_master->getById($id);

        $this->load->view('template/index', $data);
    }

    public function save_master()
    {
        $result     = $this->M_master->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function update_master($id)
    {
        $result     = $this->M_master->update($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function delete_master($id)
    {
        $result     = $this->M_master->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function list_master_multiple()
    {
        $data['page'] = "crud/list_master_multiple";
        $data['data'] = $this->M_master_multiple->getAll();

        $this->load->view('template/index', $data);
    }

    public function add_master_multiple()
    {
        $data['page'] = "crud/add_master_multiple";

        $this->load->view('template/index', $data);
    }

    public function view_master_multiple($id)
    {
        $data['page'] = "crud/view_master_multiple";
        $data['data'] = $this->M_master_multiple->getById($id);
        $data['data_detail'] = $this->M_master_multiple->getDetailById($id);

        $this->load->view('template/index', $data);
    }

    public function edit_master_multiple($id)
    {
        $data['page'] = "crud/edit_master_multiple";
        $data['data'] = $this->M_master_multiple->getById($id);
        $data['data_detail'] = $this->M_master_multiple->getDetailById($id);

        $this->load->view('template/index', $data);
    }

    public function save_master_multiple()
    {
        $result     = $this->M_master_multiple->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function update_master_multiple($id)
    {
        $result     = $this->M_master_multiple->update($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function delete_master_multiple($id)
    {
        $result     = $this->M_master_multiple->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }
}
