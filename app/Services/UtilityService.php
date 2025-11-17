<?php

namespace App\Services;

class UtilityService
{
    public function countWords($str)
    {
        return str_word_count($str);
    }

    public function kilometersToMiles($km)
    {
        if (!is_numeric($km)) {
            return "Input tidak valid";
        }
        return $km * 0.62;
    }

    public function sha256Digest($input)
    {
        return hash('sha256', $input);
    }

    public function md5Digest($input)
    {
        return md5($input);
    }

   public function isEven($number)
    {
        if (!is_numeric($number)) {
            return "Input tidak valid";
        }
        return $number % 2 === 0;
    }
    
    public function reverseString($str)
    {
        return strrev($str);
    }

    public function calculateSquare($number)
    {
        if (!is_numeric($number)) {
            return "Input tidak valid";
        }
        return $number * $number;
    }

    public function isPalindrome($str)
    {
        $clean = strtolower(str_replace(' ', '', $str));
        return $clean === strrev($clean);
    }

   public function getFirstWord($str)
    {
        $trim = trim($str);
        $parts = explode(" ", $trim);
        return $parts[0] ?? "";
    } 
}
