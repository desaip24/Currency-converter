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
       <a class="navbar-brand " href="newindex.php">OnlineCC</a>
      </div>
      <ul class="nav navbar-nav ">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="Converter.php"><span class="glyphicon glyphicon-transfer"></span> Converter</a></li>
        <li><a href="graph.php"><span class="fa fa-line-chart"></span> Graph</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Bank</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-globe"></span> Contact Us</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> 
          Login
        </a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- model -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                       
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal" action="validuser.php" method="post">
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="eid" name="eid" placeholder="Enter your Email/usename" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password" />
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-2"></div>
                                  <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    <a href="javascript:;">Forgot your password?</a>
                                  </div>
                              </div>
                           </form>
                            </div>
                            



                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal" action="connect.php" method="post">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="Username" class="form-control" id="txt"  placeholder="Name" onkeyup="validate(this.value)"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input required type="email" class="form-control" id="email" name="email" onchange="email_validate(this.value);" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control phone" id="phone" maxlength="10" name="mob" onkeyup="validatephone(this);" placeholder="Mobile" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label"> 
                                        Password</label>
                                    <div class="col-sm-10">    
                                     <input type="password" class="form-control inputpass" minlenght="4" name="password" maxleght="15" id="pass1" placeholder="Password" />
                                 </div> &nbsp
                                    <label for="password" class="col-sm-2 control-label">Confirm password:</label>
                                    <div class="col-sm-10">
                                      <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                                    <span id="confirmMessage" class="confirmMessage"></span>
                                 </div>
                             </div>
                               <div class="form-group">
                                    <label for="bank name" class="col-sm-2 control-label">
                                        Bank Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control phone" id="txt" maxlength="20" name="bank_name" onkeyup="validate(this.value);" placeholder="Bank Name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="IFSC" class="col-sm-2 control-label">
                                        IFSC</label>
                                    <div class="col-sm-10 ">
                                        <input type="text" class="form-control " id="IFSC" maxlength="20" name="ifsc" onkeyup="validatephone(this);" placeholder="IFSC" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="acc.no" class="col-sm-2 control-label">
                                        Account No.</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control " id="IFSC" maxlength="20" name="acc_no" onkeyup="validatephone(this);" placeholder="Account no." />
                                    </div>
                                </div>

                             <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                       <input type="submit" name="submit" value="Register"  class="btn btn-success btn-sm">
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                           
                     





                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="www.facebook.com" class="btn btn-primary">Facebook</a> <a href="www.google.com/gmail" class="btn btn-danger">
                                        Google</a>
                                </div>
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
