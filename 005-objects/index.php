<?php
declare(strict_types=1);

function calendar($year, $month)
{
    $date = new DateTime("$year-$month");
    $dayInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $echoMonth = $date->format('F') . PHP_EOL;
    $count = 1;
    echo "\033[35;1m $echoMonth";

    for ($i = 0; $i < $dayInMonth; $i++) {

        $echoDay = $date->format('l-d') . PHP_EOL;
        $weekDay = $date->format('l');
        if ($weekDay === 'Saturday' || $weekDay === 'Sunday') {
            $count = 0;
        }
        if (($count) % 3 === 1) {
            echo "\033[32m $echoDay";
        } else {
            echo "\033[31m $echoDay";
        }
        $count++;
        $date->add(new DateInterval('P1D'));
    }
}

calendar(2020, 7);