<?php


include('../includes/dbconnection.php');

if(isset($_GET['hash']) && !empty($_GET['hash'])){
  
    // // Verify data
     $hash = $_GET['hash']; // Set hash variable
	$query1 = mysqli_query($con, "SELECT * FROM register WHERE hash='$hash' and Is_deleted='0'");
	$row=mysqli_num_rows($query1);
	if($row>0){
		$query = mysqli_query($con, "UPDATE tasker SET Is_deleted = 1 WHERE hash='$hash'");
  if($query){    		
    echo "Hello";             
      }
      else{
        echo "no";
      }
    }else{
		echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
	}// $search = mysqli_query($mysqli,"SELECT * FROM userdetails WHERE hash='".$hash."' AND Is_Deleted='1'"); 
    // $match  = mysqli_num_rows($search);
                 
    // if($match > 0){
    //     // We have a match, activate the account
    //     mysqli_query("UPDATE userdetails SET Is_Deleted='0' WHERE hash='".$hash."' AND Is_Deleted='1'");
    //     echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
    // }else{
    //     // No match -> invalid url or account has already been activated.
    //     echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    // }
                 
}else{
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}

?>