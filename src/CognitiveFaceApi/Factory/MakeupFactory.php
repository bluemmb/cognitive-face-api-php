<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Makeup;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MakeupFactory
{
    /**
     * @param $makeupData
     * @return Makeup
     * @throws \Exception
     */
    public static function createFromArray($makeupData)
    {
        try {
            $makeupData = self::isValidData($makeupData);
        } catch (\Exception $e) {
            throw $e;
        }

        $makeup = new Makeup(
            $makeupData['eyeMakeup'],
            $makeupData['lipMakeup']
        );

        return $makeup;
    }

    /**
     * @param $makeupData
     * @return array
     */
    private static function isValidData($makeupData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'eyeMakeup',
            'lipMakeup'
        ]);

        return $resolver->resolve($makeupData);
    }
}