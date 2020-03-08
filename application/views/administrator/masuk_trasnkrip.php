<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-university">From Masuk Halaman Transkrip Nilai </i>
       </div>

        <form method="post" action="<?php echo base_url('administrator/transkrip_nilai/buat_transkrip_aksi')?>">
        	 <div class="form-group">
      	<label>Nim</label>
      	<input type="text" name="nim" placeholder="Masukan Nim Mahasiswa " class="form-control">

      	<?php echo form_error('nim','<div class="text-danger small ml-2">','</div>') ?>
</div>
 <button type="submit" class="btn btn-primary">Proses</button>
        </form>
    </div>
