<?php
session_start();
$nik               = $_SESSION['nik'];
$nama_lengkap      = $_SESSION['nama_lengkap'];
$tanggal           = $_POST['tanggal'];
$jam               = $_POST['jam'];
$lokasi            = $_POST['lokasi'];
$suhu              = $_POST['suhu'];
$lurah             = $_POST['lurah'];


$format ="\n$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu|$lurah";


// kita buka file konfg txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file confg
fclose($file);

?>
<script type="text/javascript">
  alert('Data catatan perjalanan sudah tersimpan');
  window.location.assign('pengaduan_siswa.php');
</script>

