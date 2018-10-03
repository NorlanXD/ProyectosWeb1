<?php
// Escribir un fichero en un array. En este ejemplo iremos a través de HTTP para
// obtener el código fuente HTML de un URL.
$líneas = file('archivo.csv');

// Recorrer nuestro array, mostrar el código fuente HTML como tal y mostrar tambíen los números de línea.
foreach ($líneas as $num_línea => $línea) {
    echo $línea . "<br />\n";
}

?>