<div class="container-fluid">
	  <div class="alert alert-success" role="alert">
   <i class="fas fa-university">FORM INPUT MAHASISWA</i>
       </div>

          <?php foreach($mahasiswa as $mhs) : ?>
       <?php echo form_open_multipart('administrator/mahasiswa/update_mahasiswa_aksi') ?>

            <div class="form-group">
			<label>NIM MAHASISWA</label>
			<input type="hidden" name="id"class="form-control" value="<?php echo $mhs->id ?>">
			<input type="text" name="nim"class="form-control" value="<?php echo $mhs->nim ?>">
			<?php echo form_error('nim','<div class="text-danger small ml-3">','</div') ?>
		</div>
  
        <div class="form-group">
			<label>NAMA MAHASISWA</label>
			<input type="text" name="nama_lengkap"class="form-control" value="<?php echo $mhs->nama_lengkap ?>">
			<?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">','</div') ?>
		</div>

		 <div class="form-group">
			<label>ALAMAT</label>
			<input type="text" name="alamat"class="form-control" value="<?php echo $mhs->alamat ?>">
			<?php echo form_error('alamat','<div class="text-danger small ml-3">','</div') ?>
		</div>

		 <div class="form-group">
			<label>EMAIL</label>
			<input type="text" name="email"class="form-control" value="<?php echo $mhs->email ?>">
			<?php echo form_error('email','<div class="text-danger small ml-3">','</div') ?>
		</div>

		 <div class="form-group">
			<label>TELEPON</label>
			<input type="text" name="telepon"class="form-control" value="<?php echo $mhs->telepon ?>">
			<?php echo form_error('telepon','<div class="text-danger small ml-3">','</div') ?>
		</div>

		 <div class="form-group">
			<label>TEMPAT LAHIR</label>
			<input type="text" name="tempat_lahir"class="form-control" value="<?php echo $mhs->tempat_lahir ?>">
			<?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">','</div') ?>
		</div>

		<div class="form-group">
			<label>TANGGAL LAHIR</label>
			<input type="date" name="tanggal_lahir"class="form-control" value="<?php echo $mhs->tanggal_lahir ?>">
			<?php echo form_error('tanggal_lahir','<div class="text-danger small ml-3">','</div') ?>
		</div>

		<div class="form-group">
			<label>JENIS KELAMIN</label>
			<select name="jenis_kelamin" class="form-control" value="<?php echo $mhs->jenis_kelamin ?>">
				<option value="">--Pilih Jenis Kelamin--</option>
				<option>Laki-Laki</option>
				<option>Perempuan</option>
			</select>
			<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div') ?>
		</div>
<div class="form-group">
			<label>PROGRAM STUDI</label>
			<select name="nama_prodi" class="form-control" value="<?php echo $mhs->nama_prodi ?>">>
				 <?php foreach ($prodi as $prd) : ?>
				<option value="<?php echo $prd->nama_prodi?>"><?php echo $prd->nama_prodi ?></option>
				<?php endforeach; ?>
			</select>
			<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div') ?>
		</div>


<div class="form-group">
	<?php foreach ($detail as $dt) : ?>
		<img src="<?php echo base_url(). 'assets/uploads/'.$mhs->photo ?>">
	       <?php endforeach; ?><br><br>
			<label>FOTO</label><br>
			<input type="file" name="userfile" value="<?php echo $mhs->photo ?>">
		</div>

		<button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>



<?php form_close(); ?>

<?php endforeach; ?>
   </div>