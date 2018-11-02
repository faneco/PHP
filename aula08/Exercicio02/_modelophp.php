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
        $nome = isset($_GET["nome"])? $_GET["nome"]: "[Não Informado]";
        $ano = isset($_GET["ano"])? $_GET["sexo"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]: "[Sem Sexo]";
        $idade = date("Y") - $ano;
        echo "$nome e $sexo tem $idade anos.";
    ?>
    <a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
 