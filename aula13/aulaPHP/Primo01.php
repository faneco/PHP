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
    $div = 0;
      $n = isset($_GET["num"])?$_GET["num"]:1;
      echo "<h3>Analisando o Número $n...</h3> <br/>";
      echo "Valores múltiplos: ";

      for ($cont = 1; $cont <= $n; $cont++){
        $resultado = $n % $cont;
        if ($resultado == 0){
          echo "$cont ";
          $div++;
        }
      }
      echo "<br/><p>Total de múltiplos: $div</p>";
      if ($div <= 2){
        echo "<br/><p>Resultado: $n <span class='foco'>É Primo</p></span>";
      }else{
        echo "<br/>Resultado: $n <span class='foco'>Não É Primo</span> ";
      }

    ?>
    <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>
</div>
</body>
</html>
 