<?php
declare(strict_types = 1);

namespace WeDev\Wedev\Infrastructure;

use Dotenv\Dotenv;

class FrontAssetsLoader implements FrontAssetsLoaderInterface
{
    private const MANIFEST_ENV_KEY = 'MANIFEST_RELATIVE_PATH';

    public function __construct()
    {
        (Dotenv::create(dirname(__DIR__ . '../../')))->load();
    }

    /**
     * @return string .env key to Manifest path
     */
    public function getManifestPath(): string
    {
        return getenv(self::MANIFEST_ENV_KEY);
    }

    /**
     * @return string the public folder path
     */
    public function publicPath(): string
    {
        return dirname(__DIR__ . '../../');
    }

    /**
     * @return string a string with the name of the main js file to include into the index.php file
     */
    public function getJavascriptApp(): string
    {
        $manifest = file_get_contents($this->publicPath() . getenv('MANIFEST_RELATIVE_PATH') . 'manifest.json');
        $jsonArray = json_decode($manifest, true);
        return (string) $jsonArray['app.js'];
    }
}
