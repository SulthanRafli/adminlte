<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
    public function index()
    {
        $data['page'] = "dashboard/dashboard_v1";

        $this->load->view('template/index', $data);
    }

    public function dashboard_v2()
    {
        $data['page'] = "dashboard/dashboard_v2";

        $this->load->view('template/index', $data);
    }

    public function dashboard_v3()
    {
        $data['page'] = "dashboard/dashboard_v3";

        $this->load->view('template/index', $data);
    }

    public function widgets()
    {
        $data['page'] = "widgets";

        $this->load->view('template/index', $data);
    }

    public function chart_js()
    {
        $data['page'] = "chart/chart_js";

        $this->load->view('template/index', $data);
    }

    public function chart_flot()
    {
        $data['page'] = "chart/chart_flot";

        $this->load->view('template/index', $data);
    }

    public function chart_inline()
    {
        $data['page'] = "chart/chart_inline";

        $this->load->view('template/index', $data);
    }

    public function chart_uplot()
    {
        $data['page'] = "chart/chart_uplot";

        $this->load->view('template/index', $data);
    }

    public function ui_general()
    {
        $data['page'] = "ui/ui_general";

        $this->load->view('template/index', $data);
    }

    public function ui_icons()
    {
        $data['page'] = "ui/ui_icons";

        $this->load->view('template/index', $data);
    }

    public function ui_buttons()
    {
        $data['page'] = "ui/ui_buttons";

        $this->load->view('template/index', $data);
    }

    public function ui_sliders()
    {
        $data['page'] = "ui/ui_sliders";

        $this->load->view('template/index', $data);
    }

    public function ui_modals()
    {
        $data['page'] = "ui/ui_modals";

        $this->load->view('template/index', $data);
    }

    public function ui_navbar()
    {
        $data['page'] = "ui/ui_navbar";

        $this->load->view('template/index', $data);
    }

    public function ui_timeline()
    {
        $data['page'] = "ui/ui_timeline";

        $this->load->view('template/index', $data);
    }

    public function ui_ribbons()
    {
        $data['page'] = "ui/ui_ribbons";

        $this->load->view('template/index', $data);
    }

    public function forms_general()
    {
        $data['page'] = "forms/forms_general";

        $this->load->view('template/index', $data);
    }

    public function forms_advanced()
    {
        $data['page'] = "forms/forms_advanced";

        $this->load->view('template/index', $data);
    }

    public function forms_editors()
    {
        $data['page'] = "forms/forms_editors";

        $this->load->view('template/index', $data);
    }

    public function forms_validation()
    {
        $data['page'] = "forms/forms_validation";

        $this->load->view('template/index', $data);
    }

    public function tables_simple()
    {
        $data['page'] = "tables/tables_simple";

        $this->load->view('template/index', $data);
    }

    public function tables_data()
    {
        $data['page'] = "tables/tables_data";

        $this->load->view('template/index', $data);
    }

    public function tables_jsgrid()
    {
        $data['page'] = "tables/tables_jsgrid";

        $this->load->view('template/index', $data);
    }

    public function calendar()
    {
        $data['page'] = "calendar";

        $this->load->view('template/index', $data);
    }

    public function gallery()
    {
        $data['page'] = "gallery";

        $this->load->view('template/index', $data);
    }

    public function kanban()
    {
        $data['page'] = "kanban";

        $this->load->view('template/index', $data);
    }

    public function mailbox_inbox()
    {
        $data['page'] = "mailbox/mailbox_inbox";

        $this->load->view('template/index', $data);
    }

    public function mailbox_compose()
    {
        $data['page'] = "mailbox/mailbox_compose";

        $this->load->view('template/index', $data);
    }

    public function mailbox_read()
    {
        $data['page'] = "mailbox/mailbox_read";

        $this->load->view('template/index', $data);
    }

    public function pages_invoice()
    {
        $data['page'] = "pages/pages_invoice";

        $this->load->view('template/index', $data);
    }

    public function pages_profile()
    {
        $data['page'] = "pages/pages_profile";

        $this->load->view('template/index', $data);
    }

    public function pages_ecommerce()
    {
        $data['page'] = "pages/pages_ecommerce";

        $this->load->view('template/index', $data);
    }

    public function pages_projects()
    {
        $data['page'] = "pages/pages_projects";

        $this->load->view('template/index', $data);
    }

    public function pages_project_add()
    {
        $data['page'] = "pages/pages_project_add";

        $this->load->view('template/index', $data);
    }

    public function pages_project_edit()
    {
        $data['page'] = "pages/pages_project_edit";

        $this->load->view('template/index', $data);
    }

    public function pages_project_detail()
    {
        $data['page'] = "pages/pages_project_detail";

        $this->load->view('template/index', $data);
    }

    public function pages_contacts()
    {
        $data['page'] = "pages/pages_contacts";

        $this->load->view('template/index', $data);
    }

    public function pages_faq()
    {
        $data['page'] = "pages/pages_faq";

        $this->load->view('template/index', $data);
    }

    public function pages_contact_us()
    {
        $data['page'] = "pages/pages_contact_us";

        $this->load->view('template/index', $data);
    }
    
    public function extras_legacy()
    {
        $data['page'] = "extras/extras_legacy";

        $this->load->view('template/index', $data);
    }

    public function extras_language()
    {
        $data['page'] = "extras/extras_language";

        $this->load->view('template/index', $data);
    }

    public function extras_404()
    {
        $data['page'] = "extras/extras_404";

        $this->load->view('template/index', $data);
    }

    public function extras_500()
    {
        $data['page'] = "extras/extras_500";

        $this->load->view('template/index', $data);
    }

    public function extras_pace()
    {
        $data['page'] = "extras/extras_pace";

        $this->load->view('template/index', $data);
    }

    public function extras_blank()
    {
        $data['page'] = "extras/extras_blank";

        $this->load->view('template/index', $data);
    }

    public function search_simple()
    {
        $data['page'] = "search/search_simple";

        $this->load->view('template/index', $data);
    }

    public function search_enhanced()
    {
        $data['page'] = "search/search_enhanced";

        $this->load->view('template/index', $data);
    }
}
