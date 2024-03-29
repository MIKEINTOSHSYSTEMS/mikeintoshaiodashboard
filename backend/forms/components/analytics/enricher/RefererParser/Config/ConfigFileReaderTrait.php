<?php
namespace app\components\analytics\enricher\RefererParser\Config;

use app\components\analytics\enricher\RefererParser\Exception\InvalidArgumentException;

trait ConfigFileReaderTrait
{
    /** @var string */
    protected $fileName;

    /** @var array */
    protected $referers = [];

    protected function init($fileName)
    {
        if (!file_exists($fileName)) {
            throw InvalidArgumentException::fileNotExists($fileName);
        }

        $this->fileName = $fileName;
        
        $this->read();
    }

    abstract protected function parse($content);

    protected function read()
    {
        if ($this->referers) {
            return;
        }

        $hash = $this->parse(file_get_contents($this->fileName));
 
        foreach ($hash as $medium => $referers) {
            foreach ($referers as $source => $referer) {
                foreach ($referer['domains'] as $domain) {
                    $parameters = isset($referer['parameters']) ? $referer['parameters'] : [];
                    $this->addReferer($domain, $source, $medium, $parameters);
                }
            }
        }
    }
    
    /**
     * Add referer
     * 
     * @param string $domain 
     * @param string $source
     * @param string $medium
     * @param array $parameters
     */
    public function addReferer($domain, $source, $medium, array $parameters = [])
    {
        $this->referers[$domain] = [
            'source' => $source,
            'medium' => $medium,
            'parameters' => $parameters,
        ];
    }

    /**
     * Lookup host
     * 
     * @param string $lookupString
     * @return array|null
     */
    public function lookup($lookupString)
    {
        return isset($this->referers[$lookupString]) ? $this->referers[$lookupString] : null;
    }
}
