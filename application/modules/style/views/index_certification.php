<!DOCTYPE html>
<h3 class="page-header page-header-top">
    <i class="gi gi-certificate"></i> <a style="text-decoration: none">Sertifikasi</a>
</h3>
<div class="clearfix">
    <ul id="certificate-tabs" class="nav nav-tabs" data-toggle="tabs">
        <li class="active" data-toggle="tab">
            <a href="#" onclick="clickTab('cert_certification')">Sertifikat</a>
        </li>
        <li class="" data-toggle="tab">
            <a href="#" onclick="clickTab('cert_honor')">Penghargaan</a>
        </li>
        <li class="" data-toggle="tab">
            <a href="#" onclick="clickTab('cert_patent')">Paten</a>
        </li>
        <li class="" data-toggle="tab">
            <a href="#" onclick="clickTab('cert_trademark')">Merk Dagang</a>
        </li>
    </ul>
    <div id="tab-content">
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#loading').hide();
        $('#certificate-tabs').tab();

        $('#tab-content').load("<?php echo site_url("style/cert_certification"); ?>", function() {
            $('#loading').hide();
        });
    });
    function clickTab(tab_pane) {
        console.log(tab_pane);
        
        $('#tab-content').load("<?php echo site_url("style"); ?>" + "/" + tab_pane, function() {
            $('#loading').hide();
        });
    }
</script>
