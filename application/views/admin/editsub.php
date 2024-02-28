<!DOCTYPE html>

<?php
    include 'onek.php';
    if (isset($_GET['nama'])) {
        
        $nama = $_GET['nama'];
        
    $sql="SELECT * from sub where namasub='$nama'";
    $db=mysqli_query($dbcon,$sql);
    while ($data=mysqli_fetch_array($db)) {
        $a= $data['sub1'];
        $b= $data['nilai1'];
        $c= $data['sub2'];
        $d= $data['nilai2'];
        $e= $data['sub3'];
        $f= $data['nilai3'];
        
        

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
                            <p>Edit data <?php echo $nama;?></p>
    <form action="" method="post">
    <label style="color: black;">Nama sub 1</label>
    <input type="text" name="s1" value="<?php echo $a; ?>" placeholder="Nama sub 1" >
    <label style="color: black;">Nilai Bobot 1</label>
    <input type="number" name="n1" value="<?php echo $b; ?>" placeholder="nilai bobot 1">
    <label style="color: black;">Nama sub 2</label>
    <input type="text" name="s2" value="<?php echo $c; ?>" placeholder="Nama sub 2">
    <label style="color: black;">Nilai Bobot 2</label>
    <input type="number" name="n2" value="<?php echo $d; ?>" placeholder="nilai bobot 2">
    <label style="color: black;">Nama sub 3</label>
    <input type="text" name="s3" value="<?php echo $e; ?>" placeholder="Nama sub 3">
    <label style="color: black;">Nilai Bobot 3</label>
    <input type="number" name="n3" value="<?php echo $f; ?>" placeholder="nilai bobot 3">
    <button name="simpan">Simpan edit data</button><br><br>
    </form>
    <?php 
     if (isset($_POST['simpan'])) {
      
      $n1   = $_POST['n1'];
      $n2   = $_POST['n2'];
      $n3   = $_POST['n3'];
      $s1   = $_POST['s1'];
      $s2   = $_POST['s2'];
      $s3   = $_POST['s3'];
      
    if ($n1 >=1 && $n1<=3 && $n2 >=1 && $n2<=3 && $n3 >=1 && $n3<=3) {
        if ($s1!='' && $s2!='' && $s3!='') {
            $sqlsimpan = "UPDATE sub SET nilai1='$n1',sub1='$s1',nilai2='$n2',sub2='$s2',nilai3='$n3',sub3='$s3' where namasub='$nama'";
        $querysimpan = mysqli_query($dbcon,$sqlsimpan);
        if ($querysimpan) {
            echo "<script>alert('berhasil edit data');
            location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub');
            </script>";
        }else{
            echo "<script>alert('Gagal Edit data')</script>";
        }
        }else{
            echo "<script>alert('Nama sub 1, atau 2 , atau 3 tidak boleh kosong');
          location.assign='https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub';
          </script>";
        }
        
    }else if ($n1 >=1 && $n1<=3 && $n2 >=1 && $n2<=3 ) {
        if ($s1!='' && $s2!='') {
            $sqlsimpan = "UPDATE sub SET nilai1='$n1',sub1='$s1',nilai2='$n2',sub2='$s2' where namasub='$nama'";
        $querysimpan = mysqli_query($dbcon,$sqlsimpan);
        if ($querysimpan) {
            echo "<script>alert('berhasil edit data');
            location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub');
            </script>";
        }else{
            echo "<script>alert('Gagal Edit data')</script>";
        }
        }else{
            echo "<script>alert('Nama sub 1, atau 2 tidak boleh kosong');
          location.assign='https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub';
          </script>";
        }
        
    }else if ($n1 >=1 && $n1<=3 ) {
        if ($s1!='') {
            $sqlsimpan = "UPDATE sub SET nilai1='$n1',sub1='$s1' where namasub='$nama'";
        $querysimpan = mysqli_query($dbcon,$sqlsimpan);
        if ($querysimpan) {
            echo "<script>alert('berhasil edit data');
            location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub');
            </script>";
        }else{
            echo "<script>alert('Gagal Edit data')</script>";
        }
        }else{
            echo "<script>alert('Nama sub 1 tidak boleh kosong');
          location.assign='https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub';
          </script>";
        }
        
    }else{
        echo "<script>alert('Nilai bobot harus 1, 2, atau 3');
          location.assign='https://deniachmad.com/project-portofolio/spk/index.php/Admin/sub';
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