<?php
/**
 * Project nv-tmn.
 * User: andrew
 * Date: 22.07.15
 * Time: 18:20
 */

namespace andrew72ru\featherlight;


use yii\web\AssetBundle;

class FeatherlightGalleryAsset extends AssetBundle
{
    public $js = [
        'release/featherlight.gallery.min.js',
    ];

    public $css = [
        'release/featherlight.gallery.min.css',
    ];

    public $depends = [
        'andrew72ru\featherlight\FeatherlightAsset',
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/featherlight';
        parent::init();
    }
}