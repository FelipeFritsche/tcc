<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $titulo ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- jQuery custom content scroller -->
        <link href="<?php echo base_url() ?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url() ?>assets/custom.min.css" rel="stylesheet">
        <!-- Glyphicons-->
        <link href="<?php echo base_url() ?>assets/vendors/select2/docs/_sass/vendor/bootstrap/_glyphicons.scss" rel="stylesheet">
    </head>

    <body class="nav-md" heght="100%">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="clearfix"></div>
                        <br />
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i>Meus eventos<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <?php foreach($eventos as $item): ?>
                                            <li><a href="#"><?php echo $item->titulo ?></a></li>
                                            <?php endforeach ?>        
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Atividades <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">General Form</a></li>
                                            <li><a href="form_advanced.html">Advanced Components</a></li>
                                            <li><a href="form_validation.html">Form Validation</a></li>
                                            <li><a href="form_wizards.html">Form Wizard</a></li>
                                            <li><a href="form_upload.html">Form Upload</a></li>
                                            <li><a href="form_buttons.html">Form Buttons</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> Participantes</a>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Tables</a></li>
                                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="chartjs.html">Chart JS</a></li>
                                            <li><a href="chartjs2.html">Chart JS2</a></li>
                                            <li><a href="morisjs.html">Moris JS</a></li>
                                            <li><a href="echarts.html">ECharts</a></li>
                                            <li><a href="other_charts.html">Other Charts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
                <?php $this->load->view('topNavigation'); ?>
                <div class="right_col" role="main">
                    <?php echo $contents ?> 
                </div>
            </div>    
        </div>
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
        <!-- jQuery custom content scroller -->
        <script src="<?php echo base_url() ?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url() ?>/assets/build/js/custom.min.js"></script>
    </body>
</html>
