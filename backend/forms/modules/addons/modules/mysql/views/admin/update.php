<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\mysql\models\MySQL */
/* @var $fieldModel app\modules\addons\modules\mysql\models\MySQLField */
/* @var $forms array [id => name] of Form models */
/* @var $lists array [id => name] of Subscriber Lists */
/* @var $connected boolean The connection to MySQL has been established */

$this->title = Yii::t('app', 'Update Form');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Add-ons'), 'url' => ['/addons']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'MySQL'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Form') .' #'.
    $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');

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
                    <?= Html::encode($this->title) ?>
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <?= Html::encode($this->title) ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'fieldModel' => $fieldModel,
                            'forms' => $forms,
                            'lists' => $lists,
                            'connected' => $connected,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
