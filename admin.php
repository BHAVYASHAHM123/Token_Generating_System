
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>



     <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Loginphp/register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginphp/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Loginphp/logout.php">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>


</body>
</html>


<?php
session_start();
include "dbconnection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!--Sidebar-->

  <!--End of Side bar-->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
 
        <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <?php  
                  $aid=$_SESSION['aid'];
  $query=mysqli_query($con, "select * from register where id=$aid");
  $rowss=mysqli_fetch_array($query);
              $date= date('Y-m-d');
                  ?>
                  <h3 class="m-0 font-weight-bold text-primary">Shop Name: <?php echo $rowss['name']; ?></h3>

              <h3 class="m-0 font-weight-bold text-primary">Date: <?php echo $date; ?></h3>

                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                   
                  </div>
                </div>
              </div>

              <div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">

        <?php
     $admin=$_SESSION['aid'];
      $tos=date('Y-m-d');
         $today   = date('md'); 
	$to=strval($today);
        $ret=mysqli_query($con,"select * from token where date=$to && register_id=$admin ");


        $cnt=1;
        if(mysqli_num_rows($ret)){ ?>
          <table class="table table-bordered"  width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr no.</th>
                <th>Token Number</th>
                <th>Time</th>
                </tr>
            </thead>
            <tfoot>
              <tr>
              <th>Sr no.</th>
                <th>Token Number</th>
                <th>Time</th>
                </tr>
            </tfoot>
            <tbody>
<?php
      
        while ($row=mysqli_fetch_array($ret)) {
              $time_id=$row['time'];
           $ret30=mysqli_query($con,"select * from times where id=$time_id");
          $type=mysqli_fetch_array($ret30);
                          ?>

          <tr>
            <td><?php echo $cnt;?></td>
            <td><?php echo $row['token_number'];?></td>
            <td><?php echo $type['time'];?></td>
          </tr>

          <?php  $cnt=$cnt+1;} ?>

        </tbody>
      </table>
      <?php } else{echo "No Token Created";} ?>
    </div>
  </div>
</div>

</div>
      </div>
    </div>



  <!-- Bootstrap core JavaScript-->
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
          