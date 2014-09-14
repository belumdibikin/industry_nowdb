<div class="form-group">
    <div class="col-md-12">
        <select id="select-category" size="15" name="select-category" class="form-control" multiple>
            <option>Automobiles & Motorcycle >> Agriculture Waste >> Agriculture Machinery Parts</option>
            <option>Automobiles & Motorcycle >> Agriculture Waste >> Agriculture Machinery Parts</option>
        </select>
    </div>
</div>
<div class="form-group col-md-12">
    <center>
        <button class="btn btn-warning" onclick="btnsetuju()"> 
            saya setuju 
        </button>
    </center>
</div>
<script type="text/javascript">
    function btnsetuju() {
        $('#page-content').load("<?php echo site_url('product/prod_newdisplay_basicinfo'); ?> + '/' + ");
    }
</script>