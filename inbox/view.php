<table class="table table-striped">
  <tr>
	<th>No</th>
	<th>Tanggal Masuk</th>
	<th>Nomor Surat</th>
	<th>Asal</th>
	<th>Isi Surat</th>
	<th>Kategori</th>  
  </tr>
	<?php
	$no=0;
	$sql = mysql_query("SELECT * FROM surat_masuk");
	while($view = mysql_fetch_array($sql)) {
		$no++;
		?>
		<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $view['tgl_terima']?></td>
		<td><?php echo $view['no_surat_masuk']?></td>
		<td><?php echo $view['asal_surat_masuk']?></td>
		<td><?php echo $view['hal_surat_masuk']?></td>
		<td><?php echo $view['kategori_surat_masuk']?></td>		
		</tr>		
		<?php
	}
	?>  
  
</table>
<a href="?page=inbox_add" class="btn btn-danger">Tambah Data</a>