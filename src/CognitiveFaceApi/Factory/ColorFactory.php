<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Color;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColorFactory
{
    /**
     * @param $colorData
     * @return Color
     * @throws \Exception
     */
    public static function createFromArray($colorData)
    {
        try {
            $colorData = self::isValidData($colorData);
        } catch (\Exception $e) {
            throw $e;
        }

        $color = new Color(
            $colorData['color'],
            $colorData['confidence']
        );

        return $color;
    }

    /**
     * @param $colorData
     * @return array
     */
    private static function isValidData($colorData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'color',
            'confidence'
        ]);

        return $resolver->resolve($colorData);
    }
}