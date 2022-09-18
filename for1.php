<?php
echo "EJEMPLOS DE FOR" ;
    echo "<br>";
    echo "<br>";
 echo "EJEMPLO 1 DE FOR";
    echo "<br>";
    echo "<br>";
        for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
 echo "EJEMPLO 2 DE FOR ";
    echo "<br>";
    echo "<br>";
        for($col = 'R'; $col != 'AD'; $col++) {
            echo $col.' ';
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
 echo "EJEMPLO 3 DE FOR ";
    echo "<br>";
    echo "<br>";
         for ($date = strtotime("2022-01-01"); $date < strtotime("2022-4-26"); 
                $date = strtotime("+1 day", $date)) {
                    echo date("Y-m-d", $date)."<br />";
    }
?>

