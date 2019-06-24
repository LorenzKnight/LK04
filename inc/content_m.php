<?php
$query_DatosConsulta = sprintf("SELECT * FROM categoria ORDER BY id_categoria ASC");
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
$query_DatosConsulta3 = sprintf("SELECT * FROM news ORDER BY id ASC");
$DatosConsulta3 = mysqli_query($con, $query_DatosConsulta3) or die(mysqli_error($con));
$row_DatosConsulta3 = mysqli_fetch_assoc($DatosConsulta3);
$totalRows_DatosConsulta3 = mysqli_num_rows($DatosConsulta3);
?>
<style>
  
</style>
<div class="content">
    
      <?php if ($row_DatosConsulta3 > 0) { // Show if recordset not empty ?>
      <?php do { ?>
        <div class="cajita">
          <div class="caja_pic">
          <img src="doc/img/frontend/<?php echo $row_DatosConsulta3['image']; ?>">
          </div>
          <div class="caja_txt">
                  <h3 style="font-size:16px; text-transform: uppercase; margin:0;"><a href="details.php?id=<?php echo $row_DatosConsulta3['id']; ?>"><?php echo $row_DatosConsulta3['header']; ?></a></h3>
                    <p><?php 
                          $texto= $row_DatosConsulta3['content'];
                          if (strlen($texto) > 5) {
                            $texto = substr($texto,0,200).'...';
                            print '<div class="texto_original">'.$texto.'</div>';?></p>
                    <?php
                    }
                    ?>  
          </div>
        </div>
        <?php } while ($row_DatosConsulta3 = mysqli_fetch_assoc($DatosConsulta3)); 
        }
        else
        { // Show if recordset is empty ?>
        fins ingen register.
        <?php } ?>
    
</div>