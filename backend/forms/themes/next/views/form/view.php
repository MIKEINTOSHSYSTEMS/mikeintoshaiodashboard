<?php

use app\helpers\IconHelper;
use yii\helpers\Html;
use app\components\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */

$this->title = isset($formModel->name) ? $formModel->name : $formModel->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
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
                    <?= Yii::t('app', 'Form Info') ?>
                </h2>
                <p class="text-muted">
                    <?= Html::encode($this->title) ?>
                </p>
            </div>
            <div class="col">
                <div class="float-end d-none d-md-block mt-1">
                    <div class="btn-group" role="group">
                        <?php if (Yii::$app->user->can('updateForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('pencil'), ['update', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Update'),
                                'class' => 'btn btn-icon btn-primary'
                            ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('configureForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('settings'), ['settings', 'id' => $formModel->id],
                                [
                                    'title' => Yii::t('app', 'Settings'),
                                    'class' => 'btn btn-icon btn-primary'
                                ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('configureForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('switch-3'), ['rules', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Conditional Rules'),
                                'class' => 'btn btn-icon btn-primary'
                            ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('viewAddons', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('puzzle'), ['addons', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Add-Ons'),
                                'class' => 'btn btn-icon btn-primary'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                    <?php if (Yii::$app->user->can('viewFormSubmissions', ['model' => $formModel])) : ?>
                        <?= Html::a(IconHelper::show('send'), ['submissions', 'id' => $formModel->id], [
                            'title' => Yii::t('app', 'Submissions'),
                            'class' => 'btn btn-icon btn-azure'
                        ]) ?>
                    <?php endif; ?>
                    <div class="btn-group" role="group">
                        <?php if (Yii::$app->user->can('accessFormReports', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('chart-pie'), ['report', 'id' => $formModel->id],
                                [
                                    'title' => Yii::t('app', 'Submissions Report'),
                                    'class' => 'btn btn-icon btn-yellow'
                                ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('accessFormStats', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('chart-histogram'), ['analytics', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Performance Analytics'),
                                'class' => 'btn btn-icon btn-yellow'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                    <?php if (Yii::$app->user->can('shareForms', ['model' => $formModel])) : ?>
                        <?= Html::a(IconHelper::show('share-3'), ['share', 'id' => $formModel->id], [
                            'title' => Yii::t('app', 'Publish & Share'),
                            'class' => 'btn btn-icon btn-lime'
                        ]) ?>
                    <?php endif; ?>
                    <div class="btn-group" role="group">
                        <?php if (Yii::$app->user->can('resetFormStats', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('refresh'),
                                ['reset-stats', 'id' => $formModel->id], [
                                    'title' => Yii::t('app', 'Reset Stats'),
                                    'class' => 'btn btn-icon btn-danger',
                                    'data' => [
                                        'confirm' => Yii::t('app',
                                            'Are you sure you want to delete these stats? All stats related to this item will be deleted. This action cannot be undone.'),
                                        'method' => 'post',
                                    ],
                                ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('deleteForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('trash'), ['delete', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Delete'),
                                'class' => 'btn btn-icon btn-danger',
                                'data' => [
                                    'confirm' => Yii::t('app',
                                        'Are you sure you want to delete this form? All stats, submissions, conditional rules and reports data related to this item will be deleted. This action cannot be undone.'),
                                    'method' => 'post',
                                ],
                            ]) ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-md-none mb-3">
                    <div class="btn-group" role="group">
                        <?php if (Yii::$app->user->can('updateForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('pencil') . ' ' .
                                Yii::t('app', 'Update'), ['update', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Update'),
                                'class' => 'btn btn-primary mb-1'
                            ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('configureForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('settings') . ' ' .
                                Yii::t('app', 'Settings'), ['settings', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Settings'),
                                'class' => 'btn btn-primary mb-1'
                            ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('configureForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('switch-3') . ' ' .
                                Yii::t('app', 'Rules'), ['rules', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Conditional Rules'),
                                'class' => 'btn btn-primary mb-1'
                            ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('viewAddons', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('puzzle') . ' ' .
                                Yii::t('app', 'Add-Ons'), ['addons', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Add-Ons'),
                                'class' => 'btn btn-primary mb-1'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                    <?php if (Yii::$app->user->can('viewFormSubmissions', ['model' => $formModel])) : ?>
                        <?= Html::a(IconHelper::show('send') . ' ' .
                            Yii::t('app', 'Submissions'), ['submissions', 'id' => $formModel->id], [
                            'title' => Yii::t('app', 'Submissions'),
                            'class' => 'btn btn-azure mb-1'
                        ]) ?>
                    <?php endif; ?>
                    <div class="btn-group" role="group">
                        <?php if (Yii::$app->user->can('accessFormReports', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('chart-pie') . ' ' .
                                Yii::t('app', 'Report'), ['report', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Submissions Report'),
                                'class' => 'btn btn-yellow mb-1'
                            ]) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('accessFormStats', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('chart-histogram') . ' ' .
                                Yii::t('app', 'Performance'), ['analytics', 'id' => $formModel->id], [
                                'title' => Yii::t('app', 'Performance Analytics'),
                                'class' => 'btn btn-yellow mb-1'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                    <?php if (Yii::$app->user->can('shareForms', ['model' => $formModel])) : ?>
                        <?= Html::a(IconHelper::show('share-3') . ' ' .
                            Yii::t('app', 'Publish & Share'), ['share', 'id' => $formModel->id], [
                            'title' => Yii::t('app', 'Publish & Share'),
                            'class' => 'btn btn-lime mb-1'
                        ]) ?>
                    <?php endif; ?>
                    <div class="btn-group" role="group">
                        <?php if (Yii::$app->user->can('resetFormStats', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('refresh') . ' ' .
                                Yii::t('app', 'Reset Stats'),
                                ['reset-stats', 'id' => $formModel->id],
                                [
                                    'title' => Yii::t('app', 'Reset Stats'),
                                    'class' => 'btn btn-danger mb-1',
                                    'data' => [
                                        'confirm' => Yii::t('app',
                                            'Are you sure you want to delete these stats? All stats related to this item will be deleted. This action cannot be undone.'),
                                        'method' => 'post',
                                    ],
                                ]
                            ) ?>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->can('deleteForms', ['model' => $formModel])) : ?>
                            <?= Html::a(IconHelper::show('trash') . ' ' .
                                Yii::t('app', 'Delete'),
                                ['delete', 'id' => $formModel->id],
                                [
                                    'title' => Yii::t('app', 'Delete'),
                                    'class' => 'btn btn-danger mb-1',
                                    'data' => [
                                        'confirm' => Yii::t('app',
                                            'Are you sure you want to delete this form? All stats, submissions, conditional rules and reports data related to this item will be deleted. This action cannot be undone.'),
                                        'method' => 'post',
                                    ],
                                ]
                            ) ?>
                        <?php endif; ?>
                    </div>
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
                    'model' => $formModel,
                    'condensed'=>false,
                    'hover'=>false,
                    'mode'=>DetailView::MODE_VIEW,
                    'hideIfEmpty'=>true,
                    'enableEditMode' => false,
                    'options' => [
                        'class' => 'kv-view-mode', // Fix hideIfEmpty if enableEditMode is false
                    ],
                    'attributes' => [
                        [
                            'group'=>true,
                            'label'=>Yii::t('app', 'Form Info'),
                            'rowOptions'=>['class'=>'info']
                        ],
                        'id',
                        'name',
                        [
                            'attribute'=>'language',
                            'value'=> $formModel->languageLabel,

                        ],
                        [
                            'attribute'=>'status',
                            'format'=>'raw',
                            'value'=> ($formModel->status === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'save',
                            'format'=>'raw',
                            'value'=> ($formModel->save === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'analytics',
                            'format'=>'raw',
                            'value'=> ($formModel->analytics === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'use_password',
                            'format'=>'raw',
                            'value'=> ($formModel->use_password === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'novalidate',
                            'format'=>'raw',
                            'value'=> ($formModel->novalidate === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'autocomplete',
                            'format'=>'raw',
                            'value'=> ($formModel->autocomplete === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'resume',
                            'format'=>'raw',
                            'value'=> ($formModel->resume === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'honeypot',
                            'format'=>'raw',
                            'value'=> ($formModel->honeypot === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'recaptcha',
                            'format'=>'raw',
                            'value'=> ($formModel->recaptcha === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'total_limit',
                            'format'=>'raw',
                            'value'=> ($formModel->total_limit === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'user_limit',
                            'format'=>'raw',
                            'value'=> ($formModel->user_limit === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute'=>'schedule',
                            'format'=>'raw',
                            'value'=> ($formModel->schedule === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                        ],
                        [
                            'attribute' => 'author',
                            'value' => !empty($formModel->author->username) ? $formModel->author->username : '',
                            'label' => Yii::t('app', 'Created by'),
                        ],
                        [
                            'attribute' => 'created_at',
                            'value' => $formModel->created,
                            'label' => Yii::t('app', 'Created'),
                        ],
                        [
                            'attribute' => 'lastEditor',
                            'value' => isset($formModel->lastEditor, $formModel->lastEditor->username) ? $formModel->lastEditor->username : null,
                            'label' => Yii::t('app', 'Last Editor'),
                        ],
                        [
                            'attribute' => 'updated_at',
                            'value' => $formModel->updated,
                            'label' => Yii::t('app', 'Last updated'),
                        ],
                        [
                            'group'=>true,
                            'label'=>Yii::t('app', 'Confirmation Info'),
                            'rowOptions'=>['class'=>'info']
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'value' => $formModel->formConfirmation->getTypeLabel(),
                            'label' => Yii::t('app', 'How to'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'value' => Html::encode($formModel->formConfirmation->message),
                            'label' => Yii::t('app', 'Message'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'value' => Html::encode($formModel->formConfirmation->url),
                            'label' => Yii::t('app', 'Url'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'format'=>'raw',
                            'value'=> ($formModel->formConfirmation->send_email === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                            'label' => Yii::t('app', 'Send Email'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'value' => Html::encode($formModel->formConfirmation->mail_from),
                            'label' => Yii::t('app', 'Reply To'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'value' => Html::encode($formModel->formConfirmation->mail_subject),
                            'label' => Yii::t('app', 'Subject'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'value' => Html::encode($formModel->formConfirmation->mail_from_name),
                            'label' => Yii::t('app', 'Name or Company'),
                        ],
                        [
                            'attribute' => 'formConfirmation',
                            'format'=>'raw',
                            'value'=> ($formModel->formConfirmation->mail_receipt_copy === 1) ?
                                '<span class="badge bg-lime"> '.Yii::t('app', 'ON').' </span>' :
                                '<span class="badge bg-red"> '.Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                            'label' => Yii::t('app', 'Includes a Submission Copy'),
                        ],
                        [
                            'group'=>true,
                            'label'=>Yii::t('app', 'Notification Info'),
                            'rowOptions'=>['class'=>'info']
                        ],
                        [
                            'attribute' => 'formEmail',
                            'format'=>'raw',
                            'value'=> (!empty($formModel->formEmail->to)) ?
                                '<span class="badge bg-lime"> '.Yii::t('app', 'ON').' </span>' :
                                '<span class="badge bg-red"> '.Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                            'label' => Yii::t('app', 'Send Email'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'value' => Html::encode($formModel->formEmail->subject),
                            'label' => Yii::t('app', 'Subject'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'value' => Html::encode($formModel->formEmail->to),
                            'label' => Yii::t('app', 'Recipient'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'value' => Html::encode(implode(", ", $formModel->formEmail->cc)),
                            'label' => Yii::t('app', 'Cc'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'value' => Html::encode(implode(", ", $formModel->formEmail->bcc)),
                            'label' => Yii::t('app', 'Bcc'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'value' => $formModel->formEmail->typeLabel,
                            'label' => Yii::t('app', 'Contents'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'format'=>'raw',
                            'value'=> ($formModel->formEmail->attach === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                            'label' => Yii::t('app', 'Attach'),
                        ],
                        [
                            'attribute' => 'formEmail',
                            'format'=>'raw',
                            'value'=> ($formModel->formEmail->plain_text === 1) ? '<span class="badge bg-lime"> '.
                                Yii::t('app', 'ON').' </span>' : '<span class="badge bg-red"> '.
                                Yii::t('app', 'OFF').' </span>',
                            'type'=>DetailView::INPUT_SWITCH,
                            'widgetOptions' => [
                                'pluginOptions' => [
                                    'onText' => Yii::t('app', 'ON'),
                                    'offText' => Yii::t('app', 'OFF'),
                                ]
                            ],
                            'label' => Yii::t('app', 'Only Plain Text'),
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>