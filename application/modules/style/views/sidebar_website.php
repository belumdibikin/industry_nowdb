<nav id="primary-nav">
    <ul>
        <li>
            <a href="javascript:void(0)" id="sdr-company" data-id="">
                <i class="fa fa-info-circle"></i>Informasi Perusahaan
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="sdr_trade" data-id="">
                <i class="fa fa-ticket"></i>Detail Perdagangan
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="sdr_partner" data-id="">
                <i class="gi gi-factory"></i>Pabrik Partner
            </a>                
        </li>
        <li>
            <a href="javascript:void(0)" id="sdr_intro" data-id="">
                <i class="gi gi-keynote"></i>Pengantar Perusahaan
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
        $('#sdr-company').click(function() {
            $('#page-content').load("<?php echo site_url('style/index_company'); ?>");
        });
        $('#sdr_trade').click(function() {
            $('#page-content').load("<?php echo site_url('style/index_trade'); ?>");
        });
        $('#sdr_partner').click(function() {
            $('#page-content').load("<?php echo site_url('style/index_partner'); ?>");
        });
        $('#sdr_intro').click(function() {
            $('#page-content').load("<?php echo site_url('style/index_intro'); ?>");
        });
    });
</script>