<?php

use app\components\widgets\ActionBar;
use app\components\widgets\GridView;
use app\components\widgets\PageSizeDropDownList;
use app\helpers\IconHelper;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ThemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Themes');
$this->params['breadcrumbs'][] = $this->title;

// User Preferences
$showFilters = Yii::$app->user->preferences->get('GridView.filters.state') === '1';

$bulkActionsItems = [];
if (Yii::$app->user->can('deleteThemes', ['listing' => true])) {
    $bulkActionsItems[Yii::t('app', 'General')] = [
        'general-delete' => Yii::t('app', 'Delete')
    ];
}
if (empty($bulkActionsItems)) {
    $bulkActionsItems = [
        Yii::t('app', 'General') => [],
    ];
}

$formsLink = '';
if (Yii::$app->user->can('viewForms', ['listing' => true])) {
    $formsLink = Html::a(Yii::t('app', 'Do you know how to customize your form?'), ['/form'], [
        'data-toggle' => 'tooltip',
        'data-placement'=> 'top',
        'title' => Yii::t('app', 'It’s very easy. Just go to Form Manager, then click on the form Settings to customize and click on the UI Settings tab. Finally choose your theme.'),
        'class' => 'link-secondary text-decoration-underline ms-3 d-none d-md-inline'
    ]);
}

