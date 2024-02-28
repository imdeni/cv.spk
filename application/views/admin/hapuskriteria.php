<?php
	
	include 'onek.php';

	if (isset($_GET['nama'])) {
		$nama =$_GET['nama'];
		$n ='a'.$_GET['nama'];

		mysqli_query($dbcon,"DELETE FROM kriteria WHERE nama_kriteria = '$nama'");
		mysqli_query($dbcon,"DELETE FROM sub WHERE namasub = '$nama'");
		mysqli_query($dbcon,"DROP TABLE $n");
		
		echo "<script>alert('berhasil menghapus');
		location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/kriteria');
		</script>";

	}else{
		echo "<h1>Gagal Hapus</h1>";
	}

?>