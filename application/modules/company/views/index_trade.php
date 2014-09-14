<!DOCTYPE html>
<h3 class="page-header page-header-top">
	<i class="fa fa-ticket"></i> <a style="text-decoration: none">Detail Perdagangan</a>
</h3>
<br/>
<form method="post" class="form-horizontal form-box" onsubmit="return false;">
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Total Volume Penjualan Tahunan</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option value="">-- Pilih --</option>
					<option value="100">Dibawah 100 Juta Rupiah</option>
					<option value="200">101 - 200 Juta Rupiah</option>
					<option value="500">201 - 500 Juta Rupiah</option>
					<option value="1000">501 - 1 Milyar Rupiah</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Persentase Ekspor</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option value="">-- Pilih --</option>
					<option value="10">1 - 10%</option>
					<option value="20">11 - 20%</option>
					<option value="30">21 - 30%</option>
					<option value="40">31 - 40%</option>
					<option value="50">41 - 50%</option>
					<option value="60">51 - 60%</option>
					<option value="70">61 - 70%</option>
					<option value="80">71 - 80%</option>
					<option value="90">81 - 90%</option>
					<option value="100">91 - 100%</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Tahun Memulai Ekspor</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Pilih --</option>
					<?php 
					for ($i=2014; $i>=1900 ; $i--) { 
						?>
						<option value='<?php echo $i;?>'><?php echo $i;?></option>
						<?php 
					}
					?>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Tambah Detail Pelanggan</label>
			<div class="col-md-4">
				<div class="radio">
					<label for="example-radio1">
						<input type="radio" id="example-radio1" onclick="show()" name="example-radios" value="option1"> Ya
					</label>
				</div>
				<div class="radio">
					<label for="example-radio2">
						<input type="radio" id="example-radio2" onclick="hide()" name="example-radios" value="option2"> Tidak
					</label>
				</div>	
			</div>
		</div>
	</div>
	<div class="form-box-content" id="cst_name" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Nama Pelanggan</span></label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="cst_prv" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Provinsi</span></label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Provinsi --</option>
					<option>DKI Jakarta</option>
					<option>Jawa Barat</option>
					<option>Jawa Timur</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" id="cst_city" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Kota</span></label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Kota / Kabupaten --</option>
					<option>Kota Bandung</option>
					<option>Kabupaten Bandung</option>
					<option>Kabupaten Garut</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" id="cst_product" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Produk Dibeli</span></label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="cst_turnover" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Pendapatan Tahunan</span></label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<span class="help-block">Rupiah</span>
		</div>
	</div>
	<div class="form-box-content" id="cst_btn-save" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<div class="col-md-4">
				<button class="btn btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
				<!-- <button class="btn btn-warning"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button> -->
			</div>
		</div>
	</div>
	<div class="form-box-content" id="cst_table" style="display:none;"> 
		<div class="col-md-9 col-md-offset-3">
			<br/>
			<table id="tb_customer" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="hidden-xs hidden-sm">Nama Pelanggan</th>
						<th class="hidden-xs hidden-sm">Lokasi Pelanggan</th>
						<th class="hidden-xs hidden-sm">Produk Dibeli</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="">1</td>
						<td class="">Budi</td>
						<td class="">Bandung</td>
						<td class="">Tembaga</td>
						<td class="">
							<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
							<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
								<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
						</td>
					</tr>
					<tr>
						<td class="">2</td>
						<td class="">Anduk</td>
						<td class="">Jakarta</td>
						<td class="">Steel</td>
						<td class="">
							<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
							<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
								<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>	
	

	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Jumlah Karyawan di Departemen Perdagangan</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option value="">-- Pilih --</option>
					<option value="0">0 Karyawan</option>
					<option value="2">1 - 2 Karyawan</option>
					<option value="5">3 - 5 Karyawan</option>
					<option value="10">6 - 10 Karyawan</option>
					<option value="20">11 - 20 Karyawan</option>
					<option value="50">21 - 50 Karyawan</option>
					<option value="51">Diatas 50 Karyawan</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Apakah Perusahaan Anda Mendukung Untuk Menyuplai Berbagai Lintas Industri?</label>
			<div class="col-md-4">
				<label class="radio-inline" for="example-radio-inline1">
					<input type="radio" id="example-radio-inline1" name="example-radios-inline" value="option1"> Ya
				</label>
				<label class="radio-inline" for="example-radio-inline2">
					<input type="radio" id="example-radio-inline2" name="example-radios-inline" value="option2"> Tidak
				</label>

			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Jumlah Staff Penelitian dan Pengembangan</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option value="">-- Pilih --</option>
					<option value="0">0 Karyawan</option>
					<option value="2">1 - 2 Karyawan</option>
					<option value="5">3 - 5 Karyawan</option>
					<option value="10">6 - 10 Karyawan</option>
					<option value="20">11 - 20 Karyawan</option>
					<option value="50">21 - 50 Karyawan</option>
					<option value="51">Diatas 50 Karyawan</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Jumlah Staff Pengecekan Kualitas</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option value="">-- Pilih --</option>
					<option value="0">0 Karyawan</option>
					<option value="2">1 - 2 Karyawan</option>
					<option value="5">3 - 5 Karyawan</option>
					<option value="10">6 - 10 Karyawan</option>
					<option value="20">11 - 20 Karyawan</option>
					<option value="50">21 - 50 Karyawan</option>
					<option value="51">Diatas 50 Karyawan</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Pelabuhan Terdekat</label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Kisaran Waktu Produksi</label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<span class="help-block">Hari</span>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Apakah Anda Memiliki Kantor Cabang?</label>
			<div class="col-md-4">
				<div class="radio">
					<label for="example-radio1">
						<input type="radio" id="example-radio1" onclick="show2()" name="example-radios" value="option1"> Ya
					</label>
				</div>
				<div class="radio">
					<label for="example-radio2">
						<input type="radio" id="example-radio2" onclick="hide2()" name="example-radios" value="option2"> Tidak
					</label>
				</div>	
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_prv" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Provinsi</span></label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Provinsi --</option>
					<option>DKI Jakarta</option>
					<option>Jawa Barat</option>
					<option>Jawa Timur</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_city" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Kota</span></label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Kota / Kabupaten --</option>
					<option>Kota Bandung</option>
					<option>Kabupaten Bandung</option>
					<option>Kabupaten Garut</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_address" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Alamat Kantor</span></label>
			<div class="col-md-4">
				<textarea class="form-control" style="resize: vertical;"></textarea>
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_telp" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">No Telepon</span></label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_duty" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Menangani</span></label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Pilih --</option>
					<option>Penjualan</option>
					<option>Layanan Purna Jual</option>
					<option>Lain-Lain</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_charge" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Penanggung Jawab</span></label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_employ" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Jumlah Pegawai</span></label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_owner" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Bukti Kepemilikan</span></label>
			<div class="col-md-4">
				<input type="file">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_photo" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Foto Kantor</span></label>
			<div class="col-md-4">
				<input type="file">
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_btn_save" style="display:none;">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<div class="col-md-4">
				<button class="btn btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
				<!-- <button class="btn btn-warning"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button> -->
			</div>
		</div>
	</div>
	<div class="form-box-content" id="ofc_table" style="display:none;" > 
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<div class="col-md-9">
				<table id="tb_customer" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="hidden-xs hidden-sm">Alamat Kantor</th>
							<th class="hidden-xs hidden-sm">Menangani</th>
							<th class="hidden-xs hidden-sm">Penanggung Jawab</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="">1</td>
							<td class="">Jl Kenangan Bandung</td>
							<td class="">Penjualan</td>
							<td class="">Asep</td>
							<td class="">
								<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
								<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
								<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
							</td>
						</tr>
						<tr>
							<td class="">2</td>
							<td class="">Jl. Jalan Bandung</td>
							<td class="">Pelayanan</td>
							<td class="">Ujang</td>
							<td class="">
								<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
								<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
								<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
							</td>
						</tr>
					</tbody>
				</table>
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

