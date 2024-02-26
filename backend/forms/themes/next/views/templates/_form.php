<?php

use app\components\widgets\ActiveForm;
use app\helpers\ArrayHelper;
use app\models\Template;
use baluart\tomselect\TomSelectDropDownList;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Template */
/* @var $form yii\widgets\ActiveForm */
/* @var $categories app\models\TemplateCategory[] */
/* @var $users array [id => username] of user models */
/* @var $templateUsers array [id => username] of user models */

// Pass php options to javascript
$options = array(
    'hasPrettyUrls' => Yii::$app->urlManager->enablePrettyUrl,
    'userListUrl' => Url::to(['/ajax/user-list']),
);
$this->registerJs("var options = ".json_encode($options).";", $this::POS_BEGIN, 'template-options');
?>

<div class="template-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->widget(Select2::class, [
        'data' => $categories,
        'options' => ['placeholder' => Yii::t('app', 'Select a category...')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label(Yii::t('app', 'Category')); ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?php if (Yii::$app->user->can('changeTemplatesOwner', ['model' => $model]) && !$model->isNewRecord): ?>
        <?= $form->field($model, 'created_by')
            ->widget(TomSelectDropDownList::class, [
                'items' => array_intersect_key($users, [$model->created_by => $model->created_by]),
                'options' => [
                    'create' => false,
                    'prompt' => Yii::t('app', "Search user..."),
                ],
                'clientOptions' => [
                    'openOnFocus' => false,
                    'create' => false,
                    'multiple' => false,
                    'selectOnTab' => true,
                    'onType' => new JsExpression("
                    function(str) {
                        if (str.length < 3) {
                            $(this.dropdown).hide()
                        } else {
                            $(this.dropdown).show()
                        }
                    }"),
                    'valueField' => 'id',
                    'labelField' => 'username',
                    'searchField' => 'username',
                    'load' => new JsExpression("
                    function(query, callback) {
                        var url = options.hasPrettyUrls
                            ? options.userListUrl + '?q=' + encodeURIComponent(query)
                            : options.userListUrl + '&q=' + encodeURIComponent(query);
                        fetch(url)
                            .then(function (response) {
                                return response.json();
                            })
                            .then(function (json) {
                                callback(json.items);
                            })
                            .catch(()=>{
                                callback();
                            });
                    }"),
                ],
            ]) ?>
    <?php endif; ?>

    <?php if (Yii::$app->user->can('shareTemplates', ['model' => $model])): ?>
        <?= $form->field($model, 'shared')->radioButtonGroup(
            Template::sharedOptions(),
            [
                'itemOptions' => [
                    'labelOptions' => ['class' => 'btn btn-primary'],
                ],
            ]
        ) ?>
        <?= $form->field($model, 'users')
            ->widget(TomSelectDropDownList::class, [
                'items' => array_intersect_key($users, ArrayHelper::map($model->getUsers()->select(['id'])->asArray()->all(), 'id', 'id')),
                'options' => [
                    'create' => false,
                    'multiple' => true,
                    'prompt' => Yii::t('app', "Search users..."),
                ],
                'clientOptions' => [
                    'openOnFocus' => false,
                    'create' => false,
                    'multiple' => true,
                    'selectOnTab' => true,
                    'onType' => new JsExpression("
                        function(str) {
                            if (str.length < 3) {
                                $(this.dropdown).hide()
                            } else {
                                $(this.dropdown).show()
                            }
                        }"),
                    'valueField' => 'id',
                    'labelField' => 'username',
                    'searchField' => 'username',
                    'load' => new JsExpression("
                        function(query, callback) {
                            var url = '". Url::to(['/ajax/user-list', 'e' => $model->created_by])."&q=' + encodeURIComponent(query);
                            var url = options.hasPrettyUrls
                            ? options.userListUrl + '?q=' + encodeURIComponent(query) + '&e=' + '". $model->created_by ."'
                            : options.userListUrl + '&q=' + encodeURIComponent(query) + '&e=' + '". $model->created_by ."';
                            fetch(url)
                                .then(function (response) {
                                    return response.json();
                                })
                                .then(function (json) {
                                    callback(json.items);
                                })
                                .catch(()=>{
                                    callback();
                                });
                        }"),
                ]
            ])
            ->label(Yii::t('app', 'Users'))
            ->hint(Yii::t('app', 'These users will have access to this template.')) ?>
    <?php endif; ?>

    <?= $form->field($model, "promoted")->checkbox(['custom' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
            ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php
$script = <<< JS

    $(document).ready(function(){
        // Handlers
        toggleShared = function (e) {
            if(e.val() === "0" || e.val() === "1") {
                $('.field-template-users').hide();
            } else if (e.val() === "2") {
                $('.field-template-users').show();
            }
        };
        $('#template-shared').find( ".btn" ).on('click', function(e) {
            toggleShared($(this).prev());
        });
        toggleShared($('[name$="Template[shared]"]:checked'));
    });

JS;

$this->registerJs($script, $this::POS_END);
