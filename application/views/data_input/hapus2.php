<?php
	
	include 'onek.php';

	if (isset($_GET['nama'])) {
		
		$nama = $_GET['nama'];

		mysqli_query($dbcon,"DELETE FROM user WHERE nama = '$nama'");
		echo "<script>confirm('berhasil menghapus');
		window.location.href='';
		</script>";

	}else{
		echo "<h1>Gagal Hapus</h1>";
	}

?>