<?php
error_reporting(0);
$NIK          =$_POST['nik'];
$NAMA_LENGKAP =$_POST['nama_lengkap'];

//cek apakah nik sudah terdatar
$data =file("config.txt",FILE_IGNORE_NEW_LINES);
foreach ($data as $value ) {
	$pecah = explode("|",$value);
	if($NIK==$pecah['0']){
		$cek = true;
	}
}

if($cek){ // jika sudah terdaftar ?>
	<script type="text/javascript">
		alert('maaf nik yang anda sudah terdaftar');
		window.location.assign('register.php');
	</script>

<?php }else{// jika data tidak ditemukan

$format = "\n$NIK|$NAMA_LENGKAP";

$file= fopen('config.txt','a');
fwrite($file, $format);
fclose($file);

?>
	<script type="text/javascript">
		alert('pendaftaran berhasil dilakukan');
		window.location.assign('index.php');
	</script>
<?php

}
