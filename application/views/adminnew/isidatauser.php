<!DOCTYPE html>

<?php
    include 'onek.php';
?>
<style type="text/css">
    table,td,tr,th{
        color: black;
    }
    
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<br>

                                <div class="panel-heading">
                                    Data user
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <input placeholder="Cari Nama User" type="text" id="myInput" onkeyup="myFunction()">
                                        <table id="myTable" class="table table-striped table-bordered table-hover" style="color:blue;"><br><br> 
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
                                                        
                                                        

                                                        if ($user['stts']==2) {
                                                            // code...
                                                        
                                                   ?>
                                                            <tr>
                                                                <td><?php echo $n ?></td>
                                                            <td class="text-center"><?php echo $user['nama'] ?></td>
                                                            <td class="text-center"><?php echo $user['username'] ?></td>
                                                            <td class="text-center"><?php echo $user['password'] ?></td>
                                                            <td class="text-center"><?php echo $user['alamat'] ?></td>
<td><a class="btn btn-primary active btn-ok" onclick="return confirm('Apakah yakin menghapus ?')" href='hapususer/?nama=<?=$user['nama'];?>'><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp<a class="btn btn-primary active btn-ok" onclick="return confirm('Apakah ingin mengedit ?')" href='<?php echo base_url('index.php/Admin/baru/edituser/?nama=').$user['nama']; ?>'><i class="fa fa-edit " ></i></a></td></td>
                                                        </tr>
                                                <?php
                                                }
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

<script type="text/javascript">
    function myFunction() {
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