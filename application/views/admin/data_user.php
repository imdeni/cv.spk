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
                                    Data user
                                </div>
                                <div class="panel-body">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Warga" title="Type in a name">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>No KK</th><th>Alamat</th>
                                                
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengeluarkan data siswa dari database -->
                                                <?php
                                                   $sql ="SELECT * FROM user";
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;



                                                   while ($user=mysqli_fetch_array($query)) {
                                                        
                                                        

                                                        
                                                   ?>
                                                            <tr>
                                                                <td><?php echo $n ?></td>
                                                            <td class="text-center"><?php echo $user['nama'] ?></td>
                                                            <td class="text-center"><?php echo $user['username'] ?></td>
                                                            <td class="text-center"><?php echo $user['password'] ?></td>
                                                            <td class="text-center"><?php echo $user['alamat'] ?></td>
<td><a class="btn btn-danger btn-ok" onclick="return confirm('Apakah yakin menghapus ?')" href='hapususer/?nama=<?=$user['nama'];?>'><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp<a class="btn btn-danger btn-ok" onclick="return confirm('Apakah ingin mengedit ?')" href='<?php echo base_url('index.php/Admin/edituser/?nama=').$user['nama']; ?>'><i class="fa fa-edit " ></i></a></td></td>
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