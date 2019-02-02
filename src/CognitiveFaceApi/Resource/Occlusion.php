<?php

namespace CognitiveFaceApi\Resource;

class Occlusion
{
    /**
     * @var boolean
     */
    private $foreheadOccluded;

    /**
     * @var boolean
     */
    private $eyeOccluded;

    /**
     * @var boolean
     */
    private $mouthOccluded;

    public function __construct($foreheadOccluded, $eyeOccluded, $mouthOccluded)
    {
        $this->foreheadOccluded = $foreheadOccluded;
        $this->eyeOccluded = $eyeOccluded;
        $this->mouthOccluded = $mouthOccluded;
    }

    /**
     * @return boolean
     */
    public function getForeheadOccluded()
    {
        return $this->foreheadOccluded;
    }

    /**
     * @return boolean
     */
    public function getEyeOccluded()
    {
        return $this->eyeOccluded;
    }

    /**
     * @return boolean
     */
    public function getMouthOccluded()
    {
        return $this->mouthOccluded;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'foreheadOccluded' => $this->foreheadOccluded,
            'eyeOccluded' => $this->eyeOccluded,
            'mouthOccluded' => $this->mouthOccluded,
        ];
    }
}