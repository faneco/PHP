<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
    <?php
        $n = range(0, 20, 2);
        unset($n[10]); // retira o numero do vetor
       foreach ($n as $v){
       	echo "$v ";
       }
       echo "<br/>";
    $v = array("nome" => "ana", "idade" => 23, "peso" => 65.5);

    foreach ($v as $k => $c){
    	echo "O campo <span class='foco'>$k </span> possui o conteudo <span class='foco'>$c </span><br/>";
    }

    echo "<br/>";

    $n = array(array(2,3),
			  array(4, 6),
			  array(7, 8));
    print_r($n);

    ?>
	</pre>
</div>
</body>
</html>
 