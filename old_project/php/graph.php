<?php 
//index.php
ini_set('display_errors', 'off');
$connect = mysqli_connect("localhost", "root", "", "mini_project") or die("e1"); 
if(isset($_POST['chart']))
{
  $from=$_POST['from'];
  $to=$_POST['to'];
 
 $from=strtolower($from);
 $to=strtolower($to);
 
 if($from == $to)
 {
  echo "<script type='text/javascript'>alert('Are you Dumb? or trying to piss me off?');</script>";
 }
 else if($to != "inr")
 {
  echo "<script type='text/javascript'>alert('This part is still under working. on second field INR is only working. please put INR in seconf field. Thanks for support! ');</script>";
 }
 else
 {
   $table= $from."2inr";
    $query = "SELECT * FROM ".$table;
    $result = mysqli_query($connect, $query) or die("e2");
    $p="";
    $d="";
    while($row = mysqli_fetch_array($result))
    {
      $d .= "\"".$row["Date"]."\",";
      $p .= $row["Price"].",";  
    }
    $len_d=strlen($d);
    $len_p=strlen($p);

    $d=substr($d, 0,$len_d-4);
    $p=substr($p, 0, $len_p-20);

  }
}
if($from == "usd")
{
  $from = "US Dollar";
}
if($from == "eur")
{
  $from = "European Euro";
}
if($from == "cny")
{
  $from = "Chinese Yen";
}
if($from == "chf")
{
  $from = "Swiss Franc";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Graph | Charts</title>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <style>
    html,
    body,
    #myChart {
      height:100%;
      width: 100%;
    }
  </style>
</head>

<body>
  <div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
         <a class="navbar-brand" href="../index.php">OnlineCC</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="Converter.php">Converter <span class="glyphicon glyphicon-transfer"></span></a></li>
          <li class="active"><a href="#">Graph <span class="fa fa-line-chart"></span></a></li>
          <li><a href="#">Bank <span class="glyphicon glyphicon-plus"></span></a></li>
          <li><a href="contact.php">Contact Us</a></li> 
        </ul>
       
      </div>
    </nav>
  </div>

<div class="pimg1_graph">
    <div class="ptext">
      <span class="border" style="background-color:#333;">
        Historical Data
      </span>
    </div>
</div>

<div class="container" id="ti" style="margin-top: 2%; margin-left: 33%; display: block;">
  <br><p style ="font-size: 22px; color: #000; margin-left: 4%;"><b>Search For Historical Data</b></p>
</div>
 <div class="container" id="search" style="margin-top: 1.5%; margin-left: 33%;">
    <form action="" method="POST">  
      <table cellspacing="10px">  
        <tr>
          <td>   
            <div>   
              <select class="livesearch" style="width:170px;" name="from" id="from">
              <option value="INR">Indian Rupee</option>
              <option value="USD" selected>US Dollar</option>
              <option value="EUR">European Euro</option>
              <option value="JPY">Japanese Yen</option>
              <option value="BGN">Bulgarian Lev</option>
              <option value="CZK">Czech koruna</option>
              <option value="DKK">Danish krone</option>
              <option value="EEK">Estonian Kroon</option>
              <option value="GBP">Pound sterling</option>
              <option value="HUF">Hungarian forint</option>
              <option value="LTL">Lithuanian Litas</option>
              <option value="LVL">Latvian Lats</option>
              <option value="PLN">Polish zloty</option>
              <option value="RON">Romanian leu</option>
              <option value="SEK">Swedish krona</option>
              <option value="CHF">Swiss franc</option>
              <option value="HRK">Croatian Kuna</option>
              <option value="NOK">Norwegian krone</option>
              <option value="RUB">Russian ruble</option>
              <option value="TRY">Turkish lira</option>
              <option value="AUD">Australian dollar</option>
              <option value="BRL">Brazilian real</option>
              <option value="CAD">Canadian dollar</option>
              <option value="CNY">Chinese Yuan </option>
              <option value="HKD">Hong Kong dollar</option>
              <option value="IDR">Indonesian rupiah</option>
              <option value="KRW">South Korean Won</option>
              <option value="MXN">Mexican peso</option>
              <option value="MYR">Malaysian ringgit</option>
              <option value="NZD">New Zealand dollar</option>
              <option value="PHP">Philippine Piso</option>
              <option value="SGD">Singapore dollar</option>
              <option value="THB">Thai baht</option>
              <option value="ZAR">South African Rand</option></select>
            </div>
          </td>
          <td>
            <div class="w3-container" style="margin-top: 5px; margin-left: 0px;">
              <i class="glyphicon glyphicon-transfer"></i>
            </div>
          </td>
          <td>
          <div>
              <select class="livesearch" style="width:170px;" name="to" id="to"> 
              <option value="INR" selected>Indian Rupee</option>
              <option value="USD">US Dollar</option>
              <option value="EUR">European Euro</option>
              <option value="JPY">Japanese Yen</option>
              <option value="BGN">Bulgarian Lev</option>
              <option value="CZK">Czech koruna</option>
              <option value="DKK">Danish krone</option>
              <option value="EEK">Estonian Kroon</option>
              <option value="GBP">Pound sterling</option>
              <option value="HUF">Hungarian forint</option>
              <option value="LTL">Lithuanian Litas</option>
              <option value="LVL">Latvian Lats</option>
              <option value="PLN">Polish zloty</option>
              <option value="RON">Romanian leu</option>
              <option value="SEK">Swedish krona</option>
              <option value="CHF">Swiss franc</option>
              <option value="HRK">Croatian Kuna</option>
              <option value="NOK">Norwegian krone</option>
              <option value="RUB">Russian ruble</option>
              <option value="TRY">Turkish lira</option>
              <option value="AUD">Australian dollar</option>
              <option value="BRL">Brazilian real</option>
              <option value="CAD">Canadian dollar</option>
              <option value="CNY">Chinese Yuan </option>
              <option value="HKD">Hong Kong dollar</option>
              <option value="IDR">Indonesian rupiah</option>
              <option value="KRW">South Korean Won</option>
              <option value="MXN">Mexican peso</option>
              <option value="MYR">Malaysian ringgit</option>
              <option value="NZD">New Zealand dollar</option>
              <option value="PHP">Philippine Piso</option>
              <option value="SGD">Singapore dollar</option>
              <option value="THB">Thai baht</option>
              <option value="ZAR">South African Rand</option> </select>
          </div>
          </td>
        </tr>
        <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
        <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>

        <tr>
        <td colspan="3">
          <BUTTON class="btn btn-success btnbtn-lg btn-block" id="chart" name="chart">Chart is Here</BUTTON> 
        </td>
      </tr>
    </table>
   </form> 
  <script type="text/javascript"> $(".livesearch").chosen(); </script><br><br>
