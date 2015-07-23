Yii2-featherlight
=================
noelboss/featherlight for yii-2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist andrew72ru/yii2-featherlight "*"
```

or add

```
"andrew72ru/yii2-featherlight": "*"
```

to the require section of your `composer.json` file.

For base usage please refer to [noelboss/featherlight](https://github.com/noelboss/featherlight) documentation.

Lightbox Usage
--------------

```php
<?= \andrew72ru\featherlight\FeatherLight::widget([
    'src' => Url::to(['small-image']), // Small image
    'url' => Url::to(['large-image']), // Large image
    'imageOptions' => ['class' => 'img-thumbnail'] // Image html options
]); ?>
```

Gallery Usage
-------------

```php
<?php
$items = [
    [
        'src' => Url::to(['small-image-0']), // Small image
        'url' => Url::to(['large-image-0']), // Large image
    ],
    [
        'src' => Url::to(['small-image-1']), // Small image
        'url' => Url::to(['large-image-1']), // Large image
    ],
    [
        'src' => Url::to(['small-image-2']), // Small image
        'url' => Url::to(['large-image-2']), // Large image
    ],
    [
        'src' => Url::to(['small-image-3']), // Small image
        'url' => Url::to(['large-image-3']), // Large image
    ],
];

echo FeatherlightGallery::widget([
    'items' => $items, 
    'previewOptions' => ['class' => 'img-thumbnail'], // Small image html options
    'sectionOptions' => ['style' => 'display: block'] // Section html options
]);
?>
```

In gallery usage, remember to large image url end with `.jpg`, `.png` or similar.

This is right url:

```
http://mysite.org/image?w=1024&h=1024&file=image-0.jpg
```

And this is wrong

```
http://mysite.org/image?file=image-0.jpg&w=1024&h=1024
```
