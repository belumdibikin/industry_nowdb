<!DOCTYPE html>
<h3 class="page-header page-header-top">
    <i class="fa fa-info-circle"></i> <a style="text-decoration: none">Informasi Perusahaan</a>
</h3>
<form method="post" class="form-horizontal form-box" onsubmit="return false;">
    <div class="form-box-content">
        <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Logo Perusahaan</label>
            <div class="col-md-4">
                <input type="file" id="example-file" name="example-file" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Detail Perusahaan</label>
            <div class="col-md-6">
                <textarea class="form-control" style="resize: vertical;"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Foto Perusahaan</label>
            <div class="col-md-6">
                <input type="file" id="example-file" name="example-file" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Data Tradeshow</label>
            <div class="form-box-content form-box col-md-offset-3">
                Apa anda pernah mengunjungi atau berencana mengunjungi tradeshow?
                <div class="form-group">
                    <button class="btn btn-primary" style="margin-left: 15px"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
                    <div class="form-group">
                        <label class="control-label col-md-3 " for="example-input-small">Nama Tradeshow</label>
                        <div class="col-md-8">
                            <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="example-input-small">Tanggal Tradeshow</label>
                        <div class="col-md-4">
                            <select id="example-select" name="example-select" class="form-control">
                                <option value="">--Tahun--</option>
                                <option value="1000">1000</option>
                                <option value="2000">2000</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select id="example-select" name="example-select" class="form-control">
                                <option value="">--Bulan--</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="example-input-small">Lokasi Penyelenggaraan Tradeshow</label>
                        <div class="col-md-4">
                            <select id="example-select" name="example-select" class="form-control">
                                <option value="">--Provinsi--</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Bali">Bali</option>
                                <option value="Banten">Banten</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                <option value="Daerah Tingkat I Kalimantan Barat">Daerah Tingkat I Kalimantan Barat</option>
                                <option value="Irian Jaya">Irian Jaya</option>
                                <option value="Jakarta Raya">Jakarta Raya</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Propinsi Jambi">Propinsi Jambi</option>
                                <option value="Propinsi Jawa Barat">Propinsi Jawa Barat</option>
                                <option value="Propinsi Jawa Tengah">Propinsi Jawa Tengah</option>
                                <option value="Propinsi Jawa Timur">Propinsi Jawa Timur</option>
                                <option value="Propinsi Kalimantan Selatan">Propinsi Kalimantan Selatan</option>
                                <option value="Propinsi Lampung">Propinsi Lampung</option>
                                <option value="Propinsi Maluku">Propinsi Maluku</option>
                                <option value="Propinsi Sulawesi Selatan">Propinsi Sulawesi Selatan</option>
                                <option value="Propinsi Sulawesi Utara">Propinsi Sulawesi Utara</option>
                                <option value="Propinsi Sumatera Selatan">Propinsi Sumatera Selatan</option>
                                <option value="Propinsi Sumatera Utara">Propinsi Sumatera Utara</option>
                                <option value="Riau">Riau</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select id="example-select" name="example-select" class="form-control">
                                <option value="">--Kota--</option>
                                <option value="Bandung">Bandung</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 " for="example-input-small">Penjelasan Tradeshow</label>
                        <div class="col-md-8">
                            <textarea class="form-control" style="resize: vertical;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 " for="example-input-small">Foto Tradeshow</label>
                        <div class="col-md-8">
                            <input type="file" id="example-file" name="example-file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary col-md-offset-1"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <table id="dtProd" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="hidden-xs hidden-sm">Nama Tradeshow</th>
                                <th class="hidden-xs hidden-sm">Bulan</th>
                                <th class="hidden-xs hidden-sm">Lokasi</th>
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
    </div>
    <div class="form-box-content">
        <div class="form-group form-actions">
            <div class="col-md-10 col-md-offset-2">
                <button class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
                <button class="btn btn-success"><i class="fa fa-lock"></i>&nbsp;&nbsp;Submit</button>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $('.input-datepicker').datepicker();
    });
</script>
