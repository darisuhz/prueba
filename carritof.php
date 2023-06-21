<?php
    $archivo = "carrito.txt"; // Nombre del archivo de texto

    // Verificar si el archivo existe
    if (file_exists($archivo)) {
        // Abrir el archivo en modo lectura
        $file = fopen($archivo, "r");
        
        // Leer el contenido del archivo
        $contenido = fread($file, filesize($archivo));
        
        // Mostrar el contenido del archivo
        echo "Contenido del archivo:<br>";
        echo nl2br($contenido); // nl2br() para mostrar saltos de línea como <br>
        
        // Cerrar el archivo
        fclose($file);
    } else {
        echo "El archivo " . $archivo . " no existe.";
    }
?>
