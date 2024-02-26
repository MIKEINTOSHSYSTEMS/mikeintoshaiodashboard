<?php

namespace app\components\validators;

use app\events\SubmissionErrorEvent;
use app\models\FormSubmission;
use Yii;

trait ValidatorTrait
{
    /** @var FormSubmission */
    public $submissionModel;
    /** @var string */
    public $fieldName;

    /**
     * Formats a message using the I18N, or simple strtr if `\Yii::$app` is not available.
     * @param string $message
     * @param array $params
     * @since 2.0.12
     * @return string
     */
    protected function formatMessage($message, $params)
    {
        $event = new SubmissionErrorEvent();
        $event->message = $message;
        $event->params = $params;
        $event->fieldName = $this->fieldName;

        $this->trigger(SubmissionErrorEvent::EVENT_NAME, $event);

        $message = $event->message;
        $params = $event->params;

        if (Yii::$app !== null) {
            return Yii::$app->getI18n()->format($message, $params, Yii::$app->language);
        }

        $placeholders = [];
        foreach ((array) $params as $name => $value) {
            $placeholders['{' . $name . '}'] = $value;
        }

        return ($placeholders === []) ? $message : strtr($message, $placeholders);
    }
}