</div> 

<section class="section section-dark">
    <h2>What is Zing Chart!?</h2>
    <p>
      OnlineCC uses Zing Chart to map Charts.Zing Chart supports 30 different types of Charts and renders across devices including iPhone, iPad, Android, Mac & PCs. This allows you to create rich dashboards that work across devices without compromising on maintainability or functionality of your web application. Graphs include several good looking themes and are 10x faster than conventional Flash / SVG based Charting Libraries – resulting in lightweight, beautiful and responsive dashboards.  
    </p>
</section>

  <div id='myChart' class="container-fluid myChart" style="margin:20px 0 -6% 25%; height: 70%; width: 100%;">
  <script style="margin-top: 20px;">
    var myData = [<?php echo $p; ?>];

    var myConfig = {
      "graphset": [{
        "type": "bar",
        "title": {
          "text": "<?php echo $from?> to Indian Rupee"
        },
        "scale-x": {
          "labels": [<?php echo $d;?>]
        },
        "series": [{
          "values": myData
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "80%",
      width: "50%"
    });
  </script>
</div>
<section class="section section-dark">
    <h2>What is Zing Chart!?</h2>
    <p>
      OnlineCC uses Zing Chart to map Charts.Zing Chart supports 30 different types of Charts and renders across devices including iPhone, iPad, Android, Mac & PCs. This allows you to create rich dashboards that work across devices without compromising on maintainability or functionality of your web application. Graphs include several good looking themes and are 10x faster than conventional Flash / SVG based Charting Libraries – resulting in lightweight, beautiful and responsive dashboards.  
    </p>
</section>

<div class="pimg1">
    <div class="ptext">
      <span class="border">
        onlinecc.com
      </span>
    </div>
</div>

<section class="section section-dark" style="padding: 10px 0 4px 0;">
    <div >
    <p style="padding: -10px;"><b>&ldquo; An investment in knowledge pays the best interest.&rdquo; <br>-Benjamin Franklin</p>
   </div>
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
  <script type="text/javascript">
    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
      duration: 2000,
      origin:'bottom'
    });
    sr.reveal('.pimg1_graph', {
      duration: 2000,
      origin:'top',
      distance:'300px'
    });
    sr.reveal('#ti', {
      duration: 2000,
      origin:'left',
      distance:'300px'
    });
    sr.reveal('#search', {
      duration: 2000,
      origin:'right',
      distance:'300px'
    });
    sr.reveal('.section-dark', {
      duration: 2000,
      origin:'right',
      distance:'300px'
    });
    sr.reveal('.pimg1', {
      duration: 2000,
      origin:'left',
      distance:'300px'
    });
    sr.reveal('.myChart', {
      duration: 2000,
      origin:'top',
      distance:'300px'
    });
  </script>

</body>

</html>