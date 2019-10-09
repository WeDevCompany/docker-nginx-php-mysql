<?php

namespace WeDev\Wedev;

class Foo
{
    public function getName()
    {
        return 'Nginx PHP MySQL';
    }

    public function getManifestPath()
    {
        return getenv('MANIFEST_PATH');
    }

    public function getJavascriptApp()
    {
        $manifest = file_get_contents($this->getManifestPath() . 'manifest.json');
        $jsonArray = json_decode($manifest, true);
        return $jsonArray['app.js'];
    }
}
