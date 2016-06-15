<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3> Surat Masuk </h3>
      </div>
      <!-- Kepala box -->
      <div class="box-body">
        <div id="inbox2" class="dataTables_wrapper form-inline dt-bootstrap">
          <div class="row">
            <div class="col-sm-6">
              <div class="dataTables_length" id="inbox2_length">
                <label>
                  Menampilkan
                  <select name="inbox2_length" aria-control="inbox2" class="form-control input-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                   kolom
                </label>
              </div>
            </div>
            <div class="col-sm-12">
        <table id="inbox2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="inbox2_info">
          <thead>
            <tr>
	           <th>No</th>
	            <th>Tanggal Masuk</th>
	            <th>Nomor Surat</th>
	             <th>Asal</th>
	              <th>Judul Surat</th>
	               <th>Status</th>
	                <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
	<?php
	$no=0;
	$sql = mysql_query("SELECT * FROM surat_masuk ORDER BY id_surat_masuk DESC");
	while($view = mysql_fetch_array($sql)) {
		$no++;
		?>
		<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $view['tgl_terima']?></td>
		<td><?php echo $view['no_surat_masuk']?></td>
		<td><?php echo $view['asal_surat_masuk']?></td>
		</tr>
		<?php
	}
	?>
</tbody>
</table>
<!--
<script>
  $(function () {
    $("#inbox1").DataTable();
    $('#inbox2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</br>
<a href="?page=inbox_add" class="btn btn-danger">Tambah Data</a>
-->
