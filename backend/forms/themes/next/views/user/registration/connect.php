<?php

use app\components\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\components\widgets\ActiveForm $form
 * @var app\models\User $model
 * @var Da\User\Model\SocialNetworkAccount $account
 */

$this->title = Yii::t('app', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-registration-connect">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="form-wrapper">
                <div class="alert alert-info">
                    <p>
                        <?= Yii::t(
                            'app',
                            'In order to finish your registration, we need you to enter following fields'
                        ) ?>:
                    </p>
                </div>
                <?php $form = ActiveForm::begin(
                    [
                        'id' => $model->formName(),
                    ]
                ); ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'username') ?>

                <?= Html::submitButton(Yii::t('app', 'Continue'), ['class' => 'btn btn-success btn-block']) ?>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="sub">
                <?= Html::a(
                    Yii::t(
                        'app',
                        'If you already registered, sign in and connect this account on settings page'
                    ),
                    ['/user/settings/networks']
                ) ?>.
            </div>
        </div>
    </div>
</div>
