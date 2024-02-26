<?php

namespace app\helpers;

use app\models\FormSubmission;
use Yii;
use yii\base\Component;
use yii\base\Event;

/**
 * Class EventHelper
 * @package app\helpers
 */
class EventHelper extends Component
{
    const SUPPORTED_FORM_EVENTS = 'supportedFormEvents';
    const SUPPORTED_FORM_EVENTS_IN_POST_REQUEST = 'supportedFormEventsInPostRequest';

    const EVENT_PAYPAL_PAYMENT_RECEIVED = 'paypalPaymentReceived';
    const EVENT_STRIPE_PAYMENT_RECEIVED = 'stripePaymentReceived';
    const STATUS_PAYPAL_PAYMENT_RECEIVED = 20;
    const STATUS_STRIPE_PAYMENT_RECEIVED = 25;

    public $supportedFormEvents = null;
    public $supportedFormEventsInPostRequest = null;

    /**
     * Get Form event list
     * Used by Form Settings and Add-Ons
     *
     * @param array $options
     *  - addons: Include events triggered by add-ons. Default false.
     * @return array
     */
    public static function supportedFormEvents(array $options = []): ?array
    {
        $options = array_replace([
            'submissions'     => false,
            'addons'     => false,
        ], $options);
        $formEvent = new EventHelper();
        $formEvent->supportedFormEvents = [
            FormSubmission::STATUS_ACCEPTED => Yii::t('app', 'Form is submitted'),
            FormSubmission::STATUS_VERIFIED => Yii::t('app', 'Email is verified by double opt-in'),
        ];
        // Remove this condition to display these events in all the system
        if ($options['submissions']) {
            $formEvent->supportedFormEvents[FormSubmission::EVENT_SUBMISSION_CREATED] = Yii::t('app', 'Submission is created');
            $formEvent->supportedFormEvents[FormSubmission::EVENT_SUBMISSION_UPDATED] = Yii::t('app', 'Submission is updated');
        }
        if ($options['addons']) {
            $formEvent->trigger(self::SUPPORTED_FORM_EVENTS);
        }
        return $formEvent->supportedFormEvents;
    }

    /**
     * Get Form event list
     * When we have a POST request dependency
     * Used by Payment Add-Ons
     *
     * @return array
     */
    public static function supportedFormEventsInPostRequest()
    {
        $formEvent = new EventHelper();
        $formEvent->supportedFormEventsInPostRequest = [
            FormSubmission::STATUS_ACCEPTED => Yii::t('app', 'Form is submitted'),
        ];
        $formEvent->trigger(self::SUPPORTED_FORM_EVENTS_IN_POST_REQUEST);
        return $formEvent->supportedFormEventsInPostRequest;
    }
}