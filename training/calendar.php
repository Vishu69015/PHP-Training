<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Functions</title>
</head>

<body>

    <h1 style="text-align: center;">Calendar Function</h1>



    <!--******************** PHP cal_days_in_month() Function ********************-->

    <h4>PHP cal_days_in_month() Function</h4>

    <?php

    $d = cal_days_in_month(CAL_GREGORIAN, 2, 1965);
    echo "There was $d days in February 1965.<br>";

    $d = cal_days_in_month(CAL_GREGORIAN, 2, 2004);
    echo "There was $d days in February 2004.<br>";

    $d = cal_days_in_month(CAL_GREGORIAN, 1, 1999);
    echo "There was $d days in January 1999.<br>";

    ?>

    <!--******************** PHP cal_from_jd() Function ********************-->

    <h4>PHP cal_from_jd() Function</h4>

    <?php
    $d = unixtojd(mktime(0, 0, 0, 6, 20, 2007));
    print_r(cal_from_jd($d, CAL_GREGORIAN));
    ?>

    <!--******************** PHP cal_info() Function ********************-->

    <h4>PHP cal_info() Function</h4>

    <?php
    print_r(cal_info(0));
    ?>

    <!--******************** PHP cal_to_jd() Function ********************-->

    <h4>PHP cal_to_jd() Function</h4>

    <?php
    $d = cal_to_jd(CAL_GREGORIAN, 6, 20, 2007);
    echo $d;
    ?>

    <!--******************** PHP easter_date() Function ********************-->

    <h4>PHP easter_date() Function</h4>

    <?php
    echo easter_date() . "<br />";
    echo date("M-d-Y", easter_date()) . "<br />"; //Returns the date of current year if we dont mention year
    echo date("M-d-Y", easter_date(1975)) . "<br />";
    echo date("M-d-Y", easter_date(1998)) . "<br />";
    echo date("M-d-Y", easter_date(2007));

    ?>

    <!--******************** PHP easter_days() Function ********************-->

    <h4>PHP easter_days() Function</h4>

    <?php
    echo "Easter Day is " . easter_days() . " days after March 21 this year.<br />";
    echo "Easter Day was " . easter_days(1990) . " days after March 21 in 1990.<br />";
    echo "Easter Day was " . easter_days(1342) . " days after March 21 in 1342.<br />";
    echo "Easter Day will be " . easter_days(2050) . " days after March 21 in 2050.";
    ?>

    <!--******************** PHP frenchtojd() Function ********************-->

    <h4>PHP frenchtojd() Function</h4>



    <?php
    $jd = frenchtojd(3, 3, 14); //Month / Day / Year
    echo $jd . "<br>";
    echo jdtofrench($jd);
    ?>

    <!--******************** PHP gregoriantojd() Function ********************-->

    <h4>PHP gregoriantojd() Function</h4>

    <?php
    $jd = gregoriantojd(6, 20, 2007); //Month / Day / Year
    echo $jd . "<br>";
    echo jdtogregorian($jd);
    ?>

    <!--******************** PHP jddayofweek() Function ********************-->

    <h4>PHP jddayofweek() Function</h4>

    <?php
    $jd = gregoriantojd(1, 13, 1998);
    echo jddayofweek($jd, 1);
    ?>

    <!--******************** PHP jdmonthname() Function ********************-->

    <h4>PHP jdmonthname() Function</h4>

    <?php
    $jd = gregoriantojd(1, 13, 1998);
    echo jdmonthname($jd, 0);
    ?>

    <!--******************** PHP jdtofrench() Function ********************-->

    <h4>PHP jdtofrench() Function</h4>

    <?php
    $jd = frenchtojd(3, 3, 14);
    echo $jd . "<br>";
    echo jdtofrench($jd);
    ?>

    <!--******************** PHP jdtogregorian() Function ********************-->

    <h4>PHP jdtogregorian() Function</h4>

    <?php
    $jd = gregoriantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtogregorian($jd);
    ?>

    <!--******************** PHP jdtojewish() Function ********************-->

    <h4>PHP jdtojewish() Function</h4>

    <?php
    $jd = jdtojewish(1789430);
    echo $jd;
    ?>

    <!--******************** PHP jdtojulian() Function ********************-->

    <h4>PHP jdtojulian() Function</h4>

    <?php
    $jd = juliantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtojulian($jd);
    ?>

    <!--******************** PHP jdtounix() Function ********************-->

    <h4>PHP jdtounix() Function</h4>

    <?php
    $jd = gregoriantojd(10, 3, 1975);
    echo jdtounix($jd);
    ?>

    <!--******************** PHP jewishtojd() Function ********************-->

    <h4>PHP jewishtojd() Function</h4>

    <?php
    $jd = jewishtojd(6, 20, 2007);
    echo $jd;
    echo "<br>";
    echo CAL_JEWISH;
    // echo date("M-d-Y",CAL_JEWISH());
    ?>

    <!--******************** PHP juliantojd() Function ********************-->

    <h4>PHP juliantojd() Function</h4>
    <?php
    $jd = juliantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtojulian($jd);
    ?>

    <!--******************** PHP unixtojd() Function ********************-->

    <h4>PHP unixtojd() Function</h4>

    <?php
    echo unixtojd();
    ?>


</body>

</html>