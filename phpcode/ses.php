<html>
<head>
	<title>Web</title>
</head>
<style>


					.btn {
						  background-color:#009000; 
						  border: none;
						  color: white;
						  padding: 10px 20px;
						  text-align: center;
						  text-decoration: none;
						  display: inline-block;
						  font-size: 19px;
						  margin: 2px 2px;
						  cursor: pointer;
						}

body {
      
      -webkit-animation: colorchange 5s infinite; 
      animation: colorchange 5s infinite;
    }
      @-webkit-keyframes colorchange
      {
      0%   {background: #2de64f;}
      25%  {background: #349854;}
      50%  {background: #95d765;}
      75%  {background: #58c677;}
      100% {background: #9bc45a;}
      }
     
      @keyframes colorchange
      {
       0%   {background: #2de64f;}
      25%  {background: #349854;}
      50%  {background: #95d765;}
      75%  {background: #58c677;}
      100% {background: #9bc45a;}
       }   


</style>
<body >

</body>
</html>
<?php
echo "";
echo "<form action='' method='post' name='form'>";
echo " 
<center>
<form>
<table>
<tr>
   <td><b>User Id : </b></td> 
   <td><input type='text' name='ui'></td>
</tr>

<tr> 
	<td><b>Password:</b></td> 
	<td><input type='password' name='pw' ></td>
</tr>

		</br></br></br></br></br></br>
<table>		
<tr>	
<br><td> <button class='btn' input type=submit name=su>Submit</button> </td>
</tr>

<tr>

	<td><button class='btn' input type=submit name=cn> click new register user</button></a></td>

		
</tr>

</table>
</table>
</form>
</center>
";
if(isset($_POST['cn']))
	{
		header('location:p2.php');
	}

 if(isset($_POST['su']))
 {
 	$ui=$_POST['ui'];
 	$pw=$_POST['pw'];
 	setcookie('ui','Admin',time()+3600);
  	setcookie('pw','admin',time()+3600);



  	if(isset($_COOKIE['ui'])&&isset($_COOKIE['pw']))

  	{

  		$a=$_COOKIE['ui'];
  		$b=$_COOKIE['pw'];
  	}



	  	else
	  	 {
	  		echo "COOKIE US NOT SET <br>";
	  	 }



			  	 if ($ui==$a and $pw==$b)
			  	  {
			  	 	echo"LOGIN SUCCESSFULLY <br> ";
			  	 	session_start();
			  	 	$_SESSION['ui']=$a;
			  	 	$_SESSION['pw']=$b;
			  	 		@header('location:phpcode/prod.php');
			  	  }



					  	  else if($ui!=$a and $pw!=$b)
					  	  {
					         echo "BOTH ARE INCERRECT <br>";
					  	  }

							  	 

							  	  else if($ui!=$a)
							  	  {
							  	  	echo "USERID  IS INCURRECT <br>";
							  	  }

									  	
									  	  else
									  	  {
									  	  	echo "PASSWORD IS INCURRECT";
									  	  }
				 					  	  
		 
} 

?> 	

