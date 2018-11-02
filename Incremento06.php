<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Incremento em PHP</title>
	<style>
		h1{
			font: 12pt Arial;
		}
		h2{
			font: 12pt Arial;
			color: #8B4513;
		}
	</style>
</head>
<body>
	<div>
		<?php
			$atual = $_GET["aa"]; // Essa linha vai pegar o ano URL EX: ?aa=20014.
			echo "<h1> O ano atual: ".$atual;
			echo "<h2><br/> O ano anterior ".--$atual, "</h2>";
		?>

		<?php
			$a = 3;
			$b = $a;
			$b += 5;

			echo "<h1><br/>";
			echo "<br/> A variavel A vale: $a";
			echo "<br/> A variavel B vale: $b";
		?>
		<?php 
			echo "<h1><br/>";
			$x = "abc";
			$$x = "def";
			echo "O conteudo da variavel X e ". $x;
			echo "<br/> O conteudo da variavel criada recebeu: ". $abc;
		?>
	</div>
</body>
</html>