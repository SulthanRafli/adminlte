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
        $data['page'] = "crud/list_single";
        $data['data'] = $this->M_single->getAll();

        $this->load->view('template/index', $data);
    }

    public function add_single()
    {
        $data['page'] = "crud/add_single";

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

        $this->load->view('template/index', $data);
    }

    public function save_single()
    {
        $result     = $this->M_single->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function update_single($id)
    {
        $result     = $this->M_single->update($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
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
}
