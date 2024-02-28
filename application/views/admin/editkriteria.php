<!DOCTYPE html>

<?php
    include 'onek.php';
    if (isset($_GET['nama'])) {
        
        $nama = $_GET['nama'];
        
    $sql="SELECT * from kriteria where nama_kriteria='$nama'";
    $db=mysqli_query($dbcon,$sql);
    while ($data=mysqli_fetch_array($db)) {
        $a=$data['nama_kriteria'];
        $b=$data['bobot'];
        

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
                            <p>Edit data <?php echo $a;?></p>
    <form action="" method="post">
    <input type="text" name="namakriteria" value="<?php echo $a; ?>" /required>
    <input type="number" name="bobotkriteria" value="<?php echo $b; ?>" /required>
    <button name="simpan">Simpan edit data</button><br><br>
    
    </form>
    <?php 
     if (isset($_POST['simpan'])) {
      $namakriteria   = strtolower($_POST['namakriteria']);
      $bobotkriteria   = $_POST['bobotkriteria'];
      $data='a'.str_replace(' ', '_', $namakriteria);
      $satu='a'.str_replace(' ', '_', $a);


    if ($bobotkriteria >=1 && $bobotkriteria<=3) {
        $sqlsimpan = "UPDATE kriteria SET nama_kriteria='$namakriteria',bobot=$bobotkriteria where nama_kriteria='$nama'";
        $querysimpan = mysqli_query($dbcon,$sqlsimpan);
        $a = "UPDATE sub SET namasub='$namakriteria' where namasub='$nama'";
        $b = mysqli_query($dbcon,$a);
        
        $q = mysqli_query($dbcon,"RENAME TABLE $satu TO $data");
        if ($querysimpan) {
            echo "<script>alert('berhasil edit data');
            location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/kriteria');
            </script>";
        }else{
            echo "<script>alert('Gagal Edit data')</script>";
        }
      }else{
        echo "<script>alert('Nilai bobot harus 1, 2, atau 3');
          location.assign='https://deniachmad.com/project-portofolio/spk/index.php/Admin/kriteria';
          </script>";
        
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