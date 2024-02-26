<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var array $options
 * @var string $name
 * @var string $classPrefix
 * @var string $tag
 */

$tag = ArrayHelper::remove($options, 'tag', 'span');
echo Html::tag($tag, '', $options);
