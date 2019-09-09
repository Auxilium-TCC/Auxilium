<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pedidos</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>

</head>

<body>
 <h1>PEDIDOS</h1>
 
 <?php
 include_once 'conecta.php';
 $conn = new conecta();
 $pedidos = $conn->listarPedidos();

 foreach ($pedidos as $pedido){
 echo '<p><strong>'.$pedido["descricao"].' '.$pedido["id"].'</strong> <br> <strong>Status:</strong> '.$pedido["status"].'</p>';
 }
 ?> 
</body>
</html>