<?php
$query_DatosConsulta = sprintf("SELECT * FROM categoria ORDER BY id_categoria ASC");
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<div class="content">
  <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

  <?php do { ?>

    <div class="cat_banner" style=" background-image: url('doc/img/frontend/<?php echo $row_DatosConsulta['image']; ?>');">
      <a href="category.php?id=<?php echo $row_DatosConsulta['id_categoria']; ?>"><div class="cat_banner_link">
        <div class="content_flayer2">
            <h3 style="letter-spacing: 0.3em;"><?php echo $row_DatosConsulta['header']; ?></h3>
            <h3>____</h3>
        </div>    
      </div></a>
    </div>
  <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
      }
      else
      { // Show if recordset is empty ?>
      fins ingen register.
      <?php } ?>
</div>