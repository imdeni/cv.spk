<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<?php include'onek.php' ?>


<body>
<br>
<div class="container2">
  <center><p>Mohon untuk diteliti apakah data anda sudah benar, jika tidak silahkan di edit dan disimpan kembali </p></center>
  <table class="table table-striped table-bordered table-hover ">
    <tbody></tbody>
    <tr>
      <th>No</th>
      <th>Kriteria</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
    <?php
    $n=1;
    $nn=0;
    $y=$this->session->userdata('nama');
          $mmmm="SELECT * FROM penilaian where nama='$y'";
          $nnnn = mysqli_query($dbcon, $mmmm);
           while ($mmm=mysqli_fetch_array($nnnn)) {
            $kh=$mmm['validasi'];
           }
        
        $a ="SELECT * FROM kriteria";
        $b = mysqli_query($dbcon, $a);
        $isi=[];
        while ($c= mysqli_fetch_array($b)) { 
          $isi[]=$c['nama_kriteria'];
          $g2 = "SELECT * FROM sub where namasub='$isi[$nn]'";
          $nn++;
          $data='a'.str_replace(' ', '_', $c['nama_kriteria']);
          
          $ab1="SELECT * FROM $data where user='$y'";
          $ab2 = mysqli_query($dbcon, $ab1);
           while ($c1= mysqli_fetch_array($ab2)) {
            
            $h2 = mysqli_query($dbcon,$g2);
            while ($i2=mysqli_fetch_array($h2)) {

                                            if ($c1['n1']==$i2['nilai1']) {
                                                $ket=$i2['sub1'];
                                            }else if ($c1['n1']==$i2['nilai2']) {
                                                $ket=$i2['sub2'];
                                            }else if ($c1['n1']==$i2['nilai3']) {
                                                $ket=$i2['sub3'];
                                            }
          ?>

    <tr>
      <td><?php echo $n; ?></td>
      <td><?php echo $c['nama_kriteria']; ?></td>
      <td><?php echo $ket; ?></td>
      
      <td><?php if ($kh!=1) { ?><form action="<?php echo base_url('index.php/userbaru/edituser') ?>"><button>edit</button></form><?php } ?></td>
      
    </tr>
    <?php $n++;}}} ?>
  </table>
  <br>
  <?php 
    $yyy="SELECT * FROM penilaian where nama='$y'";
          $yyyy = mysqli_query($dbcon, $yyy);
           while ($ha= mysqli_fetch_array($yyyy)) {
              if ($ha['validasi']==1) {
                ?>
                <p><center>Selamat <?php echo $y; ?> anda <b>DITERIMA</b></center></p>
                <p><center>jika data sudah anda benar, silahkan klik cetak untuk mengunduh file untuk bukti</center></p>
                <form action="<?php echo base_url('index.php/cetak') ?>" target="_blank"><button>Cetak</button></form>
                <?php
              }
              else if ($ha['validasi']==2) {
                ?>
                <p><center>Maaf <?php echo $y; ?> anda <b>BELUM DITERIMA</b></center></p>
                <?php
              }
              else if ($ha['validasi']==0) {
                ?>
                <p><center><?php echo $y; ?>, silahkan menunggu admin untuk melakukan validasi terlebih dahulu</center></p>
                <?php
              }
           }

   ?>
  
</div>
</body>
</html>