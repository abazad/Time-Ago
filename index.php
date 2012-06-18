<?php
$time = strtotime('2012-06-13 15:25:43');  // Time to convert 

echo '- '.timeStamp($time).' ago';

function timeStamp ($time)
{

    $time = time() - $time; // To get the time since that moment

    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'min',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }




}?>