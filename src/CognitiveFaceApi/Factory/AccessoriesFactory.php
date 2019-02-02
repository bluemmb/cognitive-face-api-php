<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Accessory;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccessoriesFactory
{
    /**
     * @param $accessoriesData
     * @return Accessory[]
     * @throws \Exception
     */
    public static function createFromArray($accessoriesData)
    {
        $accessories = [];
        foreach ( $accessoriesData as $accessory ) {
            try {
                $accessoriesData = self::isValidData($accessory);
            } catch (\Exception $e) {
                throw $e;
            }

            $accessories[] = new Accessory($accessoriesData['type'], $accessoriesData['confidence']);
        }
        return $accessories;
    }

    /**
     * @param $accessoriesData
     * @return array
     */
    private static function isValidData($accessoriesData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'type',
            'confidence'
        ]);

        return $resolver->resolve($accessoriesData);
    }
}