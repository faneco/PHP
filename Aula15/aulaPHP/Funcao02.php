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
       #include "funcoes.php";
        require "funcoes.php"; # não encontrar o arquivo ele para de carregar tudo
        #include_once = so será incluido um vez
        #require_once = se função ja foi carregada, ela não deixa a função recaregar de novo
       echo "<h1>testado novas funções</h1>";
       ola();
       mostraValor(4);
    ?>
</div>
</body>
</html>
 