<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Hair;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HairFactory
{
    /**
     * @param $hairData
     * @return Hair
     * @throws \Exception
     */
    public static function createFromArray($hairData)
    {
        try {
            $hairData = self::isValidData($hairData);
        } catch (\Exception $e) {
            throw $e;
        }

        $hair = new Hair(
            $hairData['bald'],
            $hairData['invisible'],
            HairColorFactory::createFromArray(["hairColor" => $hairData['hairColor']])
        );

        return $hair;
    }

    /**
     * @param $hairData
     * @return array
     */
    private static function isValidData($hairData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'bald',
            'invisible',
            'hairColor'
        ]);

        return $resolver->resolve($hairData);
    }
}