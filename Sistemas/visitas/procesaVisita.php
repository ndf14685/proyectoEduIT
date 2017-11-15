<?php
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    $contenido = "Nombre: ".$nombre."\n";
    $contenido .= "Comentario: ".$comentario."\n";
    $contenido .= date("d/m/Y"). "\n\n";

    //abrir archivo
    $archivo = "visitas.txt";
    $modo = "a";
    $fh = fopen($archivo, $modo);

    fwrite($fh,$contenido);

    fclose($fh);
    header("location: enviaVisita.php");
?>
