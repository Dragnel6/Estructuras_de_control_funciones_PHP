function esPalindromo($texto) {
    // Eliminar espacios y convertir a minúsculas
    $limpio = strtolower(str_replace(' ', '', $texto));
    // Comparar con su reverso
    return $limpio === strrev($limpio);
}

// Ejemplo de uso:
$cadena = "Anita lava la tina";
if (esPalindromo($cadena)) {
    echo "\"$cadena\" es un palíndromo.\n";
} else {
    echo "\"$cadena\" no es un palíndromo.\n";
}
