<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Theme */
/* @var $forms array [id => name] of form models */
/* @var $users array [id => username] of user models */
/* @var $themeUsers array [id => username] of user models */

$this->title = Yii::t('app', 'Create Theme');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Themes'), 'url' => ['index']];
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
                    <?= Html::encode($this->title) ?>
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body theme-create">
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
                            'forms' => $forms,
                            'users' => $users,
                            'themeUsers' => $themeUsers,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>