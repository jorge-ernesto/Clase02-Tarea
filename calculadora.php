<?php

$numero1 = $_POST['txtNum1'];
$numero2 = $_POST['txtNum2'];
$operacion = $_POST['cboOperacion'];

switch ($operacion) {
    case "S":
        $total = $numero1 + $numero2;
        echo "La SUMA de $numero1 y $numero2 es: $total<br>";
        break;
    case "R":
        $total = $numero1 - $numero2;
        echo "La RESTA de $numero1 y $numero2 es: $total<br>";
        break;
    case "M":
        $total = $numero1 * $numero2;
        echo "La MULTIPLICACION de $numero1 y $numero2 es: $total<br>";
        break;
    case "D":
        $total = $numero1 / $numero2;
        echo "La DIVISION de $numero1 y $numero2 es: $total<br>";
        break;
    default:
        echo "No se ingreso operacion";
        break;
}

echo '<a href="calculadora.html">Regresar</a>';