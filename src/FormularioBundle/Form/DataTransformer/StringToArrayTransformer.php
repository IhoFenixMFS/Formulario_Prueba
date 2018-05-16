<?php
namespace FormularioBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class StringToArrayTransformer implements DataTransformerInterface
{
    /**
     * Transforms an array to a string. 
     * POSSIBLE LOSS OF DATA
     *
     * @return string
     */
    public function transform($array)
    {
        $max = sizeof($array);
        $arr='';
        for ($i=0; $i < $max ; $i++) { 
           $arr = implode(' - ', $array[$i];
        }
        return $arr;
    }

    /**
     * Transforms a string to an array.
     *
     * @param  string $string
     *
     * @return array
     */
    public function reverseTransform($string)
    {
        return array($string);
    }
}