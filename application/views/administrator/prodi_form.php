<div class="container-fluid">

	  <div class="alert alert-success" role="alert">
   <i class="fas fa-university">PROGRAM STUDI</i>
       </div>

	<form method="post" action="<?php echo base_url('administrator/prodi/tambah_prodi_aksi') ?>">
		<div class="form-group">
			<label>Kode PRODI</label>
			<input type="text" name="kode_prodi"
			placeholder="Masukan Kode prodi" class="form-control">
			<?php  echo form_error('kode_prodi','<div class="text-danger small" ml-3>') ?>

		</div>


			<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi"
			placeholder="Masukan Nama Prodi" class="form-control">
			<?php  echo form_error('nama_prodi','<div class="text-danger small" ml-3>') ?>

		</div>


		<div class="form-group">
			<label>Nama JURUSAN</label>
			<select name="nama_jurusan" class="form-control">
				<option value="">-----PILIH JURUSAN ANDA-------</option>
				<?php foreach ($jurusan as $jrs) : ?>
					<option value="<?php echo $jrs->nama_jurusan?>"><?php echo $jrs->nama_jurusan; ?></option>
					 <?php endforeach; ?>
					</select>
					 <button type="submit" class="btn btn-primary">Simpan</button>
		</div>

	</form>

</div>
