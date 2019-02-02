<?php

namespace CognitiveFaceApi\Resource;

class Hair
{
    /**
     * @var float
     */
    private $bald;

    /**
     * @var boolean
     */
    private $invisible;

    /**
     * @var array
     */
    private $hairColor;

    public function __construct($bald, $invisible, $hairColor)
    {
        $this->bald = $bald;
        $this->invisible = $invisible;
        $this->hairColor = $hairColor;
    }

    /**
     * @return float
     */
    public function getBald()
    {
        return $this->bald;
    }

    /**
     * @return boolean
     */
    public function getInvisible()
    {
        return $this->invisible;
    }

    /**
     * @return array
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'bald' => $this->bald,
            'invisible' => $this->invisible,
            'hairColor' => $this->hairColor
        ];
    }
}