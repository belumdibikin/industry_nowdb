<div class="form-group">
    <label class="control-label col-md-3" for="val_product_model_number">
        Nomor Model
    </label>
    <div class="col-md-5">
        <input type="text" id="val_product_model_number" name="val_product_model_number" class="form-control input-sm">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="">
        Nama Merek
    </label>
    <div class="col-md-5">
        <input type="text" id="val_product_brand" name="val_product_brand" class="form-control input-sm">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_product_origin_place">Tempat Asal</label>
    <div class="col-md-6">
        <select onChange="changeLocation('#val_product_origin_place', 'province', this.value)" id="val_product_origin_place_province" name="val_product_origin_place_province" class="form-control">
            <?php echo Modules::run('product/get_province'); ?>
        </select>
    </div>
</div>
<div class="form-group" id="district_div" style="display:none">
    <label class="control-label col-md-3" for="val_product_origin_place"></label>
    <div class="col-md-6">
        <select onChange="changeLocation('#val_product_origin_place', 'district', this.value)" id="val_product_origin_place_district" name="val_product_origin_place_district" class="form-control">
        </select>
    </div>
</div>
<div class="form-group" id="sub_district_div" style="display:none">
    <label class="control-label col-md-3" for="val_product_origin_place"></label>
    <div class="col-md-6">
        <select onChange="changeLocation('#val_product_origin_place', 'subdistrict', this.value)" id="val_product_origin_place_subdistrict" name="val_product_origin_place_subdistrict" class="form-control">
        </select>
    </div>
</div>
<div class="form-group" id="village_div" style="display:none">
    <label class="control-label col-md-3" for="val_product_origin_place"></label>
    <div class="col-md-6">
        <select id="val_product_origin_place_village" name="val_product_origin_place_village" class="form-control">
        </select>
    </div>
</div>
<div class="form-group" id="add-more-detail-product">
    <label class="control-label col-md-3" for="val_more_detail_product">Detail Tambahan</label>
    <!-- more detail -->
    <div class="form-group" id="more-detail">
        <!-- button add -->
        <a href="#" id="add-more-detail" class="col-md-8">
            Tambah
        </a>
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <input type="text" name="val_more_attr[]" placeholder="attribute..">
            <input type="text" name="val_more_attr_value[]" placeholder="value..">
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $("#more-detail");
        var add_button = $("#add-more-detail");

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="col-md-3"></div><div class="col-md-8"><input type="text" name="val_more_attr[]" placeholder="attribute"> <input type="text" name="val_more_attr_value[]" placeholder="value"><a href="#" class="remove_field">Remove</a></div>');
            }
        });
        $(wrapper).on("click", ".remove_field", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });

    function changeLocation(field, sub, parent){
        
        console.log(field +" "+ sub + " " + parent);
        parent = parent.split("#");
        var parent = parent[0];
        
        var child = "";
        if(sub === "province"){
            child = "cl_district";
        }else if(sub === "district"){
            child = "cl_subdistrict";
        }else if(sub === "subdistrict"){
            child = "cl_village";
        }
        
        var field = field;
        
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('product/get_location') ?>",
            data: {parent: parent, child: child},
            success: function(data, status) {
                console.log(data)
                var json = JSON.parse(data);
                var count = 0;
                var inner = "";
                var code = "";
                var value = "";
                
                while(count < json.length){
                    
                    if(sub === "province"){              
                        code = json[count].code_district;
                        value = json[count].value_district;
                    }else if(sub === "district"){
                        code = json[count].code_subdistrict;
                        value = json[count].value_subdistrict;
                    }else if(sub === "subdistrict"){
                        code = json[count].code_village;
                        value = json[count].value_village;
                    }
                    
                    inner += "<option value='" + code + "#" + value + "'>" + value + "</option>";
                    count++;
                }
                
                if(sub === "province"){
                    //$('#district_div').show();
                    $(field + '_district').html(inner);
                    if(inner === "") $('#district_div').hide(300); else $('#district_div').show(300);
                    $(field + '_subdistrict').html();
                    $('#sub_district_div').hide(300);
                    $(field + '_village').html();
                    $('#village_div').hide(300);
                } else if (sub === "district"){
                    
                    $(field + '_subdistrict').html(inner);
                    if(inner === "") $('#sub_district_div').hide(300); else $('#sub_district_div').show(300);
                    $(field + '_village').html();
                    $('#village_div').hide(300);
                } else if (sub === "subdistrict"){
                    if(inner === "") $('#village_div').hide(300); else $('#village_div').show(300);
                    $(field + '_village').html(inner);
                }
            },
            error: function(data, status) {

            }
        });
    }
</script>
