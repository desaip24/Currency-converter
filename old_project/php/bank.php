
<?php
ini_set('display_errors', 'off');

   $con=mysqli_connect("localhost","root","","mini_project") or die("e1");
function marq($from,$to,$amount)
    {
//   echo "string";
    $sign=true; 
    $RATES=$BASE=$in=$out=$append=NULL;


    $CURRENCY=array("US"=>"USD","BE"=>"EUR","ES"=>"EUR","LU"=>"EUR","PT"=>"EUR","DE"=>"EUR","FR"=>"EUR","MT"=>"EUR","SI"=>"EUR","IE"=>"EUR","IT"=>"EUR","NL"=>"EUR","SK"=>"EUR","GR"=>"EUR","CY"=>"EUR","AT"=>"EUR","FI"=>"EUR","JP"=>"JPY","BG"=>"BGN","CZ"=>"CZK","DK"=>"DKK","EE"=>"EEK","GB"=>"GBP","HU"=>"HUF","LT"=>"LTL","LV"=>"LVL","PL"=>"PLN","RO"=>"RON","SE"=>"SEK","CH"=>"CHF","NO"=>"NOK","HR"=>"HRK","RU"=>"RUB","TR"=>"TRY","AU"=>"AUD","BR"=>"BRL","CA"=>"CAD","CN"=>"CNY","HK"=>"HKD","ID"=>"IDR","IN"=>"INR","KR"=>"KRW","MX"=>"MXN","MY"=>"MYR","NZ"=>"NZD","PH"=>"PHP","SG"=>"SGD","TH"=>"THB","ZA"=>"ZAR");

    if(strlen($from)==2 && strlen($to)==2)
    {
        if(isset($CURRENCY[$from])) 
            {
                $in=$CURRENCY[$from];
            }
        if(isset($CURRENCY[$to])) 
            {
                $out=$CURRENCY[$to];
            }
    } 
    elseif(strlen($from)==3 && strlen($to)==3)
    {
        if(in_array($from,$CURRENCY))
        {
            $in=$from;
        }
        if(in_array($to,$CURRENCY)) 
        {
                $out=$to;
        }
    } 
    else
    {
       // echo "Error: You should either use 2 digit country codes or 3 digit currency codes!";
    }

    if ($in && $out) 
    {       
        $XMLContent= file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");      
        if(is_array($XMLContent))
        {
            foreach ($XMLContent as $line) 
            {
                if (ereg("currency='([[:alpha:]]+)'",$line,$currencyCode)) 
                {
                    if (ereg("rate='([[:graph:]]+)'",$line,$rate))
                    {
                        $RATES[$currencyCode[1]]=$rate[1];
                    }
                }
            }
        }
        $sensitivity=5;
        if(is_array($RATES)) 
        {
                
            $RATES["EUR"]=1; 
            if ($in!="EUR")
            {
                $BASE=$RATES[$in];
                foreach ($RATES as $code => $rate) 
                {
                    $RATES[$code]=round($rate/$BASE,$sensitivity);
                }
            }
        }
            
            echo round($amount*$RATES[$out],$sensitivity);
        }
        else
        {
           // echo "Error: Unable to load conversion rates!"; 
        }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Banking</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/loading.css">
    <link rel="stylesheet" href="../css/style.css">
  

<script type="text/javascript">
    function transfer() {
        var converted_amount=document.getElementById("converted_amount").value;
        var from=document.getElementById("from").value; 
        document.write(</script><?php echo marq(from,"INR",converted_amount)?><script type="text/javascript">);
       // document.write(converted_amount); 


    }
</script>
<script type="text/javascript">
    function title()
    {
        var amount=document.getElementById("amount").value;;
        var to=document.getElementById("to").value;
        var from=document.getElementById("from").value; 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "Converter_ajax.php?amount=1&to="+to+"&from="+from, true);
        xmlhttp.send();     
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("title").innerHTML = this.responseText;
            }
        }
    }
    function cur()
    {
        function openModal() {
        document.getElementById('modal').style.display = 'block';
        document.getElementById('fade').style.display = 'block';
        }

        function closeModal() {
        document.getElementById('modal').style.display = 'none';
        document.getElementById('fade').style.display = 'none';
        }
        
        document.getElementById('converted_amount').innerHTML = '';
       openModal();

        var xhr = false;
        if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
        }
        else {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
     //document.getElementById("process").innerHTML ="converting...."; 
        if(xhr)
        {
            var amount=document.getElementById("amount").value;
            var to=document.getElementById("to").value;
            var from=document.getElementById("from").value;
            
             title();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","Converter_ajax.php?amount="+amount+"&to="+to+"&from="+from, true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4 && this.status == 200)
                {   
                    closeModal();
                    document.getElementById('ti').style.display = 'none';
                    document.getElementById('onerate').style.display = 'block';
                    document.getElementById("converted_amount").value = this.responseText; 
                 //document.getElementById("process").innerHTML = "";
                }
            }
            var converted_amount=document.getElementById("converted_amount").value;


        }
    }
