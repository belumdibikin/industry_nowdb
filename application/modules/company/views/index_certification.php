<!DOCTYPE html>
<h3 class="page-header page-header-top">
    <i class="gi gi-certificate"></i> <a style="text-decoration: none">Sertifikasi</a>
</h3>
<div class="clearfix">
    <ul id="certificate-tabs" class="nav nav-pills" data-toggle="tabs">
    <li class="active" data-toggle="tab">
        <a href="javascript:void(0)" onClick="clickTab('form_fill_certificate')" id="nav_certificate">Sertifikat</a>
    </li>
    <li class="a" data-toggle="tab">
        <a href="javascript:void(0)" onClick="clickTab('form_fill_award')" id="nav_award">Penghargaan</a>
    </li>
    <li class="a" data-toggle="tab">
        <a href="javascript:void(0)" onClick="clickTab('form_fill_patent')" id="nav_patent">Paten</a>
    </li>
    <li class="a" data-toggle="tab">
        <a href="javascript:void(0)" onClick="clickTab('form_fill_trademarks')" id="nav_trademarks">Merk Dagang</a>
    </li>
</ul>
<form method="post" class="form-horizontal form-box" onsubmit="return false;" id="form_fill">
    <div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Tipe Sertifikat</label>
        <div class="col-md-4">
            <select name="example-select-chosen" class="form-control">
                <option>-- Pilih --</option>
                <option>Sertifikasi Sistem Manajemen</option>
                <option>Sertifikasi Produk</option>
                <option>Laporan Pengujian</option>
            </select>
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Nomor Referensi</label>
        <div class="col-md-4">
            <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Nama Sertifikat</label>
        <div class="col-md-4">
            <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Dikeluarkan Oleh</label>
        <div class="col-md-4">
            <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Mulai Berlaku</label>
        <div class="col-md-4">
            <div class="input-group date input-datepicker" data-date="30-04-2013" data-date-format="dd-mm-yyyy">
                <input type="text" name="example-input-datepicker2" class="form-control">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Selesai</label>
        <div class="col-md-4">
            <div class="input-group date input-datepicker" data-date="30-04-2013" data-date-format="dd-mm-yyyy">
                <input type="text" name="example-input-datepicker2" class="form-control">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Foto Sertifikat</label>
        <div class="col-md-6">
            <div class="input-group date input-datepicker" data-date="30-04-2013" data-date-format="dd-mm-yyyy">
                <input type="file">
                <span class="help-block">Ukuran file maks. 300 KB, hanya format PNG & JPEG</span>
            </div>
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group">
        <label class="control-label col-md-3" for="example-input-small">Deskripsi/Cakupan</label>
        <div class="col-md-6">
            <textarea class="form-control" style="resize: vertical;"></textarea>
        </div>
    </div>
</div>
<div class="form-box-content">
    <div class="form-group form-actions">
        <div class="col-md-10 col-md-offset-2">
            <button class="btn btn-success"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Tambah</button>
        </div>
    </div>
</div>
</form>
<h4>Sertifikasi Yang Sudah Di Submit</h4>
<table id="dataTable" class="table">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="hidden-xs hidden-sm">Nama Sertifikasi</th>
            <th class="hidden-xs hidden-sm">Dikeluarkan Oleh</th>
            <th class="hidden-xs hidden-sm">Jenis Sertifikat</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="">1</td>
            <td class="">Sertifikat Panjat Pinang</td>
            <td class="">RW Setempat</td>
            <td class="">Penghargaan</td>
            <td class="">
                <button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
                <button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
                <button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
            </td>
        </tr>
    </tbody>
</table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.input-datepicker').datepicker();
        $('#dataTable').dataTable();
		
        $('#form_fill').load("<?php echo site_url("company/form_fill_certificate"); ?>", function() {
            $('#loading').hide();
        });
    });
    function clickTab(tab_pane) {
        $('#form_fill').load("<?php echo site_url("company"); ?>" + "/" + tab_pane, function() {
            $('#loading').hide();
        });
    }
</script>
