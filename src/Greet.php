<?php

namespace Tuhin18003\Greet;

/**
 * Class Greet
 *
 * A utility class for generating and managing greeting messages.
 * Provides methods to create personalized greetings for users.
 *
 * @version 1.0.3
 * @package the-greet
 */

class Greet
{
    public static function hello($name = null, $show_time_format = '', $return_arr = false)
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

        if( true ===  $return_arr ){
            return array(
                'msg' => $msg,
                'name' => $name,
                'quote' => $inspiration,
                'today' => ' Today is ' . date($show_time_format)
            );
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
