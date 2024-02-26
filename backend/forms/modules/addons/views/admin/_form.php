<?php

use app\components\widgets\ActiveForm;
use app\helpers\ArrayHelper;
use app\modules\addons\models\Addon;
use baluart\tomselect\TomSelectDropDownList;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model Addon */
/* @var $users array [id => username] of user models */
/* @var $addonUsers array [id => name] of user models with access to addon model */
/* @var $roles array [name => description] of user roles */
/* @var $addonRoles array [name] of user roles with access to addon model */

// Pass php options to javascript
$options = [
    'hasPrettyUrls' => Yii::$app->urlManager->enablePrettyUrl,
    'userListUrl' => Url::to(['/ajax/user-list']),
];
$this->registerJs("var options = ".json_encode($options).";", $this::POS_BEGIN, 'addon-options');

?>

<div class="addon-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'status')->widget(SwitchInput::class) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
        </div>
    </div>

    <?php if (Yii::$app->user->can('changeAddonsOwner', ['model' => $model])): ?>
        <div class="row">
            <div class="col-sm-6">
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
            </div>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->user->can('shareAddons', ['model' => $model])): ?>
        <?= $form->field($model, 'shared')->radioButtonGroup(
            Addon::sharedOptions(),
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
                            var url = '".Url::to(['/ajax/user-list', 'e' => $model->created_by])."&q=' + encodeURIComponent(query);
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
            ->hint(Yii::t('app', 'These users will have access to this add-on.')) ?>

        <?php $model->roles = $addonRoles; // initial value ?>
        <?= $form->field($model, 'roles')
            ->widget(TomSelectDropDownList::class, [
                'items' => $roles,
                'options' => [
                    'create' => false,
                    'multiple' => true,
                    'prompt' => Yii::t('app', "Select roles..."),
                ],
                'clientOptions' => [
                    'create' => false,
                    'multiple' => true,
                    'selectOnTab' => true,
                ],
            ])
            ->label(Yii::t('app', 'Roles'))
            ->hint(Yii::t('app', 'These user roles will have access to this add-on.')) ?>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Update'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS

    $( document ).ready(function(){
        // Handlers
        toggleShared = function (e) {
            if(e.val() === "0" || e.val() === "1") {
                $('.field-addon-users').hide();
                $('.field-addon-roles').hide();
            } else if (e.val() === "2") {
                $('.field-addon-users').show();
                $('.field-addon-roles').show();
            }
        };
        $('#addon-shared').find( ".btn" ).on('click', function(e) {
            toggleShared($(this).prev());
        });
        toggleShared($('[name$="Addon[shared]"]:checked'));
    });

JS;

$this->registerJs($script, $this::POS_END);
