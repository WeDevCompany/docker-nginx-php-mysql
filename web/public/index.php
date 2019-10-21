<?php

declare(strict_types = 1);

require_once '../app/vendor/autoload.php';

$front_assets_loader = new WeDev\WeDev\Infrastructure\FrontAssetsLoader();
$foo = new WeDev\WeDev\Foo();
var_dump(__DIR__);

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
    <p>Manifest path: <?php echo $front_assets_loader->getManifestPath(); ?></p>
    <p>app.js Name: <?php echo $front_assets_loader->getJavascriptApp(); ?></p>
    <button id="btn-alert">2 + 2</button>
</body>
<footer>
    <script src="build/<?php echo $front_assets_loader->getJavascriptApp(); ?>"></script>
</footer>

</html>
