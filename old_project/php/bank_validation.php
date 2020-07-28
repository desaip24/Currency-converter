
<?php 
$value = $_GET['query'];
$formfield = $_GET['field'];
echo $value;
echo $formfield;

// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "accno1") {
$con=mysqli_connect("localhost","root","","mini_project");
 
$sql="SELECT * from bank WHERE Acc_no='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if ($rowcount > 0) {
echo"Username is already registred";
}
else {
echo "<span id='a'>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "pass1") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
	setcookie("pass",$value,time()+50000);

echo "<span id='a'>Strong</span>";
}
}
if ($formfield == "ifsc1") {
if ((strlen($value) < 11) || (strlen($value) > 11)) {
echo "Length of IFSC code must be 11";
}
else{
echo "<span id='a'>Valid</span>";
}
}
if ($formfield == "bank1") {
if (strlen($value) < 1) {
echo "You must have to select 1 bank";
}
else
{
	echo "<span id='a'>Valid</span>";
}
}
if ($formfield == "copass1") {
if (!(strlen($value)==$_COOKIE["pass"])){
echo "Password and confirm password don't match";
}
else
{
	echo "<span id='a'>Valid</span>";
}
}

?>