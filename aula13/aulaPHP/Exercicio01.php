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
        for($c = 0; $c <= 10; $c++){
        	echo "$c, ";
        }
        echo "Fim <br/>";

        for ($c = 10; $c >= 0; $c--){
        	echo "$c, ";
        }
        echo "Fim";
    ?>
</div>
</body>
</html>
 