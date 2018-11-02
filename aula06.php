<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Operadores</title>
</head>
<body>
	<div>
		<?php
			$preco = $_GET["p"]; /* digital valor url */
			echo "O preço do produto é: R$ ".number_format($preco,2, ",", ".");
			$preco -= (($preco*10) / 100);
			echo "<br> O novo preco com 10% de desconto sera: R$ ".number_format($preco, 2, ",", ".");
		?>
	</div>
</body>
</html>