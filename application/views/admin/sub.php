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
                        <!-- Tabel Data -->
                        <div class="col-lg-12">
    
    <br>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Sub Kriteria
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive" >
                                        <table class="table table-striped table-bordered table-hover" style="color:blue;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kriteria</th>
                                                    <th>Sub kriteria</th>
                                                    <th>Bobot Sub</th>
                                                    
                                                    <th >Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengeluarkan data siswa dari database -->
                                                <?php
                                                   
                                                  
                                                 $sqls ="SELECT * FROM kriteria";
                                                   $querys = mysqli_query($dbcon,$sqls);
                                                   $n=1;
                                                   while ($krt=mysqli_fetch_assoc($querys)) {
                                                    $namakriteria=$krt['nama_kriteria'];
                                                  

                                                   
                                                    



                                                        
                                                ?>
                                                <tr>
                                                    
                                                    <td rowspan="3"><?=$n?></td>
                                                    <td rowspan="3"><?=$krt['nama_kriteria']?></td>
                                                    <?php 
                                                     $sql ="SELECT * FROM sub where namasub='$namakriteria'";
                                                   $query = mysqli_query($dbcon, $sql);
                                                   while ($barisbobot=mysqli_fetch_assoc($query)) {
                                                    $nama=$barisbobot['namasub'];
                                                     ?>
                                                    <td class="text-center"><?=$barisbobot['sub1']?></td>
                                                    <td class="text-center"><?=$barisbobot['nilai1']?></td>
                                                    
<td rowspan="3"><a class="btn btn-danger btn-ok" onclick="return confirm('Apakah yakin menghapus ?')" href='hapussub/?nama=<?php echo $nama; ?>'><i class="fa fa-trash fa-3x" aria-hidden="true"></i>
</a>&nbsp<a class="btn btn-danger btn-ok" onclick="return confirm('Apakah ingin mengedit ?')" href='<?php echo base_url('index.php/Admin/editsub/?nama=').$nama ?>'><i class="fa fa-edit fa-3x" ></i></a></td></td>
                                                    
                                                </tr>
                                                <tr>
                                                
                                                <td class="text-center"><?=$barisbobot['sub2']?></td>
                                                <td class="text-center"><?=$barisbobot['nilai2']?></td>
                                                </tr>
                                                 <tr>
                                                
                                                <td class="text-center"><?=$barisbobot['sub3']?></td>
                                                <td class="text-center"><?=$barisbobot['nilai3']?></td><?php } ?>
                                                </tr>
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
                        <!-- end Tabel Data -->

                        
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