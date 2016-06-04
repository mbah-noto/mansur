<?php
$asal = $_POST['asal'];
$nomor = $_POST['nomor'];
$hal = $_POST['hal'];
$kategori = $_POST['kategori'];

$sql = mysql_query("INSERT INTO surat_masuk (asal_surat_masuk,no_surat_masuk,hal_surat_masuk,kategori_surat_masuk) VALUES($asal,$nomor,$hal,$kategori)");
if($sql) {
	echo "Selamat data berhasil disimpan";
} else {
	echo "Maaf anda gagal menyimpan data";
}
?>