<?php

namespace CognitiveFaceApi\Resource;

class Makeup
{
    /**
     * @var boolean
     */
    private $eyeMakeup;

    /**
     * @var boolean
     */
    private $lipMakeup;

    public function __construct($eyeMakeup, $lipMakeup)
    {
        $this->eyeMakeup = $eyeMakeup;
        $this->lipMakeup = $lipMakeup;
    }

    /**
     * @return boolean
     */
    public function getEyeMakeup()
    {
        return $this->eyeMakeup;
    }

    /**
     * @return boolean
     */
    public function getLipMakeup()
    {
        return $this->lipMakeup;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'eyeMakeup' => $this->eyeMakeup,
            'lipMakeup' => $this->lipMakeup
        ];
    }
}