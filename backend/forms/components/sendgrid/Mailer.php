<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.17
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\sendgrid;

use yii\base\InvalidConfigException;
use yii\mail\BaseMailer;
use SendGrid;

/**
 * Class Mailer
 * @package app\components\sendgrid
 */
class Mailer extends BaseMailer
{
    /**
     * @var string message default class name.
     */
    public $messageClass = 'app\components\sendgrid\Message';

    /**
     * @var string key for the sendgrid api
     */
    public $apiKey;

    /**
     * @var array a list of options for the sendgrid api
     */
    public $options = [];

    /**
     * @var SendGrid Send grid mailer instance
     */
    private $_sendGridMailer;

    /**
     * @return SendGrid
     * @throws InvalidConfigException
     */
    public function getSendGridMailer()
    {
        if (!is_object($this->_sendGridMailer)) {
            $this->_sendGridMailer = $this->createSendGridMailer();
        }

        return $this->_sendGridMailer;
    }

    /**
     * @return SendGrid
     * @throws InvalidConfigException
     */
    public function createSendGridMailer()
    {
        if (empty($this->apiKey)) {
            throw new InvalidConfigException("Invalid SendGrid API key");
        }

        return new SendGrid($this->apiKey, $this->options);
    }

    /**
     * @param Message $message
     * @return bool
     * @throws \Exception
     */
    public function sendMessage($message)
    {
        $response = $this->getSendGridMailer()->send($message->getSendGridMail());

        if ($response->statusCode() >= 400) {
            throw new \Exception(sprintf(
                'SendGrid (%d): "%s"',
                $response->statusCode(),
                $response->body()
            ));
        }

        return true;
    }

}