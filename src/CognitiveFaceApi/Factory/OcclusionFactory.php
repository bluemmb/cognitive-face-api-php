<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Occlusion;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OcclusionFactory
{
    /**
     * @param $occlusionData
     * @return Occlusion
     * @throws \Exception
     */
    public static function createFromArray($occlusionData)
    {
        try {
            $occlusionData = self::isValidData($occlusionData);
        } catch (\Exception $e) {
            throw $e;
        }

        $occlusion = new Occlusion(
            $occlusionData['foreheadOccluded'],
            $occlusionData['eyeOccluded'],
            $occlusionData['mouthOccluded']
        );

        return $occlusion;
    }

    /**
     * @param $occlusionData
     * @return array
     */
    private static function isValidData($occlusionData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'foreheadOccluded',
            'eyeOccluded',
            'mouthOccluded'
        ]);

        return $resolver->resolve($occlusionData);
    }
}