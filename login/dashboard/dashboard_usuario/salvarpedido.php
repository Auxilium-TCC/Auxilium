<?php
 
 include_once 'conecta.php';
 $conn = new conecta();
 
$descricao = $_POST["Descricao"];
$id = $_POST["Id"];

 $conn->salvarPedido($descricao, $id);

 $pedido = $conn->consultarUltimoPedido();
 
 echo $pedido["id"];

?>