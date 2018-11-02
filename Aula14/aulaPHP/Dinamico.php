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
        function soma(){
          $p = func_get_args(); # pega todos os argumento e coloca em um vetor
          $t = func_num_args(); # retorna o numero de argumentos 
          $s = 0;
          for ($i=0; $i < $t; $i++){ 
            $s += $p[$i];
          }
          return $s;
        }

        $r = soma(2, 4, 6);
        echo "A soma dos valores e $r";

  
    ?>
</div>
</body>
</html>
 