<?php

$query_DatosConsulta1 = sprintf("SELECT * FROM basic_info");
$DatosConsulta1 = mysqli_query($con, $query_DatosConsulta1) or die(mysqli_error($con));
$row_DatosConsulta1 = mysqli_fetch_assoc($DatosConsulta1);
$totalRows_DatosConsulta1 = mysqli_num_rows($DatosConsulta1);

?>
<div class="over_c">
    <div class="over_ct">
        <div class="v_centrado">
            <h3 style="text-transform: uppercase;"><?php echo $row_DatosConsulta1['nombre_empresa']; ?></h3>
        </div>
    </div>
    <div class="over_cc">
        <div class="v_centrado">
            <p><?php echo $row_DatosConsulta1['resumen']; ?></p>
        </div>
    </div>
</div>