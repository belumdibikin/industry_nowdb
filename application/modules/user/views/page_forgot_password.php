<form novalidate="novalidate" id="form-reset-password" action="javascript:void(0)" method="post" class="form-horizontal form-box remove-margin">
    <!-- Form Header -->
    <h4 class="form-box-header">Masukkan Email anda</h4>

    <div class="form-box-content">
        <!-- Email -->
        <div class="form-group">
            <label class="control-label col-md-2" for="val_email">Email *</label>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                    <input id="val_email" name="val_email" class="form-control" type="text">
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
                val_email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                val_email: {
                    required: 'Please provide a password',
                    
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('user/send_reset_password') ?>",
                    data: $(form).serialize(),
                    success: function(data) {
                        //var json = JSON.parse(data[0]);
                        console.log(data);

                        if (data === '1') {
                            //$('#page-content').load("<?php echo site_url('user/page_send_verification') ?>");
                            //masuk email tidak terkirim
                        } else if (data === '2') {
                            $('#page-content').load("<?php echo site_url('user/page_already_activated') ?>");
                            //email terkirim
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