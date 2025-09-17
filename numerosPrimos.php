function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Ejemplo de uso:
$num = 17; 
if (esPrimo($num)) {
    echo "$num es un número primo.\n";
} else {
    echo "$num no es un número primo.\n";
}
