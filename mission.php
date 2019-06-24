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
        <div class="banner_d">
            <img class="img_in_banner" src="doc/img/frontend/1029HNCK7799.jpg" width="1920" height="1080">
            <div class="content_flayer3">
                <?php include("inc/menu.php"); ?>
            </div>
            <div class="content_flayer3" style="margin-top:6%;">
                    <h3 style="text-align:center; text-transform: uppercase; letter-spacing: 0.3em; color:#FFF;">Mina uppdrag</h3>
                    <h3 style="text-align:center; color:#FFF;">____</h3>
            </div>
        </div>
        <?php include("inc/content_m.php"); ?>
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>
<?php
    mysqli_free_result($DatosConsulta);
?>