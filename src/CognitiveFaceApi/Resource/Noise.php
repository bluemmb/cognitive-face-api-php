<?php

namespace CognitiveFaceApi\Resource;

class Noise
{
    /**
     * @var string
     */
    private $noiseLevel;

    /**
     * @var float
     */
    private $value;

    public function __construct($noiseLevel, $value)
    {
        $this->noiseLevel = $noiseLevel;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getNoiseLevel()
    {
        return $this->noiseLevel;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'noiseLevel' => $this->noiseLevel,
            'value' => $this->value
        ];
    }
}