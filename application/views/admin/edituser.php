<!DOCTYPE html>

<?php
    include 'onek.php';
    if (isset($_GET['nama'])) {
        
        $nama = $_GET['nama'];
        
    $sql="SELECT * from user where nama='$nama'";
    $db=mysqli_query($dbcon,$sql);
    while ($data=mysqli_fetch_array($db)) {
        $a=$data['nama'];
        $b=$data['alamat'];
        $c=$data['username'];
        $d=$data['password'];

    }
    }
?>

<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url('css/fa/css/font-awesome.min.css') ?>">

  <title></title>
</head>





<body>
<br>
<div class="container">
<div class="col s12 m6 l6" >
<div class="card blue-grey lighten-5" >

<div class="card-content blue-text text-darken-2" style="padding-top:10px; padding-right: 100px;padding-left: 100px;padding-bottom: 10px;">



</div>
                        <!-- Tabel Data -->
                        <div class="col-lg-12">
                            <p>Edit data</p>
    <form action="" method="post">
        <label>Nama</label>
    <input type="text" name="namauser" value="<?php echo $a; ?>" /required>
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?php echo $b; ?>" /required>
    <label>No Nik</label>
    <input type="number" name="no_nik" value="<?php echo $c; ?>" /required>
    <label>No KK</label>
    <input type="number" name="no_kk" value="<?php echo $d; ?>" /required>

    <button name="simpan">Simpan edit data</button><br><br>
    </form>
    <?php 
     if (isset($_POST['simpan'])) {
      $namauser   = $_POST['namauser'];
      $alamat   = $_POST['alamat'];
      $nik   = $_POST['no_nik'];
      $kk   = $_POST['no_kk'];
      $sqlsimpan = "UPDATE user SET nama='$namauser',alamat='$alamat',username=$nik,password=$kk where nama='$nama'";

      $querysimpan = mysqli_query($dbcon,$sqlsimpan);

      $z = "UPDATE penilaian SET nama='$namauser' where nama='$nama'";

      $z = mysqli_query($dbcon,$z);

      if ($querysimpan) {
        echo "<script>alert('berhasil edit data');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }
     ?>
    </div></div></div></div>

                        
</div>
</div>
</div>
</body>
</html>

<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('js/metisMenu.min.js'); ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo base_url('js/raphael.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/morris.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/morris-data.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('js/startmin.js'); ?>"></script>

<script>