<?php

include '../app/vendor/autoload.php';
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
        <button id="btn-alert">2 + 2</button>
    </body>
    <<footer>
        <script src="build/bundle.js"></script>
    </footer>
</html>
