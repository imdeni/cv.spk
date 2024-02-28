

<?php
    include 'onek.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style type="text/css">
    table,td,tr,th{
        color: black;
    }

</style>
    <form action="" method="post">
        <label>Silahkan isi kriteria baru di bawah ini</label><br>
    <input type="text" name="nama" placeholder="Nama Kriteria" /required>
    <input type="number" name="bobot" placeholder="Bobot (MIN=1, MAX=3)" /required>
    <button name="simpan">Tambah data</button>
    </form>

    <?php 
     if (isset($_POST['simpan'])) {
      $nama   =strtolower($_POST['nama']);
      $bobot   = $_POST['bobot'];
      $a='a'.str_replace(' ', '_', $nama);
      if ($bobot >=1 && $bobot<=3) {
            
            $sql2 = "INSERT INTO sub (namasub,nilai1,nilai2,nilai3,sub1,sub2,sub3)VALUES ('$nama','','','','','','')";
            $query2 = mysqli_query($dbcon,$sql2);
            $sql3 = "CREATE TABLE IF NOT EXISTS $a (
                    id INT auto_increment,
                    nama VARCHAR(255),
                    user VARCHAR(255),
                    b INT(20),
                    n1 INT(20),
                    
                    primary key (id)
                    )";

                                        
            
            $query3 = mysqli_query($dbcon,$sql3);
            $sql1 = "INSERT INTO $a (nama,b,n1)VALUES ('$nama',$bobot,'')";
            $query1 = mysqli_query($dbcon,$sql1);

            $sql4 = "INSERT INTO kriteria (nama_kriteria,bobot)VALUES ('$nama',$bobot)";
            $query4 = mysqli_query($dbcon,$sql4);


            if ($query1 && $query2 && $query3 && $query4) {
                echo "<script>alert('berhasil tambah data')</script>";
            }else{
                echo "<script>alert('Gagal tambah data')</script>";
            }
      }else{
        echo "<script>alert('Nilai bobot harus 1, 2, atau 3');
          location.assign='http://localhost/pkh2/index.php/Admin/kriteria';
          </script>";
        
      }
     
     }
     ?>
    <br>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Kriteria
                                </div>
            <div class="panel-body">
                <div class="table-responsive" >
                    <table class="table table-striped table-bordered table-hover" style="color:blue;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kriteria</th>
                                                    <th>Bobot Kriteria</th>
                                                    <th>Bobot Relatif</th>
                                                    <th>Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                   
                                                   $sqljumlah ="SELECT SUM(bobot) FROM kriteria";
                                                   $queryjumlah= mysqli_query($dbcon,$sqljumlah);
                                                   $jumlah0=mysqli_fetch_array($queryjumlah);
                                                   $jumlah = $jumlah0[0];
                                                   


                                                   $sql ="SELECT * FROM kriteria";
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;
                                                   while ($barisbobot=mysqli_fetch_array($query)) {
                                                    $nama=$barisbobot['nama_kriteria'];
                                                    $tb='a'.str_replace(' ', '_', $barisbobot['nama_kriteria']);
                                                    

                                                    ?>
                                                    <tr>
                                                    
                                                    <td><?=$n?></td>
                                                    <td><?php echo $barisbobot['nama_kriteria'];?></td>
                                                    <td class="text-right"><?=$barisbobot['bobot']?></td>
                                                    <td class="text-right"><?=round($barisbobot['bobot']/$jumlah,3) ?></td>
<td><a class="btn btn-primary active btn-ok" onclick="return confirm('Apakah yakin menghapus ?')" href='hapuskriteria/?nama=<?php echo $nama; ?>'><i class="fa fa-trash" aria-hidden="true"></i>
</a>&nbsp<a class="btn btn-primary active btn-ok" onclick="return confirm('Apakah ingin mengedit ?')" href='<?php echo base_url('index.php/Admin/baru/editk/?nama=').$nama ?>'><i class="fa fa-edit " ></i></a></td></td>
                                                    
                                                </tr>
                                                <?php
                                                    $n++;
                                                    
                                                ?>
                                                <?php
                                                    }
                                                    
                                                ?>
                                                 <tr class="inverse">
                                                    <td colspan="2">Total</td>
                                                    <td class="text-right"><?=$jumlah?></td>
                                                    <td class="text-right"> </td>
                                                    <td></td>
                                                    
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Tabel Data -->

                        
</div>
</div>
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