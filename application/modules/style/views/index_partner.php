<!DOCTYPE html>
<h3 class="page-header page-header-top">
    <i class="gi gi-certificate"></i> <a style="text-decoration: none">Perusahaan Partner</a>
</h3>
<form method="post" class="form-horizontal form-box" onsubmit="return false;">
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-2" for="example-input-small">Data Perusahaan Partner</label>
            <button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                <div class="form-group">
                    <label class="control-label col-md-3" for="example-input-small">Nama Perusahaan</label>
                    <div class="col-md-3">
                        <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="example-input-small">Kontrak Kerjasama</label>
                    <div class="col-md-3">
                        <input type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="example-input-small">Lama Kerjasama</label>
                    <div class="col-md-3">
                        <select id="example-select" name="example-select" class="form-control">
                            <option value="">--Tahun--</option>
                            <option value="1">1 Tahun</option>
                            <option value="2">2 Tahun</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="example-input-small">Total Transaksi Tahun Terakhir</label>
                    <div class="col-md-3">
                        <select id="example-select" name="example-select" class="form-control">
                            <option value="">--Total--</option>
                            <option value="1000000000"><10000000000</option>
                            <option value="2000000000"><20000000000</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="example-input-small">Data Produk</label>
                    <button class="btn btn-primary" style="margin-left: 15px"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
                    <div class="form-box-content form-box col-md-offset-3">
                        <div class="form-group">
                            <label class="control-label col-md-3 " for="example-input-small">Nama Produk</label>
                            <div class="col-md-8">
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="example-input-small">Volume Produksi Tahunan</label>
                            <div class="col-md-4">
                                <select id="example-select" name="example-select" class="form-control">
                                    <option value="">--Volume Produksi--</option>
                                    <option value="1000">1000</option>
                                    <option value="2000">2000</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select id="example-select" name="example-select" class="form-control">
                                    <option value="">--Satuan Unit--</option>
                                    <option value="ton">ton</option>
                                    <option value="kg">kilogram</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary col-md-offset-1"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <table id="dtProd" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="hidden-xs hidden-sm">Nama Produk</th>
                                        <th class="hidden-xs hidden-sm">Volume Tahunan</th>
                                        <th class="hidden-xs hidden-sm">Satuan</th>
                                        <th class="text-center"><i class="fa fa-bolt"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">1</td>
                                        <td class="">Satu</td>
                                        <td class="">2000</td>
                                        <td class="">kg</td>
                                        <td class="">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-ban">Hapus</i></button>
                                            <button class="btn btn-warning btn-xs"><i class="fa fa-cog">Rubah</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">2</td>
                                        <td class="">Dua</td>
                                        <td class="">3000</td>
                                        <td class="">ton</td>
                                        <td class="">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-ban">Hapus</i></button>
                                            <button class="btn btn-warning btn-xs"><i class="fa fa-cog">Rubah</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-1">
            <table id="dtComp" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="hidden-xs hidden-sm">Nama Perusahaan</th>
                        <th class="hidden-xs hidden-sm">Lama Kerjasama</th>
                        <th class="hidden-xs hidden-sm">Total Trasanksi Tahun Terakhir</th>
                        <th class="text-center"><i class="fa fa-bolt"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="">1</td>
                        <td class="">Satu</td>
                        <td class="">2</td>
                        <td class="">200000000</td>
                        <td class="">
                            <button class="btn btn-danger btn-xs"><i class="fa fa-ban">Hapus</i></button>
                            <button class="btn btn-warning btn-xs"><i class="fa fa-cog">Rubah</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="">2</td>
                        <td class="">Dua</td>
                        <td class="">3</td>
                        <td class="">10000000</td>
                        <td class="">
                            <button class="btn btn-danger btn-xs"><i class="fa fa-ban">Hapus</i></button>
                            <button class="btn btn-warning btn-xs"><i class="fa fa-cog">Rubah</i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $('.input-datepicker').datepicker();
        $('#dtProd').dataTable();
        $('#dtComp').dataTable();
    });
</script>
