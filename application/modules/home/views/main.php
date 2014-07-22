<!DOCTYPE html>
<html>
    <head>        
        <?php echo $this->load->view('head'); ?>
    </head>
    <body class="fixed">
        <!-- Page Container -->
        <div id="page-container">

            <!-- Header -->
            <header class="navbar navbar-inverse">

                <!-- Mobile Navigation, Shows up  on smaller screens -->
                <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
                    <li class="divider-vertical"></li>
                    <li>
                        <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="icon-reorder"></i>
                        </a>
                    </li>
                </ul>

                <!-- Logo -->
                <a href="javascript:void(0)" class="navbar-brand" style="color: white;">
                    <img src="<?php echo base_url(); ?>asset/style/img/favicon.png" alt="logo" height="25">
                </a>

                <!--System Menu-->
                <ul id="widgets" class="navbar-nav-custom">
                    <li class="divider-vertical"></li>
                    <li>
                        <a id="btn-header-project" href="<?php echo site_url() ?>">
                            <i class="icon-tasks"></i> My Project
                            <span class="badge badge-warning display-none"></span>
                        </a>                        
                    </li>
                    <!--                    
                    <li class="divider-vertical"></li>
                    <li>
                        <a id="btn-header-setting" href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gears"></i> Setting
                            <span class="badge badge-warning display-none"></span>
                        </a>                        
                    </li>
                    -->
                    <li class="divider-vertical"></li>
                    <li>
                        <a id="btn-header-docs" href="javascript:void(0)">
                            <i class="icon-file"></i> Documentation
                            <span class="badge badge-warning display-none"></span>
                        </a>                        
                    </li>
                    <!--                    
                    <li class="divider-vertical"></li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="icon-list-ol"></i> Tutorial
                        </a>
                    </li>
                    -->
                </ul>

                <!--Right Header Menu-->
                <ul id="widgets" class="navbar-nav-custom pull-right">
                    <li class="divider-vertical"></li>
                    <li id="rss-widget" class="dropdown dropdown-left-responsive">
                        <a id="btn-detail-profile" href="<?php echo site_url('home/logout'); ?>">
                            <i class="icon-signout"></i> Logout
                            <span class="badge badge-warning display-none"></span>
                        </a>                        
                    </li>
                </ul>

                <!-- Loading Indicator -->
                <div id="loading" class="pull-right" style="padding-right: 10px;"><i class="icon-spin icon-asterisk icon-1x" style="color: white;"></i></div>
            </header>

            <!-- Inner Container -->
            <div id="inner-container">

                <!-- Sidebar -->
                <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse"></aside>

                <!-- Page Content -->
                <div id="page-content" style="min-height: 580px;"></div>

                <!-- Footer -->
                <footer><?php echo date('Y'); ?> &COPY; NowDB - Indonesian Cloud Leading Services</footer>
            </div>

        </div>

        <?php echo $this->load->view('js'); ?>
        <script type="text/javascript">
            $('#loading').show();
            //Sidebar
            $('#page-sidebar').load("<?php echo site_url('home/sidebar'); ?>", function() {
                $('#page-content').load("<?php echo site_url('project/main'); ?>", function() {
                    $('#trafic-today').load("<?php echo site_url('monitoring/trafic_today') ?>", function() {
                        $('#trafic-overview').load("<?php echo site_url('monitoring/trafic_overview_week') ?>", function() {
                            $('#loading').hide();
                        });
                    });
                });
            });
            //Main Project
            $('a#btn-header-project').click(function() {
                $('#loading').show();
                $('#page-sidebar').load("<?php echo site_url('home/sidebar'); ?>", function() {
                    $('#page-content').load("<?php echo site_url('project/main'); ?>", function() {
                        $('#trafic-today').load("<?php echo site_url('monitoring/trafic_today') ?>", function() {
                            $('#trafic-overview').load("<?php echo site_url('monitoring/trafic_overview_week') ?>", function() {
                                $('#loading').hide();
                            });
                        });
                    });
                });
                return false;
            });
            //Documentation
            $('a#btn-header-docs').click(function() {
                $('#loading').show();
                $('#page-content').load("<?php echo site_url('docs/main'); ?>");
                $('#page-sidebar').load("<?php echo site_url('docs/sidebar'); ?>", function() {
                    $('#loading').hide();
                });
                return false;
            });
        </script>
    </body>
</html>