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
    <br>
        <div class="col-lg-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            Data pengajuan
        </div>
        <div class="panel-body">
            <br>
        <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover" style="color:blue;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>KK</th>
            <th>KTP</th>
            <th>Nik</th>
            <th>No KK</th>
            <th>Alamat</th>
<?php 
$a ="SELECT * FROM sub";
$b = mysqli_query($dbcon, $a);
while ($c= mysqli_fetch_array($b)) {
echo "<th>".$c['namasub']."</th>";
}
 ?>
            <th>Status</th>
            <th>Validasi</th>
            </tr>
        </thead>
        <tbody>
<?php
    $no = 1 ;
    $nomer=0;
    $y = -1 ;
    $kr=-1;
    $ppn=-1;

    $jumlah0=mysqli_fetch_array(mysqli_query($dbcon,"SELECT SUM(bobot) FROM kriteria"));
    $jumlah = $jumlah0[0];
    


    $pen=mysqli_query($dbcon,"SELECT * FROM penilaian");                                
    while ($ppen=mysqli_fetch_array($pen)) {

    
      
    $pppen[]=$ppen['nama'];
    $ppn++;
    $nopn[]=$ppn;
    $sqlkri=mysqli_query($dbcon,"SELECT * FROM kriteria");                                
    while ($kri=mysqli_fetch_array($sqlkri)) { 
        $data[]='a'.str_replace(' ', '_', $kri['nama_kriteria']);
        $dt[]=$kri['nama_kriteria'];
        $bobot[]=$kri['bobot'];

        $kr++;
        $nokr[]=$kr;
        $sqltb=mysqli_query($dbcon,"SELECT * FROM $data[$kr] where user='$pppen[$ppn]'");                                
        
        while ($tb=mysqli_fetch_array($sqltb)) {

            $su=mysqli_query($dbcon,"SELECT * FROM sub");                                
            while ($sub=mysqli_fetch_array($su)) {
            
            if ($tb['nama']==$dt[0]) {

                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil1[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil1[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil1[]=$sub['sub3'];
                }
                }
            
                
            }else if ($tb['nama']==$dt[1]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil2[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil2[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil2[]=$sub['sub3'];
                }
                }
            
                
            }else if ($tb['nama']==$dt[2]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil3[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil3[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil3[]=$sub['sub3'];
                }
                }
            
                
            }else if ($tb['nama']==$dt[3]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil4[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil4[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil4[]=$sub['sub3'];
                }
                }
            
                
            }else if ($tb['nama']==$dt[4]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil5[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil5[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil5[]=$sub['sub3'];
                }
                }
            
                
            }
            else if ($tb['nama']==$dt[5]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil6[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil6[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil6[]=$sub['sub3'];
                }
                }
            
                
            }else if ($tb['nama']==$dt[6]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil7[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil7[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil7[]=$sub['sub3'];
                }
                }
            
                
            }else if ($tb['nama']==$dt[7]) {
                if ($tb['nama']==$sub['namasub']) {
                    
                if ($sub['nilai1']==$tb['n1']) {
                $hasil8[]=$sub['sub1'];
                }else if ($sub['nilai2']==$tb['n1']) {
                $hasil8[]=$sub['sub2'];
                }else if ($sub['nilai3']==$tb['n1']) {
                $hasil8[]=$sub['sub3'];
                
                }
                }
            
                
            }

            }
            
            
            
            
            

            
        
    }
    
                                    
    }
    
    
    }
    $l=-1;
    $ll=-1;
    $pen=mysqli_query($dbcon,"SELECT * FROM penilaian");                                
    while ($ppen=mysqli_fetch_array($pen)) {
        $ll++;

    $sqlk=mysqli_query($dbcon,"SELECT * FROM kriteria");                                
    while ($kri=mysqli_fetch_array($sqlk)) { 
        $l++;
        
                
        $sqltb=mysqli_query($dbcon,"SELECT * FROM $data[$l] where user='$pppen[$ll]'");
        while ($i=mysqli_fetch_array($sqltb)) {
            $nilai[]=$i['n1'];
            
            


        } 
    }

}   

    
    
    $sqlpen=mysqli_query($dbcon,"SELECT * FROM penilaian");                                
    while ($penilaian=mysqli_fetch_array($sqlpen)) {

    $namapen[]=$penilaian['nama'];
    $validasi[]=$penilaian['validasi'];
    $ktp[]=$penilaian['ktp'];
    $kk[]=$penilaian['kk'];
    $y++;
    $nomer++;
    
    $sqluser=mysqli_query($dbcon,"SELECT * FROM user where nama='$namapen[$y]'");                                
    while ($user=mysqli_fetch_array($sqluser)) { 
    $namanya[]=$user['nama'];
    $usern[]=$user['username'];
    $pas[]=$user['password'];
    $alamat[]=$user['alamat'];
    }

?>


<?php 

?>
<tr>
<td><?php echo $nomer; ?></td>
<td><?php echo $namanya[$y]; ?></td>
<td><?php echo $ktp[$y]; ?></td>
<td><?php echo $kk[$y]; ?></td>
<td><?php echo $usern[$y]; ?></td>
<td><?php echo $pas[$y]; ?></td>
<td><?php echo $alamat[$y]; ?></td>
<?php if ($hasil1[$y]!=null) {
    echo '<td>'.$hasil1[$y].'</td>';
} ?>
<?php if ($hasil2[$y]!=null) {
    echo '<td>'.$hasil2[$y].'</td>';
} ?>
<?php if ($hasil3[$y]!=null) {
    echo '<td>'.$hasil3[$y].'</td>';
} ?>
<?php if ($hasil4[$y]!=null) {
    echo '<td>'.$hasil4[$y].'</td>';
} ?>
<?php if ($hasil5[$y]!=null) {
    echo '<td>'.$hasil5[$y].'</td>';
} ?>
<?php if ($hasil6[$y]!=null) {
    echo '<td>'.$hasil6[$y].'</td>';
} ?>
<?php if ($hasil7[$y]!=null) {
    echo '<td>'.$hasil7[$y].'</td>';
} ?>
<?php if ($hasil8[$y]!=null) {
    echo '<td>'.$hasil8[$y].'</td>';
} ?><td></td>
</tr>
<?php
    } 
    
?>
        
                                        
 <?php 
     if (isset($_POST['ya'])) {
      $sq = "UPDATE penilaian SET validasi=1 where nama='$nisn'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datapengajuan');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
                                }
 
     

if (isset($_POST['no'])) {
      $sq = "UPDATE penilaian SET validasi=2 where nama='$nisn'";

      $querysimpan = mysqli_query($dbcon,$sq);
      if ($querysimpan) {
        echo "<script>alert('berhasil di validasi');
        location.assign('https://deniachmad.com/project-portofolio/spk/index.php/Admin/datapengajuan');
        </script>";
      }else{
        echo "<script>alert('Gagal Edit data')</script>";

                                    }
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