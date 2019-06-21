<?php

$query_DatosConsulta = sprintf("SELECT * FROM news WHERE site = 1 AND position = 2");
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);

?>
<script language="javascript">
  function desplegar(){
    mi=document.getElementById("v_centrado");
    if(mi.style.overflow=="scroll"){
      document.getElementById("enlace") .innerHTML="contraer";
      mi.style.overflowY="visible";
      mi.style.height=mi.scrollHeight+"px"}
      else{document.getElementById("enlace").innerHTML="Desplegar";
        mi.style.overflowY="scroll"
        mi.style.height="40px"
      }
    }
  }
  </script>
<div class="content">
  <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

  <?php do { ?>
  <div class="u_info">
    <div class="txt_<?php if($row_DatosConsulta['id'] % 2 == 0) { echo 'b'; } else { echo 'a'; }; ?>">
      <div class="v_centrado">
        <h3 style="text-transform: uppercase; margin-bottom: 0;"><?php echo $row_DatosConsulta['header']; ?></h3>

                <P><?php 
								  $texto = $row_DatosConsulta['content'];
								  if (strlen($texto) > 5) {
									$texto = substr($texto,5,300).'...';
                  print '<div class="texto_original">'.$texto.'</div>';
                ?></p>
                <?php
                }
                ?> 

      </div>
    </div>
    <a href="#"><div style="background-image: url('doc/img/<?php echo $row_DatosConsulta['image']; ?>');" class="pic_<?php if($row_DatosConsulta['id'] % 2 == 0) { echo 'b'; } else { echo 'a'; }; ?>">
    </div></a>
  </div>
  <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
      }
      else
      { // Show if recordset is empty ?>
      fins ingen register.
      <?php } ?>
</div>