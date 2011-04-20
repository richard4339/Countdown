<?php

require_once('functions.php');

$date = $_GET['date'];

if($iphone)
{
    print strTime(strtotime($date) - time(), TRUE, TRUE, TRUE, FALSE);
}
else
{
    print strTime(strtotime($date) - time());
}


?>
