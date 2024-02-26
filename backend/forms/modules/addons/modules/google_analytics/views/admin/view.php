<?php

use app\helpers\IconHelper;
use yii\helpers\Html;
use app\components\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\google_analytics\models\Account */

$this->title = Yii::t('app', 'Form Tracking') . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Add-ons'), 'url' => ['/addons']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Google Analytics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <?= $this->render('@app/themes/next/views/partials/_breadcrumbs') ?>
            </div>
        </div>
    </div>
</div>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <h2 class="page-title">
                    <?= Html::encode($model->form->name) ?>
                </h2>
                <p class="text-muted">
                    <?= Html::encode($this->title) ?>
                </p>
            </div>
            <div class="col">
                <div class="float-end d-none d-md-block mt-1">
                    <?= Html::a(IconHelper::show('pencil'), ['update', 'id' => $model->id], [
                        'title' => Yii::t('app', 'Update'),
                        'class' => 'btn btn-icon btn-primary'
                    ]) ?>
                    <?= Html::a(IconHelper::show('trash'), ['delete', 'id' => $model->id], [
                        'title' => Yii::t('app', 'Delete'),
                        'class' => 'btn btn-icon btn-danger',
                        'data' => [
                            'confirm' => Yii::t('app',
                                'Are you sure you want to delete this item? All data related to this item will be deleted. This action cannot be undone.'),
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-md-none mb-3">
                    <?= Html::a(IconHelper::show('pencil') . ' ' .
                        Yii::t('app', 'Update'), ['update', 'id' => $model->id], [
                        'title' => Yii::t('app', 'Update'),
                        'class' => 'btn btn-primary mb-1'
                    ]) ?>
                    <?= Html::a(IconHelper::show('trash') . ' ' .
                        Yii::t('app', 'Delete'),
                        ['delete', 'id' => $model->id],
                        [
                            'title' => Yii::t('app', 'Delete'),
                            'class' => 'btn btn-danger mb-1',
                            'data' => [
                                'confirm' => Yii::t('app',
                                    'Are you sure you want to delete this item? All data related to this item will be deleted. This action cannot be undone.'),
                                'method' => 'post',
                            ],
                        ]
                    ) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <?= DetailView::widget([
                    'model' => $model,
                    'condensed'=>false,
                    'hover'=>true,
                    'mode'=>DetailView::MODE_VIEW,
                    'enableEditMode'=> false,
                    'hideIfEmpty'=>true,
                    'options' => [
                        'class' => 'kv-view-mode', // Fix hideIfEmpty if enableEditMode is false
                    ],
                    'attributes' => [
                        'id',
                        'name',
                        [
                            'attribute'=>'form',
                            'format'=>'raw',
                            'value'=> Html::encode($model->form->name),
                        ],
                        [
                            'attribute'=>'status',
                            'format'=>'raw',
                            'value' => ($model->status === 1) ? '<span class="badge bg-success"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-danger"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type' => DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>