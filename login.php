<?php
session_start();
include('dbconnection.php');
    $trigger=1;
if(isset($_POST['login']))
  {

    $uname=$_POST['email'];
  $Password=$_POST['password'];
    $query=mysqli_query($con,"select id from register where  email='$uname' && password='$Password' && Is_deleted=1");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $trigger=1;
      $_SESSION['aid']=$ret['id'];
     header('location:admin.php');
    }
    else{
      $trigger=0;

    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <p style="font-size:16px; color:red" align="center"> <?php if($trigger==0){
                      echo "Invalid Email or Password.";
                    }  ?> </p>
	  <div class='container'>
  <h2>login</h2>
  <div class='form'>
    <form method=post action="">
    <input type='text'  name="email" value="" placeholder="email id" />
    <input type='password' name="password" value="" placeholder="password" />
    <input type='submit' name=login value=' Login' />
  </form>
  </div>
  <h2>Don't have account ? <a href='register.php'> Register</a></h2>
<div>
</body>
</html>