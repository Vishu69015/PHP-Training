<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings Functions</title>
</head>

<body>
    <!-- 
<?php
$array1 = array("a" => "green", "b" => "brown");
$array2 = array("a" => "GREEN", "B" => "brown");
print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
?> -->

<h1 style="text-align: center;"> Strings </h1>

    <!--******************** PHP addcslashes() Function ********************-->

    <h3>PHP addcslashes() Function</h3>
    <h5>Returns a string with backslashes in front of the specified characters</h5>

    <?php
    $str = addcslashes("Hello World!", "W");
    echo ($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP addslashes() Function ********************-->

    <h3>PHP addslashes() Function</h3>
    <h5>Returns a string with backslashes in front of predefined characters</h5>

    <?php
    $str = addslashes('What does "yolo" mean?');
    echo ($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP bin2hex() Function ********************-->

    <h3>PHP bin2hex() Function</h3>
    <h5>Converts a string of ASCII characters to hexadecimal values</h5>

    <?php
    $str = bin2hex("Hello World!");
    echo ($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP chop() Function ********************-->

    <h3>PHP chop() Function</h3>
    <h5>Removes whitespace or other characters from the right end of a string</h5>

    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo chop($str, "World!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP chr() Function ********************-->

    <h3>PHP chr() Function</h3>
    <h5>Returns a character from a specified ASCII value</h5>

    <?php
    echo chr(52) . "<br>"; // Decimal value
    echo chr(052) . "<br>"; // Octal value
    echo chr(0x52) . "<br>"; // Hex value
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP chunk_split() Function ********************-->

    <h3>PHP chunk_split() Function</h3>
    <h5>Splits a string into a series of smaller parts</h5>

    <?php
    $str = "Hello world!";
    echo chunk_split($str, 1, ".");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP convert_cyr_string() Function ********************-->

    <h3>PHP convert_cyr_string() Function</h3>
    <h5>Converts a string from one Cyrillic character-set to another</h5>

    <?php
    $str = "Hello world! æøå";
    echo $str . "<br>";
    // echo convert_cyr_string($str, 'w', 'a');
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP convert_uudecode() Function ********************-->

    <h3>PHP convert_uudecode() Function</h3>
    <h5>Decodes a uuencoded string</h5>

    <?php
    $str = ",2&5L;&\@=V]R;&0A `";
    echo convert_uudecode($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP convert_uuencode() Function ********************-->

    <h3>PHP convert_uuencode() Function</h3>
    <h5>Encodes a string using the uuencode algorithm</h5>

    <?php
    $str = "Hello world!";
    echo convert_uuencode($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP count_chars() Function ********************-->

    <h3>PHP count_chars() Function</h3>
    <h5>Returns information about characters used in a string</h5>

    <?php
    $str = "Hello World!";
    echo count_chars($str, 3);
    ?>

    <pre>
    Syntax : count_chars(string,mode)

    MODE

    0 - an array with the ASCII value as key and number of occurrences as value
    1 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences greater than zero
    2 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences equal to zero are listed
    3 - a string with all the different characters used
    4 - a string with all the unused characters
    </pre>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP crc32() Function ********************-->

    <h3>PHP crc32() Function</h3>
    <h5>Calculates a 32-bit CRC for a string</h5>

    <?php
    $str = crc32("Hello World!");
    printf("%u\n", $str);
    ?>

    <p>
        The crc32() function calculates a 32-bit CRC (cyclic redundancy checksum) for a string.
    </p>
    <p>
        This function can be used to validate data integrity.
    </p>
    <p>
        Tip: To ensure that you get the correct string representation from the crc32() function, you'll need to use the %u formatter of the printf() or sprintf() function. If the %u formatter is not used, the result may display in incorrect and negative numbers.
    </p>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP crypt() Function ********************-->

    <h3>PHP crypt() Function</h3>
    <h5>One-way string hashing</h5>

    <?php
    // 2 character salt
    if (CRYPT_STD_DES == 1) {
        echo "Standard DES: " . crypt('something', 'st') . "\n<br>";
    } else {
        echo "Standard DES not supported.\n<br>";
    }

    // 4 character salt
    if (CRYPT_EXT_DES == 1) {
        echo "Extended DES: " . crypt('something', '_S4..some') . "\n<br>";
    } else {
        echo "Extended DES not supported.\n<br>";
    }

    // 12 character salt starting with $1$
    if (CRYPT_MD5 == 1) {
        echo "MD5: " . crypt('something', '$1$somethin$') . "\n<br>";
    } else {
        echo "MD5 not supported.\n<br>";
    }

    // Salt starting with $2a$. The two digit cost parameter: 09. 22 characters
    if (CRYPT_BLOWFISH == 1) {
        echo "Blowfish: " . crypt('something', '$2a$09$anexamplestringforsalt$') . "\n<br>";
    } else {
        echo "Blowfish DES not supported.\n<br>";
    }

    // 16 character salt starting with $5$. The default number of rounds is 5000.
    if (CRYPT_SHA256 == 1) {
        echo "SHA-256: " . crypt('something', '$5$rounds=5000$anexamplestringforsalt$') . "\n<br>";
    } else {
        echo "SHA-256 not supported.\n<br>";
    }

    // 16 character salt starting with $6$. The default number of rounds is 5000.
    if (CRYPT_SHA512 == 1) {
        echo "SHA-512: " . crypt('something', '$6$rounds=5000$anexamplestringforsalt$');
    } else {
        echo "SHA-512 not supported.";
    }
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP echo() Function ********************-->

    <h3>PHP echo() Function</h3>
    <h5>Outputs one or more strings</h5>

    <?php
    echo "Hello world!";
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP explode() Function ********************-->

    <h3>PHP explode() Function</h3>
    <h5>Breaks a string into an array</h5>

    <?php
    $str = "Hello world. It's a beautiful day.";
    print_r(explode(" ", $str));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP fprintf() Function ********************-->

    <h3>PHP fprintf() Function</h3>
    <h5>Writes a formatted string to a specified output stream</h5>

    <?php
    $number = 9;
    $str = "Beijing";
    $file = fopen("test.txt", "w");
    echo fprintf($file, "There are %u million bicycles in %s.", $number, $str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP get_html_translation_table() Function ********************-->

    <h3>PHP get_html_translation_table() Function</h3>
    <h5>Returns the translation table used by htmlspecialchars() and htmlentities()</h5>

    <?php
    print_r(get_html_translation_table()); // HTML_SPECIALCHARS is default.
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP hebrev() Function ********************-->

    <h3>PHP hebrev() Function</h3>
    <h5>Converts Hebrew text to visual text</h5>

    <?php
    echo hebrev("á çùåï äúùñâ");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP hebrevc() Function ********************-->

    <h3>PHP hebrevc() Function</h3>
    <h5>Converts Hebrew text to visual text and new lines (\n) into <br></h5>

    <?php
    // echo hebrevc("� ���� �����\n� ���� �����");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP hex2bin() Function ********************-->

    <h3>PHP hex2bin() Function</h3>
    <h5>Converts a string of hexadecimal values to ASCII characters</h5>

    <?php
    echo hex2bin("48656c6c6f20576f726c6421");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP html_entity_decode() Function ********************-->

    <h3>PHP html_entity_decode() Function</h3>
    <h5>Converts HTML entities to characters</h5>

    <?php
    echo "The browser output of the code <br><br>";

    $str = "Albert Einstein said: &#039;E=MC&sup2;&#039;";
    echo html_entity_decode($str, ENT_COMPAT); // Will only convert double quotes
    echo "<br>";
    echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
    echo "<br>";
    echo html_entity_decode($str, ENT_NOQUOTES); // Does not convert any quotes
    ?>

    <pre>
    The HTML output of the code. (View Source):

    Albert Einstein said: &#039;E=MC²&#039;<br>
    Albert Einstein said: 'E=MC²'<br>
    Albert Einstein said: &#039;E=MC²&#039;
    </pre>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP htmlentities() Function ********************-->

    <h3>PHP htmlentities() Function</h3>
    <h5>Converts characters to HTML entities</h5>

    <?php
    echo "The browser output of the code <br><br>";
    $str = "Albert Einstein said: 'E=MC²'";
    echo htmlentities($str, ENT_COMPAT); // Will only convert double quotes
    echo "<br>";
    echo htmlentities($str, ENT_QUOTES); // Converts double and single quotes
    echo "<br>";
    echo htmlentities($str, ENT_NOQUOTES); // Does not convert any quotes
    ?>

    <pre>
    The HTML output of the code (View Source):

    Albert Einstein said: 'E=MC&sup2;'<br>
    Albert Einstein said: &#039;E=MC&sup2;&#039;<br>
    Albert Einstein said: 'E=MC&sup2;'
    </pre>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP htmlspecialchars_decode() Function ********************-->

    <h3>PHP htmlspecialchars_decode() Function</h3>
    <h5>Converts some predefined HTML entities to characters</h5>

    <?php
    $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
    echo htmlspecialchars_decode($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP htmlspecialchars() Function ********************-->

    <h3>PHP htmlspecialchars() Function</h3>
    <h5>Converts some predefined characters to HTML entities</h5>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP implode() Function ********************-->

    <h3>PHP implode() Function</h3>
    <h5>Returns a string from the elements of an array</h5>

    <?php
    $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
    echo implode(" ", $arr);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP join() Function ********************-->

    <h3>PHP join() Function</h3>
    <h5>Alias of implode()</h5>

    <?php
    $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
    echo join(" ", $arr);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP lcfirst() Function ********************-->

    <h3>PHP lcfirst() Function</h3>
    <h5>Converts the first character of a string to lowercase</h5>

    <?php
    echo lcfirst("Hello world!");
    ?>

    <pre>
    Related functions:

    ucfirst() - converts the first character of a string to uppercase
    ucwords() - converts the first character of each word in a string to uppercase
    strtoupper() - converts a string to uppercase
    strtolower() - converts a string to lowercase
    </pre>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP levenshtein() Function ********************-->

    <h3>PHP levenshtein() Function</h3>
    <h5>Returns the Levenshtein distance between two strings</h5>

    <?php
    echo levenshtein("Hello World", "ello World");
    echo "<br>";
    echo levenshtein("Hello World", "ello World", 10, 20, 30);
    ?>

    <p>
        The levenshtein() function returns the Levenshtein distance between two strings.<br><br>

        The Levenshtein distance is the number of characters you have to replace, insert or delete to transform string1 into string2.,<br><br>

        By default, PHP gives each operation (replace, insert, and delete) equal weight. However, you can define the cost of each operation by setting the optional insert, replace, and delete parameters.<br><br>

        Note: The levenshtein() function is not case-sensitive.<br><br>

        Note: The levenshtein() function is faster than the similar_text() function. However, similar_text() will give you a more accurate result with less modifications needed.<br><br>
    </p>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP localeconv() Function ********************-->

    <h3>PHP localeconv() Function</h3>
    <h5>Returns locale numeric and monetary formatting information</h5>

    <?php
    setlocale(LC_ALL, "US");
    $locale_info = localeconv();
    print_r($locale_info);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP ltrim() Function ********************-->

    <h3>PHP ltrim() Function</h3>
    <h5>Removes whitespace or other characters from the left side of a string</h5>

    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo ltrim($str, "Hello");
    ?>

    <?php
    $str = "    Hello World!";
    echo "Without ltrim: " . $str;
    echo "<br>";
    echo "With ltrim: " . ltrim($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP md5() Function ********************-->

    <h3>PHP md5() Function</h3>
    <h5>Calculates the MD5 hash of a string</h5>

    <?php
    $str = "Hello";
    echo md5($str);
    ?>

    <?php
    $str = "Hello";
    echo "The string: " . $str . "<br>";
    echo "TRUE - Raw 16 character binary format: " . md5($str, TRUE) . "<br>";
    echo "FALSE - 32 character hex number: " . md5($str) . "<br>";
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP md5_file() Function ********************-->

    <h3>PHP md5_file() Function</h3>
    <h5>Calculates the MD5 hash of a file</h5>

    <?php
    $filename = "test.txt";
    $md5file = md5_file($filename);
    echo $md5file;
    ?>
    <br><br>
    <?php
    $md5file = file_get_contents("md5file.txt");
    if (md5_file("test.txt") == $md5file) {
        echo "The file is ok.";
    } else {
        echo "The file has been changed.";
    }
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP metaphone() Function ********************-->

    <h3>PHP metaphone() Function</h3>
    <h5>Calculates the metaphone key of a string</h5>

    <?php
    echo metaphone("World");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP money_format() Function ********************-->

    <h3>PHP money_format() Function</h3>
    <h5>Returns a string formatted as a currency string</h5>

    <?php
    $number = 1234.56;
    setlocale(LC_MONETARY, "en_US");
    // echo money_format("The price is %i", $number);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP nl_langinfo() Function ********************-->

    <h3>PHP nl_langinfo() Function</h3>
    <h5>Returns specific local information</h5>

    <pre>
    The nl_langinfo() function returns specific local information.

    Note: This function does not work on Windows platforms.

    Tip: Unlike the localeconv() function, which returns all local formatting information, the nl_langinfo() function returns specific information.
    </pre>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP nl2br() Function ********************-->

    <h3>PHP nl2br() Function</h3>
    <h5>Inserts HTML line breaks in front of each newline in a string</h5>

    <?php
    echo nl2br("One line.\nAnother line.");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP number_format() Function ********************-->

    <h3>PHP number_format() Function</h3>
    <h5>Formats a number with grouped thousands</h5>

    <?php
    echo number_format("1000000") . "<br>";
    echo number_format("1000000", 2) . "<br>";
    echo number_format("1000000", 2, ",", ".");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP ord() Function ********************-->

    <h3>PHP ord() Function</h3>
    <h5>Returns the ASCII value of the first character of a string</h5>

    <?php
    echo ord("h") . "<br>";
    echo ord("hello") . "<br>";
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP parse_str() Function ********************-->

    <h3>PHP parse_str() Function</h3>
    <h5>Parses a query string into variables</h5>


    <?php
    parse_str("name=Peter&age=43", $myArray);
    print_r($myArray);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP print() Function ********************-->

    <h3>PHP print() Function</h3>
    <h5>Outputs one or more strings</h5>

    <?php
    print "Hello world!";
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP printf() Function ********************-->

    <h3>PHP printf() Function</h3>
    <h5>Outputs a formatted string</h5>

    <?php
    $number = 9;
    $str = "Beijing";
    printf("There are %u million bicycles in %s.", $number, $str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP quoted_printable_decode() Function ********************-->

    <h3>PHP quoted_printable_decode() Function</h3>
    <h5>Converts a quoted-printable string to an 8-bit string</h5>

    <?php
    $str = "Hello=0Aworld.";
    echo quoted_printable_decode($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP quoted_printable_encode() Function ********************-->

    <h3>PHP quoted_printable_encode() Function</h3>
    <h5>Converts an 8-bit string to a quoted printable string</h5>

    <?php
    $str = "Hello=0Aworld.";
    echo quoted_printable_encode($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP quotemeta() Function ********************-->

    <h3>PHP quotemeta() Function</h3>
    <h5>Quotes meta characters</h5>

    <?php
    $str = "Hello world. (can you hear me?)";
    echo quotemeta($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP rtrim() Function ********************-->

    <h3>PHP rtrim() Function</h3>
    <h5>Removes whitespace or other characters from the right side of a string</h5>

    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo rtrim($str, "World!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP setlocale() Function ********************-->

    <h3>PHP setlocale() Function</h3>
    <h5>Sets locale information</h5>

    <?php
    echo setlocale(LC_ALL, "US");
    echo "<br>";
    echo setlocale(LC_ALL, NULL);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP sha1() Function ********************-->

    <h3>PHP sha1() Function</h3>
    <h5>Calculates the SHA-1 hash of a string</h5>

    <?php
    $str = "Hello";
    echo sha1($str);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP sha1_file() Function ********************-->

    <h3>PHP sha1_file() Function</h3>
    <h5>Calculates the SHA-1 hash of a file</h5>

    <?php
    $filename = "test.txt";
    $sha1file = sha1_file($filename);
    echo $sha1file;
    ?>

    <?php
    $sha1file = sha1_file("test.txt");
    file_put_contents("sha1file.txt", $sha1file);
    ?>

    <?php
    $sha1file = file_get_contents("sha1file.txt");
    if (sha1_file("test.txt") == $sha1file) {
        echo "The file is ok.";
    } else {
        echo "The file has been changed.";
    }
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP similar_text() Function ********************-->

    <h3>PHP similar_text() Function</h3>
    <h5>Calculates the similarity between two strings</h5>

    <?php
    echo similar_text("Hello World", "Hello Peter");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP soundex() Function ********************-->

    <h3>PHP soundex() Function</h3>
    <h5>Calculates the soundex key of a string</h5>

    <?php
    $str = "Hello";
    echo soundex($str);
    ?>

    <?php
    $str = "Assistance";
    $str2 = "Assistants";

    echo "<br>";
    echo soundex($str);
    echo "<br>";
    echo soundex($str2);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP sprintf() Function ********************-->

    <h3>PHP sprintf() Function</h3>
    <h5>Writes a formatted string to a variable</h5>

    <?php
    $number = 9;
    $str = "Beijing";
    $txt = sprintf("There are %u million bicycles in %s.", $number, $str);
    echo $txt;
    ?>
    <br>

    <?php
    $number = 123;
    $txt = sprintf("%f", $number);
    echo $txt;
    ?>

    <br>

    <?php
    $number = 123;
    $txt = sprintf("With 2 decimals: %1\$.2f
<br>With no decimals: %1\$u", $number);
    echo $txt;
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP sscanf() Function ********************-->

    <h3>PHP sscanf() Function</h3>
    <h5>Parses input from a string according to a format</h5>

    <?php
    $str = "age:30 weight:60kg";
    sscanf($str, "age:%d weight:%dkg", $age, $weight);
    // show types and values
    var_dump($age, $weight);
    ?>

    <br>

    <?php
    $str = "If you divide 4 by 2 you'll get 2";
    $format = sscanf($str, "%s %s %s %d %s %d %s %s %c");
    print_r($format);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_getcsv() Function ********************-->

    <h3>PHP str_getcsv() Function</h3>
    <h5>Parses a CSV string into an array</h5>



    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_ireplace() Function ********************-->

    <h3>PHP str_ireplace() Function</h3>
    <h5>Replaces some characters in a string (case-insensitive)</h5>

    <?php
    echo str_ireplace("WORLD", "Peter", "Hello world!");
    ?>
    <br>
    <?php
    $find = array("HELLO", "WORLD");
    $replace = array("B");
    $arr = array("Hello", "world", "!");
    print_r(str_ireplace($find, $replace, $arr));
    ?>
    <br>
    <?php
    $arr = array("blue", "red", "green", "yellow");
    print_r(str_ireplace("RED", "pink", $arr, $i)); // This function is case-insensitive
    echo "Replacements: $i";
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_pad() Function ********************-->

    <h3>PHP str_pad() Function</h3>
    <h5>Pads a string to a new length</h5>

    <?php
    $str = "Hello World";
    echo str_pad($str, 20, ".");
    ?>
    <br>
    <?php
    $str = "Hello World";
    echo str_pad($str, 20, ".", STR_PAD_LEFT);
    ?>
    <br>
    <?php
    $str = "Hello World";
    echo str_pad($str, 20, ".", STR_PAD_BOTH);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_repeat() Function ********************-->

    <h3>PHP str_repeat() Function</h3>
    <h5>Repeats a string a specified number of times</h5>

    <?php
    echo str_repeat("Wow", 13);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_replace() Function ********************-->

    <h3>PHP str_replace() Function</h3>
    <h5>Replaces some characters in a string (case-sensitive)</h5>

    <?php
    $arr = array("blue", "red", "green", "yellow");
    print_r(str_replace("red", "pink", $arr, $i));
    echo "Replacements: $i";
    ?>
    <br>
    <?php
    $find = array("Hello", "world");
    $replace = array("B");
    $arr = array("Hello", "world", "!");
    print_r(str_replace($find, $replace, $arr));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_rot13() Function ********************-->

    <h3>PHP str_rot13() Function</h3>
    <h5>Performs the ROT13 encoding on a string</h5>

    <?php
    echo str_rot13("Hello World");
    echo "<br>";
    echo str_rot13("Uryyb Jbeyq");
    ?>


    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_shuffle() Function ********************-->

    <h3>PHP str_shuffle() Function</h3>
    <h5>Randomly shuffles all characters in a string</h5>

    <?php
    echo str_shuffle("Hello World");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_split() Function ********************-->

    <h3>PHP str_split() Function</h3>
    <h5>Splits a string into an array</h5>

    <?php
    print_r(str_split("Hello"));
    ?>
    <br>
    <?php
    print_r(str_split("Hello", 3));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP str_word_count() Function ********************-->

    <h3>PHP str_word_count() Function</h3>
    <h5>Count the number of words in a string</h5>

    <?php
    echo str_word_count("Hello world!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strcasecmp() Function ********************-->

    <h3>PHP strcasecmp() Function</h3>
    <h5>Compares two strings (case-insensitive)</h5>

    <?php
    echo strcasecmp("Hello world!", "HELLO WORLD!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strchr() Function ********************-->

    <h3>PHP strchr() Function</h3>
    <h5>Finds the first occurrence of a string inside another string (alias of strstr())</h5>

    <?php
    echo strchr("Hello world!", "world");
    ?>
    <br>
    <?php
    echo strchr("Hello world!", 111);
    ?>
    <br>
    <?php
    echo strchr("Hello world!", "world", true);
    ?>


    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strcmp() Function ********************-->

    <h3>PHP strcmp() Function</h3>
    <h5>Compares two strings (case-sensitive)</h5>

    <?php
    echo strcasecmp("Hello", "HELLO");
    echo "<br>";
    echo strcasecmp("Hello", "hELLo");
    ?>
    <br>
    <?php
    echo strcasecmp("Hello world!", "HELLO WORLD!"); // The two strings are equal
    echo strcasecmp("Hello world!", "HELLO"); // String1 is greater than string2
    echo strcasecmp("Hello world!", "HELLO WORLD! HELLO!"); // String1 is less than string2
    ?>

    <h5>#################################################################################################################################################</h5>


    <!--******************** PHP strcoll() Function ********************-->

    <h3>PHP strcoll() Function</h3>
    <h5>Compares two strings (locale based string comparison)</h5>

    <?php
    setlocale(LC_COLLATE, 'NL');
    echo strcoll("Hello World!", "Hello World!");
    echo "<br>";

    setlocale(LC_COLLATE, 'en_US');
    echo strcoll("Hello World!", "Hello World!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strcspn() Function ********************-->

    <h3>PHP strcspn() Function</h3>
    <h5>Returns the number of characters found in a string before any part of some specified characters are found</h5>

    <?php
    echo strcspn("Hello world!", "w", 0, 10);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strip_tags() Function ********************-->

    <h3>PHP strip_tags() Function</h3>
    <h5>Strips HTML and PHP tags from a string</h5>

    <?php
    echo strip_tags("Hello <b>world!</b>");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP stripcslashes() Function ********************-->

    <h3>PHP stripcslashes() Function</h3>
    <h5>Unquotes a string quoted with addcslashes()</h5>

    <?php
    echo stripcslashes("Hello \World!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP stripslashes() Function ********************-->

    <h3>PHP stripslashes() Function</h3>
    <h5>Unquotes a string quoted with addslashes()</h5>

    <?php
    echo stripslashes("Who\'s Peter Griffin?");
    ?>



    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP stripos() Function ********************-->

    <h3>PHP stripos() Function</h3>
    <h5>Returns the position of the first occurrence of a string inside another string (case-insensitive)</h5>

    <?php
    echo stripos("I love php, I love php too!", "PHP");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP stristr() Function ********************-->

    <h3>PHP stristr() Function</h3>
    <h5>Finds the first occurrence of a string inside another string (case-insensitive)</h5>

    <?php
    echo stristr("Hello world!", "WORLD");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strlen() Function ********************-->

    <h3>PHP strlen() Function</h3>
    <h5>Returns the length of a string</h5>

    <?php
    echo strlen("Hello");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strnatcasecmp() Function ********************-->

    <h3>PHP strnatcasecmp() Function</h3>
    <h5>Compares two strings using a "natural order" algorithm (case-insensitive)</h5>

    <?php
    echo strnatcasecmp("2Hello world!", "10Hello WORLD!");
    echo "<br>";
    echo strnatcasecmp("10Hello world!", "2Hello WORLD!");
    ?>

    <br><br>

    <?php
    $arr1 = $arr2 = array("pic1", "pic2", "pic10", "pic01", "pic100", "pic20", "pic30", "pic200");
    echo "Standard string comparison" . "<br>";
    usort($arr1, "strcmp");

    print_r($arr1);
    echo "<br>";

    echo "Natural order string comparison" . "<br>";
    usort($arr2, "strnatcmp");

    print_r($arr2);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strnatcmp() Function ********************-->

    <h3>PHP strnatcmp() Function</h3>
    <h5>Compares two strings using a "natural order" algorithm (case-sensitive)</h5>

    <?php
    echo strnatcmp("10Hello world!", "1HEllo world!");
    echo "<br>";
    echo strnatcmp("10HELLO world!", "2Hello world!");
    ?>

    <br><br>

    <?php
    $arr1 = $arr2 = array("pic1", "pic2", "pic10", "pic01", "pic100", "pic20", "pic30", "pic200");
    echo "Standard string comparison" . "<br>";
    usort($arr1, "strcmp");

    print_r($arr1);
    echo "<br>";

    echo "Natural order string comparison" . "<br>";
    usort($arr2, "strnatcmp");

    print_r($arr2);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strncasecmp() Function ********************-->

    <h3>PHP strncasecmp() Function</h3>
    <h5>String comparison of the first n characters (case-insensitive)</h5>

    <?php
    echo strncasecmp("Hello world!", "hello earth!", 6);
    ?>

    <br><br>

    <?php
    echo strncasecmp("hello", "Hello", 6);
    echo "<br>";
    echo strncasecmp("Hello", "hELLo", 6);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strncmp() Function ********************-->

    <h3>PHP strncmp() Function</h3>
    <h5>String comparison of the first n characters (case-sensitive)</h5>

    <?php
    echo strncmp("Hello world!", "Hello earth!", 7);
    ?>

    <br><br>

    <?php
    echo strncmp("Hello", "Hello", 6);
    echo "<br>";
    echo strncmp("Hello", "hELLo", 6);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strpbrk() Function ********************-->

    <h3>PHP strpbrk() Function</h3>
    <h5>Searches a string for any of a set of characters</h5>

    <?php
    echo strpbrk("Hello world!", "oe");
    ?>

    <br><br>

    <?php
    echo strpbrk("Hello world!", "W");
    echo "<br>";
    echo strpbrk("Hello world!", "w");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strpos() Function ********************-->

    <h3>PHP strpos() Function</h3>
    <h5>Returns the position of the first occurrence of a string inside another string (case-sensitive)</h5>

    <?php
    echo strpos("I love php, I love php too!", "php");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strrchr() Function ********************-->

    <h3>PHP strrchr() Function</h3>
    <h5>Finds the last occurrence of a string inside another string</h5>

    <?php
    echo strrchr("Hello world!", "world");
    ?>
    <br><br>
    <?php
    echo strrchr("Hello world! What a beautiful day!", "What");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strrev() Function ********************-->

    <h3>PHP strrev() Function</h3>
    <h5>Reverses a string</h5>

    <?php
    echo strrev("Hello World!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strripos() Function ********************-->

    <h3>PHP strripos() Function</h3>
    <h5>Finds the position of the last occurrence of a string inside another string (case-insensitive)</h5>

    <?php
    echo strripos("I love php, I love php too!", "PHP");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strrpos() Function ********************-->

    <h3>PHP strrpos() Function</h3>
    <h5>Finds the position of the last occurrence of a string inside another string (case-sensitive)</h5>

    <?php
    echo strrpos("I love php, I love php too!", "php");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strspn() Function ********************-->

    <h3>PHP strspn() Function</h3>
    <h5>Returns the number of characters found in a string that contains only characters from a specified charlist</h5>

    <?php
    echo strspn("Hello world!", "kHlleo");
    ?>
    <br><br>
    <?php
    echo strspn("abcdefand", "abc");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strstr() Function ********************-->

    <h3>PHP strstr() Function</h3>
    <h5>Finds the first occurrence of a string inside another string (case-sensitive)</h5>

    <?php
    echo strstr("Hello world!", "world");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strtok() Function ********************-->

    <h3>PHP strtok() Function</h3>
    <h5>Splits a string into smaller strings</h5>

    <?php
    $string = "Hello world. Beautiful day today.";
    $token = strtok($string, " ");

    while ($token !== false) {
        echo "$token<br>";
        $token = strtok(" ");
    }
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strtolower() Function ********************-->

    <h3>PHP strtolower() Function</h3>
    <h5>Converts a string to lowercase letters</h5>

    <?php
    echo strtolower("Hello WORLD.");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strtoupper() Function ********************-->

    <h3>PHP strtoupper() Function</h3>
    <h5>Converts a string to uppercase letters</h5>

    <?php
    echo strtoupper("Hello WORLD.");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP strtr() Function ********************-->

    <h3>PHP strtr() Function</h3>
    <h5>Translates certain characters in a string</h5>

    <?php
    echo strtr("Hilla Warld", "ia", "eo");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP substr() Function ********************-->

    <h3>PHP substr() Function</h3>
    <h5>Returns a Part of String</h5>

    <?php
    echo substr("Hello world", 6);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP substr_compare() Function ********************-->

    <h3>PHP substr_compare() Function</h3>
    <h5>Compares two strings from a specified start position (binary safe and optionally case-sensitive)</h5>

    <?php
    echo substr_compare("Hello world", "Hello world", 0);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP substr_count() Function ********************-->

    <h3>PHP substr_replace() Function</h3>
    <h5>Counts the number of times a substring occurs in a string</h5>

    <?php
    echo substr_count("Hello world. The world is nice", "world");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP substr_replace() Function ********************-->

    <h3>PHP substr_replace() Function</h3>
    <h5>Replaces a part of a string with another string</h5>

    <?php
    echo substr_replace("Hello", "world", 0);
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP trim() Function ********************-->

    <h3>PHP trim() Function</h3>
    <h5>Removes whitespace or other characters from both sides of a string</h5>

    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo trim($str, "Hed!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP ucfirst() Function ********************-->

    <h3>PHP ucfirst() Function</h3>
    <h5>Converts the first character of a string to uppercase</h5>

    <?php
    echo ucfirst("hello world!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP ucwords() Function ********************-->

    <h3>PHP ucwords() Function</h3>
    <h5>Converts the first character of each word in a string to uppercase</h5>

    <?php
    echo ucwords("hello world!");
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP vfprintf() Function ********************-->

    <h3>PHP vfprintf() Function</h3>
    <h5>Writes a formatted string to a specified output stream</h5>

    <?php
    $number = 9;
    $str = "Beijing";
    $file = fopen("test.txt", "w");
    echo vfprintf($file, "There are %u million bicycles in %s.", array($number, $str));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP vprintf() Function ********************-->

    <h3>PHP vprintf() Function</h3>
    <h5>Outputs a formatted string</h5>

    <?php
    $number = 9;
    $str = "Beijing";
    vprintf("There are %u million bicycles in %s.", array($number, $str));
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP vsprintf() Function ********************-->

    <h3>PHP vsprintf() Function</h3>
    <h5>Writes a formatted string to a variable</h5>

    <?php
    $number = 9;
    $str = "Beijing";
    $txt = vsprintf("There are %u million bicycles in %s.", array($number, $str));
    echo $txt;
    ?>

    <h5>#################################################################################################################################################</h5>

    <!--******************** PHP wordwrap() Function ********************-->

    <h3>PHP wordwrap() Function</h3>
    <h5>Wraps a string to a given number of characters</h5>

    <?php
    $str = "An example of a long word is: Supercalifragulistic";
    echo wordwrap($str, 15, "<br>\n");
    ?>
    <br><br>
    <?php
    $str = "An example of a long word is: Supercalifragulistic";
    echo wordwrap($str, 15, "<br>\n", TRUE);
    ?>
    <br><br>

    <?php
    $str = "An example of a long word is: Supercalifragulistic";
    echo wordwrap($str, 15);
    ?>


















































</body>

</html>