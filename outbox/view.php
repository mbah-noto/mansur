<h2>Outbox (Surat Keluar)</h2>
<table class="table table-striped">
  <tr>
	<th>No</th>
	<th>Tanggal Keluar</th>
	<th>Nomor Surat</th>
	<th>Tujuan Surat</th>
	<th>Isi Surat</th>  
  </tr>
	<?php
	$no=0;
	$sql = mysql_query("SELECT * FROM surat_keluar_baru");
	while($view = mysql_fetch_array($sql)) {
		$no++;
		?>
		<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $view['tgl_keluar']?></td>
		<td><?php echo $view['no_surat_keluar']?></td>
		<td><?php echo $view['tujuan_surat_keluar']?></td>
		<td><?php echo $view['hal_surat_keluar']?></td>		
		</tr>		
		<?php
	}
	?>  
  
</table>
<a href="?page=compose" class="btn btn-primary">Buat Surat</a>