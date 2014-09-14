<div class="form-group">
    <label class="control-label col-md-3" for="product-keywords">Masukan Kata kunci produk</label>
    <div class="col-md-6">
        <input type="text" id="product-keywords" name="product-keywords" class="form-control input-sm">
    </div>
    <button class="btn btn-info"> search </button>
</div>
<div class="form-group">
    <div class="col-md-3" id="div-select-category-1">
        <select id="select-category-1" size="10" name="select-category-1" class="form-control" multiple>
            <?php echo modules::run('product/category', 0, 0) ?>
        </select>
    </div>
    <div class="col-md-3" style="display: none" id="div-select-category-2">
        <select id="select-category-2" size="10" name="select-category-2" class="form-control" multiple>

        </select>
    </div>
    <div class="col-md-3" style="display: none" id="div-select-category-3">
        <select id="select-category-3" size="10" name="select-category-3" class="form-control col-md-3" multiple>

        </select>
    </div>
    <div class="col-md-3" style="display: none" id="div-select-category-4">
        <select id="select-category-4" size="10" name="select-category-4" class="form-control col-md-3" multiple>

        </select>
    </div>
    <div class="col-md-12" id="category_path">
        <div class="col-sm-1"></div>
        <span class="control-label"><b>selected category : </b></span>
        <span class="control-label" id="category_path_1"></span><span id="arrow-1" style="display: none">  >>  </span>
        <span class="control-label" id="category_path_2"></span><span id="arrow-2" style="display: none">  >>  </span>
        <span class="control-label" id="category_path_3"></span><span id="arrow-3" style="display: none">  >>  </span>
        <span class="control-label" id="category_path_4"></span>
    </div>
</div>   
<div class="form-group col-md-12">
    <center><button class="btn btn-warning" id="submit-category"> saya setuju </button></center>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var selected_category;
        /*
         * on change option Kategori 1
         */
        $('#select-category-1').change(function() {
            //$('#loading').show();
            $('#div-select-category-2').hide();
            $('#div-select-category-3').hide();
            $('#div-select-category-4').hide();

            $('#arrow-1').hide();
            $('#arrow-2').hide();
            $('#arrow-3').hide();
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('product/category_parent/select-category-1') ?>",
                data: $('#select-category-1').serialize(),
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#select-category-2').load("<?php echo site_url('product/category') ?>" + "/1/" + json.parent);
                    $('#category_path_1').text(json.name);

                    /*put selected category*/
                    selected_category = json.parent;
                    if (json.child !== '') {
                        $('#div-select-category-2').show();
                        $('#arrow-1').show();
                        $('#category_path_2').text('');
                    }

                },
                error: function(data, status, e) {

                }
            });

        });

        /*
         * on change option Kategori 2
         */
        $('#select-category-2').change(function() {
            $('#div-select-category-3').hide();
            $('#div-select-category-4').hide();

            $('#arrow-2').hide();
            $('#arrow-3').hide();
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('product/category_parent/select-category-2') ?>",
                data: $('#select-category-2').serialize(),
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#select-category-3').load("<?php echo site_url('product/category') ?>" + "/2/" + json.parent);
                    $('#category_path_2').text(json.name);

                    /*put selected category*/
                    selected_category = json.parent;
                    if (json.child !== '') {
                        $('#div-select-category-3').show();
                        $('#arrow-2').show();
                        $('#category_path_3').text('');
                    }

                },
                error: function(data, status, e) {

                }
            });

        });

        /*
         * on change option Kategori 3
         */
        $('#select-category-3').change(function() {
            $('#div-select-category-4').hide();

            $('#arrow-3').hide();
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('product/category_parent/select-category-3') ?>",
                data: $('#select-category-3').serialize(),
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#select-category-4').load("<?php echo site_url('product/category') ?>" + "/3/" + json.parent);
                    $('#category_path_3').text(json.name);

                    /*put selected category*/
                    selected_category = json.parent;
                    if (json.child !== '') {
                        $('#div-select-category-4').show();
                        $('#arrow-3').show();
                        $('#category_path_4').text('');
                    }

                },
                error: function(data, status, e) {

                }
            });

        });

        $('#select-category-4').change(function() {
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('product/category_parent/select-category-4') ?>",
                data: $('#select-category-4').serialize(),
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#category_path_4').text(json.name);
                    /*put selected category*/
                    selected_category = json.parent;
                },
                error: function(data, status, e) {

                }
            });
        });


        $('#submit-category').click(function() {
            //console.log("masup dong : " + selected_category);
            $('#page-content').load("<?php echo site_url('product/index_addProductInfo'); ?>" +"/"+ selected_category);
        });
    });
</script>