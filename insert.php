<?php

include('dbconnection.php');
// //error_reporting(0);

  ?>
<html>
<head> 
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

  <div class="container-fluid">
  	<br>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
         <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Inserted DataTables </h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">

        <?php
        $ret=mysqli_query($con,"select * from ugly ");

        $cnt=1;
        if(mysqli_num_rows($ret)){ ?>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr no.</th>
                <th>Full Name</th>
                <th>Addhar Number</th>
                <th>Reason</th>
                <th>Contact</th>
                <th> Date</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
               <th>Sr no.</th>
                <th>Full Name</th>
                <th>Addhar Number</th>
                <th>Reason</th>
                <th>Contact</th>
                <th> Date</th>
              </tr>
            </tfoot>
            <tbody>
<?php
        while ($row=mysqli_fetch_array($ret)) {
  
            ?>

          <tr>
            <td><?php echo $cnt;?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['number'];?></td>
            <td><?php echo $row['reason'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['Date'];?></td>

          </tr>

          <?php  $cnt=$cnt+1;} ?>

        </tbody>
      </table>
      <?php }else{echo "No Entry";} ?>
    </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
       <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>