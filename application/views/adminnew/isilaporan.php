<!DOCTYPE html>

<?php
    include 'onek.php';
?>

<style type="text/css">
    table,td,tr,th{
        color: black;
    }
     th{
        text-align: center;
        font-weight: bold;
        font-size: 16px;
    }
    .font{
        font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/opensans/v27/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    
</style>
<div class="font">
<br>
                                
    <pre>
    <img style="position: absolute;" src="<?php echo base_url('assets/img/backgrounds/desa.png') ?>" width="100" height="100"><div class="laporan"><p><center>PEMERINTAHAN KABUPATEN PEMALANG KECAMATAN PEMALANG</center></p><p><center>DESA WANAMULYA PEMALANG</center></p><hr><p><center>DAFTAR STATUS WARGA PENERIMA PKH</center></p><p style="font-size: 16px;">&nbsp&nbsp&nbspDicetak pada : <?php echo date('D,d-M-Y'); ?></p><div class="panel-body"><div class="table-responsive">
<form method="post"><label>Silahkan pilih jumlah data ingin di tampilkan</label>&nbsp<input type="number" name="jml"><button name="submit">Submit</button></form>
<form method="post"><label>Silahkan pilih status yang ingin di tampilkan </label><select style="height:30px;padding: 0px;margin: 0px;" name="terima"><option value="semua">Semua</option><option value="diterima">Diterima</option><option value="tidakditerima">Tidak Diterima</option></select><button name="oc">pilih</button>
</form>
<?php 
if (isset($_POST['oc'])) { 
$stst= $_POST['terima'];
} ?>

<?php 
if (isset($_POST['submit'])) { 
$jmlll= $_POST['jml'];
} ?><p>maksimal kuota : 100</p><p>kuota di terima saat ini : <?php
        $nom=0; 
        $s = "SELECT * FROM penilaian where validasi=1 ";
        $q = mysqli_query($dbcon,$s);
        while ($l=mysqli_fetch_array($q)) {
        $nom++;
                }echo $nom;

         ?></p>
<?php if ($jmlll==true){ ?>

    <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
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
                                    $sqlnilai = "SELECT * FROM penilaian where validasi=1 LIMIT 0, $jmlll";
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
                                        <?php 
                                        if ($barisnilai['validasi']==1  ) {
                                            
                                        if ($nom<=100) {
                                            
                                        
                                        ?>

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
    echo "Belum di validasi";
}else if ($barisnilai['validasi']==1) {
    echo "Di terima";
} else if ($barisnilai['validasi']==2) {
    echo "Belum di terima";
}

                                         ?></td>
                                        
                                        
                                        </tr>
                                        <?php
                                        }}
                                        ?>
 <?php 
     if (isset($_POST['ya'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=1 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }

if (isset($_POST['no'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=2 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
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
<?php }else if ($stst==true and $stst=='diterima'){ ?>
    <a target="_blank" style="font-size: 14px; color: black;" href="<?php echo base_url('index.php/smart/print/?v=1'); ?>"><button>Print</button></a><br>
    <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
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
                                    $sqlnilai = "SELECT * FROM penilaian where validasi=1";
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
                                        <?php 
                                        if ( $barisnilai['validasi']==1 ) {
                                            
                                        if ($nom<=100) {
                                            
                                        
                                        ?>

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
    echo "Belum di validasi";
}else if ($barisnilai['validasi']==1) {
    echo "Di terima";
} else if ($barisnilai['validasi']==2) {
    echo "Belum di terima";
}

                                         ?></td>
                                        
                                        
                                        </tr>
                                        <?php
                                        }}
                                        ?>
 <?php 
     if (isset($_POST['ya'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=1 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }

if (isset($_POST['no'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=2 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
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


<?php }else if ($stst==true and $stst=='tidakditerima'){ ?>
    <a target="_blank" style="font-size: 14px; color: black;" href="<?php echo base_url('index.php/smart/print/?v=2'); ?>"><button>Print</button></a><br>
    <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
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
                                    $sqlnilai = "SELECT * FROM penilaian where validasi=2";
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
                                        <?php 
                                        if ( $barisnilai['validasi']==2 ) {
                                            
                                        if ($nom<=100) {
                                            
                                        
                                        ?>

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
    echo "Belum di validasi";
}else if ($barisnilai['validasi']==1) {
    echo "Di terima";
} else if ($barisnilai['validasi']==2) {
    echo "Belum di terima";
}

                                         ?></td>
                                        
                                        
                                        </tr>
                                        <?php
                                        }}
                                        ?>
 <?php 
     if (isset($_POST['ya'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=1 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }

if (isset($_POST['no'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=2 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
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


<?php }else if ($stst==true and $stst=='semua'){ ?>
    <a target="_blank" style="font-size: 14px; color: black;" href="<?php echo base_url('index.php/smart/print/?v=3'); ?>"><button>Print</button></a><br>
    <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
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
                                    $sqlnilai = "SELECT * FROM penilaian where validasi=1 or validasi=2";
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
                                        <?php 
                                        if ( $barisnilai['validasi']==1 or $barisnilai['validasi']==2 ) {
                                            
                                        if ($nom<=100) {
                                            
                                        
                                        ?>

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
    echo "Belum di validasi";
}else if ($barisnilai['validasi']==1) {
    echo "Di terima";
} else if ($barisnilai['validasi']==2) {
    echo "Belum di terima";
}

                                         ?></td>
                                        
                                        
                                        </tr>
                                        <?php
                                        }}
                                        ?>
 <?php 
     if (isset($_POST['ya'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=1 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }

if (isset($_POST['no'])) {
        $a=$barisnilai['nama'];
      $sq = "UPDATE penilaian SET validasi=2 where nama='$a'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datauser');
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
<?php } ?>
</div>
                                    </div>
                                </div></pre>

                      </div>


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