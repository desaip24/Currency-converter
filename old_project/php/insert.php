
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";

 $acc = $_POST["Acc_no"];
 $bank = $_POST["Bank_name"];
 $pass = $_POST["Password"];
 $ifsc = $_POST["IFSC"];
 echo "string";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1= "SELECT * FROM bank WHERE Acc_no='$acc'";
$res=mysqli_query($conn, $sql1);
if(mysqli_num_rows($res)>0)
{
//	header('Location: bankreg.php' );
	echo "<script>alert('User Already Exist')</script>";

	
}
else
{

$sql = "INSERT INTO bank (Bank_name,IFSC,Acc_no,Password,Bal,Amount) VALUES ('$bank','$ifsc','$acc','$pass',5000,0)";

if (mysqli_query($conn, $sql)) {
    echo "Successfull";
} else {
    echo "Could not Register";
}
}
?>

