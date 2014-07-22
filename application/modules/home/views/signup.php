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

            <div class="alert alert-success" id="reg-success" style="display: none;">
                <strong>Success!</strong> User register completed.
            </div>

            <div class="alert alert-warning" id="reg-taken" style="display: none;">
                <strong>Ouch!</strong> Username/Email already used.
            </div>

            <div class="alert alert-warning" id="reg-retype" style="display: none;">
                <strong>Ouch!</strong> Retype password.
            </div>

            <div class="alert alert-warning" id="reg-nomatch" style="display: none;">
                <strong>Ouch!</strong> Not the same with password.
            </div>

            <div class="alert alert-info" id="reg-fill" style="display: none;">
                <strong>Ouch!</strong> Please fill the form.
            </div>

            <div class="alert alert-info" id="reg-repas" style="display: none;">
                <strong>Ouch!</strong> Please fill the form.
            </div>

            <div class="alert alert-info" id="loading" style="display: none;">
                <strong>Loading!</strong> Please wait.
            </div>

            <div class="alert alert-danger" id="reg-connection" style="display: none;">
                <strong>Connection Error!</strong> Check your network.
            </div>

            <!-- Login Form -->
            <form id="form-signup" class="form-horizontal">
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                        <span class="input-group-addon"><i class="icon-envelope icon-fixed-width"></i></span>
                    </div>
                </div>
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
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="password" id="re_password" name="re_password" placeholder="Retype Password" class="form-control">
                        <span class="input-group-addon"><i class="icon-asterisk icon-fixed-width"></i></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="btn-group btn-group-sm pull-right">
                        <!--<button type="button" id="btn-forget" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="icon-lock"></i></button>-->
                        <button type="submit" class="btn btn-success"><i class="icon-magick"></i> Sign Up</button>
                    </div>
                    <div class="btn-group btn-group-sm pull-left">
                        <button type="button" id="btn-login" class="btn btn-primary"><i class="icon-arrow-right"></i> Log In</button>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->

        </div>
        <!-- END Login Container -->
        <?php echo $this->load->view('js'); ?>
        <script type="text/javascript">
            $('#form-signup').submit(function() {
                $('.alert').hide();
                $('#loading').show();

                var username = $('#username').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var re_password = $('#re_password').val();

                if (username == '' || password == '' || email == '') {
                    $('#loading').hide();
                    $('#reg-fill').show();
                    return false;
                } else if (re_password == '') {
                    $('#loading').hide();
                    $('#reg-repas').show();
                    return false;
                } else if (re_password != password) {
                    $('#loading').hide();
                    $('#reg-nomatch').show();
                    return false;
                } else {
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo site_url('home/regnow') ?>",
                        data: $(this).serialize(),
                        success: function(data, status)
                        {
                            $('#loading').hide();
                            if (data == 1) {
                                $('#loading').hide();
                                $('#reg-success').show();
                            } else {
                                $('#loading').hide();
                                $('#reg-taken').show();
                            }
                        },
                        error: function(data, status, e)
                        {
                            $('#loading').hide();
                            $('#reg-connection').show();
                        }
                    });
                    return false;
                }
            });
            $('#btn-login').click(function() {
                window.location.href = "<?php echo site_url(); ?>";
            });
            $('#btn-forget').click(function() {
                window.location.href = "<?php echo site_url('home/forget'); ?>";
            });
        </script>
    </body>
</html>