<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Operador Relacionais</title>
</head>
<body>
	<div>
		<?php
			$n1 = $_GET["a"]; // Digita na URL o valor
			$n2 = $_GET["b"];
			$tipo = $_GET["op"];
			echo "Os valores passado foram $n1 e $n2 <br/>";
			$r = ($tipo == "s")? $n1+$n2 : $n1*$n2;
			/*tipo for igual 's' ele soma else multiplica */
			echo "O resultado e $r";
		?>

		<?php
			$a = 3; // Digita na URL o valor
			$b = "3";
			$r = ($a === $b)? "SIM": "NAO";
			echo "<br/> As variaveis A e B são idênticas? $r";
		?>

		<?php
			$nota1 = $_GET["m1"]; // Digita na URL o valor
			$nota2 = $_GET["m2"];
			$m = (($nota1 + $nota2) / 2);
			echo "<br/> A media entre $nota1 e $nota2 é $m";
			$sit = ($m < 6)? "Reprovado": "Aprovado";
			echo "<br/> A situação do aluno é $sit";
			?>

			<?php
				$ano = $_GET["an"]; // Digita na URL o valor
				$idade = 2018 - $ano;
				echo "<br/> Quem nasceu em $ano tem idade de $idade anos.";
				$tipo = ($idade >= 18 && $idade < 65)? "Obrigatório": "Opcional";
				echo "<br/> E dessa forma seu voto $tipo";

			?>
	</div>
</body>
</html>