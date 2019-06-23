<?php require_once('connections/conexion.php'); ?>
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
?>
<?php
 $query_DatosConsulta = sprintf("SELECT * FROM news WHERE site != 0"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
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
        <img class="img_in_banner" src="doc/img/frontend/<?php echo $row_DatosConsulta['image']; ?>" alt="<?php echo $row_DatosConsulta['header']; ?>" width="1920" height="1080">
            <div class="content_flayer3">
                <?php include("inc/menu.php"); ?>
            </div>
            <div class="content_flayer3" style="margin-top:6%;">
                    <h3 style="text-align:center; text-transform: uppercase; letter-spacing: 0.3em; color:#FFF;"><?php echo $row_DatosConsulta['header']; ?></h3>
                    <h3 style="text-align:center; color:#FFF;">____</h3>
            </div>
        </div>
        <?php include("inc/content_m.php"); ?>
        <div class="foot">
            <div class="v_centrado">
                <img src="doc/img/frontend/LKlogoblack.png" alt="Lorenz Knight" height="75" width="52">
                <p style="font-size: 14px; line-height:5px; text-decoration: underline;">Lorenz Knight</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>