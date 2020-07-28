<?php
ini_set('display_errors', 'off');
$from = $_GET['from'];
$to = $_GET['to'];
$amount= $_GET['amount'];

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
 
 echo "".round($amount*$RATES[$out],$sensitivity);//Output the converted amount
 
 if ($append) {echo " ".$append;}
 
 } else {
 //echo "Error: Unable to load conversion rates!";
 }
 
 } else {
 //echo "Error: Either one or both of given currencies are not available for conversion!";
 }
}
 echo currency_convert($from, $to, $amount);

?>