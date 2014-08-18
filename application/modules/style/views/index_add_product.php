<!DOCTYPE html>
<h3 class="page-header page-header-top">
	<i class="fa fa-plus"></i> <a style="text-decoration: none">Tambah Produk</a>
</h3>
<br/>
<form method="post" class="form-horizontal form-box" onsubmit="return false;">
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Nama Produk</label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3">Kondisi</label>
			<div class="col-md-5">
				<label class="radio-inline" for="example-radio-inline1">
					<input type="radio" id="example-radio-inline1" name="example-radios-inline" value="option1"> Baru
				</label>
				<label class="radio-inline" for="example-radio-inline2">
					<input type="radio" id="example-radio-inline2" name="example-radios-inline" value="option2"> Bekas
				</label>
				<label class="radio-inline" for="example-radio-inline3">
					<input type="radio" id="example-radio-inline3" name="example-radios-inline" value="option3"> BNWOT
				</label>
				<label class="radio-inline" for="example-radio-inline3">
					<input type="radio" id="example-radio-inline3" name="example-radios-inline" value="option3"> Rekondisi
				</label>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Harga</label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" placeholder="Cth: 1200000" name="example-input-small" class="form-control input-sm">
			</div>
			<label class="control-label col-md-1" for="example-input-small">Rupiah</label>
		</div>
	</div>
	<div class="form-box-content" id="currency">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Kategori Produk</label>
			<div class="col-md-3">
				<select id="example-select-multiple" name="example-select-multiple" class="form-control" multiple>
					<option>Alat Musik</option>
					<option>Alat Olahraga</option>
					<option>Elektronik</option>
					<option>Komputer</option>
					<option>Handphone & PDA</option>
					<option>Kamera & Aksesoris</option>
					<option>Furniture</option>
					<option>Fashion & Mode</option>
					<option>Jasa</option>
				</select>
			</div>
			<label class="control-label col-md-2" for="example-input-small">Sub Kategori</label>
			<div class="col-md-3">
				<select id="example-select-multiple" name="example-select-multiple" class="form-control" multiple>
					<option>Aksesoris</option>
					<option>Memori</option>
					<option>Kartu Grafis</option>
					<option>Prosesor</option>
					<option>Notebook</option>
					<option>Storage</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Tag</label>
			<div class="col-md-4">
				<input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
			</div>
		</div>
	</div>
	<div class="form-box-content">
		<div class="form-group">
			<label class="control-label col-md-3" for="example-input-small">Deskripsi Produk</label>
			<div class="col-md-9">
				<textarea id="example-textarea-editor" name="example-textarea-editor" class="textarea-editor textarea-large" rows="8"></textarea>
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
<table id="tb_customer" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center">No</th>
			<th class="hidden-xs hidden-sm">Nama Produk</th>
			<th class="hidden-xs hidden-sm">Kategori</th>
			<th class="hidden-xs hidden-sm">Harga</th>
			<th class="text-center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="">1</td>
			<td class="">Mesin Cuci Avatar</td>
			<td class="">Elektronik</td>
			<td class="">500000</td>
			<td class="">
				<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
				<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
				<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
				<a href="#modal-foto" data-toggle="modal"><button class="btn btn-primary btn-xs"><i class="fa fa-upload"> Unggah</i></button></a>
			</td>
		</tr>
		<tr>
			<td class="">2</td>
			<td class="">Biola</td>
			<td class="">Alat Musik</td>
			<td class="">2500000</td>
			<td class="">
				<button class="btn btn-danger btn-xs"><i class="fa fa-times-circle"> Hapus</i></button>
				<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Ubah</i></button>
				<button class="btn btn-info btn-xs"><i class="fa fa-eye"> Detail</i></button>
				<a href="#modal-foto" data-toggle="modal"><button class="btn btn-primary btn-xs"><i class="fa fa-upload"> Unggah</i></button></a>
			</td>
		</tr>
	</tbody>
</table>
<div id="modal-foto" class="modal">
	<!-- Modal Dialog -->
	<div class="modal-dialog">
		<!-- Modal Content -->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4>Unggah Foto</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="control-label col-md-4" for="example-input-small">Foto Produk</label>
					<div class="col-md-4">
						<input type="file">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal">Close</button>
				<button class="btn btn-success">Save</button>
			</div>
		</div>
		<!-- END Modal Content -->
	</div>
	<!-- END Modal Dialog -->
</div>	