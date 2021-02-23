<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compilador Java</title>
</head>

<body>
    <?php
    echo "Arrancamos";
    ?>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="compilador.php">Ejemplo de Código Java</a>
        <!-- This is an Index-->
    </nav>
    <textarea id="alltext">Texto</textarea>
    <input type="submit" name="submit" value="Descargar"></input>
    <?php
    if (isset($_POST["submit"])) :
        $file = fopen("archivo.java", "wrx");
        echo "Abrió el acrivo";
        fclose($file);
        echo "Cerró el archivo";
    endif;
    ?>
</body>

</html>