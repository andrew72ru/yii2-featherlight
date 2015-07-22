<?php

namespace andrew72ru\featherlight;
use yii\helpers\Html;
use yii\helpers\Url;

class FeatherLight extends \yii\base\Widget
{
    public $src;
    public $url;
    public $imageOptions;

    public function init()
    {
        FeatherlightAsset::register($this->view);
    }

    public function run()
    {
        return Html::a(Html::img($this->src, $this->imageOptions), $this->url, [
            'data' => [
                'featherlight' => 'image',
            ]
        ]);
    }
}
