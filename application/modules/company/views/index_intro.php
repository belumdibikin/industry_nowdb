<!DOCTYPE html>
<h3 class="page-header page-header-top">
	<i class="gi gi-keynote"></i> <a style="text-decoration: none">Pengantar Perusahaan</a>
</h3>
<form method="post" class="form-horizontal form-box" onsubmit="return false;">
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Logo Perusahaan</label>
			<div class="col-md-4">
				<input type="file">
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Detail Perusahaan</label>
			<div class="col-md-6">
				<textarea class="form-control" style="resize: vertical;"></textarea>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Foto Perusahaan</label>
			<div class="col-md-4">
				<input type="file">
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Apakah Anda Pernah Atau Berencana Mengunjungi Trade Show?</label>
			<div class="col-md-4">
				<div class="radio">
					<label for="example-radio1">
						<input type="radio" id="partner_radio1" name="example-radios" value="option1" onclick="show_trade()"> Ya
					</label>
				</div>
				<div class="radio">
					<label for="example-radio2">
						<input type="radio" id="partner_radio2" name="example-radios" value="option2" onclick="hide_trade()"> Tidak
					</label>
				</div>	
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_name">
		<h5 >
			<i class="gi gi-factory"></i> <a style="text-decoration: none">Data Trade Show</a>
		</h5>
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Nama Trade Show</label>
			<div class="col-md-6">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_time">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Waktu Pelaksanaan</label>
			<div class="col-md-3">
				<select name="example-select-chosen" class="form-control">
					<option>-- Bulan --</option>
					<option>Januari</option>
					<option>Februari</option>
					<option>Maret</option>
				</select>
			</div>
			<div class="col-md-3">
				<select name="example-select-chosen" class="form-control">
					<option>-- Tahun --</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_location">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Tempat Pelaksanaan</label>
			<div class="col-md-3">
				<select name="example-select-chosen" class="form-control">
					<option>-- Provinsi --</option>
					<option>DKI Jakarta</option>
					<option>Jawa Barat</option>
					<option>Jawa Timur</option>
				</select>
			</div>
			<div class="col-md-3">
				<select name="example-select-chosen" class="form-control">
					<option>-- Kota / Kabupaten --</option>
					<option>Kota Bandung</option>
					<option>Kabupaten Bandung</option>
					<option>Kabupaten Garut</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_detail">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Detail Trade Show</label>
			<div class="col-md-6">
				<textarea class="form-control" style="resize: vertical;"></textarea>
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_photo">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Foto Trade Show</label>
			<div class="col-md-4">
				<input type="file">
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_btn_save">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small"> </label>
			<div class="col-md-4">
				<button class="btn btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
				<!-- <button class="btn btn-warning"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button> -->
			</div>
		</div>
	</div>
	<div class="form-box-content" style="display:none;" id="trd_table"> 
		<div class="form-group">
			<label class="control-label col-md-1" for="example-input-small"> </label>
			<div class="col-md-10">
				<table id="tb_customer" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="hidden-xs hidden-sm">Nama Trade Show</th>
							<th class="hidden-xs hidden-sm">Detail Trade Show</th>
							<th class="hidden-xs hidden-sm">Waktu Trade Show</th>
							<th class="hidden-xs hidden-sm">Lokasi Trade Show</th>
							<th class="hidden-xs hidden-sm">Aksi</th>
						</thead>
						<tbody>
							<tr>
								<td class="">1</td>
								<td class="">IndoTrade</td>
								<td class="">Jalan Jalan Aja</td>
								<td class="">Januari 2014</td>
								<td class="">Jakarta</td>
								<td class="">
									<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
									<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
									<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
								</td>
							</tr>
							<tr>
								<td class="">2</td>
								<td class="">Expo</td>
								<td class="">Jalan Jalan Men</td>
								<td class="">Februari 2014</td>
								<td class="">Bandung</td>
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

	function show_trade(){
		$('#trd_name').show(300);
		$("#trd_time").show(300);
		$("#trd_location").show(300);
		$("#trd_photo").show(300);
		$("#trd_detail").show(300);
		$("#trd_table").show(300);
		$("#trd_btn_save").show(300);
	}

	function hide_trade(){
		$('#trd_name').hide(300);
		$("#trd_time").hide(300);
		$("#trd_location").hide(300);
		$("#trd_photo").hide(300);
		$("#trd_detail").hide(300);
		$("#trd_table").hide(300);
		$("#trd_btn_save").hide(300);
	}


</script>