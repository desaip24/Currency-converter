<?php  
session_start();
ini_set('display_errors', 'off');

$name=$_SESSION['username'];
$to=$_POST['output'];
$amount=$_POST['converted_amount'];
$from = $to;
$to = "INR";

echo $name;


function currency_convert($from,$to,$amount,$sign=false,$sensitivity=5) {
$RATES=$BASE=$in=$out=$append=NULL;
 
//Array of available countries & currencies
$CURRENCY=array("US"=>"USD","BE"=>"EUR","ES"=>"EUR","LU"=>"EUR","PT"=>"EUR","DE"=>"EUR","FR"=>"EUR","MT"=>"EUR","SI"=>"EUR","IE"=>"EUR","IT"=>"EUR","NL"=>"EUR","SK"=>"EUR","GR"=>"EUR","CY"=>"EUR","AT"=>"EUR","FI"=>"EUR","JP"=>"JPY","BG"=>"BGN","CZ"=>"CZK","DK"=>"DKK","EE"=>"EEK","GB"=>"GBP","HU"=>"HUF","LT"=>"LTL","LV"=>"LVL","PL"=>"PLN","RO"=>"RON","SE"=>"SEK","CH"=>"CHF","NO"=>"NOK","HR"=>"HRK","RU"=>"RUB","TR"=>"TRY","AU"=>"AUD","BR"=>"BRL","CA"=>"CAD","CN"=>"CNY","HK"=>"HKD","ID"=>"IDR","IN"=>"INR","KR"=>"KRW","MX"=>"MXN","MY"=>"MYR","NZ"=>"NZD","PH"=>"PHP","SG"=>"SGD","TH"=>"THB","ZA"=>"ZAR");
 
if (strlen($from)==2 && strlen($to)==2) {//Operate using country code
 if(isset($CURRENCY[$from])) {$in=$CURRENCY[$from];}
 if(isset($CURRENCY[$to])) {$out=$CURRENCY[$to];}
} elseif (strlen($from)==3 && strlen($to)==3) {//Operate using currency code
 if(in_array($from,$CURRENCY)) {$in=$from;}
 if(in_array($to,$CURRENCY)) {$out=$to;}
} else {
 //echo "Error: You should either use 2 digit country codes or 3 digit currency codes!";
}
 
 if ($in && $out) {//Both currencies available, continue
 
 //Load live conversion rates and set as an array
 $XMLContent= file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml"); 
 if(is_array($XMLContent)) {
 foreach ($XMLContent as $line) {
 if (ereg("currency='([[:alpha:]]+)'",$line,$currencyCode)) {
 if (ereg("rate='([[:graph:]]+)'",$line,$rate)) {
 $RATES[$currencyCode[1]]=$rate[1];
 }
 }
 }
 }
 if(is_array($RATES)) {
 
 $RATES["EUR"]=1; //Add EUR reference to array
 if ($in!="EUR") {//Normalize rate to given input
 $BASE=$RATES[$in];
 foreach ($RATES as $code => $rate) {
 $RATES[$code]=round($rate/$BASE,$sensitivity);}
 }
 
 //Prepend or append the currency information
 if ($sign) {
 if ($out=="USD") {echo "$";}
 elseif ($out=="EUR") {echo "&euro;";}
 elseif ($out=="GBP") {echo "&pound;";}
 elseif ($out=="JPY") {echo "&yen;";}
 else {$append=$out;}
 }
 
  return "".round($amount*$RATES[$out],$sensitivity);//Output the converted amount
 
 if ($append) {echo " ".$append;}
 
 } else {
 //echo "Error: Unable to load conversion rates!";
 }
 
 } else {
 //echo "Error: Either one or both of given currencies are not available for conversion!";
 }
}

$ans=currency_convert($from, $to, $amount);
$val=$ans;
$con=mysqli_connect("localhost","root","","project");

$sql="SELECT * from user_details where username='$name'";
$retval= mysqli_query($con,$sql);

while($value=mysqli_fetch_array($retval))
{
  {

    $value['balance']=($value['balance'])-($val);
    $value['credit']=$value['credit']+$val;

    $v1=$value['credit'];
    $v2=$value['balance'];
    $sql1="UPDATE user_details SET credit='$v1',balance='$v2' where username='$name'";
    $retval1 = mysqli_query($con,$sql1);
    if($retval1)
    {
     // echo "<br><br><font size='30'><center>successfully credited from your bank account!</center></font>";
 ?> 
<html>
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
        <li class="active"><a href="newindex.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="php/Converter.php"><span class="glyphicon glyphicon-transfer"></span> Converter</a></li>
        <li><a href="php/graph.php"><span class="fa fa-line-chart"></span> Graph</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Bank</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-globe"></span> Contact Us</a></li> 
      </ul>
     
      </ul>
    </div>
  </nav>
</div>
<head>
  <style>
    table{
      width: 80%;
    }
    .a{
      text-align: right;
    }
    td{
      height: 150px;
      font-size: 50px;
      text-align: center;
    }
  
  </style>
</head>
<body>




  <center>
  <table>
    <tr>
      <td>
        <table border="10">
          <tr><td>Bank Balance:</td></tr>
          <tr><td><?php echo "".$v2."Credits"; ?></td></tr>
        </table>
      </td>
      <td>
        <table border="10">
          <tr><td>Wallet Balance:</td></tr>
          <tr><td><?php echo "".$v1."credits"; ?></td></tr>
        </table>
      </td>
    </tr>

    <tr class="a"><td colspan="2">NOTE: Here, 1 Credit=1 INR
    </td>
    </tr>
  </table>
  <?php 
   $sql1="UPDATE user_details SET credit='$v1',balance='$v2' where username='$name'";
    $retval1 = mysqli_query($con,$sql1);
    if($retval1)
    {
      echo "<br><br><font size='30'><center>successfully credited from your bank account!</center></font>";  }
 ?> 
  
</center>
<h1 align="center">click <a href="sess.php"> here </a> for updated values</h1>
<br/><br/><br/><br/>
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
</body>
</html>

<?php
   }
  }
}

?>



