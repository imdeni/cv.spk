<!DOCTYPE html>

<?php
    include 'onek.php';
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
                        <!-- Menampilkan Tabel Data --><br>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data pengajuan
                                </div>
                                <div class="panel-body">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Warga" title="Type in a name">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                        <th>Nama</th>
                                        <th>KK</th>
                                        <th>KTP</th>
                                        <th>Nik</th>
                                        <th>No KK</th>
                                        <th>Alamat</th>
                                        <th>Tanggungan anak</th>
                                        <th>Penghasilan</th>
                                        <th>Status Lahan</th>
                                        <th>Jenis dinding</th>
                                        <th>Jenis lantai</th> 
                                        <th>Harta tambahan</th>
                                        <th>Status</th>
                                        <th>Validasi</th>
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
                                    $sqlnilai = "SELECT * FROM penilaian";
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
                                        if ($nilaievaluasi >= 2.1) {
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
                                        <?php if ($barisnilai['validasi']==0) {
                                        ?>

                                        <tr>

                                        <td><?=$n?></td>
                                        <td><?php echo $barisnilai['nama']; ?></td>
                                        <td><img src="<?php echo base_url('upload/').$barisnilai['ktp']; ?>" width="50" height="50"></td>
                                        <td><img src="<?php echo base_url('upload/').$barisnilai['kk']; ?>" width="50" height="50"></td>
                                        <td><?=$usernya['username'] ?></td>
                                        <td><?=$usernya['password'] ?></td>
                                        <td><?=$usernya['alamat'] ?></td>
                                        <td><?php echo number_format((float)($nilai6/3)*100, 2, '.', '');$h1=($nilai6/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilai1/3)*100, 2, '.', '');$h2=($nilai1/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilai2/3)*100, 2, '.', '');$h3=($nilai2/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilai3/3)*100, 2, '.', '');$h4=($nilai3/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilai4/3)*100, 2, '.', '');$h5=($nilai4/3)*100; ?></td>
                                        <td><?php echo number_format((float)($nilai5/3)*100, 2, '.', '');$h6=($nilai5/3)*100; ?></td>
                                        <td><?php echo number_format((float)($h1+$h2+$h3+$h4+$h5+$h6)/6, 2, '.', ''); ?></td>
                                        
                                        <td><form method="post"><button name="ya<?=$n?>">yes</button></form><form method="post"><button name="no<?=$n?>">no</button></form></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
 <?php 
     if (isset($_POST['ya'.$n])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=1 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datapengajuan');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }

if (isset($_POST['no'.$n])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=2 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datapengajuan');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }
     ?>




                                    <?php    
                                    $n++;
                                    }
                                        
                                    ?>
                                    

                               
                                
                                    
                                </tbody>
                                        </table>
                                    </div>
                                </div>

                        
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