<?php include 'onek.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png'); ?>">

    </head>
    <style type="text/css">
        body{
            background-image: url('../assets/img/backgrounds/y.jpeg');
            ackground-repeat: no-repeat;
            height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;  
  

        }
        .inner-bg{
            margin-top: 0px;
        }
        .form-top{
            border-radius: 50px 50px 0px 0px;
        }
        .form-bottom{
            border-radius: 0px 0px 50px 50px;
        }
    </style>
    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        
                            <h1 style="color:black; font-family: lucida console;"><b><strong>Sistem Pendukung Keputusan Pemilihan Warga Penerima Program Keluarga Harapan Desa Wanamulya</b></strong></h1>
                            
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                
                                    <h3 style="color:white;"><center><b>Daftar</b></center></h3>
                                    
                                
                            
                            </div>

                            
            <div class="form-bottom">
                 <form method="post">
<div class="form-group">
<label class="sr-only" for="form-username">Nama</label>
<input type="text" name="nama" placeholder="Nama..."  class="form-password form-control" /required>
</div>
<div class="form-group">
<label class="sr-only" for="form-username">Alamat</label>
<select name="alamat" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
                
                              
    <option value="Grogol"  selected>Grogol</option>
    <option value="Wanasari"  selected>Wanasari</option>
    <option value="Kemcaren"  selected>Kemlaten</option>
                            
                  </select>
</div>

<div class="form-group">
<label class="sr-only" for="form-username">Username</label>
<input type="text" name="username" placeholder="No NIK..."  class="form-password form-control" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"//required>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
<input type="text" name="password" placeholder="No KK..." class="form-password form-control" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"//required>

                                        
                                    </div>
                                    <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Daftar</button></form><br>
                                    <a href="<?php echo base_url('index.php/auth') ?>" style="color:black;" class="form-control"><center><b>Kembali</b></center></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <?php
                                if (isset($_POST['submit'])) {
                                    $nama   = $_POST['nama'];
                                    $alamat   = $_POST['alamat'];
                                    $username   = $_POST['username'];
                                    $password   = $_POST['password'];
                                    $stts   = 2;
                                    
$cek="SELECT * FROM user WHERE username = '$username'";
$cek_proses= mysqli_query($dbcon,$cek);
$data = mysqli_fetch_array($cek_proses, MYSQLI_NUM);
if($data>0){
echo "<script>alert('NIK Sudah di pakai')</script>";
}
else if($data<1){
    
                                    $sql = "INSERT INTO user (nama,alamat,username,password,stts)VALUES ('$nama','$alamat','$username','$password',$stts)";

                                    $query = mysqli_query($dbcon,$sql);
                                    if ($query) {
                                        echo "<script>alert('berhasil mendaftar');
                                        window.location.href='auth';
                                        </script>";
                                    }else{
                                        echo "<script>alert('gagal mendaftar')</script>";
                                    }
}
                                
                                    
                                }
                            ?>


        <!-- Javascript -->
        <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.backstretch.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url(''); ?>assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>