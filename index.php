<!DOCTYPE html>
<html>
<head>
    <title>Subir y descargar archivos</title>
</head>
<body>
    <h1>Subir y descargar archivos</h1>

    <!-- Formulario para subir archivos -->
    <h2>Subir archivo</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" required>
        <input type="submit" value="Subir archivo" name="submit">
    </form>

    <!-- Lista de archivos disponibles para descargar -->
    <h2>Archivos disponibles para descargar</h2>
    <?php
        $dir = "uploads/";
        $files = array_diff(scandir($dir), array('..', '.'));
        foreach ($files as $file) {
            echo "<a href='$dir$file' download>$file</a><br>";
        }
    ?>
</body>
</html>
