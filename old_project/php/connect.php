<?php

if(isset($_POST['submit']))
{
  $uname = $_POST["Username"];
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $mob = $_POST["mob"];

  // Create connection
  $conn = mysqli_connect("localhost", "root", "", "mini_project") or die("connection err");

  $sql1= "SELECT * FROM reg WHERE Email='$email'" ;
  
  $res=mysqli_query($conn, $sql1) or die("query err");
  if(mysqli_num_rows($res)>0)
  {
    echo "<script type='text/javascript'>alert('User Already Exist')</script>";
     header('Location: ../index.php' );
  }
  else
  {
    $sql = "INSERT INTO reg (Username,Email,Mobilenumber,Password) VALUES ('$uname','$email','$mob','$pass')";
    $insert=mysqli_query($conn, $sql) or die("insert err");

    if (mysqli_query($conn, $sql))
    {
      $sql2="SELECT * from reg WHERE Email='$email'";
      $retval = mysqli_query($conn,$sql2);

      while($value=mysqli_fetch_array($retval))
      {
        $_SESSION['Username']=$value['Username'];
        $_SESSION['Email']=$value['Email'];
        $_SESSION['mob']=$value['Mobilenumber'];
        header('Location: home.php' );
      }
    }
    else
    {
      echo "<script type='text/javascript'>alert('Plz try again')";
      
    }
    header('Location: header.php');


  }
}

?>