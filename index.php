<?php

require_once('functions.php');
?>

<?php

function js($id, $date) {
    ?>
new Ajax.PeriodicalUpdater('<?php print $id; ?>', 'count.php?date=<?php print $date; ?>',
{
method: 'get',
frequency: 1,
decay: 2
});
    <?php
}
$array = array();
function add_counter($id, $date, $header, $image1 = FALSE, $image2 = FALSE) {
    global $array;
    array_push($array,
            array(
            'id' => $id,
            'date' => $date,
            'header' => $header,
            'image1' => $image1,
            'image2' => $image2
            )
    );
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Countdown</title>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js'></script>
        <script type="text/javascript">

            document.observe("dom:loaded", function() {
<?php
/*add_counter('tree', '2009-10-05 08:30:00 CDT', 'The Tree');
print '<pre>';
print_r($array);
print '</pre>';*/

switch($_GET['w']) {
    case 'ffxiii':
        js('ffxiii', '2010-03-09 00:00:00 CST');
        break;
    case 'chattanooga':
        js('chattanooga', '2010-02-23 15:20:00 CST');
        break;
    case 'kreturns':
        js('kreturns', '2010-03-05 20:00:00 CST');
        break;
    case 'rbirthday':
        js('rbirthday', '2010-10-14 00:00:00 CDT');
        break;
    case 'kbirthday':
        js('kbirthday', '2010-11-01 00:00:00 CDT');
        break;
    case 'halloween':
        js('halloween', '2010-10-31 00:00:00 CDT');
        break;
    case 'xmas':
        js('xmas', '2010-12-25 00:00:00 CST');
        break;
    default:
        js('ffxiii', '2010-03-09 00:00:00 CST');
        js('chattanooga', '2010-02-23 15:20:00 CST');
        js('kreturns', '2010-03-05 20:00:00 CST');
        js('rbirthday', '2010-10-14 00:00:00 CDT');
        js('kbirthday', '2010-11-01 00:00:00 CDT');
        js('halloween', '2010-10-31 00:00:00 CDT');
        js('xmas', '2010-12-25 00:00:00 CST');
        break;
}
?>

    }
);

        </script>
        <link href="main.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>

        <?php /*<!--[if !IE]>-->
        <link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 480px)" href="iPhone.css" />
        <!--<![endif]--> */ ?>


    </head>
    <body>
        <div id="page">
            <fieldset>
                <legend>Kelly Returns</legend>
                <div id="kreturns">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Final Fantasy XIII</legend>
                <div id="ffxiii">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Richard's Birthday</legend>
                <div id="rbirthday">&nbsp;</div>
            </fieldset>
            <fieldset class="halloween">
                <legend>The Nightmare Before Kelly's Birthday</legend>
                <div class="left">&nbsp;</div>
                <div id="halloween" class="center">&nbsp;</div>
                <div class="right">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Kelly's Birthday</legend>
                <div id="kbirthday">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Christmas</legend>
                <div id="xmas">&nbsp;</div>
            </fieldset>
        </div>
    </body>
</html>