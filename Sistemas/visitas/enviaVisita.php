<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form action="procesaVisita.php" method="post">

        nombre: <br>
        <input type="text" name="nombre" >
        <br>
        comentario: <br>
        <textarea name="comentario" cols="40" rows="6"></textarea>
        <br>
        <input type="submit" value="enviar">

    </form>

<?php
    //abrir archivo
    $archivo = "visitas.txt";
    $modo = "r";
    $fh = fopen($archivo, $modo);
    $volumen = filesize($archivo);
    $contenido = fread($fh,$volumen);

    echo nl2br($contenido);
    fclose($fh);
?>

</body>
</html>