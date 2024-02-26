<?php

use app\components\widgets\ActionBar;
use app\components\widgets\GridView;
use app\components\widgets\PageSizeDropDownList;
use app\helpers\IconHelper;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/**
 * @var $dataProvider array
 * @var $searchModel Da\User\Search\RoleSearch
 * @var $this yii\web\View
 */

$this->title = Yii::t('app', 'Roles');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/admin/index']];
$this->params['breadcrumbs'][] = $this->title;

// User Preferences
$showFilters = Yii::$app->user->preferences->get('GridView.filters.state') === '1';

$options = array(
    'currentPage' => Url::toRoute(['index']), // Used by filters
    'gridViewSettingsEndPoint' => Url::to(['/ajax/grid-view-settings']),
);

// Pass php options to javascript
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'form-options');
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
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <?= GridView::widget(
                        [
                            'id' => 'role-grid',
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'resizableColumns' => false,
                            'pjax' => false,
                            'export' => false,
                            'responsive' => true,
                            'responsiveWrap' => false,
                            'bordered' => false,
                            'striped' => true,
                            'tableOptions' => [
                                'class' => $showFilters
                                    ? 'table-with-filters table-vcenter card-table'
                                    : 'table-vcenter card-table',
                            ],
                            'panelTemplate' =>'{panelHeading}{panelBefore}{items}{panelFooter}',
                            'panel' => [
                                'type' => GridView::TYPE_DEFAULT,
                                'headingOptions' => [
                                    'class' => 'card-header',
                                ],
                                'footerOptions' => [
                                    'class' => 'card-footer d-flex align-items-center',
                                ],
                                'heading' => Yii::t('app', 'Roles')
                                    . ' <small class="ms-3 text-muted d-none d-sm-inline">'
                                    . Yii::t('app', 'Authenticate and authorize users in seconds')
                                    . '</small>',
                                'before'=>
                                    ActionBar::widget([
                                        'grid' => 'role-grid',
                                        'templates' => [
                                            '{create}' => ['class' => 'col-xs-9 col-sm-6'],
                                            '{filters}' => ['class' => 'col-xs-3 col-sm-6'],
                                        ],
                                        'elements' => [
                                            'create' => $this->render('/shared/_menu'),
                                            'filters' => SwitchInput::widget(
                                                [
                                                    'name'=>'filters',
                                                    'type' => SwitchInput::CHECKBOX,
                                                    'value' => $showFilters,
                                                    'pluginOptions' => [
                                                        'size' => 'mini',
                                                        'animate' => false,
                                                        'labelText' => Yii::t('app', 'Filter'),
                                                    ],
                                                    'pluginEvents' => [
                                                        "switchChange.bootstrapSwitch" => "function(event, state) {
                                                            var show = (typeof state !== 'undefined' && state == 1) ? 1 : 0;
                                                            $.post(options.gridViewSettingsEndPoint, { 'show-filters': show })
                                                                .done(function(response) {
                                                                    if (response.success) {
                                                                        if (show) {
                                                                            $('.filters').fadeIn();
                                                                        } else {
                                                                            $('.filters').fadeOut();
                                                                            window.location = options.currentPage;
                                                                        }                   
                                                                    }
                                                                });
                                                        }",
                                                    ],
                                                    'containerOptions' => ['style' => 'margin-top: 6px; text-align: right'],
                                                ]
                                            ),
                                        ],
                                        'bulkActionsItems' => [],
                                        'bulkActionsOptions' => [
                                            'options' => [
                                                'status-active' => [
                                                    'url' => Url::toRoute(['update-status', 'status' => 1]),
                                                ],
                                                'status-inactive' => [
                                                    'url' => Url::toRoute(['update-status', 'status' => 0]),
                                                ],
                                                'general-delete' => [
                                                    'url' => Url::toRoute('delete-multiple'),
                                                    'data-confirm' => Yii::t('app', 'Are you sure you want to delete these forms? All stats, submissions, conditional rules and reports data related to each item will be deleted. This action cannot be undone.'),
                                                ],
                                            ],
                                            'class' => 'form-select',
                                        ],

                                        'class' => 'form-control',
                                    ]),
                            ],
                            'replaceTags' => [
                                '{pageSize}' => function($widget) {
                                    $html = '';
                                    if ($widget->panelFooterTemplate !== false) {
                                        $selectedSize = Yii::$app->user->preferences->get('GridView.pagination.pageSize');
                                        return PageSizeDropDownList::widget(['selectedSize' => $selectedSize]);
                                    }
                                    return $html;
                                },
                            ],
                            'panelFooterTemplate' => '
                                {pager}{pageSize}
                            ',
                            'toolbar' => false,
                            'columns' => [
                                [
                                    'class' => '\kartik\grid\SerialColumn',
                                    'width' => '80px',
                                ],
                                [
                                    'attribute' => 'name',
                                    'header' => Yii::t('app', 'Name'),
                                    'options' => [
                                        'style' => 'width: 20%',
                                    ],
                                ],
                                [
                                    'attribute' => 'description',
                                    'header' => Yii::t('app', 'Description'),
                                    'options' => [
                                        'style' => 'width: 55%',
                                    ],
                                ],
                                [
                                    'attribute' => 'rule_name',
                                    'header' => Yii::t('app', 'Rule name'),
                                    'options' => [
                                        'style' => 'width: 20%',
                                    ],
                                ],
                                [
                                    'class' => 'kartik\grid\ActionColumn',
                                    'dropdown' => true,
                                    'dropdownButton' => [
                                        'class'=>'btn btn-primary',
                                        'data-bs-config' => '{"popperConfig":{"strategy":"fixed"}}',
                                    ],
                                    'dropdownMenu' => [
                                        'class' => 'dropdown-menu dropdown-menu-end',
                                    ],
                                    'buttons' => [
                                        'update' => function ($url) {
                                            return '<li>'.Html::a(
                                                    '<span class="me-2">' . IconHelper::show('pencil') . '</span>' . Yii::t('app', 'Update'),
                                                    $url,
                                                    ['title' => Yii::t('app', 'Update'), 'class' => 'dropdown-item']
                                                ) .'</li>';
                                        },
                                        'copy' => function ($url) {
                                            $options = array_merge([
                                                'title' => Yii::t('app', 'Copy'),
                                                'class' => 'dropdown-item',
                                                'aria-label' => Yii::t('app', 'Copy'),
                                                'data-pjax' => '0',
                                            ], []);
                                            return '<li>'.Html::a('<span class="me-2">' . IconHelper::show('copy') . '</span>' .
                                                    Yii::t('app', 'Copy'), $url, $options).'</li>';
                                        },
                                        'delete' => function ($url) {
                                            $options = array_merge([
                                                'title' => Yii::t('app', 'Delete'),
                                                'aria-label' => Yii::t('app', 'Delete'),
                                                'data-confirm' => Yii::t('app', 'Are you sure you want to delete this item? All data related to this item will be deleted. This action cannot be undone.'),
                                                'data-method' => 'post',
                                                'data-pjax' => '0',
                                                'class' => 'dropdown-item'
                                            ], []);
                                            return '<li>'.Html::a(
                                                    '<span class="me-2">' . IconHelper::show('trash') . '</span>' .
                                                    Yii::t('app', 'Delete'),
                                                    $url,
                                                    $options
                                                ).'</li>';
                                        },
                                    ],
                                    'urlCreator' => function ($action, $model) {
                                        return Url::to(['/user/role/' . $action, 'name' => $model['name']]);
                                    },
                                    'template' => '{update} {copy} {delete}',
                                ],
                            ],
                        ]
                    ) ?>
                </div>
            </div>
        </div>
    </div>
<?php
$js = <<< 'SCRIPT'

$(function () {
    // Tooltips
    $("[data-toggle='tooltip']").tooltip();
});

SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);