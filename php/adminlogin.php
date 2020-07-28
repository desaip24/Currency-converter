<?php   

if(isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost", "root", "", "project") or die("connection err");

$name=$_POST['name'];
$pass=$_POST['pass'];
$sql="SELECT * from admin";
$retval1 = mysqli_query($conn,$sql);

while($value=mysqli_fetch_array($retval1))
 {
  if(($name == $value['name'])&&( $pass == $value['password']))
  {
    $sql2="SELECT * from feedback";
      $retval2 = mysqli_query($conn,$sql2);
      echo "<table>";
      while($value=mysqli_fetch_array($retval2))
      {
        echo "<tr><td><table><tr><th>".$value['username']."</th></tr><tr><td>Email-ID:</td><td>".$value['email']."</td></tr><tr><td>Mobilenumber:</td><td>".$value['mob']."</td></tr><tr><td colspan='2'>Message:</td><td>".$value['feedback']."</td></tr></table></td></tr><br><br>";
      }
      echo "</table>";
  }
  else
  {
  	echo "Invalid credentials...";
  }
}
}
?>

