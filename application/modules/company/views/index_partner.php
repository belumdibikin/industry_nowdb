<!DOCTYPE html>
<h3 class="page-header page-header-top">
	<i class="gi gi-factory"></i> <a style="text-decoration: none">Pabrik Partner</a>
</h3>
<form method="post" class="form-horizontal form-box" onsubmit="return false;">
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Apakah Perusahaan Anda Memiliki Pabrik Partner?</label>
			<div class="col-md-4">
				<div class="radio">
					<label for="example-radio1">
						<input type="radio" id="partner_radio1" name="example-radios" value="option1" onclick="show()"> Ya
					</label>
				</div>
				<div class="radio">
					<label for="example-radio2">
						<input type="radio" id="partner_radio2" name="example-radios" value="option2" onclick="hide()"> Tidak
					</label>
				</div>	
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_name_1">
		<br/>
		<h4 >
			<i class="gi gi-factory"></i> <a style="text-decoration: none">Pabrik Partner</a>
		</h4>
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Nama Pabrik</label>
			<div class="col-md-5">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_contract_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Bukti Kontrak Kerjasama</label>
			<div class="col-md-4">
				<input type="file">
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_year_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Lama Kerjasama</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Pilih --</option>
					<option>1 Tahun</option>
					<option>2 Tahun</option>
					<option>3 Tahun</option>
					<option>4 Tahun</option>
					<option>5 Tahun</option>
					<option>6 Tahun</option>
					<option>7 Tahun</option>
					<option>8 Tahun</option>
					<option>9 Tahun</option>
					<option>10 Tahun</option>
					<option>>10Tahun</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_amount_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Jumlah Total Transaksi Dengan Pabrik (Tahun Sebelumnya)</label>
			<div class="col-md-4">
				<select name="example-select-chosen" class="form-control">
					<option>-- Pilih --</option>
					<option>Dibawah 100 Juta Rupiah</option>
					<option>100 - 300 Juta Rupiah</option>
					<option>301 - 500 Juta Rupiah</option>
					<option>501 - 1 Milyar Rupiah</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_product_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Kapasitas Produk</label>
			<label class="control-label col-md-1" for="example-input-small"><span class="help-block">Produk</span></label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Volume Produksi Tahunan</span></label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<div class="col-md-2">
				<select name="example-select-chosen" class="form-control">
					<option>Tipe Unit</option>
					<option>Acre</option>
					<option>Ampere</option>
					<option>Barrel</option>
					<option>Karat</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_product_2_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-1" for="example-input-small"><span class="help-block">Produk</span></label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Volume Produksi Tahunan</span></label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<div class="col-md-2">
				<select name="example-select-chosen" class="form-control">
					<option>Tipe Unit</option>
					<option>Acre</option>
					<option>Ampere</option>
					<option>Barrel</option>
					<option>Karat</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_product_3_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<label class="control-label col-md-1" for="example-input-small"><span class="help-block">Produk</span></label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<label class="control-label col-md-2" for="example-input-small"><span class="help-block">Volume Produksi Tahunan</span></label>
			<div class="col-md-2">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
			<div class="col-md-2">
				<select name="example-select-chosen" class="form-control">
					<option>Tipe Unit</option>
					<option>Acre</option>
					<option>Ampere</option>
					<option>Barrel</option>
					<option>Karat</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_btn_save_1">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<div class="col-md-4">
				<button class="btn btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
				<!-- <button class="btn btn-warning"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button> -->
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="partner_table_1"> 
		<div class="form-group">
			<label class="control-label col-md-2" for="example-input-small"> </label>
			<div class="col-md-8">
				<table id="tb_customer" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="hidden-xs hidden-sm">Nama Pabrik</th>
							<th class="hidden-xs hidden-sm">Aksi</th>
						</thead>
						<tbody>
							<tr>
								<td class="">1</td>
								<td class="">Jl Kenangan Bandung</td>
								<td class="">
									<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
									<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
									<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
								</td>
							</tr>
							<tr>
								<td class="">2</td>
								<td class="">Jl. Jalan Bandung</td>
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
	</form>

	<script type="text/javascript">

	function show() {
		$("#partner_head_1").show(300);
		$("#partner_name_1").show(300);
		$("#partner_year_1").show(300);
		$("#partner_amount_1").show(300);
		$("#partner_contract_1").show(300);
		$("#partner_btn_save_1").show(300);
		$("#partner_table_1").show(300);
		$("#partner_product_1").show(300);
		$("#partner_product_2_1").show(300);
		$("#partner_product_3_1").show(300);
	}

	function hide(){
		$("#partner_head_1").hide(300);
		$("#partner_name_1").hide(300);
		$("#partner_year_1").hide(300);
		$("#partner_amount_1").hide(300);
		$("#partner_contract_1").hide(300);
		$("#partner_btn_save_1").hide(300);
		$("#partner_table_1").hide(300);
		$("#partner_product_1").hide(300);
		$("#partner_product_2_1").hide(300);
		$("#partner_product_3_1").hide(300);
	}

	
	</script>