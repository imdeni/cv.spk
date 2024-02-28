<?php
	
	include 'onek.php';

	if (isset($_GET['nama'])) {
		
		$nama = $_GET['nama'];

		mysqli_query($dbcon,"DELETE FROM user WHERE nama = '$nama'");
		mysqli_query($dbcon,"DELETE FROM penilaian WHERE nama = '$nama'");
		echo "<script>alert('berhasil menghapus');
		location.assign('http://localhost/project-portofolio/spk/index.php/baru/user');
		</script>";

	}else{
		echo "<h1>Gagal Hapus</h1>";
	}

?>