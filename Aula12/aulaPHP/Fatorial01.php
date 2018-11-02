<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<?php
		$v = isset($_GET["val"])?$_GET["val"]:1;
		echo "<h1>Calculando o fatorial $v </h1>";
		$c = 1;
		$fat = 1;
		do{
			$fat *= $c;
			$c++; 
		}while ($c <= $v);

		echo "$v ! = <span class='foco'> $fat </span>";
	?>
	<a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>  
</div>
</body>
</html>
 