<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-plus">FROM UPDATE DATA KRS </i>
       </div>
       <form method="post" action="<?php echo base_url('administrator/krs/update_aksi') ?>">

       	<div class="form-group">
    		<label>TAHUN AKADEMIK</label>
       		<input type="hidden" name="id_thn_akad" class="form-control" value="<?php echo $id_thn_akad; ?>">
       		<input type="hidden" name="id_krs" class="form-control" value="<?php echo $id_krs; ?>">
       		<input type="text" name="thn_akad_smt" class="form-control" value="<?php echo $thn_akad_smt. '/' .$semester; ?>"readonly/>
 </div>
	<div class="form-group">
    		<label>NIM MAHASISWA</label>
       		<input type="text" name="nim" class="form-control" value="<?php echo $nim; ?>"readonly/>
 </div>

  <div class="form-group">
  	<label>MATAKULIAH</label>
  	<?php 
  	$query = $this->db->query('SELECT kode_matakuliah,nama_matakuliah FROM matakuliah');
	$dropdowns = $query->result();
  	foreach($dropdowns as $dropdown){
  		$dropDownsList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
	}
	 echo form_dropdown('kode_matakuliah', $dropDownsList,$kode_matakuliah, 'class="form-control" id="kode_matakuliah"');
  	?>
  </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
   <?php echo anchor('administrator/krs/krs_aksi','<div class="btn
    btn-danger"> CANCEL </div>') ?>
</form>
</div>