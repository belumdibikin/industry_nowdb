<h3 class="page-header page-header-top">
    <i class="gi gi-certificate"></i> <a style="text-decoration: none">Produk Baru</a>
</h3>
<h4 class="page-header"><a style="text-decoration: none">Pilih Kategori untuk Produk Baru</a></h4>
<div>	
    <ul id="product-tabs" class="nav nav-tabs nav-justified" role="tablist" data-toggle="tabs">
        <li class="active">
            <a href="#prod-tabs-category" data-toggle="tab">Cari Kategori</a>
        </li>
        <li>
            <a href="#prod-tabs-recent-category" data-toggle="tab">Kategori yang terakhir digunakan</a>
        </li>
        <li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active form-horizontal form-box" id="prod-tabs-category">         
            <!-- form select category -->
        </div>
        <div class="tab-pane form-horizontal form-box" id="prod-tabs-recent-category">
            <!-- form select recent used category -->
        </div>
    </div>
    
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#product-tabs').tab();
        $('#prod-tabs-category').load("<?php echo site_url('product/form_select_category') ?>");
        $('#prod-tabs-recent-category').load("<?php echo site_url('product/form_select_recentcategory')?>");
    });
</script>
