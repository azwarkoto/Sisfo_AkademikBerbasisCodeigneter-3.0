<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-eye">DETAIL DOSEN </i>
       </div>

        <table class="table table-hover table-striped table-bordered">
        	<?php foreach ($detail as $dt) : ?>

        		<img  class="mb-4" src="<?php echo base_url('assets/uploads/').$dt->photo?>" style="width: 20%">
    <tr>
     	<th>NIDN</th>
     	<td><?php echo $dt->nidn; ?></td>

    </tr>


     <tr>
     	<th>NAMA DOSEN</th>
     	<td><?php echo $dt->nama_dosen; ?></td>

    </tr>

 <tr>
     	<th>ALAMAT</th>
     	<td><?php echo $dt->alamat; ?></td>

    </tr>

     <tr>
     	<th>EMAIL</th>
     	<td><?php echo $dt->email; ?></td>

    </tr>

     <tr>
     	<th>Jenis Kelamin</th>
     	<td><?php echo $dt->jenis_kelamin; ?></td>

    </tr>

     <tr>
     	<th>Email</th>
     	<td><?php echo $dt->email; ?></td>

    </tr>

     <tr>
     	<th>NO . TELEPON</th>
     	<td><?php echo $dt->telp; ?></td>

    </tr>


<?php endforeach; ?>
     	</table>
     	<?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary">KEMBALI </div>')?> 
</div>