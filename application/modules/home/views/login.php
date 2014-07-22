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

            <div class="alert alert-info" id="load" style="display: none;">
                <strong>Loading...</strong> Please wait.
            </div>

            <div class="alert alert-warning" id="log-fill" style="display: none;">
                <strong>Ouch!</strong> Please fill the form.
            </div>

            <div class="alert alert-info" id="log-connect" style="display: none;">
                <strong>Failed!</strong> Check internet.
            </div>

            <div class="alert alert-danger" id="log-fail" style="display: none;">
                <strong>Failed!</strong> Check username or Password.
            </div>
            <!-- Login Form -->
            <form id="form-signin" class="form-horizontal">
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                        <span class="input-group-addon"><i class="icon-user icon-fixed-width"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                        <span class="input-group-addon"><i class="icon-asterisk icon-fixed-width"></i></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="btn-group btn-group-sm pull-right">
                        <!--<button type="button" id="btn-forget" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="icon-lock"></i></button>-->
                        <button type="submit" class="btn btn-success"><i class="icon-arrow-right"></i> Login</button>
                    </div>
                    <div class="btn-group btn-group-sm pull-left">
                        <button type="button" id="btn-signup" class="btn btn-primary"><i class="icon-magic"></i> Sign Up</button>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->

        </div>
        <!-- END Login Container -->
        <?php echo $this->load->view('js'); ?>
        <script type="text/javascript">
            $('#form-signin').submit(function() {
                $('.alert').hide();
                $('#load').show();

                var username = $('#username').val();
                var password = $('#password').val();

                if (username == '' || password == '') {
                    $('#load').hide();
                    $('#log-fill').show();
                    return false;
                } else {
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo site_url('home/login') ?>",
                        data: $(this).serialize(),
                        success: function(data, status)
                        {
                            $('#load').hide();
                            if (data == 1) {
                                location.reload();
                            } else {
                                $('#load').hide();
                                $('#log-fail').show();
                            }
                        },
                        error: function(data, status, e)
                        {
                            $('#load').hide();
                            $('#log-connect').show();
                        }
                    });
                    return false;
                }
            });
            $('#btn-signup').click(function() {
                window.location.href = "<?php echo site_url('home/signup'); ?>";
            });
            $('#btn-forget').click(function() {
                window.location.href = "<?php echo site_url('home/forget'); ?>";
            });
        </script>
    </body>
</html>