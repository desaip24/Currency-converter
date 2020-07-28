<?php
ini_set('display_errors', 'off');
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
  <script type="text/javascript">
    function title()
    {
        var amount=document.getElementById("amount").value;
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
     function hourChange(selectObj) {
   var selectIndex=selectObj.selectedIndex;
   var selectValue=selectObj.options[selectIndex].value;
   //var output=document.getElementById("output");
   //alert(output.innerText);
   //output.innerHTML=selectValue;
   document.getElementById("output").value=selectValue;
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
       <a class="navbar-brand " href="home.php">OnlineCC</a>
      </div>
    <ul class="nav navbar-nav">
        <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="Converter.php">Converter <span class="glyphicon glyphicon-transfer"></span></a></li>
        <li><a href="graph.php">Graph <span class="fa fa-line-chart"></span></a></li>
        <li class="active"><a href="bank.php">Bank <span class="glyphicon glyphicon-plus"></span></a></li>
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
    margin-top: 0px;
  }

  .bank_img{
    background-image:url('../img/antique-banking-blur-210588.jpg');
    min-height:90%;
  }  
  </style>
<div class="bank_img">
    <div class="ptext">
      <span class="border">
        Banking
      </span>
    </div>
</div>

<section class="section section-light" style="padding-top: 24px;">
    <h2>Wait, How!?...</h2>
    <p>
      OnlineCC is real-time currency converter website that provide wide range of currencies to choose from where to convert. One may wonder how it works? Here is simple explanation. OnlinCC send the data to the api of the Europian Central Bank and firsly convert your base rate into Euro the desatination currency. want a look at <a href="http://www.ecb.europa.eu">Europian Central Bank</a>website. if you interested more details at <a href="https://en.wikipedia.org/wiki/Application_programming_interface"></a> here. 
    </p>
</section>

<div class="bgimg1">
    <div class="container" id="ti" style="margin-top: 0%; margin-left: 33%; display: block;">
        <br>
        <br>
        <p style ="font-size: 22px; color: #000; margin-left: 4%;"><b> Finally, Here is Banking facility!</b></p>
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
                <form action="transfer1.php" name="f2" method="post">
                <td>
                    <div>
                        <select class="livesearch" onchange="hourChange(this);" style="width:170px;" name="to" id="to">
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
            </form>
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
                    <button class="btn btn-default btn-send btn-block" id="Convert" name="Convert" onClick="cur();"> <span class="glyphicon glyphicon-transfer"></span> Convert </button>

                </td>
            </tr>
            <form action="transfer1.php" name="f2" method="post">
             <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
            <tr>
                <td>
                    <div class="form-group">
                        <input style="margin-left: 80px;" type="text" class="form-control" name="converted_amount" id="converted_amount" value="" placeholder="Converted amount"  />
                    </div>
                </td>
            </tr>
                      <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
                <tr>
                <td colspan="3">
                <input id="output" name="output" type="hidden"></input>
                     
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="transfer" class="btn btn-default btn-send btn-block" value="Transfer to Wallet" >
                     
                </td>
            </tr>
        </form>

        </table>

        <script type="text/javascript"> $(".livesearch").chosen(); </script>
        <br><br>
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
</body>
</html>