<!-- Form Validation, Validation Initialization happens at the bottom of the page -->
<form novalidate="novalidate" id="form-registration" action="javascript:void(0)" method="post" class="form-horizontal form-box remove-margin">
    <!-- Form Header -->
    <h4 class="form-box-header">Create New Account</h4>

    <!-- Form Content -->
    <div class="form-box-content">
        <!-- Email -->
        <div class="form-group">
            <label class="control-label col-md-2" for="val_email">Email *</label>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                    <input id="val_email" name="val_email" class="form-control" type="text">
                </div>
            </div>
        </div>
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

        <!-- user firstname -->
        <div class="form-group">
            <label class="control-label col-md-2" for="val_user_firstname">Firstname *</label>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                    <input id="val_user_firstname" name="val_user_firstname" class="form-control" type="text">
                </div>
            </div>
        </div>

        <!-- user lastname -->
        <div class="form-group">
            <label class="control-label col-md-2" for="val_user_lastname">Lastname *</label>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                    <input id="val_user_lastname" name="val_user_lastname" class="form-control" type="text">
                </div>
            </div>
        </div>

        <!-- user type-->
        <div class="form-group">
            <label class="control-label col-md-2" for="val_user_type">User Type</label>
            <div class="col-md-10">
                <div class="radio-group">
                    <label class ="radio-inline" for="val_user_type_buyer">
                        <input id="val_user_type_buyer" name="val_user_type" value="1" type="radio"> Buyer
                    </label>
                    <label class ="radio-inline" for="val_user_type_seller">
                        <input id="val_user_type_seller" name="val_user_type" value="2" type="radio"> Seller
                    </label>
                    <label class ="radio-inline" for="val_user_type_both">
                        <input id="val_user_type_both" name="val_user_type" value="3" type="radio"> Both
                    </label>
                </div>
            </div> 
        </div>

        <!-- terms aggrement-->
        <div class="form-group">
            <label class="control-label col-md-2" for="val_terms">Service Terms *</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <label for="val_terms">
                        <input class="valid" id="val_terms" name="val_terms" value="1" type="checkbox"> I agree
                    </label>
                </div>
            </div> 
        </div>
        <div class="form-group form-actions">
            <div class="col-md-10 col-md-offset-2">
                <button type="reset" class="btn btn-danger"><i class="fa fa-repeat"></i> Reset</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
            </div>
        </div>
    </div>
    <!-- END Form Content -->
</form>
<!-- END Form Validation -->
<script>

    $(function() {
        $('#form-registration').validate({
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
                val_product_name: {
                    required: true
                },
                val_product_keyword: {
                    required: true
                },
                val_product_listing: {
                    required: true
                },
                val_product_photo: {
                    required: true
                }
            },
            messages: {
                val_product_name: {
                    required: 'Please enter the product name'
                },
                val_product_keyword: {
                    required: 'Please enter for product keyword'
                },
                val_product_listing: {
                    required: 'Please enter for product listing'
                },
                val_product_photo: {
                    required: 'Please upload the Product Photo'
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('style/submit_product') ?>",
                    data: $(form).serialize(),
                    success: function(data) {
                        alert('success')
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