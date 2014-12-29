<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Wellcomr to Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet" type="text/css" />
    {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/plugins/uniform/css/uniform.default.css') }}
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    {{ HTML::style('assets/plugins/gritter/css/jquery.gritter.css') }}
    {{ HTML::style('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}
    {{ HTML::style('assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}
    {{ HTML::style('assets/plugins/jqvmap/jqvmap/jqvmap.css') }}
    {{ HTML::style('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->
    {{ HTML::style('assets/css/style-metronic.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/style-responsive.css') }}
    {{ HTML::style('assets/css/plugins.css') }}
    {{ HTML::style('assets/css/pages/tasks.css', array( 'id'=>'style_color' )) }}
    {{ HTML::style('assets/css/themes/default.css') }}
    {{ HTML::style('assets/css/print.css', array('media'=>'print')) }}
    {{ HTML::style('assets/css/custom.css') }}
    <!-- END THEME STYLES -->
    <!-- POLYMER COMPONENTS -->
    <script type="text/javascript">
        var public_path = "{{ URL::to('/') }}";
    </script>
    <!-- END POLYMER -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
        <!-- BEGIN LOGO -->
        <a class="navbar-brand" href="index.html">
            {{ HTML::image('assets/img/logo.png','logo',array('class'=>'img-responsive')) }}
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            {{ HTML::image('assets/img/menu-toggler.png') }}
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                         data-hover="dropdown" data-close-others="true">
                    {{ HTML::image('assets/img/avatar1_small.jpg') }}
                    <span class="username">Bob Nilson </span><i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#View Home"><i class="fa fa-key"></i> View Home</a></li>
                    <li><a href="login.html"><i class="fa fa-key"></i> Log Out </a></li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form class="sidebar-search" action="extra_search.html" method="POST">
                        <div class="form-container">
                            <div class="input-box">
                                <a href="javascript:;" class="remove"></a>
                                <input type="text" placeholder="Search..." />
                                <input type="button" class="submit" value=" " />
                            </div>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start active ">
                    <a href="#dash">
                        <i class="fa fa-shopping-cart"></i><span class="title">Dashboard
                        </span><span class="selected "></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i><span class="title">E-Commerce
                        </span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="ecommerce_index.html"><i class="fa fa-bullhorn"></i>Dashboard </a></li>
                        <li><a href="ecommerce_orders.html"><i class="fa fa-shopping-cart"></i>Orders </a>
                        </li>
                        <li><a href="ecommerce_orders_view.html"><i class="fa fa-tags"></i>Order View </a>
                        </li>
                        <li><a href="ecommerce_products.html"><i class="fa fa-sitemap"></i>Products </a>
                        </li>
                        <li><a href="ecommerce_products_edit.html"><i class="fa fa-file-o"></i>Product Edit
                            </a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-gift"></i><span class="title">Frontend Themes
                        </span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="tooltips" data-container="body" data-placement="right" data-html="true"
                            data-original-title="Complete E-Commerce Frontend Theme For Metronic Admin"><a href="http://keenthemes.com/preview/index.php?theme=metronic_ecommerce"
                                                                                                           target="_blank"><span class="title">E-Commerce Frontend </span></a></li>
                        <li class="tooltips" data-container="body" data-placement="right" data-html="true"
                            data-original-title="Complete Multipurpose Corporate Frontend Theme For Metronic Admin">
                            <a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
                                <span class="title">Corporate Frontend </span></a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-cogs"></i><span class="title">Page Layouts
                    </span><span class="arrow "></span></a>
                    <ul class="sub-menu">
                        <li><a href="index_horizontal_menu.html">Dashboard & Mega Menu </a></li>
                        <li><a href="layout_horizontal_sidebar_menu.html">Horizontal & Sidebar Menu </a>
                        </li>
                        <li><a href="layout_horizontal_menu1.html">Horizontal Mega Menu 1 </a></li>
                        <li><a href="layout_horizontal_menu2.html">Horizontal Mega Menu 2 </a></li>
                        <li><a href="layout_search_on_header.html">Searchbar On Header </a></li>
                        <li><a href="layout_sidebar_toggler_on_header.html">Sidebar Toggler On Header </a>
                        </li>
                        <li><a href="layout_sidebar_reversed.html"><span class="badge badge-roundless badge-success">
                                new </span>Right Sidebar Page </a></li>
                        <li><a href="layout_sidebar_fixed.html">Sidebar Fixed Page </a></li>
                        <li><a href="layout_sidebar_closed.html">Sidebar Closed Page </a></li>
                        <li><a href="layout_ajax.html">Content Loading via Ajax </a></li>
                        <li><a href="layout_disabled_menu.html">Disabled Menu Links </a></li>
                        <li><a href="layout_blank_page.html">Blank Page </a></li>
                        <li><a href="layout_boxed_page.html">Boxed Page </a></li>
                        <li><a href="layout_language_bar.html">Language Switch Bar </a></li>
                        <li><a href="layout_promo.html">Promo Page </a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-bookmark-o"></i><span class="title">UI Features
                    </span><span class="arrow "></span></a>
                    <ul class="sub-menu">
                        <li><a href="ui_general.html">General </a></li>
                        <li><a href="ui_buttons.html">Buttons & Icons </a></li>
                        <li><a href="ui_typography.html">Typography </a></li>
                        <li><a href="ui_tabs_accordions_navs.html">Tabs, Accordions & Navs </a></li>
                        <li><a href="ui_tree.html"><span class="badge badge-roundless badge-important">new </span>
                                Tree View </a></li>
                        <li><a href="ui_page_progress_style_1.html"><span class="badge badge-roundless badge-warning">
                                new </span>Page Progress Bar </a></li>
                        <li><a href="ui_blockui.html">Block UI </a></li>
                        <li><a href="ui_notific8.html">Notific8 Notifications </a></li>
                        <li><a href="ui_toastr.html">Toastr Notifications </a></li>
                        <li><a href="ui_alert_dialog_api.html"><span class="badge badge-roundless badge-important">
                                new </span>Alerts & Dialogs API </a></li>
                        <li><a href="ui_session_timeout.html">Session Timeout </a></li>
                        <li><a href="ui_idle_timeout.html">User Idle Timeout </a></li>
                        <li><a href="ui_modals.html">Modals </a></li>
                        <li><a href="ui_extended_modals.html">Extended Modals </a></li>
                        <li><a href="ui_tiles.html">Tiles </a></li>
                        <li><a href="ui_datepaginator.html"><span class="badge badge-roundless badge-success">
                                new </span>Date Paginator </a></li>
                        <li><a href="ui_nestable.html">Nestable List </a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-puzzle-piece"></i><span class="title">UI
                        Components </span><span class="arrow "></span></a>
                    <ul class="sub-menu">
                        <li><a href="components_pickers.html">Pickers </a></li>
                        <li><a href="components_dropdowns.html">Custom Dropdowns </a></li>
                        <li><a href="components_form_tools.html">Form Tools </a></li>
                        <li><a href="components_editors.html">Markdown & WYSIWYG Editors </a></li>
                        <li><a href="components_ion_sliders.html">Ion Range Sliders </a></li>
                        <li><a href="components_noui_sliders.html">NoUI Range Sliders </a></li>
                        <li><a href="components_jqueryui_sliders.html">jQuery UI Sliders </a></li>
                        <li><a href="components_knob_dials.html">Knob Circle Dials </a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i><span class="title">Form Stuff
                    </span><span class="arrow "></span></a>
                    <ul class="sub-menu">
                        <li><a href="form_controls.html">Form Controls </a></li>
                        <li><a href="form_layouts.html">Form Layouts </a></li>
                        <li><a href="form_editable.html"><span class="badge badge-roundless badge-warning">new
                            </span>Form X-editable </a></li>
                        <li><a href="form_wizard.html">Form Wizard </a></li>
                        <li><a href="form_validation.html">Form Validation </a></li>
                        <li><a href="form_image_crop.html"><span class="badge badge-roundless badge-important">
                                new </span>Image Cropping </a></li>
                        <li><a href="form_fileupload.html">Multiple File Upload </a></li>
                        <li><a href="form_dropzone.html">Dropzone File Upload </a></li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
           <paper-hr hrHeader="Property"></paper-hr>
            <div class="row">
                <form-item formIcon="credit-card" formTitle="Property" formResource="property"></form-item>
                <form-item formIcon="dashboard" formTitle="Subproperty" formResource="sub-propery"></form-item>
            </div>
            <paper-hr hrHeader="Category"></paper-hr>
            <div class="row">
                <nav-list-item formTitle="Category"></nav-list-item>
                <nav-list-item formTitle="SubCategory"></nav-list-item>
            </div>
            <paper-hr hrHeader="Product"></paper-hr>
            <div class="row">
                <nav-list-item formTitle="Product"></nav-list-item>
                <nav-list-item formTitle="Product By Property"></nav-list-item>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2014 &copy; .
    </div>
    <div class="footer-tools">
        <span class="go-top"><i class="fa fa-angle-up"></i></span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{{ HTML::script('assets/plugins/respond.min.js') }}
{{ HTML::script('assets/plugins/excanvas.min.js') }}
<![endif]-->
{{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
{{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{ HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}
{{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/plugins/jquery.blockui.min.js') }}
{{ HTML::script('assets/plugins/jquery.cokie.min.js') }}
{{ HTML::script('assets/plugins/uniform/jquery.uniform.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ HTML::script('assets/plugins/jqvmap/jqvmap/jquery.vmap.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}
{{ HTML::script('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}
{{ HTML::script('assets/plugins/flot/jquery.flot.min.js') }}
{{ HTML::script('assets/plugins/flot/jquery.flot.resize.min.js') }}
{{ HTML::script('assets/plugins/flot/jquery.flot.categories.min.js') }}
{{ HTML::script('assets/plugins/jquery.pulsate.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}
{{ HTML::script('assets/plugins/gritter/js/jquery.gritter.js') }}
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
{{ HTML::script('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}
{{ HTML::script('assets/plugins/jquery.sparkline.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('assets/scripts/core/app.js') }}
{{ HTML::script('assets/scripts/custom/index.js') }}
{{ HTML::script('assets/scripts/custom/tasks.js') }}
<!-- END PAGE LEVEL SCRIPTS -->
{{ HTML::script('bower_components/webcomponentsjs/webcomponents.min.js') }}
{{ HTML::script('assets/scripts/custom/custom.js') }}
<link rel="import" href="{{ URL::asset('bower_components/polymer/custom-els/form-item/index.html') }}">
<link rel="import" href="{{ URL::asset('bower_components/polymer/custom-els/paper-hr/paper-hr.html') }}">
<script>
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
        Index.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>