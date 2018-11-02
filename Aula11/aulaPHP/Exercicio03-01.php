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
        $v1 = isset($_GET["v1"])?$_GET["v1"]:0;
        $v2 = isset($_GET["v2"])?$_GET["v2"]:0;
        $salto = isset($_GET["isalto"])?$_GET["isalto"]:0;

        if ($v1 < $v2){
          while($v1 <= $v2){
            echo " $v1,";
            $v1 += $salto;
          }
        }else{
          while($v1 >= $v2){
            echo " $v1,";
            $v1 -= $salto;
          }
        }
        echo " Fim";
      ?>
      <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>  
    </form>
</div>
</body>
</html>
 