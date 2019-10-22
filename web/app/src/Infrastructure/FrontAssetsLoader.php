<?php
declare(strict_types = 1);

namespace WeDev\WeDev\Infrastructure;

use Dotenv\Dotenv;

class FrontAssetsLoader implements FrontAssetsLoaderInterface
{
    private const MANIFEST_ENV_KEY = 'MANIFEST_RELATIVE_PATH';
    private const MANIFEST_FILE_NAME = 'manifest.json';
    private const MAIN_JS_FILE = 'app.js';
    private const BASE_RELATIVE_PATH = '/../../../..';
    private const PUBLIC_RELATIVE_PATH = '/../../..';

    public function __construct()
    {
        (Dotenv::create($this->basePath()))->load();
    }

    /**
     * @return string .env key to Manifest path
     */
    public function getManifestPath(): string
    {
        return getenv(self::MANIFEST_ENV_KEY);
    }

    /**
     * @return string the base folder path
     */
    public function basePath(): string
    {
        return dirname(__DIR__ . self::BASE_RELATIVE_PATH);
    }

    /**
     * @return string the public folder path
     */
    public function publicPath(): string
    {
        return dirname(__DIR__ . self::PUBLIC_RELATIVE_PATH);
    }

    /**
     * @return string a string with the name of the main js file to include into the index.php file
     */
    public function getJavascriptApp(): string
    {
        $manifest = file_get_contents($this->basePath() . $this->getManifestPath() . self::MANIFEST_FILE_NAME);
        $jsonArray = json_decode($manifest, true);
        return (string) $jsonArray[self::MAIN_JS_FILE];
    }
}
