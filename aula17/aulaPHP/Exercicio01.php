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
        $nome = "Douglas Faneco";
        $nome2 = strtolower($nome); // letra minuscula
        echo "$nome2";

        echo "<br/>";
        $nome = "douglas faneco";
        $nome2 = ucfirst($nome); // primeira letra maiusculo 
        echo "$nome2";

        echo "<br/>";

        $nome = "douglas faneco";
        print ("Seu nome é ".ucwords($nome)); // as primeira letra fica maiusculo

        echo "<br/>";

        $nome = "douglas faneco";
        print(strrev($nome)); // nome ao contrario 

        echo "<br/>";

        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP"); //stripos pega com letra minuscula tb
        echo "A string foi encontrada na posição $pos";

        echo "<br/>";

        $frase = "Estou aprendendo PHP no curso PHP";
        $cont = substr_count($frase, "PHP"); // conta tanto de vezes que apalvra vai aparece
        print ("PHP encontrado $cont vezes");

        echo "<br/>";
        $site = "Curso em video";
        $sub = substr($site, 0, 5); // posicação ate onde 
        print($sub);

        echo "<br/>";

        $nome = "Douglas";
        $novo = str_pad($nome, 30, "_", STR_PAD_RIGHT); 
        $novo1 = str_pad($nome, 30, " ", STR_PAD_LEFT); 
        print("$novo Faneco");

        echo("<br/>");

        $txt = str_repeat("Php", 5); // palavra e quantidade que vai repetir
        print("O texto gerado foi $txt"); 

        echo "<br/>";

        $frase = "Gosto de estudar Matematica"; // troca  a frase
        $novafrase = str_ireplace("matematica", "PHP", $frase);
        echo "$novafrase";


    ?>
</div>
</body>
</html>
 