<nav id="primary-nav">
    <ul>
        <li>
            <a href="javascript:void(0)" id="sdr_company" data-id="">
                <i class="fa fa-info-circle"></i>Informasi Perusahaan
            </a>                
        </li>
    <?php 
    if($this->session->userdata('id_company') != '' or $this->session->userdata('id_company') != NULL)
    {
    ?>
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
                <i class="gi gi-certificate"></i>Ijin/Sertifikasi
            </a>                
        </li>
    <?php
    }
    ?>
    </ul>
    <ul id="sidebar-menu"></ul>
</nav>
<script type="text/javascript">
    $(document).ready(function() {
        $('#sdr-sertifikat').click(function() {
            $('#page-content').load("<?php echo site_url('company/index_certification'); ?>");
        });
        $('#sdr_company').click(function() {
            $('#page-content').load("<?php echo site_url('company/index_company'); ?>");
        });
        $('#sdr_trade').click(function() {
            $('#page-content').load("<?php echo site_url('company/index_trade'); ?>");
        });
        $('#sdr_partner').click(function() {
            $('#page-content').load("<?php echo site_url('company/index_partner'); ?>");
        });
        $('#sdr_intro').click(function() {
            $('#page-content').load("<?php echo site_url('company/index_intro'); ?>");
        });
    });
</script>