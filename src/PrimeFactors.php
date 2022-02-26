<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{
    public function calculatePrimeFactors(int $numberToFactor): array
    {
        $result = array();

        if($numberToFactor > 1)
        {
            while($numberToFactor > 1){
                $rest = -1;
                $possiblePrimeFactor = 1;
                while ($rest != 0){
                    $possiblePrimeFactor ++;
                    $rest = $numberToFactor%$possiblePrimeFactor;
                }
                $numberToFactor = $numberToFactor/$possiblePrimeFactor;
                $result[] = $possiblePrimeFactor;
            }
        }

        return $result;
    }
}
