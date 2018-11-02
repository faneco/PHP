<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>valor08</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
</head>
<body>
<div>
	<?php
		$valor = $_GET["v"];
		echo "O valor inviado foi $valor";
		$sqrt = sqrt($valor);
		echo "<br/> A raiz de $valor e igual a: ".number_format($valor, 2);

	?>
	<a href="aula08.html">volta</a>
</div>
</body>
</html>