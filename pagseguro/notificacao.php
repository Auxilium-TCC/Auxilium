<?php

$notificationCode = preg_replace('/[^[:alnum:]-]/','',$_POST["notificationCode"]);
$descricao = "";
$id = 1;

$data['token'] ='5FB64B71FB0343B39C79E08806B126B8';
$data['email'] = 'caiopecellin@gmail.com';

$data = http_build_query($data);

$url = 'https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/'.$notificationCode.'?token='.$data['token'].'&email='.$data['email'];

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $url);
$xml = curl_exec($curl);
curl_close($curl);

$xml = simplexml_load_string($xml);
if(count($xml -> error) > 0){
$return = 'Dados Inválidos '.$xml ->error-> message;
echo $return;
exit;
}

$reference = $xml->reference;
$status = $xml->status;

if($reference && $status){
 include_once 'conecta.php';
 $conn = new conecta();

 $descricao = $reference." ".$status;

 $conn->salvarPedido($descricao, $id);

 $rs_pedido = $conn->consultarPedido($reference);

 if($rs_pedido){
 $conn->atualizaPedido($reference,$status);
 }
}

?>