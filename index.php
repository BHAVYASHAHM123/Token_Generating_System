  <?php
error_reporting(0);
include('dbconnection.php');
 if(isset($_POST['submit']))
{
   $fname=$_POST['fname'];
  $number=$_POST['number'];
  $reason=$_POST['reason'];
    $reason=$_POST['contact'];


  $today   = date('Y-m-d'); 
 

  $query=mysqli_query($con, "insert into ugly(fname,number,reason,contact,Date) value('$fname','$number', '$reason','$contact','$today')");
  if ($query) {
  	header('Location: index.php');
    $msg="You have successfully created mission. Customer Response Team will contact you soon.";
  }
  else
  {
    $msg=$con->error;
  }
}
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color:yellow;">

<center>
	<br><br>
<h1>Enter Your <img src="\upload\images\fingure.png" style="height: 80px;width: 80px;"> <img src="\upload\images\complaint-box.png" style="height: 90px;width: 90px;">  Complain. ...</h1>
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
            echo $msg;
          }  ?> </p>
<form action="" method="post">

<b><i>Full Name:</i></b> <input type="text" name="fname" required="" /><br><br>

<b><i>Phone Number:</i></b> <input type="text" name="number" required="" /><br><br>

<b><i>Reason of Complin</i></b>	: <input type="text" name="reason" required="" /><br><br>

<b><i>upload Image</i></b>	: <input type="text" name="img" required="" /><br><br>

<b><i>Enter the location</i></b> : <input type="text" name="location" required="" /><br><br>


<br>
<!-- <input type="text" name="who" /><br><br>
 -->

<input type="submit" name="submit" value="submit" class="btn btn-primary"/>

	
</a>

</center>

</form>

</body>
</html>