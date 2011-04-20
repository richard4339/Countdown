<?php

$date = '2009-10-05 08:30:00 CDT';
$iphone = detectiPhone();

function p($a, $b) {
    print "<b>$a</b>: $b<br />";
}
function pr($a) {
    print '<pre>';
    print_r($a);
    print '</pre>';
}

function strTime($input, $days = TRUE, $hours = TRUE, $minutes = TRUE, $seconds = TRUE) {
    $s = $input;
    $d = intval($s/86400);
    $s -= $d*86400;

    $h = intval($s/3600);
    $s -= $h*3600;

    $m = intval($s/60);
    $s -= $m*60;

    if ($d && $days) $str = $d . ' days ';
    if ($h && $hours) $str .= $h . ' hours ';
    if ($m && $minutes) $str .= $m . ' minutes ';
    if ($s && $seconds) $str .= $s . ' seconds';

    return $str;
}

function detectiPhone() {
    $container = $_SERVER['HTTP_USER_AGENT'];
    $useragents = array ('iPhone','iPod');
    $iphone = false;
    foreach ( $useragents as $useragent ) {
        if (eregi($useragent,$container)) {
            $iphone = true;
        }
    }
    return $iphone;
}

?>
