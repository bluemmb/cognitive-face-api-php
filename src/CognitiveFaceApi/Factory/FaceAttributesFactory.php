<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\FaceAttributes;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FaceAttributesFactory
{
    /**
     * @param $faceAttributesData
     * @return FaceAttributes
     * @throws \Exception
     */
    public static function createFromArray($faceAttributesData)
    {
        try {
            $faceAttributesData = self::isValidData($faceAttributesData);
        } catch (\Exception $e) {
            throw $e;
        }

        $faceAttributes = new FaceAttributes(
            $faceAttributesData['age'],
            $faceAttributesData['smile'],
            $faceAttributesData['gender'],
            HeadPoseFactory::createFromArray($faceAttributesData['headPose']),
            FacialHairFactory::createFromArray($faceAttributesData['facialHair']),
            $faceAttributesData['glasses'],
            EmotionFactory::createFromArray($faceAttributesData['emotion']),
            HairFactory::createFromArray($faceAttributesData['hair']),
            MakeupFactory::createFromArray($faceAttributesData['makeup']),
            OcclusionFactory::createFromArray($faceAttributesData['occlusion']),
            AccessoriesFactory::createFromArray($faceAttributesData['accessories']),
            BlurFactory::createFromArray($faceAttributesData['blur']),
            ExposureFactory::createFromArray($faceAttributesData['exposure']),
            NoiseFactory::createFromArray($faceAttributesData['noise'])
        );

        return $faceAttributes;
    }

    /**
     * @param $faceAttributesData
     * @return array
     */
    private static function isValidData($faceAttributesData)
    {
        $resolver = new OptionsResolver();

        $resolver->setRequired([
            'age',
            'gender',
            'headPose',
            'smile',
            'facialHair',
            'glasses',
            'emotion',
            'hair',
            'makeup',
            'occlusion',
            'accessories',
            'blur',
            'exposure',
            'noise'
        ]);

        return $resolver->resolve($faceAttributesData);
    }
}