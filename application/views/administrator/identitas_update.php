<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-university">FORM UPDATE  IDENTITAS </i>
       </div>

       <?php foreach($identitas as $id) : ?>

        	<form method="post" action="<?php echo base_url('administrator/identitas/update_aksi') ?>">
		<div class="form-group">
			<label>JUDUL WEBSITE</label>
				<input type="hidden" name="id_identitas" class="form-control" value="<?php echo $id->id_identitas ?>">
			<input type="text" name="nama_website" class="form-control" value="<?php echo $id->nama_website ?>">
			<?php  echo form_error('nama_website','<div class="text-danger small" ml-3>') ?>

		
			<div class="form-group">
			<label>ALAMAT</label>
			<input type="text" name="alamat" class="form-control" value="<?php echo $id->alamat ?>">
			<?php  echo form_error('alamat','<div class="text-danger small" ml-3>') ?>

		</div>


			<div class="form-group">
			<label>NO . TELEPON</label>
			<input type="text" name="telp" class="form-control" value="<?php echo $id->telp ?>">
			<?php  echo form_error('telp','<div class="text-danger small" ml-3>') ?>

		</div>

		<div class="form-group">
			<label>EMAIL</label>
			<input type="text" name="email" class="form-control" value="<?php echo $id->email ?>">
			<?php  echo form_error('email','<div class="text-danger small" ml-3>') ?>

		</div>




     <button type="submit" class="btn btn-primary">Simpan</button>

	</form>

<?php endforeach; ?>
</div>