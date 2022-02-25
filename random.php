    <?php
    error_reporting(0);
    include('dbconnection.php');
     if(isset($_POST['Submit']))
    {  
      $time=$_POST['age'];
      $register=$_POST['loc'];
        $query3=mysqli_query($con, "select Max(Id) from token ");
        $row2=mysqli_fetch_array($query3);
        $cust_name=$row2[0];
        $cust_name=intval($cust_name)+1;
        $cust_name=intval($cust_name);
        $today= date('Y-m-d');
        $to = date('md');
         $query=mysqli_query($con, "insert into token(token_number,time,register_id,date) value('$cust_name','$time','$register','$to')");
      if ($query3) {
 $ret200=mysqli_query($con,"select * from register where id='$register'");
 $row200=mysqli_fetch_array($ret200);
 $ret400=mysqli_query($con,"select * from times where id='$time'");
 $row400=mysqli_fetch_array($ret400);
        $msg=$cust_name;
      }
      else
      {
        $msg=$con->error;
      }
    }
    ?>
    <html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    </head>

        <body style="background-color: pink;">

            <center>
                         
                <div class="container">
          <form action=""  method="POST">

            <!-- Drop Down  -->
                     <select name="loc" id='loc' class="btn btn-primary" style="margin-top: 80px;" required="">
                      <option>-- Select Shop --</option>
                 <?php 
                      $ret=mysqli_query($con,"select * from register");
                       while ($row=mysqli_fetch_array($ret)) {

                      ?>
                      <?php   echo $row['name'];  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php }  ?>

                </select>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

                <script>
                  $("#loc").chosen();
                </script>


                <!-- End Drop Down -->
        
                <div class="card" style="width: 350px;height: 450px; margin-top: 150px;">
                      <div class="card-body">
                        <h3> <b>Token Number</b></h3>
                          <h3 class="card-title" style="text-align: center;margin-top: 50px;"><b> <?php echo $msg;?><b></h3>
                            <br>
                            
                        <div style="color: orange;"><h3>Date : <?php echo $today; ?></h3></div>
                        <br>
                         <div style="color: orange;"><h3>Time : <?php echo $row400['time']; ?></h3></div>
                        <br>


                        <div  style="font-size: 40px;color:blue;"><?php echo $row200['name']; ?></div>
                        <br><br>  

                       
                   
                     </div>
                </div>
      

  
                    <p id="number" ></p>
                    <?php if($query){
    ?>              <div style="text-align: center; ">Take Screen Shot Of your generated <b><i>Token number</i> </b></div>
                    <div style="margin-bottom: 500px; margin-top: 50px;"> 
                        <input type=submit  id="b" name="Submit" class="btn btn-primary"  value="Get Token" disabled>

    <?php }  ?>

                         <br><br>
 <?php 
                      $ret300=mysqli_query($con,"select * from times");
                       

                      ?>
                          <p>Please see your time accourding token number:</p>
                           <?php while ($row300=mysqli_fetch_array($ret300)) { ?>
                          <input type="radio" id="age1" name="age" value="<?php echo $row300['id']; ?>"  required>
                          <label for="age1"><?php echo $row300['time']; ?></label><br>
                        
                          <br>
                    <?php } ?> 
                   

 
    <?php  if(!$query){ ?>
           <input type=submit  id="b" name="Submit" class="btn btn-primary"    value="Get Token">
           &nbsp;&nbsp;&nbsp;
           <a href=""><input type=submit  id="f" name="form" class="btn btn-primary"    value="Order Things"></a>
           </div>
       <?php } ?>
                         
                </div>
            </form>
            </center>
        </body>
        
        <style>

            #number{
                font-size: 500px;

            }
            
        </style>

    </html>