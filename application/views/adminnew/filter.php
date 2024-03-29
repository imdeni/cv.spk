<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title></title>
        

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/bootstrap-datepicker/css/datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/vendor/morris/morris.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets2/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <script src="<?php echo base_url('') ?>assets2/vendor/modernizr/modernizr.js"></script>

    </head>
    <style type="text/css">
        body{
            font-size: 20px;
        }
    </style>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a class="logo" style="font-weight: bold;color: black;">
                        <img src="<?php echo base_url('') ?>assets/img/backgrounds/desa.png" height="35"  /><img src="<?php echo base_url('') ?>assets/img/backgrounds/logopkh.png" height="35"  />
                        Sistem Pendukung Keputusan
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
        
            
                    
            
                    
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="<?php echo base_url('assets/img/backgrounds/icon.png') ?>" alt="Joseph Doe" class="img-circle" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                <span class="name"><?php echo $this->session->userdata('nama'); ; ?></span>
                                <span class="role">administrator</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                
                                <li>
                                    <a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            <p style="color:white;">Menu</p> 
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">



                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru'); ?>">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/profile'); ?>">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            <span>Profile Desa</span>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/kriteria'); ?>">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                            <span>Kriteria</span>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/sub'); ?>">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                            <span>Sub Kriteria</span>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/pengajuan'); ?>">
                                            <i class="fa fa-file" aria-hidden="true"></i>
                                            <span>Data Pengajuan</span>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/hasil'); ?>">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <span>Hasil Perhitungan</span>
                                        </a>
                                    </li>
                                    <li class="nav-active">
                                        <a href="<?php echo base_url('index.php/Admin/baru/filter'); ?>">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <span>Filtering</span>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/laporan'); ?>">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>Laporan</span>
                                        </a>
                                    </li>


                                    <li class="nav">
                                        <a href="<?php echo base_url('index.php/Admin/baru/user'); ?>">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>Data User</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                
                            
                        </div>
                
                    </div>
                
                </aside>
                <!-- end: sidebar -->

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Program Keluarga Harapan Desa Wanamulya Pemalang</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a >
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Edit Kriteria</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>


                    <!-- start: page -->
                    <div class="row">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <section class="panel">
                                
                                    <?php $this->load->view('adminnew/isifilter.php'); ?>
                                
                            </section>
                        </div>
                        
                    

                    
            
        <!-- Vendor -->
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery/jquery.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/flot/jquery.flot.categories.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/raphael/raphael.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/morris/morris.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/gauge/gauge.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/snap-svg/snap.svg.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/liquid-meter/liquid.meter.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/jquery.vmap.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="<?php echo base_url('') ?>assets2/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo base_url('') ?>assets2/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="<?php echo base_url('') ?>assets2/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="<?php echo base_url('') ?>assets2/javascripts/theme.init.js"></script>


        <!-- Examples -->
        <script src="<?php echo base_url('') ?>assets2/javascripts/dashboard/examples.dashboard.js"></script>
    </body>
</html>