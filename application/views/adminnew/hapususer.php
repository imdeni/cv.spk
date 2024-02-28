<?php
	
	include 'onek.php';

	if (isset($_GET['nama'])) {
		
		$nama = $_GET['nama'];

		

	mysqli_query($dbcon,"DELETE FROM user WHERE nama = '$nama'");
		mysqli_query($dbcon,"DELETE FROM penilaian WHERE nama = '$nama'");
		$y=0;
		$krr="SELECT * FROM kriteria";
		$k=mysqli_query($dbcon, $krr);
		while ($kk=mysqli_fetch_array($k)) {
			$kr[]=strtolower('a'.str_replace(' ', '_', $kk['nama_kriteria']));	
			mysqli_query($dbcon,"DELETE FROM $kr[$y] WHERE user = '$nama'");
			$y++;
			

			echo "<script>confirm('berhasil menghapus');
		location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/baru/user');
		</script>";
		}
	}

		

?>