<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.18.2
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\services;

use Da\TwoFA\Manager;
use Da\TwoFA\Service\TOTPSecretKeyUriGeneratorService;
use Da\User\Service\TwoFactorQrCodeUriGeneratorService as BaseTwoFactorQrCodeUriGeneratorService;
use Yii;

class TwoFactorQrCodeUriGeneratorService extends BaseTwoFactorQrCodeUriGeneratorService
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        $user = $this->user;
        if (!$user->auth_tf_key) {
            $user->auth_tf_key = (new Manager())->generateSecretKey();
            $user->updateAttributes(['auth_tf_key']);
        }

        $totpUri = (new TOTPSecretKeyUriGeneratorService(Yii::$app->settings->get('name', 'app', 'Easy Forms'), $user->email, $user->auth_tf_key))->run();

        return (new QrCodeDataUriGeneratorService($totpUri))->run();
    }
}