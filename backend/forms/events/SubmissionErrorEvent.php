<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.14
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\events;

use app\models\FormSubmission;
use yii\base\Event;

/**
 * Class SubmissionErrorEvent
 * @package app\events
 */
class SubmissionErrorEvent extends Event
{
    const EVENT_NAME = 'app.form.submission.error';

    public $message;
    public $params;
    public $fieldName;
}