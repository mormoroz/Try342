<?php
function PolindromNumber($StartNumber)
{
    $NewNumber = strrev($StartNumber);
    if (strcmp($StartNumber, $NewNumber) == 0) {
        $result="True";
    } else {
            $result="False";
        }
    return $result;
}
Print_r(PolindromNumber('143ABBA341''));