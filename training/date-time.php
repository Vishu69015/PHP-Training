<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time</title>

</head>

<body>

    <!-- **************************************** The PHP Date-Time Introduction **************************************** -->

    <h1 style="text-align: center;"> PHP Date/Time Introduction</h1>
    The date/time functions allow you to get the date and time from the server where your PHP script runs. You can then use the date/time functions to format the date and time in several ways.
    <br><br>
    Note: These functions depend on the locale settings of your server. Remember to take daylight saving time and leap years into consideration when working with these functions.

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date() Function **************************************** -->

    <h2>The PHP date() Function</h2>

    <h4>The PHP date() function formats a timestamp to a more readable date and time.</h4>

    <p>
    <h3>Get a Date</h3>

    The required format parameter of the date() function specifies how to format the date (or time).
    <br><br><br>
    Here are some characters that are commonly used for dates:
    <pre>
        d - Represents the day of the month (01 to 31)
        m - Represents a month (01 to 12)
        Y - Represents a year (in four digits)
        l (lowercase 'L') - Represents the day of the week
   </pre>
    Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.
    </p>

    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>

    <p>
    <h3>Get a Time</h3>

    Here are some characters that are commonly used for times:
    <pre>
            H - 24-hour format of an hour (00 to 23
            h - 12-hour format of an hour with leading zeros (01 to 12)
            i - Minutes with leading zeros (00 to 59)
            s - Seconds with leading zeros (00 to 59)
            a - Lowercase Ante meridiem and Post meridiem (am or pm)
    </pre>
    </p>

    <?php
    echo "The time is " . date("h:i:sa");
    ?>

    <p>
    <h3> Get Your Time Zone </h3>
    <br>
    If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.

    So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.
    </p>

    <?php
    date_default_timezone_set("Asia/kolkata");
    echo "The time is " . date("h:i:sa") . "<br>";
    echo "The time is " . date("d-m-Y");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP checkdate() Function **************************************** -->

    <h3>checkdate()</h3>
    <h5>Validates a Gregorian date</h5>

    <?php
    var_dump(checkdate(3, 25, 2022));
    echo "<br>";
    var_dump(checkdate(2, 29, 2003));
    echo "<br>";
    var_dump(checkdate(2, 29, 2004));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_add() Function **************************************** -->

    <h3>date_add()</h3>
    <h5>Adds days, months, years, hours, minutes, and seconds to a date</h5>

    <?php
    $date = date_create("2021-05-25");
    date_add($date, date_interval_create_from_date_string("1 month"));
    echo date_format($date, "d-m-Y");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_create_from_format() Function **************************************** -->

    <h3>date_create_from_format()</h3>
    <h5>Returns a new DateTime object formatted according to a specified format</h5>

    <?php
    $date = date_create_from_format("j-M-Y", "15-Mar-2013");
    echo date_format($date, "j-M-Y");
    ?>

    <pre>

    format	Required. Specifies the format to use. The following characters can be used in the format parameter string:

        d - Day of the month; with leading zeros
        j - Day of the month; without leading zeros
        D - Day of the month (Mon - Sun)
        l - Day of the month (Monday - Sunday)
        S - English suffix for day of the month (st, nd, rd, th)
        F - Monthname (January - December)
        M - Monthname (Jan-Dec)
        m - Month (01-12)
        n - Month (1-12)
        Y - Year (e.g 2013)
        y - Year (e.g 13)
        a and A - am or pm
        g - 12 hour format without leading zeros
        G - 24 hour format without leading zeros
        h - 12 hour format with leading zeros
        H - 24 hour format with leading zeros
        i - Minutes with leading zeros
        s - Seconds with leading zeros
        u - Microseconds (up to six digits)
        e, O, P and T - Timezone identifier
        U - Seconds since Unix Epoch
        (space)
        # - One of the following separation symbol: ;,:,/,.,,,-,(,)
        ? - A random byte
        * - Random bytes until next separator/digit
        ! - Resets all fields to Unix Epoch
        | - Resets all fields to Unix Epoch if they have not been parsed yet
        + - If present, trailing data in the string will cause a warning, not an error

    </pre>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_create() Function **************************************** -->

    <h3>date_create()</h3>
    <h5>Returns a new DateTime object</h5>

    <?php
    $date = date_create("2022-05-25");
    echo date_format($date, "d-M-Y");
    ?>

    <?php
    $date = date_create("2022-05-25 23:40:00");
    echo "<br><br>";
    echo date_format($date, "d-M-Y H:i:s p");
    echo "<br><br>";
    echo "P is the difference between the current timezone and UTC. If you set the timezone to UTC, you'll naturally have a difference of zero.";
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_date_set() Function **************************************** -->

    <h3>date_date_set()</h3>
    <h5>Sets a new date</h5>

    <?php
    $date = date_create();
    date_date_set($date, 2020, 10, 30);
    echo date_format($date, "d - M - Y");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_default_timezone_get() Function **************************************** -->

    <h3>date_default_timezone_get()</h3>
    <h5>Returns the default timezone used by all date/time functions</h5>

    <?php
    echo date_default_timezone_get();
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_default_timezone_set() Function **************************************** -->

    <h3>date_default_timezone_set()</h3>
    <h5>Sets the default timezone used by all date/time functions</h5>

    <?php
    date_default_timezone_set("Asia/kolkata");
    echo date_default_timezone_get();
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_diff() Function **************************************** -->

    <h3>date_diff()</h3>
    <h5>Returns the difference between two dates</h5>

    <?php
    $date1 = date_create("2013-03-15");
    $date2 = date_create("2022-03-25");
    $diff = date_diff($date1, $date2);
    echo $diff->format("%R%a days");

    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_format() Function **************************************** -->

    <h3>date_format()</h3>
    <h5>Returns a date formatted according to a specified format</h5>

    <?php
    $date = date_create("2013-03-15 01:47:09");
    echo date_format($date, "Y/m/d H:i:s");
    ?>

    <pre>
    <h3>Parameter Values</h3>
        
        object	Required. Specifies a DateTime object returned by date_create()
       
        format	Required. Specifies the format for the date. The following characters can be used:
        d - The day of the month (from 01 to 31)
        D - A textual representation of a day (three letters)
        j - The day of the month without leading zeros (1 to 31)
        l (lowercase 'L') - A full textual representation of a day
        N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
        S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
        w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
        z - The day of the year (from 0 through 365)
        W - The ISO-8601 week number of year (weeks starting on Monday)
        F - A full textual representation of a month (January through December)
        m - A numeric representation of a month (from 01 to 12)
        M - A short textual representation of a month (three letters)
        n - A numeric representation of a month, without leading zeros (1 to 12)
        t - The number of days in the given month
        L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
        o - The ISO-8601 year number
        Y - A four digit representation of a year
        y - A two digit representation of a year
        a - Lowercase am or pm
        A - Uppercase AM or PM
        B - Swatch Internet time (000 to 999)
        g - 12-hour format of an hour (1 to 12)
        G - 24-hour format of an hour (0 to 23)
        h - 12-hour format of an hour (01 to 12)
        H - 24-hour format of an hour (00 to 23)
        i - Minutes with leading zeros (00 to 59)
        s - Seconds, with leading zeros (00 to 59)
        u - Microseconds (added in PHP 5.2.2)
        e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
        I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
        O - Difference to Greenwich time (GMT) in hours (Example: +0100)
        P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
        T - Timezone abbreviations (Examples: EST, MDT)
        Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
        c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
        r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
        U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
        
        and the following predefined constants can also be used (available since PHP 5.1.0):

        DATE_ATOM - Atom (example: 2013-04-12T15:52:01+00:00)
        DATE_COOKIE - HTTP Cookies (example: Friday, 12-Apr-13 15:52:01 UTC)
        DATE_ISO8601 - ISO-8601 (example: 2013-04-12T15:52:01+0000)
        DATE_RFC822 - RFC 822 (example: Fri, 12 Apr 13 15:52:01 +0000)
        DATE_RFC850 - RFC 850 (example: Friday, 12-Apr-13 15:52:01 UTC)
        DATE_RFC1036 - RFC 1036 (example: Fri, 12 Apr 13 15:52:01 +0000)
        DATE_RFC1123 - RFC 1123 (example: Fri, 12 Apr 2013 15:52:01 +0000)
        DATE_RFC2822 - RFC 2822 (Fri, 12 Apr 2013 15:52:01 +0000)
        DATE_RFC3339 - Same as DATE_ATOM (since PHP 5.1.3)
        DATE_RSS - RSS (Fri, 12 Aug 2013 15:52:01 +0000)
        DATE_W3C - World Wide Web Consortium (example: 2013-04-12T15:52:01+00:00)
    </pre>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_get_last_errors() Function **************************************** -->

    <h3>date_get_last_errors()</h3>
    <h5>Returns the warnings/errors found in a date string</h5>

    <?php
    date_create("gyuiyiuyui%&&/");
    print_r(date_get_last_errors());
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_interval_create_from_date_string() Function **************************************** -->

    <h3>date_interval_create_from_date_string()</h3>
    <h5>Sets up a DateInterval from the relative parts of the string</h5>

    <?php
    $date = date_create('2019-01-01');
    date_add($date, date_interval_create_from_date_string('1 year 35 days'));
    echo date_format($date, 'Y-m-d');
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_interval_format() Function **************************************** -->

    <h3>date_interval_format()</h3>
    <h5>Formats the interval</h5>

    <?php
    $date1 = date_create("2013-01-01");
    $date2 = date_create("2013-02-10");
    $diff = date_diff($date1, $date2);

    // %a outputs the total number of days
    echo $diff->format("Total number of days: %a.");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_isodate_set() Function **************************************** -->

    <h3>date_isodate_set()</h3>
    <h5>Sets the ISO date</h5>

    <?php
    $date = date_create();
    date_isodate_set($date, 2022, 13, 29);
    echo date_format($date, "Y-m-d");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_modify() Function **************************************** -->

    <h3>date_modify()</h3>
    <h5>Modifies the timestamp</h5>

    <?php
    $date = date_create("2013-05-01");
    date_modify($date, "+15 days");
    echo date_format($date, "Y-m-d");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_offset_get() Function **************************************** -->

    <h3>date_offset_get()</h3>
    <h5>Returns the timezone offset</h5>

    <?php
    $winter = date_create("2013-12-31", timezone_open("Asia/kolkata"));
    $summer = date_create("2013-06-30", timezone_open("Asia/kolkata"));

    echo date_offset_get($winter) . " seconds.<br>";
    echo date_offset_get($summer) . " seconds.";
    ?>
    <BR></BR>
    <?php
    $date = new DateTime();
    //$timeZone = date_default_timezone_get($date);
    $offset = date_offset_get($date);
    print("Offset: " . $offset);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_parse_from_format() Function **************************************** -->

    <h3>date_parse_from_format()</h3>
    <h5>Returns an associative array with detailed info about a specified date, according to a specified format</h5>

    <?php
    print_r(date_parse_from_format("mmddyyyy", "05122013"));
    echo "<br><br>";
    print_r(date_parse_from_format("j.n.Y H:iP", "12.5.2013 14:35+02:00"));

    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_parse() Function **************************************** -->

    <h3>date_parse()</h3>
    <h5>Returns an associative array with detailed info about a specified date</h5>

    <?php
    print_r(date_parse("2013-05-01 12:30:45.5"));
    ?>


    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_sub() Function **************************************** -->

    <h3>date_sub()</h3>
    <h5>Subtracts days, months, years, hours, minutes, and seconds from a date</h5>

    <?php
    $date = date_create("2013-03-15");
    date_sub($date, date_interval_create_from_date_string("40 days"));
    echo date_format($date, "Y-m-d");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_sun_info() Function **************************************** -->

    <h3>date_sun_info()</h3>
    <h5>Returns an array containing info about sunset/sunrise and twilight begin/end, for a specified day and location</h5>

    <?php
    $sun_info = date_sun_info(strtotime("2022-03-26"), 23.036481, 72.511590);
    foreach ($sun_info as $key => $val) {
        echo "$key: " . date("H:i:s", $val) . "<br>";
    }
    ?>

    <?php

    echo "<h3>Date: 1st January, 2013</h3>";
    $sun_info = date_sun_info(strtotime("2013-01-01"), 23.036481, 72.511590);
    foreach ($sun_info as $key => $val) {
        echo "$key: " . date("H:i:s", $val) . "<br>";
    }

    echo "<h3>Date: 1st June, 2013</h3>";
    $sun_info = date_sun_info(strtotime("2013-06-01"), 23.036481, 72.511590);
    foreach ($sun_info as $key => $val) {
        echo "$key: " . date("H:i:s", $val) . "<br>";
    }

    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_sunrise() Function **************************************** -->

    <h3>date_sunrise()</h3>
    <h5>Returns the sunrise time for a specified day and location</h5>

    <?php
            echo ("Date: " . date("D M d Y"));
            echo ("<br>Sunrise time: ");
            echo (date_sunrise(time(), SUNFUNCS_RET_STRING, 23.036481, 72.511590, 90, 1));
            echo ("<br>Sunset time: ");
            echo (date_sunset(time(), SUNFUNCS_RET_STRING, 23.036481, 72.511590, 90, 1));
            ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_sunset() Function **************************************** -->

    <h3>date_sunset()</h3>
    <h5>Returns the sunset time for a specified day and location</h5>

      <?php
            echo ("Date: " . date("D M d Y"));
            echo ("<br>Sunrise time: ");
            echo (date_sunrise(time(), SUNFUNCS_RET_STRING, 23.036481, 72.511590, 90, 1));
            echo ("<br>Sunset time: ");
            echo (date_sunset(time(), SUNFUNCS_RET_STRING, 23.036481, 72.511590, 90, 1));
            ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_time_set() Function **************************************** -->

    <h3>date_time_set()</h3>
    <h5>Sets the time</h5>

    <?php
    $date = date_create("2013-05-01");
    date_time_set($date, 13, 24);
    echo date_format($date, "Y-m-d H:i:s");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_timestamp_get() Function **************************************** -->

    <h3>date_timestamp_get()</h3>
    <h5>Returns the Unix timestamp</h5>

    <?php
    $date = date_create();
    echo date_timestamp_get($date);
    ?>


    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_timestamp_set() Function **************************************** -->

    <h3>date_timestamp_set()</h3>
    <h5>Sets the date and time based on a Unix timestamp</h5>

    <?php
    $date = date_create();
    date_timestamp_set($date, 1371803321);
    echo date_format($date, "U = Y-m-d H:i:s");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_timezone_get() Function **************************************** -->

    <h3>date_timezone_get()</h3>
    <h5>Returns the time zone of the given DateTime object</h5>

    <?php
    $date = date_create(1999-01-27, timezone_open("Asia/kolkata"));
    $tz = date_timezone_get($date);
    echo timezone_name_get($tz);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date_timezone_set() Function **************************************** -->

    <h3>date_timezone_set()</h3>
    <h5>Sets the time zone for the DateTime object</h5>

    <?php
    $date = date_create("2013-05-25", timezone_open("Indian/Kerguelen"));
    echo date_format($date, "Y-m-d H:i:sP") . "<br>";

    date_timezone_set($date, timezone_open("Asia/kolkata"));
    echo date_format($date, "Y-m-d H:i:sP");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP date() Function **************************************** -->

    <h3>date()</h3>
    <h5>Formats a local date and time</h5>

    <?php
    // Prints the day
    echo date("l") . "<br>";

    // Prints the day, date, month, year, time, AM or PM
    echo date("l jS \of F Y h:i:s A");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP getdate() Function **************************************** -->

    <h3>getdate()</h3>
    <h5>Returns date/time information of a timestamp or the current local date/time</h5>

    <?php
    print_r(getdate());
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP gettimeofday() Function **************************************** -->

    <h3>gettimeofday()</h3>
    <h5>Returns the current time</h5>

    <?php
    // Print the array from gettimeofday()
    print_r(gettimeofday());
    echo "<br>";
    // Print the float from gettimeofday()
    echo gettimeofday(true);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP gmdate() Function **************************************** -->

    <h3>gmdate()</h3>
    <h5>Formats a GMT/UTC date and time</h5>

    <?php
    // Prints the day
    echo gmdate("l") . "<br>";

    // Prints the day, date, month, year, time, AM or PM
    echo gmdate("l jS \of F Y h:i:s A");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP gmmktime() Function **************************************** -->

    <h3>gmmktime()</h3>
    <h5>Returns the Unix timestamp for a GMT date</h5>

    <?php
    echo "jan 27, 1999 was on a " . date("l", gmmktime(0, 0, 0, 27, 1, 1999));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP gmstrftime() Function **************************************** -->

    <h3>gmstrftime()</h3>
    <h5>Formats a GMT/UTC date and time according to locale settings</h5>

    <?php
    echo (gmstrftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
    setlocale(LC_ALL, "hu_HU.UTF8");
    echo (gmstrftime("%Y. %B %d. %A. %X %Z"));
    ?>

    <pre>

        <h3>Parameter Values</h3>

        format	Required. Specifies how to return the result:

        %a - abbreviated weekday name
        %A - full weekday name
        %b - abbreviated month name
        %B - full month name
        %c - preferred date and time representation
        %C - century number (the year divided by 100, range 00 to 99)
        %d - day of the month (01 to 31)
        %D - same as %m/%d/%y
        %e - day of the month (1 to 31)
        %g - like %G, but without the century
        %G - 4-digit year corresponding to the ISO week number (see %V).
        %h - same as %b
        %H - hour, using a 24-hour clock (00 to 23)
        %I - hour, using a 12-hour clock (01 to 12)
        %j - day of the year (001 to 366)
        %m - month (01 to 12)
        %M - minute
        %n - newline character
        %p - either am or pm according to the given time value
        %r - time in a.m. and p.m. notation
        %R - time in 24 hour notation
        %S - second
        %t - tab character
        %T - current time, equal to %H:%M:%S
        %u - weekday as a number (1 to 7), Monday=1. Warning: In Sun Solaris Sunday=1
        %U - week number of the current year, starting with the first Sunday as the first day of the first week
        %V - The ISO 8601 week number of the current year (01 to 53), where week 1 is the first week that has at least 4 days in the current year,
             and with Monday as the first day of the week
        %W - week number of the current year, starting with the first Monday as the first day of the first week
        %w - day of the week as a decimal, Sunday=0
        %x - preferred date representation without the time
        %X - preferred time representation without the date
        %y - year without a century (range 00 to 99)
        %Y - year including the century
        %Z or %z - time zone or name or abbreviation
        %% - a literal % character
</pre>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP idate() Function **************************************** -->

    <h3>idate()</h3>
    <h5>Formats a local time/date as integer</h5>

    <?php
    echo idate("B") . "<br>";
    echo idate("d") . "<br>";
    echo idate("h") . "<br>";
    echo idate("H") . "<br>";
    echo idate("i") . "<br>";
    echo idate("I") . "<br>";
    echo idate("L") . "<br>";
    echo idate("m") . "<br>";
    echo idate("s") . "<br>";
    echo idate("t") . "<br>";
    echo idate("U") . "<br>";
    echo idate("w") . "<br>";
    echo idate("W") . "<br>";
    echo idate("y") . "<br>";
    echo idate("Y") . "<br>";
    echo idate("z") . "<br>";
    echo idate("Z") . "<br>";
    ?>

    <pre>
        <h3>Parameter Values</h3>
        format	Required. Specifies how to return the result. One of the following characters is allowed:

        B - Swatch Beat/Internet Time
        d - Day of the month
        h - Hour (12 hour format)
        H - Hour (24 hour format)
        i - Minutes
        I - returns 1 if DST (daylight saving time) is activated, 0 otherwise
        L - returns 1 for leap year, 0 otherwise
        m - Month number
        s - Seconds
        t - Days in current month
        U - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
        w - Day of the week (Sunday=0)
        W - ISO-8601 week number of year (week starts on Monday)
        y - Year (1 or 2 digits)
        Y - Year (4 digits)
        z - Day of the year
        Z - Timezone offset in seconds
</pre>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP localtime() Function **************************************** -->

    <h3>localtime()</h3>
    <h5>Returns the local time</h5>

    <?php
    print_r(localtime());
    echo "<br><br>";
    print_r(localtime(time(), true));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP microtime() Function **************************************** -->

    <h3>microtime()</h3>
    <h5>Returns the current Unix timestamp with microseconds</h5>

    <?php
    echo (microtime());
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP mktime() Function **************************************** -->

    <h3>mktime()</h3>
    <h5>Returns the Unix timestamp for a date</h5>

    <?php
    // Prints: October 3, 1975 was on a Friday
    echo "Oct 3, 1975 was on a " . date("l", mktime(0, 0, 0, 10, 3, 1975));
    ?>

    <p>
    <h3>Syntax</h3><br>
    mktime(hour, minute, second, month, day, year, is_dst)
    </p>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP strftime() Function **************************************** -->

    <h3>strftime()</h3>
    <h5>Formats a local time and/or date according to locale settings</h5>

    <?php
    echo (strftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
    setlocale(LC_ALL, "hu_HU.UTF8");
    echo (strftime("%Y. %B %d. %A. %X %Z"));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP strptime() Function **************************************** -->

    <h3>strptime()</h3>
    <h5>Parses a time/date generated with strftime()</h5>

    <?php
    $format = "%d/%m/%Y %H:%M:%S";
    $strf = strftime($format);
    echo ("$strf");
    print_r(strptime($strf, $format));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP strtotime() Function **************************************** -->

    <h3>strtotime()</h3>
    <h5>Parses an English textual datetime into a Unix timestamp</h5>

    <?php
    echo (strtotime("now") . "<br>");
    echo (strtotime("3 October 2005") . "<br>");
    echo (strtotime("+5 hours") . "<br>");
    echo (strtotime("+1 week") . "<br>");
    echo (strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
    echo (strtotime("next Monday") . "<br>");
    echo (strtotime("last Sunday"));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP time() Function **************************************** -->

    <h3>time()</h3>
    <h5>Returns the current time as a Unix timestamp</h5>

    <?php
    $t = time();
    echo ($t . "<br>");
    echo (date("Y-m-d", $t));
    ?>


    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_abbreviations_list() Function **************************************** -->

    <h3>timezone_abbreviations_list()</h3>
    <h5>Returns an associative array containing dst, offset, and the timezone name</h5>

    <?php
    $tzlist = DateTimeZone::listAbbreviations();
    print_r($tzlist["acst"]);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_identifiers_list() Function **************************************** -->

    <h3>timezone_identifiers_list()</h3>
    <h5>Returns an indexed array with all timezone identifiers</h5>

    <?php
    print_r(timezone_identifiers_list());
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_location_get() Function **************************************** -->

    <h3>timezone_location_get()</h3>
    <h5>Returns location information for a specified timezone</h5>

    <?php
    $tz = timezone_open("Asia/Taipei");
    print_r(timezone_location_get($tz));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_name_from_abbr() Function **************************************** -->

    <h3>timezone_name_from_abbr()</h3>
    <h5>Returns the timezone name from abbreviation</h5>

    <?php
    echo timezone_name_from_abbr("EST") . "<br>";
    echo timezone_name_from_abbr("", 7200, 0);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_name_get() Function **************************************** -->

    <h3>timezone_name_get()</h3>
    <h5>Returns the name of the timezone</h5>

    <?php
    $tz = timezone_open("Asia/Kolkata");
    echo timezone_name_get($tz);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_offset_get() Function **************************************** -->

    <h3>timezone_offset_get()</h3>
    <h5>Returns the timezone offset from GMT</h5>

    <?php
    $tz = timezone_open("Asia/Taipei");
    $dateTimeOslo = date_create("now", timezone_open("Asia/Kolkata"));
    echo timezone_offset_get($tz, $dateTimeOslo);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_open() Function **************************************** -->

    <h3>timezone_open()</h3>
    <h5>Creates new DateTimeZone object</h5>

    <?php
    $tz = timezone_open("Asia/Kolkata");
    echo timezone_name_get($tz);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_transitions_get() Function **************************************** -->

    <h3>timezone_transitions_get()</h3>
    <h5>Returns all transitions for the timezone</h5>

    <?php
    $timezone = new DateTimeZone("Europe/Paris");
    // Procedural style
    print_r(reset(timezone_transitions_get($timezone)));

    echo "<br><br>"

    // Object oriented style
    // print_r(reset($timezone->getTransitions()));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!-- **************************************** The PHP timezone_version_get() Function **************************************** -->

    <h3>timezone_version_get()</h3>
    <h5>Returns the version of the timezonedb</h5>

    <?php
    echo timezone_version_get();
    ?>











</body>

</html>