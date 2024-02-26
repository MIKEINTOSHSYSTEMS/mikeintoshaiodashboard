<?php

/**
 * @var $model Da\User\Model\Role
 * @var $this yii\web\View
 * @var $unassignedItems string[]
 */

$this->title = Yii::t('app', 'Create new role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/admin/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles'), 'url' => ['/user/role/index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@Da/User/resources/views/shared/admin_layout.php', [
        'mainTitle' => Yii::t('app', 'Roles')]) ?>

<div style="padding: 25px 15px">
    <?= $this->render(
        '/role/_form',
        [
            'model' => $model,
            'unassignedItems' => $unassignedItems,
        ]
    ) ?>
</div>

<?php $this->endContent() ?>
