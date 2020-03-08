<div class="container-fluid">

	<center>
		<legend><strong>TRANSKRIP NILAI</strong></legend>

		<table>
			<tr>
				<td>NIM</td>
				<td>: <?php echo $nim; ?></td>
			</tr>

				<td>NAMA</td>
				<td>: <?php echo $nama; ?></td>
			</tr>

				<td>Program Studi</td>
				<td>: <?php echo $prodi; ?></td>
			</tr>
		</table>
	</center>

	<table class="table table-striped table-hover table-bordered mt-3">
		<tr>
			<th>NO</th>
			<th>KODE MATA KULIAH</th>
			<th>NAMA MATA KULIAH</th>
			<th>SKS</th>
			<th>NILAI</th>
			<th>SKOR</th>
		</tr>

		<?php
		$no=1;
		$JSks=0;
		$JSkor=0;

		foreach($transkrip as $tr) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $tr->kode_matakuliah ?></td>
			<td><?php echo $tr->nama_matakuliah ?></td>
			<td align="center"><?php echo $tr->sks ?></td>
			<td align="center"><?php echo $tr->nilai ?></td>
			<td align="center"><?php echo skorNilai($tr->nilai,$tr->sks); ?></td>

           <?php

           $JSks+=$tr->sks;
           $JSkor+=skorNilai($tr->nilai,$tr->sks);

           ?>

		</tr>

		<?php endforeach; ?>

		<tr>

			<td colspan="3">Jumlah</td>
			<td align="center"><?php echo $JSks ?></td>
			<td align="center"></td>
			<td align="center"><?php echo $JSkor ?></td>
		</tr>


	</table>

	<p class="text-center">Indeks Presentasi Kumulatif : <?php echo number_format($JSkor/$JSks,2) ?></p>
</div>