<?php
/**
 * Project nv-tmn.
 * User: andrew
 * Date: 23.07.15
 * Time: 9:43
 */

namespace andrew72ru\featherlight;


use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\web\View;

class FeatherlightGallery extends Widget
{
    public $items = [];
    public $previewOptions = [];
    public $sectionOptions = [];

    public function init()
    {
        FeatherlightGalleryAsset::register($this->view);
        $this->view->registerJs("$('section.flight-gallery a').featherlightGallery({previousIcon: '&#9664;', nextIcon: '&#9654;', galleryFadeIn: 100, galleryFadeOut: 300})", View::POS_READY);
    }

    public function run()
    {
        $innerHtml = [];
        foreach ($this->items as $item)
            $innerHtml[] = Html::a(Html::img($item['src'], $this->previewOptions), $item['url']);

        return Html::tag('section', implode('', $innerHtml), ArrayHelper::merge(['class' => 'flight-gallery'], $this->sectionOptions));
    }
}