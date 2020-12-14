<?php

namespace devgroup\jsoneditor;

use yii\web\AssetBundle;

class JsoneditorAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/';

    public $js = [
        'jsoneditor.min.js'
    ];
    public $css = [
        'jsoneditor.min.css'
    ];
}
