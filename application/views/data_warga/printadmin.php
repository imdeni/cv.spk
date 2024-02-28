<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include 'onek.php';
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
    
    color: #4F5155;
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
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/opensans/v27/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    
  }

  

 
table,td,tr,th,p{
    color:black;
    background-color: white;
    font-weight: normal;
        font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/opensans/v27/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
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


  
  </style>

  <style type="text/css">
    
    img{
      position:absolute;
      top: 20px;
      left:200px;
      width: 100px;
      height: 100px;
    }
    .kanan{
  position: absolute;
  top:auto;
  right: 0px;
  text-align: right;
}
    table,td,tr,th{
        font-weight: normal;
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
                            <br>
                            <h1 style="color:black;font-size: 20px;"><center><b>SURAT KETERANGAN</b></center></h1>
                            <h1 style="color:black;font-size: 20px;"><center><b>PENERIMA PROGRAM KELUARGA HARAPAN (PKH)</b></center></h1>
                            <br>



<br>
                            <table >
                                <tr>
                                <td><p>Yang bertanda tangan di bawah ini :</p></td></tr>
                              <tr>
                               
                                <th width="300">Nama</th>
                                <th>: Ribut Triyono</th>
                                
                              </tr>
                              <tr>
                                  <th width="300">Jabatan</th>
                                <th>: Kepala Desa</th>
                              </tr>

                              
                              <tr>
                                  <th width="300">Unit kerja</th>
                                <th>: Kelurahan Wanamulya</th>
                              </tr>
                              <tr>


                                <tr>
                                  <th width="300">Alamat unit kerja</th>
                                <th>: Jl. Langsep, no.1 , RT. 001 /001, Desa Wanamulya, Pemalang</th>
                              </tr>

                              <tr>
                                <td><p>Menyatakan bahwa,</p></td> 
                              </tr>



                              <tr>
                                <th>Nama</th>
                                <th>: <?php echo $nama; ?></th>
                              </tr>
                              <tr>
                                <th>NIK</th>
                                <th>: <?php echo $bb; ?></th>
                              </tr>
                              <tr>
                                <th>KK</th>
                                <th>: <?php echo $cc; ?></th>
                              </tr>
                              <tr>
                                <th>Alamat</th>
                                <th>: <?php echo $aa; ?></th>
                              </tr>
                              <table>
                                  <tr><td>Warga tersebut benar – benar terdaftar sebagai pepserta penerima PKH di Desa Wanamulya, berikut hasil dari kriteria – kriteria yang ditentukan:</td></tr>
                              </table>
                              
                            </table><br>
                        <div class="col-lg-12">

                          <table class="table table-striped table-bordered table-hover">
    <tbody></tbody>
    <tr>
      <th>No</th>
      <th>Kriteria</th>
      <th>Keterangan</th>
      <th>Bobot</th>
    </tr>
    <?php
    $n=1;
    $nn=0;
        $y=$this->session->userdata('nama');
        $a ="SELECT * FROM kriteria";
        $b = mysqli_query($dbcon, $a);
        $isi=[];
        $ny=[];
        while ($c= mysqli_fetch_array($b)) { 
          $isi[]=$c['nama_kriteria'];
          $g2 = "SELECT * FROM sub where namasub='$isi[$nn]'";

          $data='a'.str_replace(' ', '_', $c['nama_kriteria']);

          $ab1="SELECT * FROM $data where user='$nama'";
          $ab2 = mysqli_query($dbcon, $ab1);
           while ($c1= mysqli_fetch_array($ab2)) {
            $h2 = mysqli_query($dbcon,$g2);
            while ($i2=mysqli_fetch_array($h2)) {

                                            if ($c1['n1']==$i2['nilai1']) {
                                                $ket=$i2['sub1'];
                                                $ket2=($c1['n1']/3)*100;
                                            }else if ($c1['n1']==$i2['nilai2']) {
                                                $ket=$i2['sub2'];
                                                $ket2=($c1['n1']/3)*100;
                                            }else if ($c1['n1']==$i2['nilai3']) {
                                                $ket=$i2['sub3'];
                                                $ket2=($c1['n1']/3)*100;
                                            }

                                            
                                            if ($c1['n1']!=0) {
                                                

                                                $ny[] = ($c1['n1']/3)*100;
                                                
                                                
                                            }
          ?>

    <tr>
      <td><?php echo $n; ?></td>
      <td><?php echo $c['nama_kriteria']; ?></td>
      <td><?php echo $ket; ?></td>
      <td style="text-align: center;"><?php echo number_format((float)$ket2, 2, '.', ''); ?></td>
      </tr>
    <?php $n++;$nn++;}}}
    if ($ny[9]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3]+$ny[4]+$ny[5]+$ny[6]+$ny[7]+$ny[8]+$ny[9];
                                        
                                    }else if ($ny[8]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3]+$ny[4]+$ny[5]+$ny[6]+$ny[7]+$ny[8];
                                        
                                    }else if ($ny[7]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3]+$ny[4]+$ny[5]+$ny[6]+$ny[7];
                                        
                                    }else if ($ny[6]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3]+$ny[4]+$ny[5]+$ny[6];
                                        
                                    }
                                    else if ($ny[5]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3]+$ny[4]+$ny[5];
                                        
                                        
                                    }else if ($ny[4]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3]+$ny[4];
                                        
                                        
                                    }else if ($ny[3]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2]+$ny[3];
                                        
                                        
                                    }else if ($ny[2]==true) {
                                        $evaluasi=$ny[0]+$ny[1]+$ny[2];
                                        
                                        
                                    }else if ($ny[1]==true) {
                                        $evaluasi=$ny[0]+$ny[1];
                                        
                                    }else if ($ny[0]==true) {
                                        $evaluasi=$ny[0];

                                         
                                    }
                                    
                                        $hasil=$evaluasi/$nn;
                                        if ($hasil>=75 && $hasil<=100) {
                                          $hasil2='DITERIMA';
                                        }else{
                                          $hasil2="DITOLAK";
                                        }
                                        
                                      
     ?><tr>
      <th colspan ="5"><center>Total : <?php echo number_format((float)$hasil, 2, '.', '');  ?>, <?php echo $hasil2; ?></center></th>
    
    
    </tr>
  </table><br>
<h1 class="margin-left" style="color:black;">Keterangan : </h1>
<h1 class="margin-left" style="color:black;">Nilai 0 - 75 ditolak</h1>
<h1 class="margin-left" style="color:black;">Nilai 75 - 100 diterima</h1>


<br>
<p>Demikian surat keterangan ini dibuat, agar menjadi perhatian dan bisa digunakan semestinya</p>


<div class="kanan">

<br>
<p>Pemalang, <?php echo date("d-M-Y"); ?></p> 
<p>Kepala Desa Wanamulya</p><br><br><br><br><br><br>
<img style="margin-left:-100px;margin-top: 80px;" src="<?php echo base_url('assets/img/backgrounds/ttd.png') ?>">
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRibut Triyono</p>
<br><br>

</div>
<br>
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

        