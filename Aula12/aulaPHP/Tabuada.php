<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="Tabuada01.php"/>
	<label for="inum">Numero:</label>
	<select name="inum" id="num">
		<?php
			$cont = 1;
			while ($cont <= 10){
				echo "<option value='$cont'>$cont</option>";
				$cont++;
			}

		?>
	<input type="submit" value="Enviar" class="botao"/>
	</select>
	</form>
</div>
</body>
</html>
 