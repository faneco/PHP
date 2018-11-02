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
       $frase = "Eu vou estudar PHP";
       $cont = str_word_count($frase, 0); // conta letra 
       print($cont);
       
       echo "<br/>";

       $site = "Curso em video";
       $vetor = explode(" ", $site);
       print_r($vetor);

       echo "<br/>";

       $vetor[0] = "Curso";
       $vetor[1] = "em";
       $vetor[2] = "video";
       $texto = implode("#", $vetor);
       print($texto);

       echo "<br/>";
       
       $letra = chr(67);
       echo "A letra de codigo 67 e $letra";



    ?>
</div>
</body>
</html>
 