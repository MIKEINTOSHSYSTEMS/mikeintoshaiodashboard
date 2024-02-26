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

use SendGrid\Mail\Content;
use SendGrid\Mail\From;
use SendGrid\Mail\Mail;
use SendGrid\Mail\MimeType;
use SendGrid\Mail\Substitution;
use yii\base\NotSupportedException;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\mail\BaseMessage;

/**
 * Class Message
 * @package app\components\sendgrid
 */
class Message extends BaseMessage
{
    /**
     * @var Mail
     */
    private $_sendGridMail;

    /**
     * @return Mail
     */
    public function getSendGridMail()
    {
        if ($this->_sendGridMail == null) {
            $this->_sendGridMail = new Mail();
        }

        return $this->_sendGridMail;
    }

    /**
     * @param $templateId
     * @param array $templateSubstitution
     * @return $this
     * @throws \SendGrid\Mail\TypeException
     */
    public function setSendGridSubstitution($templateId, array $templateSubstitution = [])
    {
        $this->setTemplateId($templateId);
        $this->getSendGridMail()->addSubstitutions($this->normalizeSubstitutions($templateSubstitution));

        return $this;
    }

    /**
     * @param array $templateSubstitution
     * @return array
     * @throws \SendGrid\Mail\TypeException
     */
    private function normalizeSubstitutions(array $templateSubstitution = [])
    {
        $substitutions = [];

        foreach ($templateSubstitution as $key => $value) {
            $substitutions[] = new Substitution($key, $value);
        }

        return $substitutions;
    }

    /**
     * @return array|string|null
     */
    public function getFrom()
    {
        /** @var From $from */
        return $this->extractEmail($this->getSendGridMail()->getFrom());
    }

    /**
     * @param array|string $from
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     */
    public function setFrom($from)
    {
        if (is_array($from)) {
            $this->getSendGridMail()->setFrom(key($from), current($from));
        } else {
            $this->getSendGridMail()->setFrom($from);
        }

        return $this;
    }

    /**
     * @return array|string|null
     */
    public function getReplyTo()
    {
        return $this->extractEmail($this->getSendGridMail()->getReplyTo());
    }

    /**
     * @param array|string $replyTo
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     */
    public function setReplyTo($replyTo)
    {
        if (is_string($replyTo)) {
            $this->getSendGridMail()->setReplyTo($replyTo);
        } else {
            $emails = array_keys($replyTo);
            if (!empty($emails[0]) && !empty($replyTo[$emails[0]])) {
                $this->getSendGridMail()->setReplyTo($emails[0], $replyTo[$emails[0]]);
            } elseif (!empty($emails[0])) {
                $this->getSendGridMail()->setReplyTo($emails[0]);
            }
        }

        return $this;
    }

    /**
     * @return array|string
     */
    public function getTo()
    {
        return $this->extractEmails($this->getPersonalizationParams('to'));
    }

    /**
     * @param array|string $to
     * @return $this|Message
     */
    public function setTo($to)
    {
        return $this->setPersonalizationParams('to', $to);
    }

    /**
     * @return array|string
     */
    public function getCc()
    {
        return $this->extractEmails($this->getPersonalizationParams('cc'));
    }

    /**
     * @param array|string $cc
     * @return $this|Message
     */
    public function setCc($cc)
    {
        return $this->setPersonalizationParams('cc', $cc);
    }

    /**
     * @return array|string
     */
    public function getBcc()
    {
        return $this->extractEmails($this->getPersonalizationParams('bcc'));
    }

    /**
     * @param array|string $bcc
     * @return $this|Message
     */
    public function setBcc($bcc)
    {
        return $this->setPersonalizationParams('bcc', $bcc);
    }

    /**
     * @return string|null
     */
    public function getSubject()
    {
        $subject = $this->getSendGridMail()->getGlobalSubject();

        return $subject ? $subject->getSubject() : null;
    }

    /**
     * @param string $subject
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     */
    public function setSubject($subject)
    {
        $this->getSendGridMail()->setSubject($subject);

        return $this;
    }

    /**
     * @param string $text
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     */
    public function setTextBody($text)
    {
        $this->getSendGridMail()->addContent(MimeType::TEXT, $text);

        return $this;
    }

    /**
     * @param string $html
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     */
    public function setHtmlBody($html)
    {
        $this->getSendGridMail()->addContent(MimeType::HTML, $html);

        return $this;
    }

