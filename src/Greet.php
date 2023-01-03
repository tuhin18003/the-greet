<?php

namespace Tuhin18003\Greet;

class Greet
{
    public static function hello($name = null, $show_time_format = '' )
    {
        $msg = '';
        $time = date('H');
        if ($time < '12') {
            $msg = 'Good morning';
        } elseif ($time >= '12' && $time < '17') {
            $msg = 'Good afternoon';
        } elseif ($time >= '17' && $time < '19') {
            $msg = 'Good evening';
        } elseif ($time >= '19') {
            $msg = 'Good night';
        }

        if ($name != null) {
            $msg .= ' '.$name.'.';
        }

        if ( $show_time_format ) {
            $msg .= ' Today is ' . date( $show_time_format );
        }

        return $msg;
    }
}
