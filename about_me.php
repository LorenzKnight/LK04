<?php require_once('connections/conexion.php'); ?>
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
?>
<?php
 $query_DatosConsulta = sprintf("SELECT * FROM basic_info"); 
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
        <div class="bg_about_me">
            <div class="bgd_about_me">
                <div class="content_flayer3">
                    <?php include("inc/menu.php"); ?>
                </div>
                <div class="content_flayer3" style="margin-top:6%;">
                    <div class="pic_description" style="text-shadow: 1px 1px 15px #000;">
                        <h3 style="text-align:center; text-transform: uppercase; letter-spacing: 0.3em;">Om mig</h3>
                        <h3 style="text-align:center; color:#FFF;">____</h3>
                        <p><?php echo $row_DatosConsulta['description']; ?></p>
                        <br>
                        <div style="font-family: 'Allura', cursive; text-shadow: 1px 1px 15px #000; font-size: 36px; text-align:center;">
                            <?php echo $row_DatosConsulta['nombre_empresa']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>