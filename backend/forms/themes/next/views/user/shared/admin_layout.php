<?php

use yii\helpers\Html;

/**
 * @var $content string
 */

$mainTitle = $mainTitle ?? '';

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
<!-- Page body -->
<div class="page-body theme-create">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <?= Html::encode($mainTitle) ?>
                            <small class="card-subtitle hidden-xs">
                                <?= Html::encode($this->title) ?>
                            </small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9 col-sm-6">
                                <?= $this->render('/shared/_menu') ?>
                            </div>
                        </div>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>