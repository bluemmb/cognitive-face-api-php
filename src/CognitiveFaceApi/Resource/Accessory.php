<?php

namespace CognitiveFaceApi\Resource;

class Accessory
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $confidence;

    public function __construct($type, $confidence)
    {
        $this->type = $type;
        $this->confidence = $confidence;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
            'type' => $this->type,
            'confidence' => $this->confidence
        ];
    }
}