</script> 
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
        <li><a href="converter.php">Converter <span class="glyphicon glyphicon-transfer"></span></a></li>
        <li><a href="graph.php">Graph <span class="fa fa-line-chart"></span></a></li>
        <li class="active"><a href="#">Bank <span class="glyphicon glyphicon-plus"></span></a></li>
        <li><a href="contact.php">Contact Us</a></li> 
      </ul>
     
    </div>
  </nav>
</div>
<style type="text/css">
    .bank_img{
    position:relative;
    opacity:0.70;
    background-position:center;
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment:fixed;
  }

  .bank_img{
    background-image:url('../img/pexels-photo.jpg');
    min-height:90%;
  }  
  </style>

<div class="pimg4">
    <div class="ptext" style="opacity: 1">
      <span class="border">
        Banking is Here!
      </span>
    </div>
</div>

<section class="section section-light">
    <h2><b>What is...</b></h2>
    <p>
      A currency converter is software code that is designed to convert one currency into another in order to check its corresponding value. The code is generally a part of a web site or it forms a mobile app and it is based on current market or bank exchange rates. Currency converters aim to maintain real-time information on current market or bank exchange rates, so that the calculated result changes whenever the value of either of the component currencies does.
    </p>
</section>

<!-- <div class="container-fluid" style="font-size: 20px; background-color: #282e34; color: white; margin-top: 5px;">
<marquee>
    <p style="padding-top: 15px; ">
     US Dollar &nbsp;<?php echo marq("USD","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-up" style="color: green"><b>&nbsp;0.09&nbsp;%&nbsp;</b></span> &nbsp;|&nbsp;
     Euro &nbsp;<?php echo marq("EUR","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-up" style="color: green"><b>&nbsp;0.92%&nbsp;</b></span>&nbsp;|&nbsp;  
     Japanese Yen &nbsp;<?php echo marq("JPY","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-down" style="color: red;"><b>&nbsp;0.17%&nbsp;</b></span>&nbsp;|&nbsp;
     British Pound &nbsp;<?php echo marq("GBP","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-up" style="color: green;"><b>&nbsp;0.02%&nbsp;</b></span>&nbsp;|&nbsp;
     Swiss franc &nbsp;<?php echo marq("CHF","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-up" style="color: green;"><b>&nbsp;0.04%&nbsp;</b></span>&nbsp;|&nbsp;
     Bulgarian Lev &nbsp;<?php echo marq("BGN","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-down" style="color: red;"><b>&nbsp;0.295%&nbsp;</b></span>&nbsp;|&nbsp;
     Thai baht &nbsp;<?php echo marq("THB","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-down" style="color: red;"><b>&nbsp;0.05%&nbsp;</b></span>&nbsp;
    </p>
</marquee>
</div> -->

<div class="bgimg1">
    <div class="container" id="ti" style="margin-top: 0%; margin-left: 33%; display: block;">
        <br>
        <br>
        <p style ="font-size: 22px; color: #000; margin-left: 4%;"><b> Finally, Here is Currency Converter!</b></p>
    </div>

    <div class="container" id="onerate" style="margin-top: 0%; margin-left: 33%; display: none;">
        <br>
        <br>
        <table  style ="font-size: 22px; color: #aaa; margin-left: 7%;"> 
            <tr>
                <td style="color: black;">
                   <b><i> 1&nbsp;</i></b>
                </td>
                <td>
                   <span id="fromval">&nbsp;&nbsp;</span> 
                </td>
                <td>
                   &nbsp;Equals to&nbsp;&nbsp;
                </td>
            
                <td style="color: black;">
                   <b> <i id="title"></i></b>
                </td>
                <td>
                   &nbsp;<i id="toval"></i> 
                </td>
            </tr>
                <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>

        </table>
    </div>
    <div class="container" id="" style="margin-top: 10px; margin-left: 33%;">
        <table cellspacing="10px">  
           <tr>
                <td>   
                    <div>   
                        <select class="livesearch" style="width:170px;" name="from" id="from">
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
                        <option value="ZAR">South African Rand</option></select>
                    </div>
                </td>
                <td>
                    <div class="w3-container" style="margin-top: 5px; margin-left: -75px;">
                        <i class="glyphicon glyphicon-transfer"></i>
                    </div>
                </td>
                <td>
                    <div>
                        <select class="livesearch" style="width:170px;" name="to" id="to">
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
                        <option value="ZAR">South African Rand</option> </select>
                    </div>
                </td>
            </tr>
            <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
            <tr>
                <td>
                    <div class="form-group">
                        <input style="margin-left: 80px;" type="text" class="form-control" id="amount" name="amount" placeholder="Insert amount">
                    </div>
                </td>
            </tr>

            <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
            <tr>
                <td>
                    <div class="form-group">
                        <input style="margin-left: 80px;" type="text" class="form-control" name="converted_amount" id="converted_amount" value="" placeholder="Converted amount" disabled />
                    </div>
                </td>
            </tr>
            <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
                
            <tr>
                <td colspan="3">
                   <!--  <BUTTON style="margin-left: 0px;" class="btn btn-success btnbtn-lg btn-block" id="Convert" name="Convert" onClick="cur();">Let me check rate first!</BUTTON>  -->
                    
                    <div id="fade" style="margin-top: 0px; height: 100%">
                        
                    </div>
                    <div id="modal" style="margin-top: -440px;">
                        <img id="loader" src="../img/pageloader.gif" height="94px" width="94px" style="border-radius: 10px;"/>
                    </div>       
                </td>
            </tr>
            <!-- <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr> -->

            <tr>
                <td colspan="3">
                    <button class="btn btn-default btn-send btn-block" id="Convert" name="Convert" onClick="cur();"> <span class="glyphicon glyphicon-send"></span> Send </button>

                </td>
            </tr>
        </table>

        <script type="text/javascript"> $(".livesearch").chosen(); </script>
        <br><br>
    </div> 
    <!-- <div>
        <p style="padding: 20px;"> Wanna a closer look at graph of fluctuation of currency rate over time? <a href=""><i class="fa fa-line-chart" style="font-size:24px; margin-left: 10px;"></i></a></p>
    </div> -->
</div>

<section class="section section-light" style="padding: 20px;">
    <p> Wanna a closer look at graph of fluctuation of currency rate over time? <a href="graph.php"><i class="fa fa-line-chart" style="font-size:24px; margin-left: 10px;"></i></a></p>
</section>

<section class="section section-dark" style="padding-top: 24px;">
    <h2>Wait, How!?...</h2>
    <p>
      OnlineCC is real-time currency converter website that provide wide range of currencies to choose from where to convert. One may wonder how it works? Here is simple explanation. OnlinCC send the data to the api of the Europian Central Bank and firsly convert your base rate into Euro the desatination currency. want a look at <a href="http://www.ecb.europa.eu">Europian Central Bank</a> website. if you interested more details at <a href="https://en.wikipedia.org/wiki/Application_programming_interface">here</a>.  
    </p>
</section>

 <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Lowest Commision Rates
      </span>
    </div>
  </div>

<!-- feedback -->
 <section class="section section-dark">
    <div class="container-fluid">
        <div class="row">
        <h2>Can You Have A Minute?</h2>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4" style="text-align: left;">
              <form action="" method="">
                <div class="form-group" style="margin-top: 3%;">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group" style="margin-top: 3%;">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div style="padding-top: 5px; margin-top: 3%;">
                    <style type="text/css">
                        .btn-send{
                          border-radius: 5px;
                          border:1px solid #00bfff;
                          background:#00bfff;
                          color:#fff;
                          padding: 7px; 
                        }

                        .btn-send:hover{
                          border:1px solid #00bfff;
                          background:#fff;
                          color:#00bfff;
                          transition:background 0.5s;   
                        }
                    </style>
                    <button class="btn btn-default btn-send btn-block"> <span class="glyphicon glyphicon-send"></span> Send </button>
                </div>
              </form>
            </div>
            <div class="col-sm-4">
                <form>
                    <div class="form-group" style="padding: 10px 0 0 20px; text-align: left;">
                        <label for="comment">Do u have anything to share?:</label>
                        <textarea class="form-control" rows="8" id="comment" placeholder="share a word"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
 </section>
 <!-- end of feedback -->

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        onlinecc.com
      </span>
    </div>
  </div>


  <section class="section section-dark">
    <p style="padding: -10px;"><b>"Money is not the only answer, but it makes a difference."<br>-Barak Obama</p>
   <!--  <p>
      Wanna a closer look at graph of fluctuation of currency rate over time? <a href=""><i class="fa fa-line-chart" style="font-size:24px; margin-left: 10px;"></i></a> 
    </p> -->
  </section>

</body>


<script type="text/javascript">
    $(document).ready(function(){
        var from=$('#from').val();
        var to=$('#to').val();
        $('#fromval').html(from);
        $('#toval').html(to);
    });

    $('#from').on('change',function(){
        var from=$('#from').val();
        
        $('#fromval').html(from);
        
    });
$('#to').on('change',function(){
        
        var to=$('#to').val();
        $('#toval').html(to);
    });
</script>

<script type="text/javascript">
    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
      duration: 2000,
      origin:'top'
    });
    sr.reveal('.pimg1_converter', {
      duration: 2000,
      origin:'left',
      distance:'300px'
    });
    sr.reveal('.pimg1', {
      duration: 2000,
      origin:'bottom',
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
    sr.reveal('.bgimg1', {
      duration: 2000,
      origin:'bottom',
      distance:'300px'
    });
    sr.reveal('.pimg4', {
        duration: 2000,
        origin:'bottom',
        distance:'300px'
    });
</script>

</html>