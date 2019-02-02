<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Color;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HairColorFactory
{
    /**
     * @param $hairColorData
     * @return Color[]
     * @throws \Exception
     */
    public static function createFromArray($hairColorData)
    {
        try {
            $hairColorData = self::isValidData($hairColorData);
        } catch (\Exception $e) {
            throw $e;
        }

        $hairColor = [];
        foreach ( $hairColorData['hairColor'] as $color )
            $hairColor[] = ColorFactory::createFromArray($color);

        return $hairColor;
    }

    /**
     * @param $hairColorData
     * @return array
     */
    private static function isValidData($hairColorData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'hairColor',
        ]);

        $resolver->setAllowedTypes('hairColor', 'array');

        return $resolver->resolve($hairColorData);
    }
}