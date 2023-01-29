<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('C_home/dashboard_v3') ?>" class="brand-link">
        <img src="<?php echo base_url('assets/') ?>dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item <?= $page === 'dashboard/dashboard_v1' || $page === 'dashboard/dashboard_v2' || $page === 'dashboard/dashboard_v3' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'dashboard/dashboard_v1' || $page === 'dashboard/dashboard_v2' || $page === 'dashboard/dashboard_v3' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home') ?>" class="nav-link <?= $page === 'dashboard/dashboard_v1' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/dashboard_v2') ?>" class="nav-link <?= $page === 'dashboard/dashboard_v2' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/dashboard_v3') ?>" class="nav-link <?= $page === 'dashboard/dashboard_v3' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'crud/list_login' || $page === 'crud/list_single' || $page === 'crud/list_multiple' || $page === 'crud/list_master' || $page === 'crud/list_master_multiple' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'crud/list_login' || $page === 'crud/list_single' || $page === 'crud/list_multiple' || $page === 'crud/list_master' || $page === 'crud/list_master_multiple' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            CRUD
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_crud/list_login') ?>" class="nav-link <?= $page === 'crud/list_login' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Master Login</p>
                            </a>
                        </li>                       
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_crud/list_single') ?>" class="nav-link <?= $page === 'crud/list_single' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Single</p>
                            </a>
                        </li>                       
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_crud/list_multiple') ?>" class="nav-link <?= $page === 'crud/list_multiple' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Multiple</p>
                            </a>
                        </li>                       
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_crud/list_master') ?>" class="nav-link <?= $page === 'crud/list_master' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Master</p>
                            </a>
                        </li>                       
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_crud/list_master_multiple') ?>" class="nav-link <?= $page === 'crud/list_master_multiple' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Master Multiple</p>
                            </a>
                        </li>                       
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo base_url('C_home/widgets') ?>" class="nav-link <?= $page === 'widgets' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= $page === 'chart/chart_js' || $page === 'chart/chart_flot' || $page === 'chart/chart_inline' || $page === 'chart/chart_uplot' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'chart/chart_js' || $page === 'chart/chart_flot' || $page === 'chart/chart_inline' || $page === 'chart/chart_uplot' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/chart_js') ?>" class="nav-link <?= $page === 'chart/chart_js' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/chart_flot') ?>" class="nav-link <?= $page === 'chart/chart_flot' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/chart_inline') ?>" class="nav-link <?= $page === 'chart/chart_inline' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/chart_uplot') ?>" class="nav-link <?= $page === 'chart/chart_uplot' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'ui/ui_general' || $page === 'ui/ui_icons' || $page === 'ui/ui_buttons' || $page === 'ui/ui_sliders' || $page === 'ui/ui_modals' || $page === 'ui/ui_navbar' || $page === 'ui/ui_timeline' || $page === 'ui/ui_ribbons' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'ui/ui_general' || $page === 'ui/ui_icons' || $page === 'ui/ui_buttons' || $page === 'ui/ui_sliders' || $page === 'ui/ui_modals' || $page === 'ui/ui_navbar' || $page === 'ui/ui_timeline' || $page === 'ui/ui_ribbons' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_general') ?>" class="nav-link <?= $page === 'ui/ui_general' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_icons') ?>" class="nav-link <?= $page === 'ui/ui_icons' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_buttons') ?>" class="nav-link <?= $page === 'ui/ui_buttons' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_sliders') ?>" class="nav-link <?= $page === 'ui/ui_sliders' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_modals') ?>" class="nav-link <?= $page === 'ui/ui_modals' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_navbar') ?>" class="nav-link <?= $page === 'ui/ui_navbar' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_timeline') ?>" class="nav-link <?= $page === 'ui/ui_timeline' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/ui_ribbons') ?>" class="nav-link <?= $page === 'ui/ui_ribbons' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ribbons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'forms/forms_general' || $page === 'forms/forms_advanced' || $page === 'forms/forms_editors' || $page === 'forms/forms_validation' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'forms/forms_general' || $page === 'forms/forms_advanced' || $page === 'forms/forms_editors' || $page === 'forms/forms_validation' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/forms_general') ?>" class="nav-link <?= $page === 'forms/forms_general' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/forms_advanced') ?>" class="nav-link <?= $page === 'forms/forms_advanced' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/forms_editors') ?>" class="nav-link <?= $page === 'forms/forms_editors' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/forms_validation') ?>" class="nav-link <?= $page === 'forms/forms_validation' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Validation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'tables/tables_simple' || $page === 'tables/tables_data' || $page === 'tables/tables_jsgrid' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'tables/tables_simple' || $page === 'tables/tables_data' || $page === 'tables/tables_jsgrid' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/tables_simple') ?>" class="nav-link <?= $page === 'tables/tables_simple' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/tables_data') ?>" class="nav-link <?= $page === 'tables/tables_data' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/tables_jsgrid') ?>" class="nav-link <?= $page === 'tables/tables_jsgrid' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('C_home/calendar') ?>" class="nav-link <?= $page === 'calendar' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('C_home/gallery') ?>" class="nav-link <?= $page === 'gallery' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('C_home/kanban') ?>" class="nav-link <?= $page === 'kanban' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Kanban Board</p>
                    </a>
                </li>                
                <li class="nav-item <?= $page === 'mailbox/mailbox_inbox' || $page === 'mailbox/mailbox_compose' || $page === 'mailbox/mailbox_read' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'mailbox/mailbox_inbox' || $page === 'mailbox/mailbox_compose' || $page === 'mailbox/mailbox_read' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/mailbox_inbox') ?>" class="nav-link <?= $page === 'mailbox/mailbox_inbox' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/mailbox_compose') ?>" class="nav-link <?= $page === 'mailbox/mailbox_compose' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/mailbox_read') ?>" class="nav-link <?= $page === 'mailbox/mailbox_read' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'pages/pages_invoice' || $page === 'pages/pages_profile' || $page === 'pages/pages_ecommerce' || $page === 'pages/pages_projects' || $page === 'pages/pages_project_add' || $page === 'pages/pages_project_edit' || $page === 'pages/pages_project_detail' || $page === 'pages/pages_contacts' || $page === 'pages/pages_faq' || $page === 'pages/pages_contact_us' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'pages/pages_invoice' || $page === 'pages/pages_profile' || $page === 'pages/pages_ecommerce' || $page === 'pages/pages_projects' || $page === 'pages/pages_project_add' || $page === 'pages/pages_project_edit' || $page === 'pages/pages_project_detail' || $page === 'pages/pages_contacts' || $page === 'pages/pages_faq' || $page === 'pages/pages_contact_us' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_invoice') ?>" class="nav-link <?= $page === 'pages/pages_invoice' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_profile') ?>" class="nav-link <?= $page === 'pages/pages_profile' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_ecommerce') ?>" class="nav-link <?= $page === 'pages/pages_ecommerce' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_projects') ?>" class="nav-link <?= $page === 'pages/pages_projects' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_project_add') ?>" class="nav-link <?= $page === 'pages/pages_project_add' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_project_edit') ?>" class="nav-link <?= $page === 'pages/pages_project_edit' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_project_detail') ?>" class="nav-link <?= $page === 'pages/pages_project_detail' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_contacts') ?>" class="nav-link <?= $page === 'pages/pages_contacts' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_faq') ?>" class="nav-link <?= $page === 'pages/pages_faq' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/pages_contact_us') ?>" class="nav-link <?= $page === 'pages/pages_contact_us' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'extras/extras_legacy' || $page === 'extras/extras_language' || $page === 'extras/extras_404' || $page === 'extras/extras_500' || $page === 'extras/extras_pace' || $page === 'extras/extras_blank' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'extras/extras_legacy' || $page === 'extras/extras_language' || $page === 'extras/extras_404' || $page === 'extras/extras_500' || $page === 'extras/extras_pace' || $page === 'extras/extras_blank' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/extras_legacy') ?>" class="nav-link <?= $page === 'extras/extras_legacy' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/extras_language') ?>" class="nav-link <?= $page === 'extras/extras_language' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/extras_404') ?>" class="nav-link <?= $page === 'extras/extras_404' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/extras_500') ?>" class="nav-link <?= $page === 'extras/extras_500' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/extras_pace') ?>" class="nav-link <?= $page === 'extras/extras_pace' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pace</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/extras_blank') ?>" class="nav-link <?= $page === 'extras/extras_blank' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $page === 'search/search_simple' || $page === 'search/search_enhanced' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $page === 'search/search_simple' || $page === 'search/search_enhanced' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Search
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/search_simple') ?>" class="nav-link <?= $page === 'search/search_simple' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('C_home/search_enhanced') ?>" class="nav-link <?= $page === 'search/search_enhanced' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enhanced</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>