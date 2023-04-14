<?php

// VARIABLES PARA HORAS
$horas_trabajadas  = $_POST['txtHoras'];
$horas_normal      = 0;
$horas_extra       = 0;

// VARIABLES PARA PRECIO
$precio_hora_normal = 16;
$precio_hora_extra  = 20;

// VARIABLES PARA TOTALES
$importe        = 0;
$importe_extra  = 0;
$importe_total  = 0;

// OBTENEMOS HORAS TRABAJADAS Y HORAS EXTRAS
if ($horas_trabajadas <= 40) {
    $horas_normal = $horas_trabajadas;
    $horas_extra  = 0;
} else if ($horas_trabajadas > 40) {
    $horas_normal = 40;
    $horas_extra  = $horas_trabajadas - $horas_normal;
}

// OBTENEMOS IMPORTES
$importe       = $horas_normal * $precio_hora_normal;
$importe_extra = $horas_extra  * $precio_hora_extra;
$importe_total = $importe + $importe_extra;

echo "Horas trabajadas: $horas_trabajadas <br>
      Horas normal: $horas_normal , importe: $importe<br>
      Horas extra: $horas_extra , importe: $importe_extra<br>
      Total semana: $importe_total <br><br>";
echo "<br>";
echo '<a href="semanal.html">Regresar</a>';