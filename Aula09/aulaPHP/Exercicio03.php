<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      cor{
        color: red;
        font-weight: 700;
      }
  </style>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;

       $media = (($nota1 + $nota2) / 2); 

        if ($media >= 6){
            $nota = "A media entre <cor>$nota1</cor> e <cor>$nota2</cor> foi <cor>$media</cor>";
            $situacao = "<cor>APROVADO</cor>";
        }else if ($media > 0 && $media < 6){
            $nota = "A media entre <cor>$nota1</cor> e <cor>$nota2</cor foi <cor>$media</cor>";
            $situacao = "<cor>RECUPERAÇÂO</cor>";
        }else{
            $nota = "Digitar as nota";
            $situacao = " -> ";
        }
        echo "$nota <br/>";
        echo "A situação do aluno: $situacao";
    ?>

    <a href="Exercicio03.html">Voltar</a>
</div>
</body>
</html>
 