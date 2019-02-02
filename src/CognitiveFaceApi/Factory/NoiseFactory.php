<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Noise;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoiseFactory
{
    /**
     * @param $noiseData
     * @return Noise
     * @throws \Exception
     */
    public static function createFromArray($noiseData)
    {
        try {
            $noiseData = self::isValidData($noiseData);
        } catch (\Exception $e) {
            throw $e;
        }

        $noise = new Noise(
            $noiseData['noiseLevel'],
            $noiseData['value']
        );

        return $noise;
    }

    /**
     * @param $noiseData
     * @return array
     */
    private static function isValidData($noiseData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'noiseLevel',
            'value'
        ]);

        return $resolver->resolve($noiseData);
    }
}