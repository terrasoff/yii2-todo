<?php

namespace app\assets;

use yii\web\AssetBundle;

class BackboneAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/backbone';

    public $js = [
        'underscore.js',
        'backbone.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}