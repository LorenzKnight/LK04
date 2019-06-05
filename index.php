<?php require_once('connections/conexion.php'); ?>
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}

$query_DatosConsulta = sprintf("SELECT * FROM news");
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);

//FINAL DE LA PARTE SUPERIOR
?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<script>
</script>
</head>
<body>
    <div class="wrap">
            <?php include("inc/head.php"); ?>
        <div class="banner">

        </div>
            <?php include("inc/content.php"); ?>

        
        <div class="content2">
        </div>
        <div class="foot">
        </div>
    </div>
</body>
</html>
<?php
//AÑADIR AL FINAL DE LA PÁGINA
mysqli_free_result($DatosConsulta);
?>