
<?php 
session_start();
$con=mysqli_connect("localhost","root","","project");

$eid = $_POST['eid'];
$psw= $_POST['pwd'];
 
 

$sql="SELECT * from user_details";
$retval = mysqli_query($con,$sql);

while($value=mysqli_fetch_array($retval))
 {
  	if((($eid == $value['email'])||($eid == $value['username']))&&( $psw == $value['password']))
  {
    $_SESSION['h']='valid';
    $_SESSION['username']=$value['username'];
    $_SESSION['email']=$value['email'];
    $_SESSION['mob']=$value['mobilenumber'];
    $_SESSION['bank_name']=$value['bank_name'];
    $_SESSION['acc_no']=$value['acc_no'];
    $_SESSION['balance']=$value['balance'];
    $_SESSION['credit']=$value['credit'];
    $_SESSION['IFSC']=$value['IFSC'];

    header('Location: home.php');
   } 
  else
  {   
   
    header('Location:..\index.php');
  }
 }
//mysqli_close($con);







