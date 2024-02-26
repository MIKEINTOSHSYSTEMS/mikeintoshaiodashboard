<?php

/**
 * @var $permission Da\User\Model\Permission
 * @var $this yii\web\View
 * @var $unassignedItems string[]
 */

$this->title = Yii::t('app', 'Create new permission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/admin/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Permissions'), 'url' => ['/user/permission/index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@Da/User/resources/views/shared/admin_layout.php', [
    'mainTitle' => Yii::t('app', 'Permissions')]) ?>

<div style="padding: 25px 15px">
    <?= $this->render(
        '/permission/_form',
        [
            'model' => $model,
            'unassignedItems' => $unassignedItems,
        ]
    ) ?>
</div>

<?php $this->endContent() ?>
