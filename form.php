<!-- password (bN(%s}q2A+/%{]AP) 000webhost db -->
<?php
include "dbconnection.php";
 error_reporting(0);

if (isset($_POST['submit'])) {

$Username = $_POST['uname'];
$Contact = $_POST['contact'];
$Address = $_POST['address'];


  if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);


    }
}

$sql = "INSERT INTO complain (uname, email, contact, address, message,image_type,image)
VALUES ('$Username', '$Email', '$Contact','$Address','$Message','{$imageProperties['mime']}', '{$imgData}')";

if (mysqli_query($con, $sql)) {
  echo "Complain Submited. ...";
} else {
  echo "Please Retry. ..." . $sql . "<br>" . mysqli_error($con);
}


}
?>

<!doctype html>
<html>
	<head>
        <link rel="icon" href="\dahisar\msg.png" type="image/gif" sizes="16x16">

		<title> Complain </title>

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


	</head>
	<body>
	<div class="box">
  <h2>Dahisar Help Service</h2>
  <form method = "post" enctype="multipart/form-data">

  	<div class="inputBox">
      <input type="text" name="uname" required="" value="">
      <label>Username</label>
    </div>
   
    <div class="inputBox">
      <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Email</label>
    </div>

     <div class="inputBox">
      <input type="text" name="contact" required ="" value="">
      <label>Contact Number</label>
    </div>

    <div class="inputBox">
      <input type="text" name="address" required ="" value="">
      <label>Address</label>
    </div>

    <div class="inputBox">
      <input type="text" name="message" required ="" value="">
      <label>Your Message(Complain)</label>

      <div class="inputBox">
      <input type="file" name="userImage" class="form-control-file" id="file" required ="" value="">
      <label></label>
    </div>
    
    <input type="submit" name="submit" value="Submit">
    <b style="background-color:rgba(255,255,255,255);">Due to the Pandamic Suitation of Corona Virus the given Comlain can be done in 48 hrs or 72 hrs i.e: Two - Three Days</b>

    <b style="background-color:rgba(255,255,255,255);>Contact Us (for any query or complain)</b>
    complaindahisar2020@gmail.com
  </form>
</div>
	</body>
</html>