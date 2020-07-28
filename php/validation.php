<style>
#a{
	color: green;
}</style>
<?php 
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username1") {
$con=mysqli_connect("localhost","root","","project");
 
$sql="SELECT * from user_details WHERE username='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if ($rowcount > 0) {
echo"Username is already registred";
}
elseif (strlen($value) < 3) {
echo "Must be 3+ letters";
}

 else {
echo "<span id='a'>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password1") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span id='a'>Strong</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email1") {
$con=mysqli_connect("localhost","root","","project");
$sql="SELECT * from user_details WHERE email='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
}

else if  ($rowcount > 0)
 {
echo"Email is already registred";
}

else{
echo "<span id='a'>Valid</span>";
}
}
// Check Valid or Invalid mob address when user enters mob address in mob input field.
if ($formfield == "mob1") {

$con=mysqli_connect("localhost","root","","project");
$sql="SELECT * from user_details WHERE mobilenumber='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if (!preg_match("/^[0-9]{10}$/", $value)) {
echo "Mobile no must be of 10 digits";
} 

else if  ($rowcount > 0)
{
echo"mobile is already registred";
}

else {
echo "<span id='a'>Valid</span>";
}
}
?>