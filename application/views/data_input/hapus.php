<?php
	
	include 'onek.php';

	if (isset($_GET['nama'])) {
		
		$nama = $_GET['nama'];

		mysqli_query($dbcon,"DELETE FROM penilaian WHERE nama = '$nama'");
		echo "<script>confirm('berhasil menghapus beserta nilai');
		window.location.href='reload';
		</script>";

	}else{
		echo "<h1>Gagal Hapus</h1>";
	}

?>