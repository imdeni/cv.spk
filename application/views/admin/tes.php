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
                                    <br>
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
<?php 
$a ="SELECT * FROM sub";
$b = mysqli_query($dbcon, $a);
while ($c= mysqli_fetch_array($b)) {
echo "<th>".$c['namasub']."</th>";
}
 ?>
                                        <th>Status</th>
                                        <th>Validasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                    $no = 1 ;
                                    $y = 0 ;

                                    $sqljumlah ="SELECT SUM(bobot) FROM kriteria";
                                    $queryjumlah= mysqli_query($dbcon,$sqljumlah);
                                    $jumlah0=mysqli_fetch_array($queryjumlah);
                                    $jumlah = $jumlah0[0];
                                    
                                    $sqlnilai = "SELECT * FROM penilaian";
                                    $querynilai = mysqli_query($dbcon,$sqlnilai);

                                    

                                    while ($barisnilai=mysqli_fetch_array($querynilai)) {  
                                        //nama

                                        
                                        
                                     $no++;   

                                        $nisn= $barisnilai['nama'];
                                        $z=$barisnilai['validasi'];
                                        $zz=$barisnilai['id_penilaian'];
                                        
                                        $sqlnama = "SELECT * FROM user where nama = '$nisn'";
                                        
                                        $usernya = mysqli_fetch_array(mysqli_query($dbcon,$sqlnama));
                                        
                                        ?>
                                        
                                        <?php
                                        
                                        if ($barisnilai['validasi']==0){ ?>
                                            <tr>

                                        <td><?php echo $no; ?></td>
                                        <td><?=$barisnilai['nama']?></td>
                                        <td><img src="<?php echo base_url('upload/').$barisnilai['ktp']; ?>" width="50" height="50"></td>
                                        <td><img src="<?php echo base_url('upload/').$barisnilai['kk']; ?>" width="50" height="50"></td>
                                        <td><?=$usernya['username'] ?></td>
                                        <td><?=$usernya['password'] ?></td>
                                        <td><?=$usernya['alamat'] ?></td>
                                        
                                        <?php    
                                    
                                    
                                        
                                    ?>



                                     <?php

                                    $sqlkriteria ="SELECT * FROM kriteria";
                                    $querykriteria = mysqli_query($dbcon, $sqlkriteria);
                                    $bobot=[];
                                    $isi=[];
                                    $n=[];
                                    while ($bariskriteria= mysqli_fetch_array($querykriteria)) {

                                    
                                        $isi[]=$bariskriteria['nama_kriteria'];

                                        $bobot[]=$bariskriteria['bobot'];
                                        $data='a'.str_replace(' ', '_', $bariskriteria['nama_kriteria']);
                                        $g2 = "SELECT * FROM sub where namasub='$isi[$y]'";
                                        


                                    $g = "SELECT * FROM $data";
                                    $h = mysqli_query($dbcon,$g);
                                    while ($i=mysqli_fetch_array($h)) { 
                                        $h2 = mysqli_query($dbcon,$g2);
                                        
                                        
                                        while ($i2=mysqli_fetch_array($h2)) {
                                        

                                            if ($i['n1']==$i2['nilai1']) {
                                                ?>
                                                <td><?php echo $i2['sub1']; ?></td>
                                                <?php    
                                            }else if ($i['n1']==$i2['nilai2']) {
                                                ?>
                                                <td><?php echo $i2['sub2']; ?></td>
                                                <?php    
                                            }else if ($i['n1']==$i2['nilai3']) {
                                                ?>
                                                <td><?php echo $i2['sub3']; ?></td>
                                                <?php    
                                            }
                                            
                                            
                                            if ($i['user']==null) {
                                                ?>
                                                <td></td>
                                                <?php 
                                            }

                                            if ($i['n1']!=0) {
                                                
                                                $n[] = $i['n1']*($bobot[$y]/$jumlah);
                                                
                                                
                                            }

                                            
                                            
                                            
                                        }

                                     }

                                        $y++;


                                    }
                                    if ($n[9]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3]+$n[4]+$n[5]+$n[6]+$n[7]+$n[8]+$n[9];
                                        
                                    }else if ($n[8]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3]+$n[4]+$n[5]+$n[6]+$n[7]+$n[8];
                                        
                                    }else if ($n[7]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3]+$n[4]+$n[5]+$n[6]+$n[7];
                                        
                                    }else if ($n[6]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3]+$n[4]+$n[5]+$n[6];
                                        
                                    }
                                    else if ($n[5]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3]+$n[4]+$n[5];
                                        
                                        
                                    }else if ($n[4]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3]+$n[4];
                                        
                                        
                                    }else if ($n[3]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2]+$n[3];
                                        
                                        
                                    }else if ($n[2]==true) {
                                        $evaluasi=$n[0]+$n[1]+$n[2];
                                        
                                        
                                    }else if ($n[1]==true) {
                                        $evaluasi=$n[0]+$n[1];
                                        
                                    }else if ($n[0]==true) {
                                        $evaluasi=$n[0];
                                         
                                    }
                                    if ($evaluasi >= 2.1) {
                                            $hasil = "Diterima";
                                        }else{
                                            $hasil = "Ditolak";
                                        }


                                       ?>
                                        <td><?php echo $hasil; ?></td>
                                    <?php  
                                        
                                    ?>
                                    
                                        <td><form method="post"><button name="ya<?php echo $zz; ?>">yes</button></form><form method="post"><button name="no<?php echo $zz; ?>">no</button></form></td>
                                        </tr>
                                  
                                    <?php }} ?>
 <?php 
     if (isset($_POST['ya'.$zz])) {
      $sq = "UPDATE penilaian SET validasi=1 where nama='$nisn'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datapengajuan');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }
 
     

if (isset($_POST['no'.$zz])) {
      $sq = "UPDATE penilaian SET validasi=2 where nama='$nisn'";

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