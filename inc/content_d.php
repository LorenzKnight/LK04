<style>
.pic_zoom img{
  width: 120%;
  margin: -8% 0 0 -10%;
}
</style>
<div class="content">
  <div class="pic_zoom">
    <img src="doc/img/frontend/<?php echo $row_DatosConsulta['image']; ?>">
  </div>
  <div class="pic_details">
      <h3><?php echo $row_DatosConsulta['header']; ?></h3>
      <p><?php echo $row_DatosConsulta['content']; ?></p>
      <br>
      <div style="font-family: 'Allura', cursive; text-shadow: 1px 1px 1px #000; font-size: 36px; text-align:center;">Lorenz knight</div>
  </div>
</div>