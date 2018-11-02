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
        $n = array(4, 3, 2, 8);
        //sort($n); // menor para maior
        rsort($n); // maior para menor
        foreach($n as $valor){
        	echo "$valor ";
        }
        echo "<br/>";

    	$Matriz = array(array(59,56,47),
                 array(85,57,73),
                 array(15,23,32));

    	for ($i = 0; $i <= 2; $i++){
    		for ($y = 0; $y <= 2; $y++){
    			echo ($Matriz[$i][$y]);
    			echo " | ";
    		}
    		echo "<br/>";
    	}
    	
    ?>
	</pre>
</div>
</body>
</html>
 