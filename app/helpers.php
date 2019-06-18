<?php
function randomGen($minTicket, $maxTicket, $ticketQuantity, $ticketPrefix)
{
    $numbers = range($minTicket, $maxTicket);
    shuffle($numbers);
    $mergedArray =  array_slice($numbers, 0, $ticketQuantity);
    foreach ($mergedArray as $key => $value) {
        $numArray[$key] = $ticketPrefix . $value;
    }
    return serialize($numArray);
}
