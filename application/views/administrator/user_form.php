<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-university">FORM TAMBAH  USERS </i>
       </div>

        	<form method="post" action="<?php echo base_url('administrator/user/tambah_user_aksi') ?>">
		<div class="form-group">
			<label>USERNAME</label>
			<input type="text" name="username"placeholder="Masukan USERNAME" class="form-control">
			<?php  echo form_error('username','<div class="text-danger small" ml-3>') ?>

		</div>


			<div class="form-group">
			<label>PASSWORD</label>
			<input type="text" name="password" placeholder="Masukan PASSWORD" class="form-control">
			<?php  echo form_error('password','<div class="text-danger small" ml-3>') ?>

		</div>

		<div class="form-group">
			<label>EMAIL</label>
			<input type="text" name="email"placeholder="Masukan Email" class="form-control">
			<?php  echo form_error('email','<div class="text-danger small" ml-3>') ?>

		</div>

		<div class="form-group">
			<label>Level</label>
			<select name="level" class="form-control">
		    <?php

		    if($level == 'admin'){
		    ?>
		    <option value="admin"selected>ADMIN</option>
		    <option value="mahasiswa">MAHASISWA</option>

		    <?php
		} elseif($level == 'mahasiswa'){
		?>

		    <option value="admin">ADMIN</option>
		    <option value="mahasiswa"selected>MAHASISWA</option>

		    <?php
		} else{
		?>
		  <option value="admin">ADMIN</option>
		    <option value="mahasiswa">MAHASISWA</option>

		<?php } ?>
		</select>
			<?php  echo form_error('level','<div class="text-danger small" ml-3>') ?>

		</div>


		<div class="form-group">
			<label>BLOKIR</label>
			<select name="blokir" class="form-control">
		    <?php

		    if($blokir == 'Y'){
		    ?>
		    <option value="Y">Ya</option>
		    <option value="N" selected>Tidak</option>

		    <?php
		} elseif($blokir == 'N'){
		?>

		    <option value="Y">YA</option>
		    <option value="N" selected=>Tidak</option>

		    <?php
		} else{
		?>
		  <option value="Y">YA</option>
		    <option value="N">TIDAK</option>

		<?php } ?>
		</select>
			<?php  echo form_error('blokir','<div class="text-danger small" ml-3>') ?>

		</div>



     <button type="submit" class="btn btn-primary">Simpan</button>

	</form>
</div>