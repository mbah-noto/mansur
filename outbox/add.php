<form class="form-horizontal" action="?page=inbox_save" method="POST">
  <div class="form-group">
    <label for="AsalSurat" class="col-sm-2 control-label">Tujuan Surat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="asal" placeholder="Asal Surat Masuk">
    </div>
  </div>
    <div class="form-group">
    <label for="NomorSurat" class="col-sm-2 control-label">Nomor Surat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomor" placeholder="Nomor Surat Masuk">
    </div>
  </div>
    <div class="form-group">
    <label for="HalSurat" class="col-sm-2 control-label">Isi Surat</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="hal" placeholder="Isikan secara singkat isi dari surat" rows="5"></textarea>
    </div>
  </div>
      <div class="form-group">
    <label for="CategorySurat" class="col-sm-2 control-label">Kategori Surat</label>
    <div class="col-sm-10">
    <select class="col-xs-3 form-control" name="kategori"> 
        <option selected="selected">Pilih Kategori</option>
        <option>Undangan</option>
        <option>Pemberitahuan</option>
        <option>Pengumuman</option>
        <option>Permohonan</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Simpan</button>
      <button type="Reset" class="btn btn-warning">Reset</button>
    </div>
  </div>
</form>