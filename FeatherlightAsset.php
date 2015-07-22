<?php
/**
 * Project nv-tmn.
 * User: andrew
 * Date: 22.07.15
 * Time: 18:20
 */

namespace andrew72ru\featherlight;


use yii\web\AssetBundle;

class FeatherlightAsset extends AssetBundle
{
    public $js = [
        'release/featherlight.min.js',
    ];

    public $css = [
        'release/featherlight.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/featherlight';
        parent::init();
    }
}