<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include 'onek.php';
    if (isset($_GET['v'])) {
        if ($_GET['v']==1) {
            $sqlnilai = "SELECT * FROM penilaian where validasi=1 LIMIT 0, 100";
        }else if ($_GET['v']==2) {
            $sqlnilai = "SELECT * FROM penilaian where validasi=2 LIMIT 0, 100";
        }else if ($_GET['v']==3) {
            $sqlnilai = "SELECT * FROM penilaian where validasi=1 or validasi=2 LIMIT 0, 100";
        }
    }

    if (isset($_GET['nama'])) {
        
        
        $nama = $_GET['nama'];
        
    $sql="SELECT * from penilaian where nama='$nama'";
    $db=mysqli_query($dbcon,$sql);
    while ($data=mysqli_fetch_array($db)) {
        $a=$data['nama'];
        $b=$data['np'];
        $c=$data['nk'];
        $d=$data['na'];
        $e=$data['jbd'];
        $f=$data['jbl'];
        $g=$data['harta'];

    }
    $sqll="SELECT * from user where nama='$nama'";
    $dbl=mysqli_query($dbcon,$sqll);
    while ($datal=mysqli_fetch_array($dbl)) {
        $aa=$datal['alamat'];
        $bb=$datal['username'];
        $cc=$datal['password'];
        

    }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->  
  
  <link rel="shortcut icon" href="<?php echo base_url('images/icon.ico'); ?>">
    <!--Import Google Icon Font-->
    <link href="<?php echo base_url('fonts/material.css'); ?>" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css'); ?>"  media="screen,projection"/>

  <style type="text/css">


  ::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }
  
  body {
    background-color: white;
    margin-top:10px; 
    margin-bottom:10px;
   right: auto;
    color: #4F5155;
  }
  table{
    width: 10px;
  }

  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;

  }

  h1 {
    color: white;
    background-color: transparent;
    font-size: 19px;
    font-weight: normal;
    
  }
  .kanan{
  position: absolute;
  top:auto;
  right: 0px;
  text-align: right;

}

  

 
table,td,tr,th,p{
    color:black;
    background-color: white;
    
    font-size: 20px;
}
  #container {
    margin: 1px;
  }
  #atas{
    margin-top: 50px;
  }
  #container1{

    color: white;
    margin-left: 50px;
    margin-bottom: 10px;
    margin-top: 10px;
    border: 1px solid blue;
    box-shadow: 0 0 8px blue;
  }
  #container2{
    color: white;
    margin-right: 50px;
    margin-bottom: 10px;
    margin-top: 10px;
    border: 1px solid blue;
    box-shadow: 0 0 8px blue;
  }
  .stl{
    font-weight: normal;
        font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/opensans/v27/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  
  </style>

  <style type="text/css">
    th{
        text-align: center;
        
    }
    img{
      position:absolute;
      top: 20px;
      left:200px;
      width: 100px;
      height: 100px;
    }

    table,td,tr,th{
        font-weight: normal;
        font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/opensans/v27/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
</style>

</head>


<body onload="window.print()">
      



<div class="col s12 m6 l6" >



    
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                          <img src="<?php echo base_url('assets/img/backgrounds/desa.png') ?>"><br>
                            <h1  style="color:black;"><center><b>PEMERINTAH KABUPATEN PEMALANG</b></center></h1>
                            <h1  style="color:black;"><center><b>KECAMATAN PEMALANG</b></center></h1>
                            <h1  style="color:black;"><center><b>DESA WANAMULYA</b></center></h1><br>
                            <hr style="border-color: black; border-width: 10px;">

                                <p style="text-align: right;margin-right: 10px;"><?php echo "Pemalang, ".date('d-M-Y'); ?></p><br>
                                
<center><p><b>SURAT LAPORAN </b></p></center>
<center><p><b>DAFTAR STATUS WARGA PENERIMA</b></p></center>
<center><p><b>PROGRAM KELUARGA HARAPAN (PKH)</b></p></center>
<br>
<br>
<p>Dengan adanya surat laporan ini menerangkan, bahwa nama – nama warga yang tercantum adalah warga yang  MENERIMA bantuan PKH di Desa Wanamulya, berikut nama – nama yang menerima:</p><br>

                            <table  class="table table-striped table-bordered table-hover" style="color:blue;" >
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                        <th>Nama</th>
                                        
                                        <th>No NIK</th>
                                        <th>No KK</th>
                                        <th>Alamat</th>
                                        <th>Tanggungan anak</th>
                                        <th>Penghasilan</th>
                                        <th>Status Lahan</th>
                                        <th>Jenis dinding</th>
                                        <th>Jenis lantai</th> 
                                        <th>Harta tambahan</th>
                                        <th>Hasil</th>
                                        <th>Status</th>
                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                    $n = 1 ;

                                    $sqljumlah ="SELECT SUM(bobot) FROM kriteria";
                                    $queryjumlah= mysqli_query($dbcon,$sqljumlah);
                                    $jumlah0=mysqli_fetch_array($queryjumlah);
                                    $jumlah = $jumlah0[0];
                                    
                                    // bobot
                                    $sqlkriteria ="SELECT bobot FROM kriteria";
                                    $querykriteria = mysqli_query($dbcon, $sqlkriteria);
                                    $bobot=[];
                                    while ($bariskriteria= mysqli_fetch_array($querykriteria)) {
                                        $bobot[]=$bariskriteria['bobot'];
                                    }
                                    // var_dump($bobot);die();
                                    //end bobot
                                    
                                    //nilai 
                                    
                                    $querynilai = mysqli_query($dbcon,$sqlnilai);

                                    

                                    while ($barisnilai=mysqli_fetch_array($querynilai)) {  
                                        //nama
                                        $nisn= $barisnilai['nama'];
                                        
                                        $sqlnama = "SELECT * FROM user where nama = '$nisn'";
                                        
                                        $usernya = mysqli_fetch_array(mysqli_query($dbcon,$sqlnama));
                                        //nilai
                                        $nilaijbd = $barisnilai['jbd']*($bobot[5]/$jumlah);
                                        $nilaijbl = $barisnilai['jbl']*($bobot[4]/$jumlah);
                                        $nilaiharta = $barisnilai['harta']*($bobot[3]/$jumlah);
                                        $nilaiP = $barisnilai['np']*($bobot[1]/$jumlah);
                                        $nilaiK = $barisnilai['nk']*($bobot[2]/$jumlah);
                                        $nilaiA = $barisnilai['na']*($bobot[0]/$jumlah);
                                        $nilaievaluasi = $nilaiP + $nilaiK +$nilaiA+$nilaijbl+$nilaiharta+$nilaijbd;
                                        if ($nilaievaluasi >= 2.25) {
                                            $hasill = "Diterima";
                                        }else{
                                            $hasill = "Tidak di terima";
                                        }
                                        
                                        $nilai1=$barisnilai['np'];
                                        if ($nilai1==2) {
                                            $nilainya1="Kurang lebih Rp 2.000.000";
                                        }else if ($nilai1==3) {
                                            $nilainya1="Kurang dari Rp 1.000.000";
                                        }else if ($nilai1==1) {
                                            $nilainya1="Lebih dari Rp 3.000.000";
                                        }

                                        $nilai2=$barisnilai['na'];
                                        if ($nilai2==2) {
                                            $nilainya2="Menyewa";
                                        }else if ($nilai2==3) {
                                            $nilainya2="Milik orang lain";
                                        }else if ($nilai2==1) {
                                            $nilainya2="Hak Milik";
                                        }

                                        $nilai3=$barisnilai['jbd'];
                                        if ($nilai3==2) {
                                            $nilainya3="Anyaman";
                                        }else if ($nilai3==3) {
                                            $nilainya3="Kayu";
                                        }else if ($nilai3==1) {
                                            $nilainya3="Tembok";
                                        }

                                        $nilai4=$barisnilai['jbl'];
                                        if ($nilai4==2) {
                                            $nilainya4="Ubin";
                                        }else if ($nilai4==3) {
                                            $nilainya4="Tanah";
                                        }else if ($nilai4==1) {
                                            $nilainya4="Keramik";
                                        }



                                        $nilai5=$barisnilai['harta'];
                                        if ($nilai5==2) {
                                            $nilainya5="Memiliki 2 Harta Tambahan";
                                        }else if ($nilai5==3) {
                                            $nilainya5="Kurang dari 2 Harta Tambahan";
                                        }else if ($nilai5==1) {
                                            $nilainya5="Lebih dari 3 Harta Tambahan";
                                        }
$nilai6=$barisnilai['np'];
                                        if ($nilai6==2) {
                                            $nilainya6="2 Tanggungan anak";
                                        }else if ($nilai6==3) {
                                            $nilainya6="Kurang dari 2 Tanggungan anak";
                                        }else if ($nilai6==1) {
                                            $nilainya6="Lebih dari 2 Tanggungan anak";
                                        }


                                        ?>
                                       
<div class="stl">
                                        <tr>

                                        <td><?=$n?></td>
                                        <td><?=$barisnilai['nama']?></td>
                                        
                                        <td><?=$usernya['username'] ?></td>
                                        <td><?=$usernya['password'] ?></td>
                                        <td><?=$usernya['alamat'] ?></td>
                                        <td><?php echo number_format((float)($nilaiP/0.5)*100, 2, '.', '');$h1=($nilai6/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilaiK/0.5)*100, 2, '.', '');$h2=($nilai1/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilaiA/0.5)*100, 2, '.', '');$h3=($nilai2/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilaijbd/0.5)*100, 2, '.', '');$h4=($nilai3/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilaijbl/0.5)*100, 2, '.', '');$h5=($nilai4/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilaiharta/0.5)*100, 2, '.', '');$h6=($nilai5/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilaievaluasi)/3*100, 2, '.', ''); ?></td>
                                        
                                        <td><?php
if ($barisnilai['validasi']==0) {
    echo "Belum divalidasi";
}else if ($barisnilai['validasi']==1) {
    echo "Diterima";
} else if ($barisnilai['validasi']==2) {
    echo "Belum diterima";
}

                                         ?></td>
                                        
                                        
                                        </tr></div>
                                        



                                    <?php    
                                    $n++;
                                    }
                                        
                                    ?>
                                    

                               
                                
                                    
                                </tbody>
                                        </table>
                                        <p>Demikian surat keterangan ini dibuat, agar menjadi perhatian dan bisa digunakan semestinya</p>
<div class="kanan">

<br>
<p>Pemalang, <?php echo date("d-M-Y"); ?></p> 
<p>Kepala Desa Wanamulya</p><br><br><br><br><br><br>
<img style="margin-left:-100px;margin-top: 80px;" src="<?php echo base_url('assets/img/backgrounds/ttd.png') ?>">
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRibut Triyono</p>
<br><br>

</div>

</div>                      
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


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

        


