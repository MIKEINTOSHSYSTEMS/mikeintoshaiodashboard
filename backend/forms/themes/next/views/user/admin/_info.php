<?php
/**
 * @var yii\web\View $this
 * @var app\models\User $user
 */
?>

<?php $this->beginContent('@Da/User/resources/views/admin/update.php', [
    'user' => $user,
    'title' => Yii::t('app', 'Information')]) ?>
<table class="table">
    <tr>
        <td><strong><?= Yii::t('app', 'Registration time') ?>:</strong></td>
        <td><?= Yii::t('app', '{0, date, MMMM dd, YYYY HH:mm}', [$user->created_at]) ?></td>
    </tr>
    <?php if ($user->registration_ip !== null): ?>
        <tr>
            <td><strong><?= Yii::t('app', 'Registration IP') ?>:</strong></td>
            <td><?= $user->registration_ip ?></td>
        </tr>
    <?php endif ?>
    <tr>
        <td><strong><?= Yii::t('app', 'Confirmation status') ?>:</strong></td>
        <?php if ($user->isConfirmed): ?>
            <td class="text-success"><?= Yii::t(
                    'app',
                    'Confirmed at {0, date, MMMM dd, YYYY HH:mm}',
                    [$user->confirmed_at]
                ) ?></td>
        <?php else: ?>
            <td class="text-danger"><?= Yii::t('app', 'Unconfirmed') ?></td>
        <?php endif ?>
    </tr>
    <tr>
        <td><strong><?= Yii::t('app', 'Block status') ?>:</strong></td>
        <?php if ($user->isBlocked): ?>
            <td class="text-danger"><?= Yii::t(
                    'app',
                    'Blocked at {0, date, MMMM dd, YYYY HH:mm}',
                    [$user->blocked_at]
                ) ?>
            </td>
        <?php else: ?>
            <td class="text-success"><?= Yii::t('app', 'Not blocked') ?></td>
        <?php endif ?>
    </tr>
</table>

<?php $this->endContent() ?>
