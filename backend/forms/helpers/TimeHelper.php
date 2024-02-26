<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\helpers;

use Yii;

/**
 * Class TimeHelper
 * @package app\helpers
 */
class TimeHelper
{

    const PERIOD_HOUR = 'h';
    const PERIOD_DAY = 'd';
    const PERIOD_WEEK = 'w';
    const PERIOD_MONTH = 'm';
    const PERIOD_YEAR = 'y';
    const PERIOD_ALL_TIME = 'a';

    /**
     * Return Time Periods
     *
     * @param array $options
     * @return array
     */
    public static function timePeriods($options = [])
    {
        $timePeriods = [
            self::PERIOD_HOUR => Yii::t('app', 'Hour'),
            self::PERIOD_DAY => Yii::t('app', 'Day'),
            self::PERIOD_WEEK => Yii::t('app', 'Week'),
            self::PERIOD_MONTH => Yii::t('app', 'Month'),
            self::PERIOD_YEAR => Yii::t('app', 'Year'),
            self::PERIOD_ALL_TIME => Yii::t('app', 'All Time'),
        ];

        if (isset($options['all']) && $options['all'] === false) {
            unset($timePeriods['a']);
        }

        return $timePeriods;
    }

    /**
     * Return the name of Time Period by its code
     *
     * @param $code
     * @return mixed
     */
    public static function getPeriodByCode($code)
    {
        $periods = self::timePeriods();
        return $periods[$code];
    }

    /**
     * Return the timestamp of the beginning of a period
     *
     * @param $period
     * @return int
     */
    public static function startTime($period)
    {
        switch ($period) {
            case self::PERIOD_HOUR:
                // Now modulus 3600 will return the seconds after the start of the hour,
                // then just subtract from the current time.
                $ts = strtotime("now");
                return $ts - ($ts % 3600);
                break;
            case self::PERIOD_DAY:
                // The time is set to 00:00:00
                return strtotime('today');
                break;
            case self::PERIOD_WEEK:
                // The code below assumes that the first day of the week is Monday.
                // Period from Monday morning at 00:00:00 to now:
                return mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);
                break;
            case self::PERIOD_MONTH:
                // Period from the first of the current to now:
                return mktime(0, 0, 0, date('m'), 1, date('Y'));
                break;
            case self::PERIOD_YEAR:
                // Period from January 1st to 00:00:00 today:
                return mktime(0, 0, 0, 1, 1, date('Y'));
                break;
            case self::PERIOD_ALL_TIME:
                return 0;
                break;
        }
        return 0;
    }

    /**
     * Automatically convert the date format from PHP DateTime to Moment.js DateTime format as required by the
     * `bootstrap-daterangepicker` plugin.
     *
     * @see http://php.net/manual/en/function.date.php
     * @see http://momentjs.com/docs/#/parsing/string-format/
     *
     * @param string $format the PHP date format string
     *
     * @return string
     */
    public static function convertDateFormat($format)
    {
        $conversions = [
            // meridian lowercase remains same
            // 'a' => 'a',
            // meridian uppercase remains same
            // 'A' => 'A',
            // second (with leading zeros)
            's' => 'ss',
            // minute (with leading zeros)
            'i' => 'mm',
            // hour in 12-hour format (no leading zeros)
            'g' => 'h',
            // hour in 12-hour format (with leading zeros)
            'h' => 'hh',
            // hour in 24-hour format (no leading zeros)
            'G' => 'H',
            // hour in 24-hour format (with leading zeros)
            'H' => 'HH',
            //  day of the week locale
            'w' => 'e',
            //  day of the week ISO
            'W' => 'E',
            // day of month (no leading zero)
            'j' => 'D',
            // day of month (two digit)
            'd' => 'DD',
            // day name short
            'D' => 'DDD',
            // day name long
            'l' => 'DDDD',
            // month of year (no leading zero)
            'n' => 'M',
            // month of year (two digit)
            'm' => 'MM',
            // month name short
            'M' => 'MMM',
            // month name long
            'F' => 'MMMM',
            // year (two digit)
            'y' => 'YY',
            // year (four digit)
            'Y' => 'YYYY',
            // unix timestamp
            'U' => 'X',
        ];
        return strtr($format, $conversions);
    }

    /**
     * Calculate Unix Timestamp of a time period from now
     *
     * @param int $timeLength
     * @param string $timeUnit
     * @since 1.12
     * @return int
     */
    public static function startTimeFromNow($timeLength, $timeUnit)
    {

        if (empty($timeLength) || empty($timeUnit)) {
            throw new \InvalidArgumentException("Time length and Time Unit are required.");
        }

        if (!(filter_var($timeLength, FILTER_VALIDATE_INT) !== FALSE)) {
            throw new \InvalidArgumentException("Time length should be a numeric character.");
        }

        switch ($timeUnit) {
            case self::PERIOD_HOUR:
                return strtotime("-$timeLength hour");
                break;
            case self::PERIOD_DAY:
                return strtotime("-$timeLength day");
                break;
            case self::PERIOD_WEEK:
                return strtotime("-$timeLength week");
                break;
            case self::PERIOD_MONTH:
                return strtotime("-$timeLength month");
                break;
            case self::PERIOD_YEAR:
                return strtotime("-$timeLength year");
                break;
            case self::PERIOD_ALL_TIME:
                return 0;
                break;
        }

        return 0;
    }
}
