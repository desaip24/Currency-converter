<?php 
session_start();
$con=mysqli_connect("localhost","root","","project");


 

$sql="SELECT * from user_details";
$retval = mysqli_query($con,$sql);

if($value=mysqli_fetch_array($retval))
 {
  	
    $_SESSION['username']=$value['username'];
    $_SESSION['email']=$value['email'];
    $_SESSION['mob']=$value['mobilenumber'];
    $_SESSION['bank_name']=$value['bank_name'];
    $_SESSION['acc_no']=$value['acc_no'];
    $_SESSION['balance']=$value['balance'];
    $_SESSION['credit']=$value['credit'];
    header('Location: home.php');
   } 
  else
  {   
   
    header('Location:../index.php');
  }
 
 ?>
//mysqli_close($con);


