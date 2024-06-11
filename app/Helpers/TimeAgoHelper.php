<?php

namespace App\Helpers;

use Carbon\Carbon;

class TimeAgoHelper
{
    public static function timeAgo($start_date, $end_date = null)
    {
        // Pastikan $start_date dan $end_date adalah objek Carbon
        $start_date = $start_date instanceof Carbon ? $start_date : new Carbon($start_date);
        $end_date = $end_date ? ($end_date instanceof Carbon ? $end_date : new Carbon($end_date)) : now();

        $dif = $end_date->timestamp - $start_date->timestamp;

        if ($dif <= 0) {
            return "Time is up";
        }

        // Menghitung jam, menit, dan detik dari $dif
        $hours = floor($dif / 3600);
        $minutes = floor(($dif % 3600) / 60);
        $seconds = $dif % 60;

        // Format menjadi "HH:MM:SS"
        $time_remaining = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

        return $time_remaining;
    }
}

