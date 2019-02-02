<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Exposure;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExposureFactory
{
    /**
     * @param $exposureData
     * @return Exposure
     * @throws \Exception
     */
    public static function createFromArray($exposureData)
    {
        try {
            $exposureData = self::isValidData($exposureData);
        } catch (\Exception $e) {
            throw $e;
        }

        $exposure = new Exposure(
            $exposureData['exposureLevel'],
            $exposureData['value']
        );

        return $exposure;
    }

    /**
     * @param $exposureData
     * @return array
     */
    private static function isValidData($exposureData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'exposureLevel',
            'value'
        ]);

        return $resolver->resolve($exposureData);
    }
}