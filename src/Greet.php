<?php

namespace Tuhin18003\Greet;

class Greet
{
    public static function hello($name = null, $show_time_format = '')
    {
        $msg = '';
        $hour = date('H');
        $inspiration = '';

        if ($hour < 12) {
            $msg = 'Good morning';
            $inspiration = 'Rise and shine! A new day brings new opportunities.';
        } elseif ($hour >= 12 && $hour < 17) {
            $msg = 'Good afternoon';
            $inspiration = 'Keep going — the best is yet to come!';
        } elseif ($hour >= 17 && $hour < 19) {
            $msg = 'Good evening';
            $inspiration = 'Take a moment to reflect and breathe. You’ve done great.';
        } else {
            $msg = 'Good night';
            $inspiration = 'Rest well — tomorrow holds endless possibilities.';
        }

        if ($name !== null) {
            $msg .= ' ' . $name;
        }

        $msg .= '. ' . $inspiration;

        if ($show_time_format) {
            $msg .= ' Today is ' . date($show_time_format) . '.';
        }

        return $msg;
    }
}
