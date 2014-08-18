<nav id="primary-nav">
    <ul>
        <li>
            <a href="javascript:void(0)" id="add_product" data-id="">
                <i class="fa fa-plus"></i>Tambah Produk
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="my_product" data-id="">
                <i class="fa fa-cube"></i>Produk Saya
            </a>                
        </li>
    </ul>
    <ul id="sidebar-menu"></ul>
</nav>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_product').click(function() {
            $('#page-content').load("<?php echo site_url('style/index_add_product'); ?>");
        });
    });
</script>