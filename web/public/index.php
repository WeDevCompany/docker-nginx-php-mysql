<?php

include '../app/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$foo = new WeDev\WeDev\Foo();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker <?php echo $foo->getName(); ?></title>
        <link rel="stylesheet" type="text/css" href="build/style.css">

    </head>

    <body>
        <h1>Docker <?php echo $foo->getName(); ?></h1>
        <p>Manifest path: <?php echo $foo->getManifestPath(); ?></p>
        <p>Manifest path: <?php echo $foo->getJavascriptApp(); ?></p>
        <button id="btn-alert">2 + 2</button>
    </body>
    <footer>
        <script src="build/<?php echo $foo->getJavascriptApp(); ?>"></script>
    </footer>
</html>
