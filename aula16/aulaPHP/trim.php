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
        $nome = "   jose da silva   ";
        echo(strlen($nome));
        $novo = trim($nome); // tira os espaco par contar letra
        echo "<br/>";
        echo($novo);
        echo "<br/>";
        echo(strlen($novo));
        // ltrim tira os espaco do começo
        // rtrim tira os espaco no final
    ?>
</div>
</body>
</html>
 