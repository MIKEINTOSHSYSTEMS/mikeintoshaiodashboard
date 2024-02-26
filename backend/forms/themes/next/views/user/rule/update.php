<?php

/**
 * @var $model Da\User\Model\Rule
 * @var $this yii\web\View
 * @var $unassignedItems string[]
 */

$this->title = Yii::t('app', 'Update rule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/admin/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rules'), 'url' => ['/user/rule/index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@Da/User/resources/views/shared/admin_layout.php', [
    'mainTitle' => Yii::t('app', 'Rules')]) ?>

<div style="padding: 25px 15px">
    <?= $this->render(
        '/rule/_form',
        [
            'model' => $model,
        ]
    ) ?>
</div>

<?php $this->endContent() ?>
