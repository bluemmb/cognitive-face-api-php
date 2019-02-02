<?php

namespace CognitiveFaceApi\Resource;

class Exposure
{
    /**
     * @var string
     */
    private $exposureLevel;

    /**
     * @var float
     */
    private $value;

    public function __construct($exposureLevel, $value)
    {
        $this->exposureLevel = $exposureLevel;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getExposureLevel()
    {
        return $this->exposureLevel;
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
            'exposureLevel' => $this->exposureLevel,
            'value' => $this->value
        ];
    }
}