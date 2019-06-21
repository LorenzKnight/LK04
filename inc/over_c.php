<?php

$query_DatosConsulta1 = sprintf("SELECT * FROM news WHERE site = 1 AND position = 1");
$DatosConsulta1 = mysqli_query($con, $query_DatosConsulta1) or die(mysqli_error($con));
$row_DatosConsulta1 = mysqli_fetch_assoc($DatosConsulta1);
$totalRows_DatosConsulta1 = mysqli_num_rows($DatosConsulta1);

?>
<div class="over_c">
    <div class="over_ct">
        <div class="v_centrado">
            <h3 style="text-transform: uppercase;"><?php echo $row_DatosConsulta1['header']; ?></h3>
        </div>
    </div>
    <div class="over_cc">
        <div class="v_centrado">
            <p><?php echo $row_DatosConsulta1['content']; ?></p>
        </div>
    </div>
</div>