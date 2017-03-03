

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Halaman Utama</title>
    </head>
    <body>
        <a href='index.php/mobil'>Mobil</a>
        <a href='index.php/motor'>Motor</a>
    </body>
</html>

<?php

require '../bootstrap/app.php';
require '../bootstrap/container.php';
require '../routes/web.php';


$app->run();

?>