    /**
     * @param string $fileName
     * @param array $options
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     * @throws \yii\base\InvalidConfigException
     */
    public function attach($fileName, array $options = [])
    {
        $this->getSendGridMail()->addAttachment(
            base64_encode(file_get_contents($fileName)),
            isset($options['contentType']) ? $options['contentType'] : FileHelper::getMimeType($fileName),
            isset($options['fileName']) ? $options['fileName'] : basename($fileName)
        );

        return $this;
    }

    /**
     * @param string $content
     * @param array $options
     * @return $this|Message
     * @throws \SendGrid\Mail\TypeException
     */
    public function attachContent($content, array $options = [])
    {
        $this->getSendGridMail()->addAttachment(
            $content,
            isset($options['contentType']) ? $options['contentType'] : null,
            isset($options['fileName']) ? $options['fileName'] : null
        );

        return $this;
    }

    /**
     * @param string $fileName
     * @param array $options
     * @return string|void
     * @throws NotSupportedException
     */
    public function embed($fileName, array $options = [])
    {
        throw new NotSupportedException('No available method for sendgrid!');
    }

    /**
     * @param string $content
     * @param array $options
     * @return string|void
     * @throws NotSupportedException
     */
    public function embedContent($content, array $options = [])
    {
        throw new NotSupportedException('No available method for sendgrid!');
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        return 'UTF-8';
    }

    /**
     * @param string $charset
     * @return $this|Message
     * @throws NotSupportedException
     */
    public function setCharset($charset)
    {
        if (strtoupper($charset) !== 'UTF-8') {
            throw new NotSupportedException('Content and subject must be in UTF-8 charset!');
        }

        return $this;
    }

    /**
     * @return string
     * @throws \SendGrid\Mail\TypeException
     */
    public function toString()
    {
        return Json::encode($this->getSendGridMail()->jsonSerialize());
    }

    /**
     * @param $personalization
     * @return array
     */
    protected function getPersonalizationParams($personalization)
    {
        $params = [];

        foreach ($this->getSendGridMail()->getPersonalizations() as $sendGridPersonalization) {
            $value = $sendGridPersonalization->{sprintf('get%ss', ucfirst($personalization))}();

            if ($value) {
                $params = array_merge($params, is_array($value) ? $value : [$value]);
            }
        }

        return $params;
    }

    /**
     * @param $personalization
     * @param $emails
     * @return $this
     */
    protected function setPersonalizationParams($personalization, $emails)
    {
        $addMethod = 'add' . ucfirst($personalization);

        if (is_array($emails)) {
            foreach ($emails as $email => $name) {
                if (is_string($email)) {
                    $this->getSendGridMail()->{$addMethod}($email, $name);
                } else {
                    $this->getSendGridMail()->{$addMethod}($name);
                }
            }
        } else {
            $this->getSendGridMail()->{$addMethod}($emails);
        }

        return $this;
    }

    /**
     * @param null $type
     * @return Content[]|string|null
     */
    protected function getContents($type = null)
    {
        $contents = $this->getSendGridMail()->getContents();

        if (!$type) {
            return $contents;
        }

        if ($contents && count($contents)) {
            foreach ($contents as $content) {
                /** @var Content $content */
                if ($content->getType() === $type) {
                    return $content->getValue();
                }
            }
        }

        return null;
    }

    /**
     * @param $templateId
     * @return $this
     * @throws \SendGrid\Mail\TypeException
     */
    public function setTemplateId($templateId)
    {
        $this->getSendGridMail()->setTemplateId($templateId);

        return $this;
    }

    /**
     * @return Content[]|string|null
     */
    public function getTextBody()
    {
        return $this->getContents(MimeType::TEXT);
    }

    /**
     * @return Content[]|string|null
     */
    public function getHtmlBody()
    {
        return $this->getContents(MimeType::HTML);
    }

    /**
     * @return string|null
     */
    public function getTemplateId()
    {
        $templateId = $this->getSendGridMail()->getTemplateId();

        return $templateId ? $templateId->getTemplateId() : null;
    }

    /**
     * @param int $index
     * @return Substitution[]
     */
    public function getSubstitutions($index = 0)
    {
        return $this->getSendGridMail()->getSubstitutions($index);
    }

    /**
     * @param $emailAddress
     * @return array|null
     */
    protected function extractEmail($emailAddress)
    {
        if (!$emailAddress) {
            return null;
        }

        if ($emailAddress->getName()) {
            return [$emailAddress->getEmail() => $emailAddress->getName()];
        }

        return $emailAddress->getEmail();
    }

    /**
     * @param $emailAddresses
     * @return array
     */
    protected function extractEmails($emailAddresses)
    {
        $result = [];

        foreach ($emailAddresses as $emailAddress) {
            $result[] = $this->extractEmail($emailAddress);
        }

        return $result;
    }
}