<?php

$cantidad = $_POST['txtCantidad'];
$precio = $_POST['txtPrecio'];

if ($cantidad >= 3) {
    $porcentaje = 20;
} else {
    $porcentaje = 10;
}

$total = $cantidad * $precio;
$descuento = $total * ($porcentaje/100);
$total_pagar = $total - $descuento;

echo "Cantidad de Camisas: $cantidad <br>
      Precio Unitario: $precio <br>
      Total: $total <br>
      <hr>Descuento $porcentaje% : $descuento <br>
      <hr>Total a Pagar: $total_pagar<br>";
echo "<br>";
echo '<a href="camisas.html">Regresar</a>';