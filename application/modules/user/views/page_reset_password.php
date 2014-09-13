<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>
    <head>
        <?php echo $this->load->view('head'); ?>
    </head>
    <body>
        <!-- page container -->
        <div id="page-container">
            <!-- header -->
            <header>

            </header>
        </div>
        <!-- Inner Container -->
        <div id="inner-container">
            <div class="container" id="page-content">
                <form novalidate="novalidate" id="form-reset-password" action="javascript:void(0)" method="post" class="form-horizontal form-box remove-margin">
                    <!-- Form Header -->
                    <h4 class="form-box-header">Reset Password</h4>

                    <div class="form-box-content">
                        <!-- Password -->
                        <div class="form-group">
                            <label class="control-label col-md-2" for="val_password">Password *</label>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                                    <input id="val_password" name="val_password" class="form-control" type="password">
                                </div>
                            </div>
                        </div>
                        <!-- re-type password -->
                        <div class="form-group">
                            <label class="control-label col-md-2" for="val_confirm_password">Retype Password *</label>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                                    <input id="val_confirm_password" name="val_confirm_password" class="form-control" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Form Content -->
                </form>
                <!-- END Form Validation -->
            </div>
        </div>
        <div id="page-footer">
            <footer>
            </footer>
        </div>
        <?php echo $this->load->view('js'); ?>
        <script type="text/javascript">
            $(function() {
                $('#form-reset-password').validate({
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
                        val_password: {
                            required: true,
                            minlength: 5
                        },
                        val_confirm_password: {
                            required: true,
                            minlength: 5,
                            equalTo: '#val_password'
                        }
                    },
                    messages: {
                        val_password: {
                            required: 'Please provide a password',
                            minlength: 'You password must be at least 5 characters long',
                        },
                        val_confirm_password: {
                            required: 'Please provide a password',
                            minlength: 'You password must be at least 5 characters long',
                            equalTo: 'Please enter the same password as above'
                        }
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo site_url('user/reset_password') ?>",
                            data: $(form).serialize(),
                            success: function(data) {
                                var json = JSON.parse(data);
                                console.log(json.message);

                                if (json.message === '1') {
                                    $('#page-content').load("<?php echo site_url('user/page_send_verification') ?>");

                                } else if (json.message === '2') {
                                    $('#page-content').load("<?php echo site_url('user/page_already_activated') ?>");

                                } else if (json.message === '3') {
                                    $('#page-content').load("<?php echo site_url('user/page_send_verification') ?>");
                                }
                            },
                            error: function(data, status, e) {
                                alert('error');
                            }
                        });
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>