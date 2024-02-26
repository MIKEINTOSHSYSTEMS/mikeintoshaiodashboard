<?php

use app\components\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var app\components\widgets\ActiveForm $form
 * @var Da\User\Form\LoginForm $model
 * @var string $action
 */

?>

<?php if (Yii::$app->user->isGuest): ?>
    <?php $form = ActiveForm::begin(
        [
            'id' => 'login-widget-form',
            'action' => Url::to(['/user/security/login']),
            'enableAjaxValidation' => true,
            'enableClientValidation' => false,
            'validateOnBlur' => false,
            'validateOnType' => false,
            'validateOnChange' => false,
        ]
    ) ?>

    <?= $form->field($model, 'login')->textInput(['placeholder' => 'Login']) ?>

    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>

    <?= $form->field($model, 'rememberMe')->checkbox() ?>

    <?= Html::submitButton(Yii::t('app', 'Sign in'), ['class' => 'btn btn-primary btn-block']) ?>

    <?php ActiveForm::end(); ?>
<?php else: ?>
    <?= Html::a(
        Yii::t('app', 'Logout'),
        ['/user/security/logout'],
        [
            'class' => 'btn btn-danger btn-block',
            'data-method' => 'post',
        ]
    ) ?>
<?php endif ?>
