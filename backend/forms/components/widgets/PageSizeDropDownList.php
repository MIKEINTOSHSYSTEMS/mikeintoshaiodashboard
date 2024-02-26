<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.7
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\widgets;

use yii\base\Widget;
use yii\helpers\Url;

class PageSizeDropDownList extends Widget
{
    public $selectedSize;

    public $sizes;

    public $cssClass;

    public $url;

    public function init()
    {
        parent::init();
        if ($this->selectedSize === null) {
            $this->selectedSize = 5;
        }
        if ($this->sizes === null) {
            $this->sizes = [
                '5' => '5',
                '10' => '10',
                '25' => '25',
                '50' => '50',
                '100' => '100',
                '500' => '500',
            ];
        }
        if ($this->cssClass === null) {
            $this->cssClass = 'form-control page-size';
        }
        if ($this->url === null) {
            $this->url = Url::to(['/ajax/grid-view-settings']);
        }
    }

    public function run()
    {
        return $this->render('page-size-drop-down-list', [
            'selectedSize' => $this->selectedSize,
            'sizes' => $this->sizes,
            'cssClass' => $this->cssClass,
            'url' => $this->url,
        ]);
    }
}