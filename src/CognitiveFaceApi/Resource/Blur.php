<?php

namespace CognitiveFaceApi\Resource;

class Blur
{
    /**
     * @var string
     */
    private $blurLevel;

    /**
     * @var float
     */
    private $value;

    public function __construct($blurLevel, $value)
    {
        $this->blurLevel = $blurLevel;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getBlurLevel()
    {
        return $this->blurLevel;
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
            'blurLevel' => $this->blurLevel,
            'value' => $this->value
        ];
    }
}