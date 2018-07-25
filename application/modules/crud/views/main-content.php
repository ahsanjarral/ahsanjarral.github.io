<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--<div class="wrapper">-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<title>AdminLTE 2 | Dashboard</title>-->
        <title>KCS | <?php echo (isset($page_title) ? $page_title : 'Home'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!--<body class="hold-transition skin-blue sidebar-mini fixed">-->
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url(); ?>dashboard" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>AjS</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Aj</b>Solutions</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!--<nav class="navbar navbar-fixed-top">-->
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </nav>
            </header>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="treeview <?php echo (($this->uri->segment(1) == 'crud') ? 'active' : ''); ?>">
                            <a href="#">
                                <i class="fa fa-product-hunt"></i>
                                <span>Crud</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php echo (empty($this->uri->segment(2)) ? 'active' : ''); ?>">
                                    <a href="<?php echo base_url("crud"); ?>"><i class="fa fa-list"></i> List</a></li>
                                <li class="<?php echo (($this->uri->segment(2) == 'add-new') ? 'active' : ''); ?>">
                                    <a href="<?php echo base_url("crud/add-new"); ?>"><i class="fa fa-plus"></i> Add</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="margin-bottom: 50px">

                <section class="content-header">
                    <h1>
                        <?php echo (!empty($view_title) ? $view_title : ''); ?>
                        <!--Dashboard-->
                        <small><?php echo (!empty($view_subtitle) ? $view_subtitle : ''); ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <!--Main content--> 
                <section class="content">

                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="<?php echo $this->session->flashdata('type') ?> alert" id="flash_message">
                            <?php echo $this->session->flashdata('message'); ?>
                            <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                                &times;
                            </button>
                        </div>
                    <?php endif; ?>
                    <!--</div>-->
                    <?php
                    if (isset($content)) {
                        $this->load->view($content);
                    }
                    ?>
                </section>

            </div>
            <!-- /.content-wrapper -->
            <!--<footer class="main-footer">-->
            <footer class="main-footer navbar-fixed-bottom">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 0.1.0
                </div>
                <strong>Copyright &copy; 2018 <a href="#">Aj Solutions</a>.</strong> All rights
                reserved.
            </footer>



        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

    </body>
</html>
<!--</div>-->
<!-- ./wrapper -->