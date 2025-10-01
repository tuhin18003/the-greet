<?php

namespace Tuhin18003\Greet;

/**
 * Class Greet
 *
 * A utility class for generating and managing greeting messages.
 * Provides methods to create personalized greetings for users.
 *
 * @version 1.0.4
 * @package the-greet
 */

class Greet
{
    public static function hello($name = null, $show_time_format = '', $return_arr = false)
    {
        $msg = '';
        $hour = (int) date('G'); // 0-23 format
        $inspiration = '';

        // Hourly greetings & inspirations
        $greetings = [
            0  => ['msg' => 'Midnight thoughts',    'inspiration' => 'Even in the quiet hours, dreams take root.'],
            1  => ['msg' => 'Late night',           'inspiration' => 'Rest your mind — tomorrow is full of promise.'],
            2  => ['msg' => 'Deep night',           'inspiration' => 'Peace surrounds you, let it recharge your spirit.'],
            3  => ['msg' => 'Early dawn',           'inspiration' => 'The darkest hour is just before dawn.'],
            4  => ['msg' => 'Breaking dawn',        'inspiration' => 'A fresh start awaits as the sky awakens.'],
            5  => ['msg' => 'Sunrise glow',         'inspiration' => 'Each sunrise is a reminder to begin again.'],
            6  => ['msg' => 'Good morning',         'inspiration' => 'A brand new day, full of new chances.'],
            7  => ['msg' => 'Morning energy',       'inspiration' => 'Fuel your day with positivity and action.'],
            8  => ['msg' => 'Bright morning',       'inspiration' => 'Stay focused, stay strong, stay moving.'],
            9  => ['msg' => 'Morning flow',         'inspiration' => 'Opportunities shine brightest in the morning.'],
            10 => ['msg' => 'Mid-morning',          'inspiration' => 'Keep the momentum — you’re on your way.'],
            11 => ['msg' => 'Almost noon',          'inspiration' => 'Stay sharp — success loves preparation.'],
            12 => ['msg' => 'Good afternoon',       'inspiration' => 'Take a breath, you’re halfway through greatness.'],
            13 => ['msg' => 'After lunch vibes',    'inspiration' => 'Refocus your energy — the day is still yours.'],
            14 => ['msg' => 'Productive afternoon', 'inspiration' => 'Small consistent steps lead to big wins.'],
            15 => ['msg' => 'Mid-afternoon',        'inspiration' => 'You’ve come far, keep pushing forward.'],
            16 => ['msg' => 'Late afternoon',       'inspiration' => 'The best is still ahead of you today.'],
            17 => ['msg' => 'Good evening',         'inspiration' => 'Reflect, breathe, and move with purpose.'],
            18 => ['msg' => 'Golden hour',          'inspiration' => 'Let today’s lessons light your tomorrow.'],
            19 => ['msg' => 'Early night',          'inspiration' => 'Unwind, recharge, and celebrate your progress.'],
            20 => ['msg' => 'Night time',           'inspiration' => 'Every end is a new beginning.'],
            21 => ['msg' => 'Late evening',         'inspiration' => 'Gratitude turns what we have into enough.'],
            22 => ['msg' => 'Almost midnight',      'inspiration' => 'Calm your thoughts, tomorrow is waiting.'],
            23 => ['msg' => 'Good night',           'inspiration' => 'Sleep well — endless possibilities await you.'],
        ];

        // fallback (just in case)
        $default = ['msg' => 'Hello', 'inspiration' => 'Have a wonderful day!'];

        // pick greeting by hour
        $current = $greetings[$hour] ?? $default;

        $msg = $current['msg'];
        $inspiration = $current['inspiration'];

        // --- keep return logic the same as your current function ---
        if (true === $return_arr) {
            return [
                'msg'   => $msg,
                'name'  => $name,
                'quote' => $inspiration,
                'today' => ' Today is ' . date($show_time_format)
            ];
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
