<?php require_once('connections/conexion.php'); ?>
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>Lorenz Knight</title>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<script>
</script>
</head>
<body>
    <div class="wrap">
        <div class="banner">
            <?php include("inc/menu.php"); ?>
        </div>
        <?php include("inc/over_c.php"); ?>
        <?php include("inc/content.php"); ?>
        <div class="foot">
            <div class="v_centrado">
                <img src="doc/img/LK logo black.png" alt="Lorenz Knight" height="75" width="52">
                <p style="font-size: 14px; line-height:5px; text-decoration: underline;">Lorenz Knight</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
//AÑADIR AL FINAL DE LA PÁGINA
mysqli_free_result($DatosConsulta);
?>