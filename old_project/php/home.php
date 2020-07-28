<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Onlinecc</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/border.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
       <a class="navbar-brand" href="../index.php">OnlineCC</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="Converter.php">Converter <span class="glyphicon glyphicon-transfer"></span></a></li>
        <li><a href="graph.php">Graph <span class="fa fa-line-chart"></span></a></li>
        <li><a href="#">Bank <span class="glyphicon glyphicon-plus"></span></a></li>
        <li><a href="Contact.php">Contact Us</a></li> 
      </ul>
      
    </div>
  </nav>
</div>

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
  
<style type="text/css">
  .mid_img{
  position:relative;
  opacity:0.70;
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;
  background-attachment:fixed;
}

.mid_img{
  background-image:url('../img/pexels-photo.jpg');
  min-height:400px;
}  
</style>

<div class="mid_img">
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
    <h2>For Whom...</h2>
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

  <section class="section section-light border" >
    <h2 style="margin-top: -10px;"><b>Care 2 Share, Sir?</b></h2><br>
    <p style="padding: 10px;">
      <?php
        require 'border.html';
      ?>
    </p>
</section>

   <section class="section section-dark">
    <div>
    <p><b>
      &ldquo;  For anything worth having one must pay the price; and the price is always work, patience, love, self-sacrifice - no paper currency, no promises to pay, but the gold of real service &rdquo;<br>-&nbsp;John Burroughs</b>
    </p></div>
    <!-- <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 pull-left" >
          
          <p style="text-align: center;"><a href="www.facebook.com" data-toggle="tooltip" data-placement="bottom" title="facebook" class="social_icon"><i class="fa fa-facebook" style="font-size: 20px; color:#fff ; margin:5px;"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter" class="social_icon"><i class="fa fa-twitter" style="font-size: 20px; color:#fff; margin:5px;"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="youtube" class="social_icon"><i class="fa fa-youtube-play" style="font-size: 20px; color:#fff ;margin:5px;"></i></a> 
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="google+" class="social_icon"><i class="fa fa-google-plus" style="font-size: 20px; color:#fff ;margin:5px;"></i></a></p>
       </div>
      </div>
    </div> -->
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
