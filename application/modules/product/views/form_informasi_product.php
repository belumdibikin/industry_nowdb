<div class="form-group">
    <label class="control-label col-md-3" for="val_product_name">Nama Produk</label>
    <div class="col-md-6">
        <input type="text" id="val_product_name" name="val_product_name" class="form-control input-sm">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_product_keyword">Kata Kunci Produk</label>
    <div class="col-md-5">
        <input type="text" id="val_product_keyword" name="val_product_keyword" class="form-control input-sm">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_product_listing">Keterangan</label>
    <div class="col-md-4">
        <textarea id="val_product_listing" name="val_product_listing" class="form-control textarea-elastic" rows="4"></textarea>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_product_photo">Foto Produk</label>
    <div class="col-md-4">
        <div id="product-photo-preview"></div>        
        <input type="file" id="userfile" name="userfile">
    </div>
</div>
<style>
    #product-photo-preview{
        width: 120px;
        height: 120px;
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
</style>
<script type="text/javascript">
    $(function() {
        $("#userfile").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    $("#product-photo-preview").css("background-image", "url(" + this.result + ")");
                }
            }
        });
    });
</script>