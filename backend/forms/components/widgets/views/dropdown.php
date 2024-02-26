<?php

use yii\bootstrap\Dropdown;

/**
 * @var array $encodeLabels
 * @var array $items
 * @var array $submenuOptions
 */

echo Dropdown::widget([
    'encodeLabels'=> $encodeLabels,
    'items' => $items,
    'submenuOptions' => $submenuOptions,
]);