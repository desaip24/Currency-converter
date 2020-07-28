
<?php 
session_start();
$con=mysqli_connect("localhost","root","","mini_project");

$eid = $_POST['eid'];
$psw= $_POST['pwd'];
 
 

$sql="SELECT * from reg";
$retval = mysqli_query($con,$sql);

while($value=mysqli_fetch_array($retval))
 {
  	if((($eid == $value['Email'])||($eid == $value['Username']))&&( $psw == $value['Password']))
  {

    $_SESSION['Username']=$value['Username'];
    $_SESSION['Email']=$value['Email'];
    $_SESSION['mob']=$value['Mobilenumber'];
    header('Location: home.php');
   } 
  else
  {   
    echo "<script type='text/javascript'>alert('wrong Username or Password')</script>";
   
    //header('Location:../index.php');
  }
 }
//mysqli_close($con);







