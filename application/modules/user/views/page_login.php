<!-- form login -->
<div class="row">
    <div class="col-md-7">
    </div>
    <div class="col-md-4">
        <!--<h3>Login</h3>-->
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
        <form id="form-login" action="page_reset_password.php" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <input id="val_login_email" name="val_login_email" placeholder="Email.." class="form-control" type="text">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <input id="val_login_password" name="val_login_password" placeholder="Password.." class="form-control" type="password">
                        <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-md-6">
                        <!--<label data-original-title="Remember me" id="" title=""><input type="checkbox" value="1"><span> Keep me login</span></label>-->
                        <button type="button" class="btn btn-primary" id="btn-signup"><i class="fa fa-arrow-circle-down"></i> SignUp!</button>
                    </div>
                    <div class="btn-group btn-group-sm pull-right">
                        <button data-original-title="Forgot pass?" type="button" id="btn-forgot-pass" class="btn btn-warning" data-toggle="tooltip" title=""><i class="fa fa-lock"></i></button>
                        <button type="submit" class="btn btn-success" id="btn-login"><i class="fa fa-arrow-right"></i> Login</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- end form login -->
    </div>
</div>
<script type="text/javascript">
    
    $('#btn-forgot-pass').click(function(){
       $('#page-content').load("<?php echo site_url('user/page_forgot_password')?>"); 
    });
    $('#btn-signup').click(function() {
        $('#page-content').load("<?php echo site_url('user/page_registration') ?>");
    });
    $('#form-login').validate({
        errorClass: 'help-block',
        errorElement: 'span',
        errorPlacement: function(error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function(e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function(e) {
            //You can use the following if you would like to highlight with green color the input after successful validation!
            e.closest('.form-group').removeClass('has-success has-error'); //e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
            e.closest('.help-block').remove();
            e.closest('.help-inline').remove();
        },
        rules: {
            val_login_email: {
                required: true,
                email: true
            },
            val_login_password: {
                required: true
            }
        },
        message: {
            val_login_email: {
                requied: 'Please enter a valid email'
            },
            val_login_password: {
                required: 'Please provide a password'
            }
        },
        submitHandler: function(form) {
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('user/login') ?>",
                data: $(form).serialize(),
                success: function(data) {
                    $('#load').hide();
                    if (data !== '') {
                        window.location = "<?php echo site_url('dashboard');?>";
                    } else {
                        $('#load').hide();
                        $('#log-fail').show();
                    }
                },
                error: function() {
                    $('#load').hide();
                    $('#loag-connect').show();
                }
            });
            return false;
        }
    });
</script>