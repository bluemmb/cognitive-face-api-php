<?php

namespace CognitiveFaceApi\Resource;

class Emotion
{
    /**
     * @var float
     */
    private $anger;

    /**
     * @var float
     */
    private $contempt;

    /**
     * @var float
     */
    private $disgust;

    /**
     * @var float
     */
    private $fear;

    /**
     * @var float
     */
    private $happiness;

    /**
     * @var float
     */
    private $neutral;

    /**
     * @var float
     */
    private $sadness;

    /**
     * @var float
     */
    private $surprise;


    public function __construct($anger, $contempt, $disgust, $fear, $happiness, $neutral, $sadness, $surprise)
    {
        $this->anger = $anger;
        $this->contempt = $contempt;
        $this->disgust = $disgust;
        $this->fear = $fear;
        $this->happiness = $happiness;
        $this->neutral = $neutral;
        $this->sadness = $sadness;
        $this->surprise = $surprise;
    }

    /**
     * @return float
     */
    public function getAnger()
    {
        return $this->anger;
    }

    /**
     * @return float
     */
    public function getContempt()
    {
        return $this->contempt;
    }

    /**
     * @return float
     */
    public function getDisgust()
    {
        return $this->disgust;
    }

    /**
     * @return float
     */
    public function getFear()
    {
        return $this->fear;
    }

    /**
     * @return float
     */
    public function getHappiness()
    {
        return $this->happiness;
    }

    /**
     * @return float
     */
    public function getNeutral()
    {
        return $this->neutral;
    }

    /**
     * @return float
     */
    public function getSadness()
    {
        return $this->sadness;
    }

    /**
     * @return float
     */
    public function getSurprise()
    {
        return $this->surprise;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'anger' => $this->anger,
            'contempt' => $this->contempt,
            'disgust' => $this->disgust,
            'fear' => $this->fear,
            'happiness' => $this->happiness,
            'neutral' => $this->neutral,
            'sadness' => $this->sadness,
            'surprise' => $this->surprise
        ];
    }
}