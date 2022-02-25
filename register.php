<?php
include('dbconnection.php');


if(isset($_POST['signup']))
  {
        $hash = md5( rand(0,1000) ); 
  	$shop=$_POST['shop'];
  	$contact=$_POST['contact'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];
  	 $query=mysqli_query($con, "insert into register(name,contact, email ,password,hash,Is_deleted) value('$shop','$contact', '$email','$password','$hash',1)");
  if($query){
  	$msg="You have successfully registered";

    //     $mail = new PHPMailer(true);

    // //Server settings
    // $mail->SMTPDebug = 0;                  // Enable verbose debug output
    // $mail->isSMTP();                                            // Send using SMTP
    // $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    // $mail->Username   = 'bhavya789shah@gmail.com';                     // SMTP username
    // $mail->Password   = 'Bhavya@$1234';                               // SMTP password
    // $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    // $mail->Port       = 587;                                    // TCP port to connect to
  
    // //Recipients
    // $mail->setFrom('bhavya789shah@gmail.com', 'Admin');
    // $mail->addAddress($email);     // Add a recipient
    // // Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = 'Hellooooo';
    // $mail->Body    = 'Thanks for signing up!
    // Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
     

    // Please click this link to activate your account:
    // http://3.134.127.144/Tasker/Login/verify.php?hash='.$hash.'';
  
    // $mail->send();

  }
  else{
  	$msg="Something went wrong";
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
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
            echo $msg;
          }  ?> </p>
	  <div class='container'>
 <div style=""><h2>Register Your Shop </h2></div>
  <div class='form'>
  	<form method=post action="">
    <input type="text" name="shop" value=""  placeholder="shop name" />
    <input type='text' name="contact" value="" placeholder="contact number" />
    <input type='text' name="email" value="" placeholder="email id" />
    <input type='password' name="password" value="" placeholder="password" />
    <input type='submit' name="signup" value=' Register' />
  </form>
  </div>
   <h2>or <a href='login.php'> Login</a></h2>
</div>
</body>
</html>