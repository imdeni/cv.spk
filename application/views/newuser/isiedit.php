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
  
  <b style="font-size: 24px;"> <center>EDIT</center></b>
<form method='post' action='' enctype='multipart/form-data'>
                
   
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

$y=$this->session->userdata('nama');
$n=0;
$nn=[];

        $a ="SELECT * FROM kriteria";
        $b = mysqli_query($dbcon, $a);
        
        while ($c= mysqli_fetch_array($b)) { 
          
         
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
          $data='a'.str_replace(' ', '_', $c['nama_kriteria']);

          $ab1="SELECT * FROM $data where user='$y'";
          $ab2 = mysqli_query($dbcon, $ab1);
           while ($c1= mysqli_fetch_array($ab2)) {
          
            

    
                                    $sql = "UPDATE penilaian SET nama='$nama',np=$np,nk=$nk,na=$na,jbd=$jbd,jbl=$jbl,harta=$harta where nama='$y'";

                                    $query = mysqli_query($dbcon,$sql);

                                    $sqll = "UPDATE $data SET n1=$ok where user='$y'";

                                    $queryl = mysqli_query($dbcon,$sqll);

                                    if ($query) {
                                        echo "<script>alert('berhasil mengedit data');
                                        window.location.href='hasil';
                                        </script>";
                                    }
                                   
                                }}
                              }
                            ?>
</div>
</body>
</html>
