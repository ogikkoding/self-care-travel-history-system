<?php

$nik          = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];


$format = "$nik|$nama_lengkap";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);

if (in_array($format, $file)) {
	session_start();
	$_SESSION['nik'] = $nik;
	$_SESSION['nama_lengkap'] = $nama_lengkap;

	header("location:user.php");
} else { ?>
	<script type="text/javascript">
		alert('data anda salah');
		window.location.assign('index.php');
	</script>

<?php

}
