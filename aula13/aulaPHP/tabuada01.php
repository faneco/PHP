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
       $mul = isset($_GET["num"])?$_GET["num"]:1;
       for($cont = 1; $cont <= 10; $cont++){
        $resultado = $cont * $mul;
        echo "$mul x $cont = $resultado <br/>";
       }
    ?>
    <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>
</div>
</body>
</html>
 