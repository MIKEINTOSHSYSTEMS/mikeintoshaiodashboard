<?php
namespace app\components\analytics\enricher\RefererParser\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidArgumentException extends BaseInvalidArgumentException
{
    public static function fileNotExists($fileName)
    {
        return new static(sprintf('File "%s" does not exist', $fileName));
    }
}
