<?php
namespace app\components\analytics\enricher\RefererParser\Config;

interface ConfigReaderInterface
{
    /**
     * @param string $lookupString
     * @return array
     */
    public function lookup($lookupString);
}
