<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-university">FORM UPDATE  TENTANG KAMPUS </i>
       </div>

       <?php foreach($tentang_kampus as $ttg) : ?>

        	<form method="post" action="<?php echo base_url('administrator/tentang_kampus/update_aksi') ?>">
		<div class="form-group">
			<label>SEJARAH</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $ttg->id ?>">
			<input type="text" name="sejarah" class="form-control" value="<?php echo $ttg->sejarah ?>">
			<?php  echo form_error('sejarah','<div class="text-danger small" ml-3>') ?>

		
			<div class="form-group">
			<label>VISI</label>
			<input type="text" name="visi" class="form-control" value="<?php echo $ttg->visi ?>">
			<?php  echo form_error('visi','<div class="text-danger small" ml-3>') ?>

		</div>


			<div class="form-group">
			<label>MISI</label>
			<input type="text" name="misi" class="form-control" value="<?php echo $ttg->misi ?>">
			<?php  echo form_error('misi','<div class="text-danger small" ml-3>') ?>

		</div>

		




     <button type="submit" class="btn btn-primary">Simpan</button>

	</form>

<?php endforeach; ?>
</div>