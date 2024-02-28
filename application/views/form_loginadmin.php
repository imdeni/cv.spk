<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/y.css');?>">
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
            background-image: url("<?php echo base_url('assets/img/backgrounds/y.jpeg'); ?>");
            background-repeat: no-repeat;
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
                        
                            <h1 style="color:white; font-family: lucida console;color: black;"><b><strong>Sistem Pendukung Keputusan Pemilihan Warga Penerima Program Keluarga Harapan Desa Wanamulya</b></strong></h1>
                            
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                
                                    <h3 style="color:white;"><center><b>Silahkan Login Dulu</b></center></h3>
                                    
                                
                            
                            </div>

                            
            <div class="form-bottom">
                 <form method="post" action="<?php echo base_url('index.php/auth/loginadmin'); ?>">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" //required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="password..." class="form-password form-control" id="form-password" //required>
                                    </div>
                                    <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" class="tombol_login" value="LOGIN">Login</button></form>
                                    <a href="<?php echo base_url('index.php/auth') ?>" type="button" class="btn btn-lg btn-primary btn-block">login user</a>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


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