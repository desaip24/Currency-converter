<?php
ini_set('display_errors', 'off');

$con=mysqli_connect("localhost","root","","project") or die("e1");
function marq($from,$to,$amount)
{
    
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
        echo "Error: You should either use 2 digit country codes or 3 digit currency codes!";
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
            echo "Error: Unable to load conversion rates!"; 
        }
} 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<title>marquee</title>
</head>
<body>
<div class="container" style="font-size: 20px;">
<marquee> 

	<p>
	 Dollar &nbsp;<?php echo marq("USD","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-up" style="color: green"><b>&nbsp;0.09&nbsp;%&nbsp;</b></span> &nbsp;|&nbsp;
	 Euro &nbsp;<?php echo marq("EUR","INR",1);?>&nbsp; <span id="green" class="fa fa-long-arrow-up" style="color: green"><b>&nbsp;0.92%&nbsp;</b></span>  
		
	</p>
</marquee>
</div>
</body>
</html>