<script type="text/javascript">

function show() {
	$("#cst_name").show(300);
	$("#cst_prv").show(300);
	$("#cst_city").show(300);
	$("#cst_product").show(300);
	$("#cst_turnover").show(300);
	$("#cst_table").show(300);
	$("#cst_btn-save").show(300);
}

function hide() {
	$("#cst_name").hide(300);
	$("#cst_prv").hide(300);
	$("#cst_city").hide(300);
	$("#cst_product").hide(300);
	$("#cst_turnover").hide(300);
	$("#cst_table").hide(300);
	$("#cst_btn-save").hide(300);
}

function show2() {
	$("#ofc_prv").show(300);
	$("#ofc_city").show(300);
	$("#ofc_address").show(300);
	$("#ofc_telp").show(300);
	$("#ofc_duty").show(300);
	$("#ofc_charge").show(300);
	$("#ofc_owner").show(300);
	$("#ofc_employ").show(300);
	$("#ofc_btn_save").show(300);
	$("#ofc_photo").show(300);
	$("#ofc_table").show(300);
}

function hide2() {
	$("#ofc_prv").hide(300);
	$("#ofc_city").hide(300);
	$("#ofc_address").hide(300);
	$("#ofc_telp").hide(300);
	$("#ofc_duty").hide(300);
	$("#ofc_charge").hide(300);
	$("#ofc_owner").hide(300);
	$("#ofc_employ").hide(300);
	$("#ofc_btn_save").hide(300);
	$("#ofc_photo").hide(300);
	$("#ofc_table").hide(300);
}

$(document).ready(function() {
	$('#tb_customer').dataTable();
});
</script>
