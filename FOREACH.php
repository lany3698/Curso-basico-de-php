<?php
echo "EJEMPLOS DE FOREACH" ;
echo "<br>";
echo "<br>";
echo "EJEMPLO 1 DE FOREACH";
echo "<br>";
echo "<br>";

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
}


echo "<br>";
    echo "<br>";
    echo "<br>";
 echo "EJEMPLO 2 DE FOR ";
    echo "<br>";
    echo "<br>";
    $a = array(
        "once" => 11,
        "doce" => 12,
        "trece" => 13,
        "diecisiete" => 17
    );

    foreach ($a as $k => $v) {
        echo "\$a[$k] => $v.\n";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
 echo "EJEMPLO 3 DE FOR ";
    echo "<br>";
    echo "<br>";
    $array = [
        [5, 6],
        [7, 8],
    ];
    foreach ($array as list($a, $b)) {
        echo "A: $a; B: $b\n";
    }
?>