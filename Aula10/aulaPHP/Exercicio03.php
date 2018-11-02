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
        $est = isset($_GET["est"])?$_GET["est"]:0;

        switch($est){
            case 1:
                $regiao = "Região Norte"; break;
            case 2:
                $regiao = "Região Nordeste"; break;
            case 3:
                $regiao = "Região Centro Oeste"; break;
            case 4: 
                $regiao = "Região Sudeste"; break;
            case 5: 
                $regiao = "Região Sul"; break;
            default:
                $regiao = "Escolher uma opção";
        }
        echo "Voce mora na <span class='foco'> $regiao </span>";
    ?>
    <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar</a>
</div>
</body>
</html>
 