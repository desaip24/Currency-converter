<?php

  $un = $_POST["nm"];
  $em = $_POST["em"];
  $FB = $_POST["FB"];
  $no = $_POST["no"];

  // Create connection
  $conn = mysqli_connect("localhost", "root", "", "project") or die("connection err");

    $sql = "INSERT INTO feedback (username,email,mob,feedback) VALUES ('$un','$em','$no','$FB')";
    if (mysqli_query($conn, $sql))
    {
        echo "Sent successfully !";
    }

//?>