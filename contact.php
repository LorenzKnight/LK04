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


                <div class="contact_content">
                    <div class="separador" style="background-color: rgba(0,0,0,.7); height:450px; margin-bottom:50px;">
                            <br><br>	
                                    <h3 style="text-transform:uppercase; text-align:center;">Skicka ditt meddelande</h3>
                            <br>
                        <form action="MAILTO:<?php echo $row_DatosConsulta['email']; ?>" method="post" enctype="text/plain">
                            <form name="contactform" method="post" action="send_form_email.php">
                                <table width="100%" border="0" cellspacing="20">
                                    <tr>
                                        <td width="32%" style="background:;"><input  type="text" name="first_name" placeholder="Ditt namn..." maxlength="50" size="26"></td>
                                        <td width="32%" style="background:;"><input  type="text" name="email" placeholder="Ditt mail..." maxlength="80" size="30"></td>
                                        <td width="36%" style="background:;"><input  type="text" name="company" placeholder="Företag/Firma..." maxlength="80" size="30"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="background:;"><textarea  name="comments" placeholder="Meddelande..." maxlength="2000" cols="100" rows="3" style="margin: 0px; height: 188px; width: 643px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td align="left" height="42"><input class="button" type="submit" value="Skicka"></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                            </form>
                        </form>           
                    </div>
                </div>

                <div class="sidebar">
        
                    <h3 style="text-transform:uppercase;">Nå oss</h3>                       
                    <p>
                        Var god fyll i kontaktformuläret
                        längst till vänster om du har några
                        frögor eller är intresserad av
                        våra tjänster.<br>

                        Vi kommer svara inom 24 timmar.</p>
                        <br>

                    <h3 style="text-transform:uppercase;">Kontaktinformation</h3>
                    <p>
                        <?php echo $row_DatosConsulta['direccion']; ?><br>
                        <?php echo $row_DatosConsulta['post']; ?> <?php echo $row_DatosConsulta['region']; ?> (<?php echo $row_DatosConsulta['pais']; ?>)<br>
                        <?php echo $row_DatosConsulta['telefono']; ?><br>
                        <?php echo $row_DatosConsulta['email']; ?>
                    </p>
                
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