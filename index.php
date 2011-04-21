<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="30">
        <title>Countdown</title>
        <script src="js/jquery-1.5.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="js/jquery.countdown.css" /> 
        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
        <script type="text/javascript"> 
            $(function () {
                $('#weekend').countdown({until: new Date("4/22/2011 17:00"), format: 'yowdHMS'});
                $('#tree').countdown({until: new Date("5/2/2011 8:00"), format: 'yowdHMS'});
                $('#anny').countdown({until: new Date("5/17/2011"), format: 'yowdHMS'});
                $('#closing').countdown({until: new Date("6/30/2011 17:00"), format: 'yowdHMS'});
                $('#rbirthday').countdown({until: new Date("10/14/2011"), format: 'yowdHMS'});
                $('#halloween').countdown({until: new Date("10/31/2011"), format: 'yowdHMS'});
                $('#kbirthday').countdown({until: new Date("11/1/2011"), format: 'yowdHMS'});
                $('#turkey').countdown({until: new Date("11/24/2011"), format: 'yowdHMS'});
                $('#xmas').countdown({until: new Date("12/25/2011"), format: 'yowdHMS'});
            });
        </script> 
        <link href="/main.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>

        <!--[if !IE]>-->
        <link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 480px)" href="iPhone.css" />
        <!--<![endif]-->


    </head>
    <body>
        <div id="page">
            <fieldset>
                <legend>It's The Weekend!</legend>
                <div id="weekend">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Short Sale Decision</legend>
                <div id="tree">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Happy Anniversary</legend>
                <div id="anny">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Closing</legend>
                <div id="closing">&nbsp;</div>
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
                <legend>Turkey Day</legend>
                <div id="turkey">&nbsp;</div>
            </fieldset>
            <fieldset>
                <legend>Christmas</legend>
                <div id="xmas">&nbsp;</div>
            </fieldset>
        </div>
    </body>
</html>