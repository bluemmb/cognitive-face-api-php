<?php

use PHPUnit\Framework\TestCase;
use CognitiveFaceApi\CognitiveFaceApi;
use CognitiveFaceApi\Resource\FaceAttributes;
use Dotenv\Dotenv;

class UnitTests extends TestCase
{
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $dotenv = Dotenv::create(__DIR__ . "/../");
        $dotenv->load();
    }

    public function getFaceApiKey()
    {
        return getenv("FACE_API_KEY");
    }

    public function testFaceDetect()
    {
        $key = $this->getFaceApiKey();
        $api = new CognitiveFaceApi($key, "francecentral");

        try {
            $face = $api->face->detect(
                "https://unsplash.com/photos/x5WHdQ3NTCg/download?force=true",
                true,
                false,
                [
                    FaceAttributes::AGE,
                    FaceAttributes::GENDER,
                    FaceAttributes::HEAD_POSE,
                    FaceAttributes::SMILE,
                    FaceAttributes::FACIAL_HAIR,
                    FaceAttributes::GLASSES,
                    FaceAttributes::EMOTION,
                    FaceAttributes::HAIR,
                    FaceAttributes::MAKEUP,
                    FaceAttributes::OCCLUSION,
                    FaceAttributes::ACCESSORIES,
                    FaceAttributes::BLUR,
                    FaceAttributes::EXPOSURE,
                    FaceAttributes::NOISE,
                ]
            );
        }
        catch (\Exception $e)
        {
            $this->fail($e);
        }

        $this->assertSame($face->getFaceAttributes()->getEmotion()->getHappiness(), 0.999);
    }
}