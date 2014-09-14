<h3 class="page-header page-header-top">
    <i class="gi gi-certificate"></i> <a style="text-decoration: none">Produk Baru</a>
</h3>

<label> Selected Category : <?php echo Modules::run('product/category_tree', $selected_category); ?></label>
<form method="post" id="form-new-product" class="form-horizontal form-box">
    <input type="hidden" id="val_product_category" name="val_product_category" value="<?php echo $selected_category; ?>">
    <!-- Product Information -->
    <h4 class="page-header">
        Informasi Produk
    </h4>
    <div class="form-box-content" id="product-information">
    </div>
    <!-- Product Detail -->
    <h4 class="page-header">
        Detail Produk
    </h4>
    <div class="form-box-content" id="product-detail">
    </div>

    <!-- Trade Information -->
    <h4 class="page-header">
        Informasi Niaga
    </h4>
    <div class="form-box-content" id="trade-information">
    </div>

    <!-- Detail Description -->
    <h4 class="page-header">
        Gambaran Detail
    </h4>
    <div class="form-group">
        <div class="col-md-12">
            <textarea id="val_detail_product_description" name="val_detail_product_description" class="ckeditor" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group">
        <!-- product group type nya select auto complete or anything-->
        <label class="control-label col-md-3" for="">
            Grup Produk
        </label>
        <div class="col-md-8">
            <input id="val_product_group" name="val_product_group" type="text">
        </div>
    </div>
    <div class="page-header">
        <center>
            <button type="submit" class="btn btn-warning">Submit
            </button>
        </center>
    </div>
</form>

<script src="<?php echo base_url(); ?>asset/style/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/ajaxfileupload.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#product-information').load("<?php echo site_url('product/form_informasi_product') ?>");
        $('#product-detail').load("<?php echo site_url('product/form_product_detail') ?>");
        $('#trade-information').load("<?php echo site_url('product/form_trade_info') ?>");

    });

    $('#form-new-product').validate({
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
                required: 'Please enter The Product Name'
            },
            val_product_keyword: {
                required: 'Please enter The Product Key'
            },
            val_product_listing: {
                required: 'Please enter Product Listing'
            },
            val_product_photo: {
                required: 'Please enter Product Photo'
            }
        },
        submitHandler: function(form) {
            var file = $('#userfile').val();

            $.ajaxFileUpload({
                url: '<?php echo site_url('product/upload_file') ?>',
                secureuri: false,
                fileElementId: 'userfile',
                dataType: 'json',
                data: {file: file},
                success: function(data, status) {
                    if (data.msg === '1') {
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo site_url('product/submit_product') ?>" + "/" + data.fileid,
                            data: $(form).serialize(),
                            success: function(data) {
                                var json = JSON.parse(data);
                                alert('success');
                                if(json.id_company === ""){
                                    //redirect to company detail
                                }
                            },
                            error: function(data, status, e) {
                                alert('error');
                            }
                        });

                    } else {
                        alert('Gagal');
                        $('#loading').hide();
                    }


                },
                error: function() {

                }
            });
            return false;
        }
    });
    jQuery.extend({
        handleError: function(s, xhr, status, e) {
            // If a local callback was specified, fire it
            if (s.error)
                s.error(xhr, status, e);
            // If we have some XML response text (e.g. from an AJAX call) then log it in the console
            else if (xhr.responseText)
                console.log(xhr.responseText);
        }
    });
</script>



