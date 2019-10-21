<?php
declare(strict_types=1);

namespace WeDev\WeDev\Infrastructure;

interface FrontAssetsLoaderInterface
{
    /**
     * @return string .env key to Manifest path
     */
    public function getManifestPath(): string;

    /**
     * @return string the public folder path
     */
    public function publicPath(): string;

    /**
     * @return string a string with the name of the main js file to include into the index.php file
     */
    public function getJavascriptApp(): string;
}
