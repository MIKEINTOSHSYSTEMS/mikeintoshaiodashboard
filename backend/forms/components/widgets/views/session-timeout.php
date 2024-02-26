<?php

use yii\web\View;

/**
 * @var string $jsFile
 * @var string $title
 * @var string $message
 * @var string $actionMessage
 * @var string $logoutButton
 * @var string $keepAliveButton
 * @var string $keepAliveUrl
 * @var string $keepAlive
 * @var string $keepAliveInterval
 * @var string $ajaxType
 * @var string $ajaxData
 * @var string $redirUrl
 * @var string $logoutUrl
 * @var string $warnAfter
 * @var string $redirAfter
 * @var string $ignoreUserActivity
 * @var string $countdownSmart
 * @var string $countdownMessage
 * @var string $countdownBar
 */


$this->registerJs("
window.onload = function(e){
    if (typeof $ === 'function') {
        $.getScript('{$jsFile}', function() {
            $.sessionTimeout({
                title: '{$title}',
                message: '{$message}',
                actionMessage: '{$actionMessage}',
                logoutButton: '{$logoutButton}',
                keepAliveButton: '{$keepAliveButton}',
                keepAliveUrl: '{$keepAliveUrl}',
                keepAlive: {$keepAlive},
                keepAliveInterval: {$keepAliveInterval},
                ajaxType: '{$ajaxType}',
                ajaxData: '{$ajaxData}',
                redirUrl: '{$redirUrl}',
                logoutUrl: '{$logoutUrl}',
                warnAfter: {$warnAfter},
                redirAfter: {$redirAfter},
                ignoreUserActivity: {$ignoreUserActivity},
                countdownSmart: {$countdownSmart},
                countdownMessage: '{$countdownMessage}',
                countdownBar: {$countdownBar}
            });
        });
    }
}
", View::POS_END);