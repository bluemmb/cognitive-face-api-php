<?php

namespace CognitiveFaceApi\Resource;

class FaceAttributes
{
    const AGE = 'age';
    const GENDER = 'gender';
    const HEAD_POSE = 'headPose';
    const SMILE = 'smile';
    const FACIAL_HAIR = 'facialHair';
    const GLASSES = 'glasses';
    const EMOTION = 'emotion';
    const HAIR = 'hair';
    const MAKEUP = 'makeup';
    const OCCLUSION = 'occlusion';
    const ACCESSORIES = 'accessories';
    const BLUR = 'blur';
    const EXPOSURE = 'exposure';
    const NOISE = 'noise';

    /**
     * @var float
     */
    private $age;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var HeadPose
     */
    private $headPose;

    /**
     * @var float
     */
    private $smile;

    /**
     * @var FacialHair
     */
    private $facialHair;

    /**
     * @var string
     */
    private $glasses;

    /**
     * @var Emotion
     */
    private $emotion;

    /**
     * @var Hair
     */
    private $hair;

    /**
     * @var Makeup
     */
    private $makeup;

    /**
     * @var Occlusion
     */
    private $occlusion;

    /**
     * @var Accessory[]
     */
    private $accessories;

    /**
     * @var Blur
     */
    private $blur;

    /**
     * @var Exposure
     */
    private $exposure;

    /**
     * @var Noise
     */
    private $noise;

    /**
     * FaceAttributes constructor.
     * @param float $age
     * @param string $gender
     * @param HeadPose $headPose
     * @param string $smile
     * @param FacialHair $facialHair
     * @param string $glasses
     * @param Emotion $emotion
     * @param Hair $hair
     * @param Makeup $makeup
     * @param Occlusion $occlusion
     * @param Accessory[] $accessories
     * @param Blur $blur
     * @param Exposure $exposure
     * @param Noise $noise
     */
    public function __construct(
        $age,
        $gender,
        $headPose,
        $smile,
        $facialHair,
        $glasses,
        $emotion,
        $hair,
        $makeup,
        $occlusion,
        $accessories,
        $blur,
        $exposure,
        $noise
    ) {
        $this->age = $age;
        $this->gender = $gender;
        $this->headPose = $headPose;
        $this->smile = $smile;
        $this->facialHair = $facialHair;
        $this->glasses = $glasses;
        $this->emotion = $emotion;
        $this->hair = $hair;
        $this->makeup = $makeup;
        $this->occlusion = $occlusion;
        $this->accessories = $accessories;
        $this->blur = $blur;
        $this->exposure = $exposure;
        $this->noise = $noise;
    }

    /**
     * @return float
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return HeadPose
     */
    public function getHeadPose()
    {
        return $this->headPose;
    }

    /**
     * @return string
     */
    public function getSmile()
    {
        return $this->smile;
    }

    /**
     * @return FacialHair
     */
    public function getFacialHair()
    {
        return $this->facialHair;
    }

    /**
     * @return string
     */
    public function getGlasses()
    {
        return $this->glasses;
    }

    /**
     * @return Emotion
     */
    public function getEmotion()
    {
        return $this->emotion;
    }

    /**
     * @return Hair
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * @return Makeup
     */
    public function getMakeup()
    {
        return $this->makeup;
    }

    /**
     * @return Occlusion
     */
    public function getOcclusion()
    {
        return $this->occlusion;
    }

    /**
     * @return Accessory[]
     */
    public function getAccessories()
    {
        return $this->accessories;
    }

    /**
     * @return Blur
     */
    public function getBlur()
    {
        return $this->blur;
    }

    /**
     * @return Exposure
     */
    public function getExposure()
    {
        return $this->exposure;
    }

    /**
     * @return Noise
     */
    public function getNoise()
    {
        return $this->noise;
    }

    public function toArray()
    {
        return [
            'age' => $this->age,
            'gender' => $this->gender,
            'headPose' => $this->headPose->toArray(),
            'smile' => $this->smile,
            'facialHair' => $this->facialHair->toArray(),
            'glasses' => $this->glasses,
            'emotion' => $this->emotion->toArray(),
            'hair' => $this->hair->toArray(),
            'makeup' => $this->makeup->toArray(),
            'occlusion' => $this->occlusion->toArray(),
            'accessories' => $this->accessories,
            'blur' => $this->blur->toArray(),
            'exposure' => $this->exposure->toArray(),
            'noise' => $this->noise->toArray(),
        ];
    }

    /**
     * @return array
     */
    public static function getAllowedFaceAttributes()
    {
        return [
            self::AGE,
            self::GENDER,
            self::HEAD_POSE,
            self::SMILE,
            self::FACIAL_HAIR,
            self::GLASSES,
            self::EMOTION,
            self::HAIR,
            self::MAKEUP,
            self::OCCLUSION,
            self::ACCESSORIES,
            self::BLUR,
            self::EXPOSURE,
            self::NOISE,
        ];
    }
}