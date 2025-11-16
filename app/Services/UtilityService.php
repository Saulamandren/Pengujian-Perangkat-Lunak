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

    public function tomorrow()
    {
        return now()->addDay()->format('Y-m-d');
    }

    public function sha256Digest($input)
    {
        return hash('sha256', $input);
    }

    public function md5Digest($input)
    {
        return md5($input);
    }
}
