<?php
    echo $company_name;
?>

<!DOCTYPE html>
<h3 class="page-header page-header-top">
    <i class="fa fa-info-circle"></i> <a style="text-decoration: none">Informasi Perusahaan</a>
</h3>
<br/>
<form method="post" name="form_company" id="form_company" class="form-horizontal form-box" onsubmit="return false;">
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_name">Nama Perusahaan</label>
            <div class="col-md-6">
                <input type="text" id="company_name" name="company_name" class="form-control input-sm" value="<?=$company_name?>">
                <span class="help-block">Silahkan mengisi nama perusahaan anda dengan lengkap</span>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_location_registration">Lokasi Pendaftaran</label>
            <div class="col-md-4">
                <select onChange="changeLocation('#company_location_registration', 'province', this.value)" name="company_location_registration_province" id="company_location_registration_province" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_location_registration"></label>
            <div class="col-md-4">
                <select onChange="changeLocation('#company_location_registration', 'district', this.value)" name="company_location_registration_district" id="company_location_registration_district" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_location_registration"></label>
            <div class="col-md-4">
                <select onChange="changeLocation('#company_location_registration', 'subdistrict', this.value)" name="company_location_registration_subdistrict" id="company_location_registration_subdistrict" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_location_registration"></label>
            <div class="col-md-4">
                <select onChange="changeVillage('#company_location_registration')" name="company_location_registration_village" id="company_location_registration_village" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_operational_street">Alamat Perusahaan</label>
            <label class="control-label col-md-2" for="company_operational_street"><span class="help-block">Jalan</span></label>
            <div class="col-md-6">
                <textarea class="form-control" name="company_operational_street_street" id="company_operational_street_street" style="resize: vertical;"></textarea>
                <span class="help-block">Silahkan mengisi alamat perusahaan anda. Contoh, meliputi nama & nomor jalan dan nomor bangunan</span>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_operational_street"> </label>
            <label class="control-label col-md-2" for="company_operational_street"><span class="help-block">Provinsi</span></label>
            <div class="col-md-4">
                <select onChange="changeLocation('#company_operational_street', 'province', this.value)" name="company_operational_street_province" id="company_operational_street_province" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_operational_street"> </label>
            <label class="control-label col-md-2" for="company_operational_street"><span class="help-block">Kota</span></label>
            <div class="col-md-4">
                <select onChange="changeLocation('#company_operational_street', 'district', this.value)" name="company_operational_street_district" id="company_operational_street_district" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_operational_street"> </label>
            <label class="control-label col-md-2" for="company_operational_street"><span class="help-block">Kecamatan</span></label>
            <div class="col-md-4">
                <select onChange="changeLocation('#company_operational_street', 'subdistrict', this.value)" name="company_operational_street_subdistrict" id="company_operational_street_subdistrict" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_operational_street"> </label>
            <label class="control-label col-md-2" for="company_operational_street"><span class="help-block">Kelurahan</span></label>
            <div class="col-md-4">
                <select onChange="changeVillage('#company_operational_street')" name="company_operational_street_village" id="company_operational_street_village" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_operational_street"> </label>
            <label class="control-label col-md-2" for="company_operational_street"><span class="help-block">Kode Pos</span></label>
            <div class="col-md-3">
                <input type="text" id="company_operational_street_postal" name="company_operational_street_postal" class="form-control input-sm">
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_product_main">Produk Utama</label>
            <div class="col-md-2">
                <input type="text" id="company_product_main_1" name="company_product_main_1" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_main_2" name="company_product_main_2" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_main_3" name="company_product_main_3" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_main_4" name="company_product_main_4" class="form-control input-sm">
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_product_other">Produk Lainnya</label>
            <div class="col-md-2">
                <input type="text" id="company_product_other_1" name="company_product_other_1" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_other_2" name="company_product_other_2" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_other_3" name="company_product_other_3" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_other_4" name="company_product_other_4" class="form-control input-sm">
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_product_other"> </label>
            <div class="col-md-2">
                <input type="text" id="company_product_other_5" name="company_product_other_5" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_other_6" name="company_product_other_6" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_other_7" name="company_product_other_7" class="form-control input-sm">
            </div>
            <div class="col-md-2">
                <input type="text" id="company_product_other_8" name="company_product_other_8" class="form-control input-sm">
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_year_registered">Tahun Berdiri</label>
            <div class="col-md-4">
                <select name="company_year_registered" id="company_year_registered" class="form-control">
                    <option>-- Pilih --</option>
                    <?php
                    for ($_year = 2014; $_year > 1945; $_year--) {
                        ?>
                        <option value="<?= $_year; ?>"><?= $_year; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_employee_total">Jumlah Karyawan</label>
            <div class="col-md-4">
                <select name="company_employee_total" id="company_employee_total" class="form-control">
                    <option>-- Pilih --</option>
                    <option>Dibawah 5 Karyawan</option>
                    <option>5 - 10 Karyawan</option>
                    <option>11 - 50 Karyawan</option>
                    <option>51 - 100 Karyawan</option>
                    <option>101 - 200 Karyawan</option>
                    <option>201 - 300 Karyawan</option>
                    <option>301 - 500 Karyawan</option>
                    <option>501 - 1000 Karyawan</option>
                    <option>Diatas 1000 Karyawan</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_website">Url Website Perusahaan</label>
            <div class="col-md-5" id="input_baru">
                <input type="text" id="company_website_1" name="company_website_1" class="form-control input-sm" value="http://">
            </div>
            <button class="btn btn-primary" id="btn_plus_1" onclick="show1()"><i class="fa fa-plus-square"></i></button>
            <button class="btn btn-primary" id="btn_minus_1" style="display:none;" onclick="hide1()"><i class="fa fa-minus-square"></i></button>
        </div>
    </div>
    <div class="form-box-content" id="url_2" style="display:none;">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_website"> </label>
            <div class="col-md-5" id="input_baru">
                <input type="text" id="company_website_2" name="company_website_2" class="form-control input-sm" value="http://">
            </div>
            <button class="btn btn-primary" id="btn_plus_2" onclick="show2()"><i class="fa fa-plus-square"></i></button>
            <button class="btn btn-primary" id="btn_minus_2" onclick="hide2()"><i class="fa fa-minus-square"></i></button>
        </div>
    </div>
    <div class="form-box-content" id="url_3" style="display:none;">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_website"> </label>
            <div class="col-md-5" id="input_baru">
                <input type="text" id="company_website_3" name="company_website_3" class="form-control input-sm" value="http://">
            </div>
            <button class="btn btn-primary" id="btn_minus_3" onclick="hide3()"><i class="fa fa-minus-square"></i></button>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_owner">Pemilik Legal</label>
            <div class="col-md-4">
                <input type="text" id="company_owner" name="company_owner" class="form-control input-sm">
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_size_office">Ukuran Kantor</label>
            <div class="col-md-4">
                <select name="company_size_office" id="company_size_office" class="form-control">
                    <option>-- Pilih --</option>
                    <option>Kisaran 100 meter persegi</option>
                    <option>101 - 500 meter persegi</option>
                    <option>501 - 1000 meter persegi</option>
                    <option>1001 - 2000 meter persegi</option>
                    <option>Diatas 2000 meter persegi</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="company_advantages">Kelebihan Perusahaan</label>
            <div class="col-md-6">
                <textarea name="company_advantages" id="company_advantages" class="form-control" style="resize: vertical;"></textarea>
                <span class="help-block">Contoh : "Perusahaan kami memiliki sepuluh tahun pengalaman dalam desain dan produksi"</span>
            </div>
        </div>
    </div>
    <div class="form-box-content">
        <div class="form-group form-actions">
            <div class="col-md-10 col-md-offset-2">
                <button class="btn btn-success" type="submit" onclick="clickSave()"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Simpan</button>
            </div>
        </div>
    </div>

</form>
<script type="text/javascript">
    function addOn() {
        $('#btn_plus').load("<?php echo site_url('company/btn_minus'); ?>");
        console.log("Masuk");
        // $('#input_baru').append("<input type='text' id='input_url' name='company_website' class='form-control input-sm' value='http://''>");
        // $('#input_baru').append("<button class='btn btn-primary' id='btn_plus' onClick='addOn()'><i class='fa fa-plus-square'></i></button>");  
    }

    $.ajax({
        type: "POST",
        url: "<?php echo site_url('dashboard/getProvince'); ?>",
        success: function(data, status) {
            var _json = JSON.parse(data);
            var count = 0;
            var inner = "";

            while (count < _json.length)
            {
                inner += "<option value='" + _json[count].code_province + "#" + _json[count].value_province + "'>" + _json[count].value_province + "</option>";
                count++;
            }
            $('#company_location_registration_province').html(inner);
            $('#company_operational_street_province').html(inner);
        },
        error: function(data, status) {
        }
    });

    function changeLocation(_field, _sub, _parent)
    {
        _parent = _parent.split("#");
        var _parent = _parent[0];

        var _down = "";
        if (_sub == "province")
        {
            _down = "cl_district";
        } else if (_sub == "district")
        {
            _down = "cl_subdistrict";
        } else if (_sub == "subdistrict")
        {
            _down = "cl_village";
        }
        var _field = _field;

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('dashboard/getDown'); ?>",
            data: {parent: _parent, down: _down},
            success: function(data, status) {
                var _json = JSON.parse(data);
                var count = 0;
                var inner = "";
                var _code = "";
                var _value = "";

                while (count < _json.length)
                {
                    if (_sub == "province")
                    {
                        _code = _json[count].code_district;
                        _value = _json[count].value_district;
                    } else if (_sub == "district")
                    {
                        _code = _json[count].code_subdistrict;
                        _value = _json[count].value_subdistrict;
                    } else if (_sub == "subdistrict")
                    {
                        _code = _json[count].code_village;
                        _value = _json[count].value_village;
                    }
                    inner += "<option value='" + _code + "#" + _value + "'>" + _value + "</option>";
                    count++;
                }

                if (_sub == "province")
                {
                    $(_field + '_district').html(inner);
                    $(_field + '_subdistrict').html();
                    $(_field + '_village').html();
                } else if (_sub == "district")
                {
                    $(_field + '_subdistrict').html(inner);
                    $(_field + '_village').html();
                } else if (_sub == "subdistrict")
                {
                    $(_field + '_village').html(inner);
                }
            },
            error: function(data, status) {
            }
        });
    }

    function changeVillage(_field)
    {
//        var _province = $(_field+'_province').val().split("#");
//        var _district = $(_field+'_district').val().split("#");
//        var _sub = $(_field+'subdistrict').val().split("#");
//        var _village = $(_field+'_village').val().split("#");
//        var location = _province[1] + "#" + _district[1] + "#" + _sub[1] + "#" + _village[1];
//        console.log(location);
    }

    function clickSave()
    {
        if ($('#form_company').valid())
        {
            var dataSend = $('#form_company').serialize();
            console.log(dataSend);
            $('#loading').show();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('company/inputCompanyDetail'); ?>",
                data: dataSend,
                success: function(data, status) {
                    console.log(data);
                    $('#loading').hide();
                },
                error: function(data, status) {
                    $('#loading').hide();
                }
            })

            return false;
        }
    }

    function show1() {
        $("#url_2").show(300);
        $("#btn_plus_1").hide(300);
        $("#btn_minus_1").show(300);
    }

    function show2() {
        $("#url_3").show(300);
        $("#btn_plus_2").hide(300);
        $("#btn_minus_2").show(300);
    }

    function hide1() {
        $("#btn_plus_1").show(300);
        $("#btn_minus_1").hide(300);
        $("#url_2").hide(300);
        $("#company_website_2").val('http://');
    }

    function hide2() {
        $("#company_website_2").val('http://');
        $("#url_2").hide(300);
        $("#btn_plus_1").show(300);
        $("#btn_minus_1").hide(300);
    }

    function hide3() {
        $("#company_website_3").val('http://');
        $("#url_3").hide(300);
        $("#btn_plus_2").show(300);
    }
</script>