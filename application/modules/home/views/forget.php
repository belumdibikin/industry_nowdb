<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
    <head>        
        <?php echo $this->load->view('head'); ?>
    </head>

    <body class="login">
        <!-- Login Container -->
        <div id="login-container">
            <!-- Logo -->
            <div id="login-logo">
                <img src="<?php echo base_url() ?>asset/style/img/NowDBLogo.PNG" alt="logo">
            </div>

            <hr/>

            <!-- Login Form -->
            <form id="form-signin" class="form-horizontal">
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="text" id="email" name="email" placeholder="Related Email Account" class="form-control">
                        <span class="input-group-addon"><i class="icon-envelope icon-fixed-width"></i></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="btn-group btn-group-sm pull-right">
                        <button type="submit" class="btn btn-send"><i class="icon-mail-forward"></i> Send</button>
                    </div>
                    <div class="btn-group btn-group-sm pull-left">
                        <button type="button" id="btn-signup" class="btn btn-primary"><i class="icon-magic"></i> Sign Up</button>
                        <button type="button" id="btn-login" class="btn btn-success"><i class="icon-arrow-right"></i> Log In</button>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->

        </div>
        <!-- END Login Container -->
        <?php echo $this->load->view('js'); ?>
        <script type="text/javascript">
            $('#btn-login').click(function() {
                window.location.href = "<?php echo site_url(); ?>";
            });
            $('#btn-signup').click(function() {
                window.location.href = "<?php echo site_url('home/signup'); ?>";
            });
        </script>
    </body>
</html>