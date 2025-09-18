<?php
function generarFibonacci($n) {
    $fibonacci = [];
    if ($n <= 0) {
        return $fibonacci;
    }
    // Primer término
    $fibonacci[] = 0;
    if ($n == 1) {
        return $fibonacci;
    }
    // Segundo término
    $fibonacci[] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// uso:
$n = 10; 
$resultado = generarFibonacci($n);
echo "Los primeros $n términos de la serie Fibonacci son:\n";
foreach ($resultado as $valor) {
    echo $valor . " ";
}
echo "\n";
?>

