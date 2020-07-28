
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";

 $acc = $_POST["Acc_no"];
 $bank = $_POST["Bank_name"];
 $pass = $_POST["Password"];
 $ifsc = $_POST["IFSC"];
 $mob = $_POST["mob"];

 //echo "string";

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
//  header('Location: bankreg.php' );
  echo "<script>alert('User Already Exist')</script>";

  
}
else
{

//$sql = "INSERT INTO bank (Bank_name,IFSC,Acc_no,Password,Bal,Amount) VALUES ('$bank','$ifsc','$acc','$pass',5000,0)";

$sql = "UPDATE user_detail SET bank_name = '".$bank."', IFSC = '".$ifsc."', Acc_no = '".$acc."' , Password = '".$pass."' , Bal = 5000 , Amount = 0  WHERE username = abc ";
  if (mysqli_query($conn, $sql)) {
    echo "Successfull";
} else {
    echo "Could not Register";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function checkForm() { 
    // Fetching values from all input fields and storing them in variables.
    var acc = document.getElementById("Acc_no").value;
    var pass = document.getElementById("Password").value;
    var bank = document.getElementById("Bank_name").value;
    var ifsc = document.getElementById("IFSC").value;
    var copass = document.getElementById("CPassword").value;

    //Check input Fields Should not be blanks.
    if (acc == '' || pass == '' || bank == '' || copass == '' || ifsc == '') {
    alert("Fill All Fields");
    } 


    else {
    //Notifying error fields 
    var bank1 = document.getElementById("bank1").innerHTML;
    var accno1 = document.getElementById("accno1").innerHTML;
    var copass1 = document.getElementById("copass1").innerHTML;
    var pass1 = document.getElementById("pass1").innerHTML;
    var ifsc1 = document.getElementById("ifsc1").innerHTML;
    //var mob2 = document.getElementById("mob").innerHTML;
    //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
    if (bank1== 'Cannot be empty' || accno1 == 'Already Registered'|| ifsc1 == 'Length must be of 11'|| pass1 == 'Password too short' copass1 == ' Password & Confirm Password do not match') {
    alert("Please enter Valid Information");
    } else {
    //Submit Form When All values are valid.

    document.getElementById("myForm").submit();
    alert("Registered successfully");
     //header('Location: indexexe.php'); 
    }
    }
    }
    // AJAX code to check input field values when onblur event triggerd.
    function validate(field, query) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState != 4 ) {
    document.getElementById(field).innerHTML = "Validating..";
    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById(field).innerHTML = xmlhttp.responseText;
    } else {
    document.getElementById(field).innerHTML = "Error Occurred. <a href='reg.php'>Reload Or Try Again</a> the page.";
    }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
  </script>
</head>
<body>

<div class="container">
  <h2>Bank Details:-</h2>
  <form action="bank.php" method="post">
    <div class="form-group">
      <label for="Bank_name">Select Bank:</label>
      <select id="Bank_name" name="Bank_name" onchange="validate('bank1', this.value)">
        <option value="SBI">State Bank Of India</option>
        <option value="BOB">Bank Of Baroda</option>
        <option value="OBC">Oriental Bank Of E-Commerce</option>
        <option value="PNB">Punjab Nationl Bank</option>
        <option value="AXIS">Axis Bank</option>
        <option value="DENA">Dena Bank</option>
      </select>
      <div id='bank1'></div>
    </div>
   <div class="form-group">
      <label for="IFSC">IFSC Code:</label>
      <input type="text" class="form-control" id="IFSC" placeholder="Enter IFSC Code" name="IFSC" onblur="validate('ifsc1', this.value)"/>
      <div id='ifsc1'></div>
    </div>
    <div class="form-group">
      <label for="mob">Mobile Number:</label>
      <input type="text" class="form-control" id="mob" placeholder="Contact number" name="mob" onblur="validate('mob1', this.value)"/>
      <div id='mob1'></div>
    </div>
        <div class="form-group">
      <label for="Acc_no">Account number:</label>
      <input type="text" class="form-control" id="Acc_no" placeholder="Enter Account number" name="Acc_no" onblur="validate('accno1', this.value)"/>
      <div id='accno1'></div>
    </div>
        <div class="form-group">
      <label for="Password">Password:</label>
      <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password" onblur="validate('pass1', this.value)"/>
      <div id='pass1'></div>
    </div>
    <div class="form-group">
      <label for="CPassword">Confirm Password:</label>
      <input type="password" class="form-control" id="CPassword" placeholder="Enter Confirm password" name="CPassword" onblur="validate('copass1', this.value)"/>
      <div id='copass1'></div>
    </div>
    <button onclick="checkform()" type="submit" class="btn btn-default" value="submit">Submit</button>
  </form>
</div>

</body>
</html>