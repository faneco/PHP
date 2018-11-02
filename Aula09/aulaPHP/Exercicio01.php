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
        $a = isset($_GET["ano"])?$_GET["ano"]: 1900; 
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e sua idade é $i anos <br/>";
        if ($i > 18){
        	$v = "Ja pode votar";
        	$d = "Ja pode dirigir";
        }else{
        	$v = "Não pode votar";
        	$d = "Não pode Dirigir";
        }
        echo "Com essa idade voce $v e tambem $d";
    ?>
    <a href="Exercicio01.html">Voltar</a>
</div>
</body>
</html>
 