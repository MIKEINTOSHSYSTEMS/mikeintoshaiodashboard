<?php

use Da\User\Widget\AssignmentsWidget;
use yii\bootstrap5\Alert;

/* @var yii\web\View $this */
/* @var app\models\User $user */
/* @var string[] $params */

?>

<?php $this->beginContent('@Da/User/resources/views/admin/update.php', [
    'user' => $user,
    'title' => Yii::t('app', 'Assignments')]) ?>

<?= Alert::widget(
    [
        'options' => [
            'class' => 'alert-info alert-dismissible',
        ],
        'body' => Yii::t('app', 'You can assign multiple roles or permissions to user by using the form below'),
    ]
) ?>

<?= AssignmentsWidget::widget(['userId' => $user->id, 'params' => $params]) ?>

<?php $this->endContent() ?>
