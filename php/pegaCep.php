<!DOCTYPE html>
<html>
<head>
	<title>Correios</title>
</head>
<body>
<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$cep = $_GET['cep'];
print_r($cep);

include('correios.class.php');
if(isset($_GET['cep'])){
	die(json_encode(Correios::cep($_GET['cep'])));
}elseif(isset($_GET['codigo_rastreio'])){
	die(json_encode(Correios::rastreio($_GET['codigo_rastreio'])));
}else{
	die('informe parametro GET cep ou codigo_rastreio');
}
?>
</body>
</html>