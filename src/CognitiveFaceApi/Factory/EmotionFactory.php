<?php

namespace CognitiveFaceApi\Factory;

use CognitiveFaceApi\Resource\Emotion;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmotionFactory
{
    /**
     * @param $emotionData
     * @return Emotion
     * @throws \Exception
     */
    public static function createFromArray($emotionData)
    {
        try {
            $emotionData = self::isValidData($emotionData);
        } catch (\Exception $e) {
            throw $e;
        }

        $emotion = new Emotion(
            $emotionData['anger'],
            $emotionData['contempt'],
            $emotionData['disgust'],
            $emotionData['fear'],
            $emotionData['happiness'],
            $emotionData['neutral'],
            $emotionData['sadness'],
            $emotionData['surprise']
        );

        return $emotion;
    }

    /**
     * @param $emotionData
     * @return array
     */
    private static function isValidData($emotionData)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'anger',
            'contempt',
            'disgust',
            'fear',
            'happiness',
            'neutral',
            'sadness',
            'surprise'
        ]);

        return $resolver->resolve($emotionData);
    }
}