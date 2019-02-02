<?php

namespace CognitiveFaceApi\Resource;

class Color
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var float
     */
    private $confidence;

    public function __construct($color, $confidence)
    {
        $this->color = $color;
        $this->confidence = $confidence;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'color' => $this->color,
            'confidence' => $this->confidence
        ];
    }
}