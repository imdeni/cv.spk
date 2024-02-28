<?php
	
	include 'onek.php';

	if (isset($_GET['nama'])) {
		
		$nama = $_GET['nama'];

		mysqli_query($dbcon,"UPDATE sub SET nilai1='',nilai2='',nilai3='',sub1='',sub2='',sub3='' where namasub='$nama'");
		
		echo "<script>alert('berhasil menghapus');
		location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub');
		</script>";

	}else{
		echo "<h1>Gagal Hapus</h1>";
	}

?>