$colorPluginOptions =  [
    'showPalette' => true,
    'showPaletteOnly' => true,
    'showSelectionPalette' => true,
    'showAlpha' => false,
    'allowEmpty' => false,
    'preferredFormat' => 'name',
    'palette' => [
        [
            "white", "black", "grey", "silver", "gold", "brown",
        ],
        [
            "red", "orange", "yellow", "indigo", "maroon", "pink"
        ],
        [
            "blue", "green", "violet", "cyan", "magenta", "purple",
        ],
    ]
];
$gridColumns = [
    [
        'class' => '\kartik\grid\CheckboxColumn',
        'headerOptions' => ['class'=>'kartik-sheet-style'],
        'rowSelectedClass' => GridView::TYPE_WARNING,
    ],
    [
        'attribute'=> 'name',
        'format' => 'raw',
        'value' => function ($model) {
            return Html::a(Html::encode($model->name), ['theme/view', 'id' => $model->id]);
        },
    ],
    'description',
    [
        'attribute'=>'color',
        'value'=>function ($model) {
            return "<span class='badge' style='background-color: {$model->color}'>&nbsp;</span>&nbsp;&nbsp;<code>" .
                $model->color . '</code>';
        },
        'filterType'=>GridView::FILTER_COLOR,
        'filterWidgetOptions'=>[
            'showDefaultPalette'=>false,
            'noSupport' => Yii::t('app', 'It is recommended you use an upgraded browser to display the {type} control properly.'),
            'pluginOptions'=>$colorPluginOptions,
        ],
        'vAlign'=>'middle',
        'format'=>'raw',
        'noWrap'=>true,
    ],
    [
        'attribute' => 'shared',
        'label' => Yii::t('app', 'Sharing'),
        'format' => 'raw',
        'hAlign'=>'center',
        'value' => function ($model) {
            $icon = '';
            $currentUser = Yii::$app->user;
            if ($currentUser->id === $model->created_by || $currentUser->can('manageThemes')) {
                $icon = Html::tag('span', IconHelper::show('lock'), [
                    'title' => $currentUser->id === $model->created_by ? Yii::t('app', 'Only you can access to this item') : Yii::t('app', 'Only you and the author can access to this item'),
                    'class' => 'text-muted',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'top',
                ]);
                if ((int) $model->shared === \app\models\Theme::SHARED_EVERYONE) {
                    $icon = Html::tag('span', IconHelper::show('lock-open'), [
                        'title' => Yii::t('app', 'Everyone can access to this item'),
                        'class' => 'text-danger',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                    ]);
                } elseif ((int) $model->shared === \app\models\Theme::SHARED_WITH_USERS) {
                    $icon = Html::tag('span', IconHelper::show('users-group'), [
                        'title' => Yii::t('app', 'Specific users can access to this item'),
                        'class' => 'text-default',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                    ]);
                }
            } else if ($currentUser->id !== $model->created_by) {
                $icon = Html::tag('span', ' ', [
                    'title' => Yii::t('app', 'This item was shared with me'),
                    'class' => 'fad fa-share-all text-muted',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'top',
                ]);
            }
            return $icon;
        },
        'filter' => Html::activeDropDownList(
            $searchModel,
            'shared',
            \app\models\Theme::sharedOptions(),
            ['class'=>'form-select', 'prompt' => '']
        ),
        'visible' => Yii::$app->user->can('shareThemes', ['listing' => true]),
    ],
    [
        'attribute' => 'lastEditor',
        'value' => function ($model) {
            return isset($model->lastEditor, $model->lastEditor->username) ? Html::encode($model->lastEditor->username) : null;
        },
        'label' => Yii::t('app', 'Updated by'),
        'noWrap'=>true,
    ],
    [
        'attribute'=> 'updated_at',
        'value' => function ($model) {
            return $model->updated;
        },
        'label' => Yii::t('app', 'Updated'),
        'width' => '150px',
        'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
        'filterWidgetOptions' => [
            'presetDropdown' => false,
            'convertFormat' => true,
            'containerTemplate' => '
                <div class="form-control kv-drp-dropdown">
                    '. IconHelper::show('calendar') .'&nbsp;
                    <span class="range-value">{value}</span>
                    <span><b class="caret"></b></span>
                </div>
                {input}
            ',
            'pluginOptions' => [
                'showDropdowns' => true,
                'linkedCalendars' => false,
                'locale' => [
                    'format' => 'Y-m-d',
                    'separator' => ' - ',
                ],
                'opens' => 'left'
            ]
        ],
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'controller' => 'theme',
        'dropdown' => true,
        'dropdownButton' => [
            'class'=>'btn btn-primary',
            'data-bs-config' => '{"popperConfig":{"strategy":"fixed"}}',
        ],
        'dropdownMenu' => [
            'class' => 'dropdown-menu dropdown-menu-end',
        ],
        'buttons' => [
            //view button
            'view' => function ($url) {
                return '<li>'.Html::a(
                        '<span class="me-2">' . IconHelper::show('file-info') . '</span>' . Yii::t('app', 'View Record'),
                        $url,
                        ['title' => Yii::t('app', 'View Record'), 'class' => 'dropdown-item']
                    ) .'</li>';
            },
            //update button
            'update' => function ($url) {
                return '<li>'.Html::a(
                        '<span class="me-2">' . IconHelper::show('pencil') . '</span>' . Yii::t('app', 'Update'),
                        $url,
                        ['title' => Yii::t('app', 'Update'), 'class' => 'dropdown-item']
                    ) .'</li>';
            },
            //copy button
            'copy' => function ($url) {
                $options = array_merge([
                    'title' => Yii::t('app', 'Copy'),
                    'aria-label' => Yii::t('app', 'Copy'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                    'class' => 'dropdown-item'
                ], []);
                return '<li>'.Html::a(
                        '<span class="me-2">' . IconHelper::show('copy') . '</span>' .
                        Yii::t('app', 'Copy'),
                        $url,
                        $options
                    ).'</li>';
            },
            //delete button
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
        'visibleButtons' => [
            //update button
            'update' => function ($model, $key, $index) {
                return Yii::$app->user->can('updateThemes', ['model' => $model]);
            },
            //view button
            'view' => function ($model, $key, $index) {
                return Yii::$app->user->can('viewThemes', ['model' => $model]);
            },
            //copy button
            'copy' => function ($model, $key, $index) {
                return Yii::$app->user->can('copyThemes', ['model' => $model]);
            },
            //delete button
            'delete' => function ($model, $key, $index) {
                return Yii::$app->user->can('deleteThemes', ['model' => $model]);
            },
        ],
        'template' => '{update} {view} {copy} {delete}',
    ],
];

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
                <div class="col-md-12">
                    <?= GridView::widget([
                        'id' => 'theme-grid',
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => $gridColumns,
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
                        'panel'=>[
                            'type' => GridView::TYPE_DEFAULT,
                            'headingOptions' => [
                                'class' => 'card-header',
                            ],
                            'footerOptions' => [
                                'class' => 'card-footer d-flex align-items-center',
                            ],
                            'heading' => Yii::t('app', 'Themes')
                                . ' <small class="ms-3 text-muted d-none d-sm-inline">'
                                . Yii::t('app', 'Style & brand your online forms')
                                . ' </small>',
                            'before'=> ActionBar::widget([
                                'grid' => 'theme-grid',
                                'templates' => Yii::$app->user->can('viewBulkActionsInThemes') ? [
                                    '{create}' => ['class' => 'col-xs-6 col-sm-6'],
                                    '{filters}' => ['class' => 'col-xs-6 col-sm-3 col-lg-4'],
                                    '{bulk-actions}' => ['class' => 'col-sm-3 col-lg-2 d-none d-sm-block'],
                                ] : [
                                    '{create}' => ['class' => 'col-xs-6 col-sm-6'],
                                    '{filters}' => ['class' => 'col-xs-6 col-sm-6'],
                                ],
                                'bulkActionsItems' => $bulkActionsItems,
                                'bulkActionsOptions' => [
                                    'options' => [
                                        'general-delete' => [
                                            'url' => Url::toRoute('delete-multiple'),
                                            'data-confirm' => Yii::t('app', 'Are you sure you want to delete these themes? All data related to each item will be deleted. This action cannot be undone.'),
                                        ],
                                    ],
                                    'class' => 'form-select',
                                ],
                                'elements' => [
                                    'create' => Yii::$app->user->can('createThemes') ?
                                        Html::a(
                                            '<span class="fas fa-plus me-3"></span> ' . Yii::t('app', 'New Theme'),
                                            ['create'],
                                            ['class' => 'btn btn-primary']
                                        ) . ' ' . $formsLink : $formsLink,
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
                        'toolbar' => false
                    ]); ?>
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