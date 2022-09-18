<?php
    /* Definimos variables en php*/
    $strig = "soy un string";
    $entero = 10;
    $doble = 0.5;
        //$date = date('');
        /* Hacedemos a las variables  De Diferentes maneras*/

    echo $strig;
    echo "<br>";
    echo "soy  un entero". $entero;
    echo "<br>";
    echo "soy  un decimal" . $doble;
    echo "<br>";
        /* var_dump imprime la varible especificando el tipo de dato */
    echo "Imprimimos varibles con VAR_DUMP";
    echo "<br>";
    var_dump( "soy  un decimal". $doble);
        //echo $date;

        /* declaracion de arrays */
    echo "<br>";
    $alumnos = ['naidelin',18,'Alan',20,'Juan',15,'Pedro',30];
    echo "Imprimimos Array Con print_r";
    echo "<br>";
    print_r($alumnos);
    echo "Imprimimos array con VAR_DUMP";
    echo "<br>";
    var_dump($alumnos);
    echo "<br>";

    echo "<p>Estoy accediendo a la posicion 0 de mi arreglo alumnos;</p>";
        /* Acceder a la posicion de un arreglo */
    print_r($alumnos[0]);
    echo "<br>";

    echo "Ciclos en PHP";
    echo "<br>";
foreach($alumnos as $alumno){
    echo "<br>";

    echo $alumno;
}
        /* recorrer array con for */
    echo "CICLO FOR";
    echo "<br>";
    $alumnosdos = ['naidelin',18,'Alan',20,'Juan',15,'Pedro',30];
    var_dump($alumnosdos);
for($i= 0; $alumnosdos <= 8; $i++){
    echo "<br>";
    var_dump($alumnosdos);
}
    echo "<br>";
    echo "WHILE CICLO";
    echo "<br>";
    $i = 1;
while ($i <= 10) {
    echo $i++;  
}

    echo "<br>";
    echo "CONDICIONALES";
    echo "<br>";
$status = true;

if ($status != false ) {
    
    echo "status es verdadero";
}else {
    echo "el estatus no es diverente de verdadero";
}
/*    OBJETOS EN PHP
$libro->titulo = "Las legiones malditas";
$libro->autor = "Santiago Posteguillo";
$libro->editorial = "Ediciones B";
$libro->fechaPublicacion = 2008;
var_dump($libro); */


  ?> 
  