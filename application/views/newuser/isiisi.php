<?php
    include 'onek.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>




<body>
<br>
<div class="container2">
  
  <b style="font-size: 24px;"> <center>Selamat datang <?php echo $this->session->userdata('nama'); ?></center></b>
  <b style="font-size: 21px;"> <center>Silahkan isi form pengajuan berikut :</center></b>
<form method='post' action='' enctype='multipart/form-data'>
                
    
<br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 20px;"> Banyaknya tanggungan anak : </b>
    <div id="container">


    <select name="np" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="1"  selected> kurang dari 2 anak</option>
    <option value="2"  selected> 2 anak</option>
    <option value="3"  selected> lebih dari 2 anak</option>
                            
                  </select><br>

              </div>


    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 20px;"> Penghasilan : </b>
    <div id="container">


    <select name="nk" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="1"  selected> lebih dari Rp 3.000.000</option>
    <option value="2"  selected> kurang lebih sama dengan Rp 2.000.000</option>
    <option value="3"  selected> kurang dari Rp 1.000.000</option>
                            
                  </select><br>

              </div>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 20px;"> Status lahan : </b>
    <div id="container">


    <select name="na" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="1"  selected> Hak milik</option>
    <option value="2"  selected> Menyewa</option>
    <option value="3"  selected> Milik orang lain</option>
                            
                  </select><br>

              </div>

    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 20px;"> Jenis Bangunan Dinding : </b>
    <div id="container">


    <select name="jbd" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="1"  selected> Tembok</option>
    <option value="2"  selected> Anyaman</option>
    <option value="3"  selected> Kayu</option>
                            
                  </select><br>

              </div>

    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 20px;"> Jenis Bangunan Lantai : </b>
    <div id="container">


    <select name="jbl" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="1"  selected> Keramik</option>
    <option value="2"  selected> Ubin</option>
    <option value="3"  selected> Tanah</option>
                            
                  </select><br>

              </div>


    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 20px;"> Harta Tambahan : </b>
    <div id="container">


    <select name="harta" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="1"  selected> Lebih dari 3 Harta Tambahan</option>
    <option value="2"  selected> Memiliki 2 Harta Tambahan</option>
    <option value="3"  selected> Kurang dari 2 Harta Tambahan</option>
    
                            
                  </select><br>

              </div>

    <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn btn-primary " value="submit" placeholder="submit">
                                </div>
</form>

<?php
                                if (isset($_POST['submit'])) {
                                    $nama   = $this->session->userdata('nama');
                                    $np   = $_POST['np'];
                                    $nk   = $_POST['nk'];
                                    $na   = $_POST['na'];
                                    $jbd   = $_POST['jbd'];
                                    $jbl   = $_POST['jbl'];
                                    $harta   = $_POST['harta'];
                                    //sql insert to siswa


  $cek="SELECT nama FROM penilaian WHERE nama = '$nama'";
$cek_proses= mysqli_query($dbcon,$cek);
$data = mysqli_fetch_array($cek_proses, MYSQLI_NUM);



if($data>0){
echo "<script>alert('Hanya bisa mengajukan 1 kali')</script>";
}
else if($data<1){

$y=$this->session->userdata('nama');
$n=0;

        $a ="SELECT * FROM kriteria";
        $b = mysqli_query($dbcon, $a);
        
        while ($c= mysqli_fetch_array($b)) {
        $yy=$c['nama_kriteria'];

         
          if ($n==0) {
              $ok   =$_POST['np'];
            }else if ($n==1) {
              $ok   =$_POST['nk'];
            }else if ($n==2) {
              $ok   =$_POST['na'];
            }else if ($n==3) {
              $ok   =$_POST['jbd'];
            }else if ($n==4) {
              $ok   =$_POST['jbl'];
            }else if ($n==5) {
              $ok   =$_POST['harta'];
            }
            $n++;
          $datar='a'.str_replace(' ', '_', $c['nama_kriteria']);
         

          $ab1="SELECT * FROM $datar where user='$y'";
          $ab2 = mysqli_query($dbcon, $ab1);
          $c1= mysqli_fetch_array($ab2, MYSQLI_NUM);

  if($c1>0){
echo "<script>alert('Hanya bisa mengajukan 1 kali')</script>";
}
else if($c1<1){
            
    
                                    $sql = "INSERT INTO penilaian (nama,np,nk,na,jbd,jbl,harta)VALUES ('$nama',$np,$nk,$na,$jbd,$jbl,$harta)";
                                     $sqll = "INSERT INTO $datar (nama,user,b,n1)VALUES('$yy','$y',3,$ok)";

                                    $queryl = mysqli_query($dbcon,$sqll);

                                    $query = mysqli_query($dbcon,$sql);
                                    if ($query ) {
                                        echo "<script>alert('berhasil memasukkan data bobot Warga')</script>";
                                    }

}}}}
                                
                            ?>
</div>
</body>
</html>
