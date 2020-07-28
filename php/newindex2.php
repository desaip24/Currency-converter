<?php 
session_start();
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Onlinecc</title>
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" type="text/css" href="hover.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

  <link rel="stylesheet"  href="css/newlogin.css"/>
  <script src="js/newlogin.js" type="text/javascript"></script>
  <script src="js/nl.js" type="text/javascript"></script>

</head>
<body>
<div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
       <a class="navbar-brand " href="index.php">OnlineCC</a>
      </div>
      <ul class="nav navbar-nav ">
        <li class="active"><a href="newindex.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="php/Converter.php"><span class="glyphicon glyphicon-transfer"> Converter</span></a></li>
        <li><a href="php/graph.php"><span class="fa fa-line-chart"></span> Graph</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Bank</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-globe"> Contact Us</span></a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> 
        <?php 
           echo 'Hello ';  echo $_SESSION['username'];
         ?>  
        </a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- model -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
       
                      
                     
        <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center"><span class="glyphicon glyphicon-lock "></span> User-details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user"></span> Username:</label>
        <?php echo $_SESSION['username']; ?>
            </div>
             <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> Email:</label>
        <?php echo $_SESSION['email']; ?>
            </div>
             <div class="form-group">
              <label><span class="glyphicon glyphicon-phone-alt"></span> Mobile number:</label>
        <?php echo $_SESSION['mob']; ?>
            </div>
                <div class="form-group">
              <label><span class="glyphicon glyphicon-home"></span> Bank Name:</label>
        <?php echo $_SESSION['bank_name']; ?>
            </div>
               <div class="form-group">
              <label><span class="glyphicon glyphicon-briefcase"></span> Account No.:</label>
        <?php echo $_SESSION['acc_no']; ?>
            </div>
             <div class="form-group">
              <label><span class="glyphicon glyphicon-usd"></span> Balance:</label>
        <?php echo $_SESSION['balance']; ?>
            </div>
             <div class="form-group">
              <label><span class="glyphicon glyphicon-flash"></span> Credit:</label>
        <?php echo $_SESSION['credit']; ?>
            </div>


             <div class="form-group">
               <form role="form" action="logout.php" method="post">
                <input type="submit" value="Logout" class="btn btn-danger btn-block "></input>
              </form>
              </div>
      </div>


                     </div>
               </div>    
         </div>        
    </div>              
     </div>
</div>
  
<!-- model close -->


  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Welcome to the New Era!
      </span>
    </div>
  </div>


  <section class="section section-light">
    <h2><b>What is...</b></h2>
    <p>
      A currency converter is software code that is designed to convert one currency into another in order to check its corresponding value. The code is generally a part of a web site or it forms a mobile app and it is based on current market or bank exchange rates. Currency converters aim to maintain real-time information on current market or bank exchange rates, so that the calculated result changes whenever the value of either of the component currencies does.
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Real-Time Rates
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Why Us...</h2>
    <p>
      OnlineCC is real-time currency converter website that provide wide range of currencies to choose from where to convert. Add on benfit of our website is it is totally free and open source. onlineCC is secure platform to convert currency and user can link his/her bank account to convert form direct bank and that value is store in form of credit. onlineCC has beatiful GUI and userfridly system and we have lowest commission among all converting website. That is pretty convincing. isn't it?  
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Banking facility  
      </span>
    </div>
  </div>
  

  <section class="section section-dark">
    <h2>For Whome...</h2>
    <p>
      The main purpose of this website to make free user-friendly interface that it will be easy to convert currency online. This website useful to business sector where real time currency rates are requiring and it must be accurate. This website also targeted for travel lover who are facing problem in convert currency to local currency. This website has banking facility that can convert currency directly form bank account. There is another point where OnlinCC can be helpful to measure the fluctuation of the county’s inflation rates.
    </p>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        onlinecc.com
      </span>
    </div>
  </div>

   <section class="section section-dark">
    <div>
    <p>
      &ldquo;  For anything worth having one must pay the price; and the price is always work, patience, love, self-sacrifice - no paper currency, no promises to pay, but the gold of real service &rdquo;
    </p></div>
    <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 pull-left" >
          
          <p style="text-align: center;"><a href="www.facebook.com" data-toggle="tooltip" data-placement="bottom" title="facebook" class="social_icon"><i class="fa fa-facebook" style="font-size: 20px; color:#fff ; margin:5px;"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter" class="social_icon"><i class="fa fa-twitter" style="font-size: 20px; color:#fff; margin:5px;"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="youtube" class="social_icon"><i class="fa fa-youtube-play" style="font-size: 20px; color:#fff ;margin:5px;"></i></a> 
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="google+" class="social_icon"><i class="fa fa-google-plus" style="font-size: 20px; color:#fff ;margin:5px;"></i></a></p>
       </div>
      </div>
    </div>
  </section>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<script type="text/javascript">
	window.sr = ScrollReveal();
	sr.reveal('.navbar', {
	  duration: 2000,
	  origin:'bottom'
	});
	sr.reveal('.pimg1', {
	  duration: 2000,
	  origin:'top',
	  distance:'300px'
	});
	sr.reveal('.section-light', {
	  duration: 2000,
	  origin:'right',
	  distance:'300px'
	});
	sr.reveal('.section-dark', {
	  duration: 2000,
	  origin:'left',
	  distance:'300px'
	});
	sr.reveal('.pimg2', {
	  duration: 2000,
	  origin:'bottom',
	  distance:'300px'
	});
	sr.reveal('.pimg3', {
	  duration: 2000,
	  origin:'right',
	  distance:'300px'
	});
</script>

</body>
</html>
