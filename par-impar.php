<?php

$numero = $_POST['txtNumero'];

// COMPROBAMOS SI NUMERO INGRESADO ES PAR O IMPAR
if (($numero % 2) == 0) {
    // ES NUMERO PAR
    echo "El número ingresado $numero, es PAR<br>";
} else {
    // ES NUMERO IMPAR
    echo "El número ingresado $numero, es IMPAR<br>";
}

echo '<a href="par-impar.html">Regresar</a>';