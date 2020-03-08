<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-university">DETAIL MATA KULIAH </i>
       </div>

        <table class="table table-hover table-striped table-bordered">
        	<?php foreach ($detail as $dt) : ?>
     <tr>
     	<th>KODE MATA KULIAH</th>
     	<td><?php echo $dt->kode_matakuliah; ?></td>

    </tr>

       <tr>
     	<th>NAMA MATA KULIAH</th>
     	<td><?php echo $dt->nama_matakuliah; ?></td>

    </tr>

       <tr>
     	<th>SKS</th>
     	<td><?php echo $dt->sks; ?></td>

    </tr>

       <tr>
     	<th>SEMESTER</th>
     	<td><?php echo $dt->semester; ?></td>

    </tr>

       <tr>
     	<th>PROGRAM STUDI</th>
     	<td><?php echo $dt->nama_prodi; ?></td>

    </tr>

<?php endforeach; ?>

</table>

<?php echo anchor('administrator/matakuliah','<div class="btn btn-sm btn-primary">KEMBALI </div>')?> 
</div>