<!DOCTYPE html>

<?php
    include 'onek.php';
?>
<style type="text/css">
    table,td,tr,th{
        color: black;
        font-size: 12px;
        font-weight: normal;
    }
     th{
        text-align: center;
        font-weight: bold;
        font-size: 14px;
    }
    
</style>
<br>
                                <div class="panel-heading">
                                    Filtering
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
 <center><input placeholder="Cari Nama User" type="text" id="myInput" onkeyup="myFunction10()">
 </center><br>
<center><label style="font-size: 14px;width: 150px;">Dusun</label><label>:</label> 
    <select style="width: 200px;height: 30px;font-size: 14px;padding: 0px;padding-left:10px;" name="" id="y" onchange="myFunction00();">
   <option value="Wanasari">Wanasari</option>
   <option value="Grogol">Grogol</option>
   <option value="Kemlaten">Kemlaten</option>
</select></center>
    <?php 
$wat=0;
$w[0]='Tanggungan anak';
$w[1]='Penghasilan';
$w[2]='Status lahan';        
$w[3]='Jenis dinding';
$w[4]='Jenis lantai';
$w[5]='Harta tambahan';
$sqlnilai5 = "SELECT * FROM sub";
$querynilai5 = mysqli_query($dbcon,$sqlnilai5);
while ($query500=mysqli_fetch_array($querynilai5)) {
?>
<center><label style="font-size: 14px;width: 150px;"><?php echo $w[$wat]; ?></label><label>:</label> <select style="width: 200px;height: 30px;font-size: 14px;padding: 0px;padding-left:10px;" name="" id="myInput<?php echo $wat; ?>" onchange="myFunction<?php echo $wat; ?>();">

   <option data-value="<?php echo $query500['sub1']; ?>"><?php echo $query500['sub1']; ?></option>
   <option data-value="<?php echo $query500['sub2']; ?>"><?php echo $query500['sub2']; ?></option>
   <option data-value="<?php echo $query500['sub3']; ?>"><?php echo $query500['sub3']; ?></option>

</select></center>
<?php
$wat++;
}
 ?>


                                        <br><br>
                                        <table id="myTable" class="table table-striped table-bordered table-hover" style="color:blue;">
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
                                        
                                        <th>Status</th>
                                        <th>Cetak</th>
                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php
                                    $n = 1 ;
                                    $nn=0;

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
                                        
                                        $sqlnama = "SELECT * FROM user where stts=2";
                                        $yoyo=mysqli_query($dbcon,$sqlnama);
                                        while ($usernya = mysqli_fetch_array($yoyo)) {
                                            $namah[]=$usernya['nama'];
                                            $userh[]=$usernya['username'];
                                            $passh[]=$usernya['password'];
                                            $alamath[]=$usernya['alamat'];
                                        }
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
                                        
                                        $nilai1=$barisnilai['nk'];
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
                                        }else if ($nilai6==1) {
                                            $nilainya6="Kurang dari 2 Tanggungan anak";
                                        }else if ($nilai6==3) {
                                            $nilainya6="Lebih dari 2 Tanggungan anak";
                                        }


                                        ?>
                                        <?php 
                                        ?>

                                        <tr>

                                        <td><?=$n?></td>
                                        <td><?php echo $namah[$nn]; ?></td>
                                        
                                        <td><?php echo $userh[$nn]; ?></td>
                                        <td><?php echo $passh[$nn]; ?></td>
                                        <td><?php echo $alamath[$nn]; ?></td>
                                        <td><?php echo $nilainya6; ?></td>
                                        <td><?php echo $nilainya1; ?></td>
                                        <td><?php echo $nilainya2; ?></td>
                                        <td><?php echo $nilainya3; ?></td>
                                        <td><?php echo $nilainya4; ?></td>
                                        <td><?php echo $nilainya5; ?></td>
                                        
                                        <td><?php
if ($barisnilai['validasi']==0) {
    echo "Belum di validasi";
}else if ($barisnilai['validasi']==1) {
    echo "Di terima";
} else if ($barisnilai['validasi']==2) {
    echo "Belum di terima";
}

                                         ?></td>
                                         <td><?php if ($hasill=='Diterima' && $barisnilai['validasi']==1) {
                                            
                                        ?>
                                        <a target="_blank" style="color:black;" class="btn btn-primary active btn-ok" onclick="return confirm('print ?')" href='<?php echo base_url('index.php/cetakadmin/?nama=').$namah[$nn]; ?>'>Cetak</a>
                                        <?php
                                        } ?></td>
                                        
                                        
                                        </tr>
                                        <?php
                                        
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
                                    $nn++;
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

<script type="text/javascript">
    function myFunction10() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
function myFunction00() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("y");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script type="text/javascript">
    function myFunction0() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput0");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>
<script type="text/javascript">
    function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script><script type="text/javascript">
    function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script><script type="text/javascript">
    function myFunction3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script><script type="text/javascript">
    function myFunction4() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script><script type="text/javascript">
    function myFunction5() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput5");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[10];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>
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