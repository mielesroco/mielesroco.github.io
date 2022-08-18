<?php

    $productos.html = "../contador.txt";
    # Si no existe, lo creamos
    if (!file_exists($productos.html)) {
        touch($productos.html);
    }
    # Obtenemos su contenido
    $contenido = trim(file_get_contents($productos.html));
    # Si está vacío, lo igualamos a cero
    if ($contenido == "") {
        $visitas = 0;
    } else {
        # Si no, las visitas son lo que tenga el archivo
        $visitas = intval($contenido);
    }
    # Ya sea que las visitas son 0 o las que hayamos leído, las aumentamos
    $visitas++;
    # Y volvemos a escribir el valor en el archivo
    file_put_contents($productos.html, $visitas);
 

?>