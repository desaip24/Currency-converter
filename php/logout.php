<?php
session_start();
session_destroy();
$_SESSION['h']='invalid';
header('Location: ../index.php');

?>