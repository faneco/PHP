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
      $c = 1;
      while ($c <= 5){
        $c = isset($_GET["v".$c])?$_GET["v".$c]:0;
        echo "<span class='foco'> $c </span>";
        $c++;
      }
      echo "Fim";
      ?>
      
      <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>
</div>
</body>
</html>
 