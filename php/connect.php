<?php
session_start();
 if(isset($_POST['submit'])){
  $uname = $_POST["Username"];
  $email = $_POST["email"];
  $mob = $_POST["mob"];
  $pass = $_POST["password"];
  $bankname = $_POST["bank_name"];
  $IFSC = $_POST["IFSC"];
  $accno = $_POST["acc_no"];
 

// Create connection
$conn = mysqli_connect("localhost", "root", "", "project") or die("connection err");

$sql1= "SELECT * FROM user_details WHERE email='$email'" ;

$res=mysqli_query($conn, $sql1) or die("query err");
if(mysqli_num_rows($res)>0)
{
	header('Location: index.php' );
	//echo "<script>alert('User Already Exist')</script>";
	
}
else
{

$sql = "INSERT INTO user_details(username,email,mobilenumber,password,bank_name,IFSC,acc_no,balance) VALUES ('$uname','$email','$mob','$pass','$bankname','$IFSC','$accno','10000')";
if(mysqli_query($conn,$sql))
{
	echo "Successfully entered ";

}
else{
	echo "could not inserted";
}
if (mysqli_query($conn, $sql)) {

$sql2="SELECT * from user_details WHERE email='$email'";
$retval = mysqli_query($conn,$sql2);

while($value=mysqli_fetch_array($retval))
 {
   

  $_SESSION['username']=$value['username'];
  $_SESSION['email']=$value['email'];
  $_SESSION['mob']=$value['mobilenumber'];
  $_SESSION['bank_name']=$value['bank_name'];
  $_SESSION['IFSC']=$value['IFSC'];
  $_SESSION['acc_no']=$value['acc_no'];
  $_SESSION['balance']=$value['balance'];
  $_SESSION['credit']=$value['credit'];
  
  header('Location: home.php' );
   
  }
} else {
    echo "Could not Register";
    header('Location: ../index.php' );
}
}


}
?>