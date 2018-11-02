<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
    	p.linha{
    		padding-left: 200;
    	}
    </style>
</head>
<body>
<div>
	<?php
		$mul = isset($_GET["inum"])?$_GET["inum"]:1;

		echo "<p> Mostrado a tabuada do $mul </p>";

		$cont = 1;
		$resultado = 0;
		do{
			$resultado = $cont * $mul;
			echo "$cont x $mul = $resultado <br/>";
			$cont++;

		}while($cont <= 10);

		

	?>
	<a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>  
</div>
</body>
</html>
 