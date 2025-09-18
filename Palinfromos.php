<?php
function esPalindromo($texto) {
    // se eliminan espacios y se convierte a minúsculas
    $limpio = strtolower(str_replace(' ', '', $texto));
    // Comparar con su reverso
    return $limpio === strrev($limpio);
}

// uso:
$cadena = "Anita lava la tina";
if (esPalindromo($cadena)) {
    echo "\"$cadena\" es un palíndromo.\n";
} else {
    echo "\"$cadena\" no es un palíndromo.\n";
}
?>
