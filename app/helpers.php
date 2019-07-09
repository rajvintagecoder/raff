<?php

use function Opis\Closure\serialize;

if (!function_exists('getTimer')) {
    function getTimer($y, $m, $d, $hh, $mm, $ss, $incr)
    {
        echo "<span id='days$incr'></span>";
        echo "<span id='hh$incr'></span>";
        echo "<span id='mm$incr'></span>";
        echo "<span id='ss$incr'></span>";
        ?>
        <script>
            year.push( < ? = $y ? > );
            month.push( < ? = $m ? > );
            day.push( < ? = $d ? > );
            hh.push( < ? = $hh ? > );
            mm.push( < ? = $mm ? > );
            ss.push( < ? = $ss ? > );
            ii++;
        </script>
    <?php
    }
}
if (!function_exists('randomGen')) {
    function randomGen($minTicket, $maxTicket, $ticketQuantity, $ticketPrefix, $productId)
    {
        $ticketsObj = DB::table('tickets')->where('pid', $productId)->get();

        if (count($ticketsObj) == 0) {
            $numbers = range($minTicket, $maxTicket);
            shuffle($numbers);
            $mergedArray =  array_slice($numbers, 0, $ticketQuantity);
            $num  = $mergedArray;
        } else {
            $fetchedArray = unserialize($ticketsObj[0]->tickets);
            foreach ($fetchedArray as $key => $value) {
                $ar[$key] = substr($value, strlen($ticketPrefix));
            }
            $numbers = range($minTicket, $maxTicket);
            $allRanges = array_diff($numbers, $ar);
            shuffle($allRanges);
            $num =  array_slice($allRanges, 0, $ticketQuantity);
            $mergedArray = array_merge($ar, $num);
        }
        foreach ($mergedArray as $key => $value) {
            $numArray[$key] = strtoupper($ticketPrefix) . $value;
        }

        foreach ($num as $key => $value) {
            $ticketArray[$key] = strtoupper($ticketPrefix) . $value;
        }
        $values = array('pid' => $productId, 'uid' => Auth::user()->id, 'tickets' => serialize($numArray));

        if (count($ticketsObj) == 0) {
            DB::table('tickets')->insert($values);
        } else {
            DB::update('update tickets set tickets = ?  where pid = ?', [serialize($numArray), $productId]);
        }

        return serialize($ticketArray);
    }
}
