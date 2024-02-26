<?php

use app\helpers\IconHelper;
use yii\helpers\Html;
use app\components\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TemplateCategory */
/* @var $searchModel app\models\search\TemplateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Templates'), 'url' => ['/templates']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
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
                    <?= Yii::t('app', 'Theme Info') ?>
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
                        'description',
                        [
                            'attribute' => 'created_at',
                            'value' => $model->created,
                            'label' => Yii::t('app', 'Created'),
                        ],
                        [
                            'attribute' => 'updated_at',
                            'value' => $model->updated,
                            'label' => Yii::t('app', 'Updated'),
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>