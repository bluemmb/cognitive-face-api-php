<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Blur;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlurFactory
{
    /**
     * @param $blurData
     * @return Blur
     * @throws \Exception
     */
    public static function createFromArray($blurData)
    {
        try {
            $blurData = self::isValidData($blurData);
        } catch (\Exception $e) {
            throw $e;
        }

        $blur = new Blur(
            $blurData['blurLevel'],
            $blurData['value']
        );

        return $blur;
    }

    /**
     * @param $blurData
     * @return array
     */
    private static function isValidData($blurData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'blurLevel',
            'value'
        ]);

        return $resolver->resolve($blurData);
    }
}