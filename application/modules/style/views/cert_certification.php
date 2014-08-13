<form method="post" class="form-horizontal form-box" onsubmit="return false;">
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Tipe Sertifikat</label>
            <div class="col-md-4">
                <select name="example-select-chosen" class="form-control">
                    <option>-- Pilih --</option>
                    <option>Sertifikasi Sistem Manajemen</option>
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
            <label class="control-label col-md-3" for="example-input-small">Foto</label>
            <div class="col-md-4">
                <input type="file">
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
<table id="dataTables" class="table">
    <thead>
        <tr>
            <th class="cell-small text-center" data-toggle="tooltip" title="" data-original-title="Toggle all!"><input type="checkbox" id="check1-all" name="check1-all"></th>
            <th class="text-center">#</th>
            <th class="hidden-xs hidden-sm">No. Referensi</th>
            <th class="hidden-xs hidden-sm">Name</th>
            <th class="hidden-xs hidden-sm">Dikeluarkan Oleh</th>
            <th class="hidden-xs hidden-sm">Tipe Sertifikat</th>
            <th class="text-center"><i class="fa fa-bolt"></i> Actions</th>
        </tr>
    </thead>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $('.input-datepicker').datepicker();
        $('#dataTables').dataTable();
    });
</script>