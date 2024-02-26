<?php

use kartik\sidenav\SideNav;
use yii\helpers\Url;

/** @var app\models\User $user */
$user = Yii::$app->user->identity;
$userModule = Yii::$app->getModule('user');
$networksVisible = count(Yii::$app->authClientCollection->clients) > 0;

$moduleID = $this->context->module->id;
$controllerID = $this->context->id;
$actionID = $this->context->action->id;

?>

<?php echo SideNav::widget([
    'containerOptions' => [
        'class' => 'mb-3',
    ],
    'type' => SideNav::TYPE_DEFAULT,
    'params' => [
        'id' => 'sidenav-account',
        'moduleId' => $moduleID,
        'controllerId' => $controllerID,
        'actionId' => $actionID,
    ],
    'indItem' => '',
    'heading' => '<i class="fas fa-user-cog me-1"></i> ' . Yii::t('app', 'Manage Account'),
    'iconPrefix' => 'me-1 fas fa-',
    'items' => [
        [
            'url' => Url::to(['/user/settings/profile']),
            'label' => Yii::t('app', 'Profile Settings'),
            'icon' => 'user-circle',
            'active' => ($actionID == 'profile'),
        ],
        [
            'url' => Url::to(['/user/settings/account']),
            'label' => Yii::t('app', 'Account Settings'),
            'icon' => 'user-edit',
            'active' => ($actionID == 'account'),
        ],
        [
            'url' => Url::to(['/user/settings/preferences']),
            'label' => Yii::t('app', 'Preferences'),
            'icon' => 'adjust',
            'active' => ($actionID == 'preferences'),
        ],
        [
            'url' => Url::to(['/user/settings/api']),
            'label' => Yii::t('app', 'API'),
            'icon' => 'key',
            'active' => ($actionID == 'api'),
            'visible' => Yii::$app->settings->get("app.restApiKey") === 1,
        ],
        [
            'url' => Url::to(['/user/settings/privacy']),
            'label' => Yii::t('app', 'Privacy'),
            'icon' => 'user-secret',
            'active' => ($actionID == 'privacy'),
            'visible' => $userModule->enableGdprCompliance
        ],
        [
            'url' => Url::to(['/user/settings/networks']),
            'label' => Yii::t('app', 'Networks'),
            'icon' => 'network-wired',
            'active' => ($actionID == 'networks'),
            'visible' => $userModule->enableGdprCompliance
        ],
    ],
]);
?>
<?php if (Yii::$app->user->can("configureSite")) : ?>
    <?php echo SideNav::widget([
        'containerOptions' => [
            'class' => 'mb-3',
        ],
        'type' => SideNav::TYPE_DEFAULT,
        'params' => [
            'id' => 'sidenav-settings',
            'moduleId' => $moduleID,
            'controllerId' => $controllerID,
            'actionId' => $actionID,
        ],
        'indItem' => '',
        'heading' => '<i class="fas fa-cogs me-1"></i> ' . Yii::t('app', 'Settings & Tools'),
        'iconPrefix' => 'me-1 fas fa-',
        'items' => [
            [
                'url' => Url::to(['/settings/site']),
                'label' => Yii::t('app', 'Site Settings'),
                'icon' => 'wrench',
                'active' => ($actionID == 'site'),
                'visible' => Yii::$app->user->can("configureSite"),
                'class' => 'nav-link d-inline-block ps-4 w-100',
            ],
            [
                'url' => Url::to(['/settings/mail']),
                'label' => Yii::t('app', 'Mail Settings'),
                'icon' => 'inbox-out',
                'active' => ($actionID == 'mail'),
                'visible' => Yii::$app->user->can("configureMailServer"),
            ],
            [
                'url' => Url::to(['/settings/form']),
                'label' => Yii::t('app', 'Form Tools'),
                'icon' => 'check',
                'active' => ($actionID == 'form'),
                'visible' => Yii::$app->user->can("configureSite"),
            ],
            [
                'url' => Url::to(['/settings/import-export']),
                'label' => Yii::t('app', 'Import / Export'),
                'icon' => 'sort-alt',
                'active' => ($actionID == 'import-export'),
                'visible' => Yii::$app->user->can("migrateData"),
            ],
            [
                'url' => Url::to(['/settings/tools']),
                'label' => Yii::t('app', 'System Tools'),
                'icon' => 'tools',
                'active' => ($actionID == 'tools'),
                'visible' => Yii::$app->user->can("accessPerformanceTools"),
            ],
            [
                'url' => Url::to(['/settings/open-source-licenses']),
                'label' => Yii::t('app', 'Open Source Licenses'),
                'icon' => 'file-certificate',
                'active' => ($actionID == 'open-source-licenses'),
                'visible' => Yii::$app->user->can("configureSite"),
            ],
        ],
    ]); ?>
<?php endif; ?>
