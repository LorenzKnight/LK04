<div class="content">
             <?php do { ?>
  <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>
                <?php echo $row_DatosConsulta['header']; ?>
                
              
          <?php } // Show if recordset not empty ?>
  <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); ?>
</div>