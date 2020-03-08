<div class="container-fluid">

	 <div class="alert alert-success" role="alert">
   <i class="fas fa-university">INFORMASI </i>
       </div>


          <?php echo $this->session->flashdata('pesan') ?>

        <?php echo anchor('administrator/informasi/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"></i>Tambah INFORMASI </button>') ?>

	 <table class="table table-bordered table-striped table-hover">
     <tr>
     	<th>NO</th>
     	<th>ICON</th>
        <th>JUDUL INFORMASI</th>
         <th>ISI INFORMASI</th>
        <th colspan="2">Aksi</th>

    </tr>

      <?php
    $no = 1;
    foreach ($informasi as $info) : ?>
    	<tr>
    		<td width="20px"><?php echo $no++ ?></td>
    		<td><?php echo $info->icon ?></td>
    		<td><?php echo $info->judul_informasi ?></td>
    		<td><?php echo $info->isi_informasi ?></td>
    		<td width="20px"><?php echo anchor('administrator/informasi/update/'. $info->id_informasi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    	    <td width="20px"><?php echo anchor('administrator/informasi/delete/'. $info->id_informasi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>

    	</tr>
    	 <?php endforeach; ?>
</table>

<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>