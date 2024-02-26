<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/**
 * @var array $flashes
 * @var array $alertTypes
 * @var array $iconTypes
 * @var array $closeButton
 */
foreach ($flashes as $type => $data) {
    if (isset($alertTypes[$type])) {
        $data = (array) $data;
        foreach ($data as $i => $message) {
            $options = [
                /* initialize css class for each alert box */
                'class' => $alertTypes[$type],
                /* assign unique id to each alert box */
                'id' => 'alert-' . $type . '-' . $i,
                'role' => 'alert',
            ];

            Html::addCssClass($options, ['alert', 'alert-dismissible']);

            if ($closeButton) {
                $closeButton = array_merge([
                    'data-bs-dismiss' => 'alert',
                    'aria-hidden' => 'true',
                    'class' => 'btn-close',
                ], $closeButton);
            }

            // Get icon
            $icon = Html::tag('span', ' ', ['class' => $iconTypes[$type] . ' me-2']);
            echo Html::beginTag('div', $options) . "\n";
            if ($closeButton) {
                $tag = ArrayHelper::remove($closeButton, 'tag', 'button');
                $label = ArrayHelper::remove($closeButton, 'label', '&times;');
                if ($tag === 'button' && !isset($closeButton['type'])) {
                    $closeButton['type'] = 'button';
                }

                echo Html::tag($tag, $label, $closeButton);
            }
            echo Html::tag('p', $icon . ' ' . $message);
            echo "\n" . Html::endTag('div');
        }
        \Yii::$app->getSession()->removeFlash($type);
    }
}