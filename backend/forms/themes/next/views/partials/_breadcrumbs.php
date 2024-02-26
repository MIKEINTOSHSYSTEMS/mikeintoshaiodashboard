<?php

use yii\widgets\Breadcrumbs;

?>
<div class="breadcrumb-wrapper mb-30">
    <nav aria-label="breadcrumb">
        <?= Breadcrumbs::widget([
            'options' => ['class' => 'breadcrumb'],
            'itemTemplate' => "<li class='breadcrumb-item' aria-current='page'>{link}</li>\n",
            'activeItemTemplate' => "<li class='breadcrumb-item active' aria-current='page'><span>{link}</span></li>\n",
            'homeLink' => [
                'label' => Yii::t('app', 'Dashboard'),
                'url' => ['/dashboard'],
            ],
            'links' => $this->params['breadcrumbs'] ?? [],
        ]) ?>
    </nav>
</div>