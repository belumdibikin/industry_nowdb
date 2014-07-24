<nav id="primary-nav">
    <ul>
        <li>
            <a href="javascript:void(0)" id="btn-collection-main" data-id="">
                <i class="fa fa-info-circle"></i>Informasi Perusahaan
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="btn-collection-main" data-id="">
                <i class="fa fa-ticket"></i>Detail Perdagangan
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="btn-collection-main" data-id="">
                <i class="gi gi-factory"></i>Pabrik Partner
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="btn-collection-main" data-id="">
                <i class="gi gi-keynote"></i>Pengenal Perusahaan
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="sdr-sertifikat">
                <i class="gi gi-certificate"></i>Sertifikasi
            </a>                
        </li>
    </ul>
    <ul id="sidebar-menu"></ul>
</nav>
<script type="text/javascript">
    $(document).ready(function() {
        $('#sdr-sertifikat').click(function() {
            $('#page-content').load("<?php echo site_url('style/index_certification'); ?>");
        });
    });
</script>