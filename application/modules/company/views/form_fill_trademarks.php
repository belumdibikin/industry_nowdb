<!DOCTYPE html>
<div class="form-box-content">
	<div class="form-group">
		<label class="control-label col-md-3" for="example-input-small">Nomor Registrasi</label>
		<div class="col-md-4">
			<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
		</div>
	</div>
</div>
<div class="form-box-content">
	<div class="form-group">
		<label class="control-label col-md-3" for="example-input-small">Nama Merk Dagang</label>
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
        <label class="control-label col-md-3" for="example-input-small">Foto Merk Dagang</label>
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
        <label class="control-label col-md-3" for="example-input-small">Produk yang Telah Disetujui</label>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.input-datepicker').datepicker();
    });
</script>