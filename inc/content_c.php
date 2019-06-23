<?php
$query_DatosConsulta2 = sprintf("SELECT * FROM news WHERE site=%s", GetSQLValueString($_GET["id"], "int"));
$DatosConsulta2 = mysqli_query($con, $query_DatosConsulta2) or die(mysqli_error($con));
$row_DatosConsulta2 = mysqli_fetch_assoc($DatosConsulta2);
$totalRows_DatosConsulta2 = mysqli_num_rows($DatosConsulta2);
?>
<div class="content">
  <?php if ($row_DatosConsulta2 > 0) { // Show if recordset not empty ?>

  <?php do { ?>
  <div class="u_info">
    <div class="txt_<?php if($row_DatosConsulta['id'] % 2 == 0) { echo 'b'; } else { echo 'a'; }; ?>">
      <div class="v_centrado">
        <h3 style="text-transform: uppercase; margin-bottom: 0;"><a href="details.php?id=<?php echo $row_DatosConsulta2['id']; ?>"><?php echo $row_DatosConsulta2['header']; ?></a></h3>

                <P><?php 
								  $texto = $row_DatosConsulta2['content'];
								  if (strlen($texto) > 5) {
									$texto = substr($texto,5,300).'...';
                  print '<div class="texto_original">'.$texto.'</div>';
                ?></p>
                <?php
                }
                ?> 

      </div>
    </div>
    <a href="details.php?id=<?php echo $row_DatosConsulta2['id']; ?>">
      <div style="background-image: url('doc/img/frontend/<?php echo $row_DatosConsulta2['image']; ?>');" class="pic_<?php if($row_DatosConsulta2['id'] % 2 == 0) { echo 'b'; } else { echo 'a'; }; ?>">
      </div>
    </a>
  </div>
  <?php } while ($row_DatosConsulta2 = mysqli_fetch_assoc($DatosConsulta2)); 
      }
      else
      { // Show if recordset is empty ?>
      fins ingen register.
      <?php } ?>
</div>