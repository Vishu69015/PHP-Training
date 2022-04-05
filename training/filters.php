<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters</title>
</head>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 5px;
    }
</style>




<body>

    <h1 style="text-align: center;">PHP Filters</h1>

    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>

    <hr>

    <!----------------------------------------- Sanitize a String ----------------------------------------->

    <h2>Sanitize a String</h2>

    <?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    ?>

    <hr>

    <!----------------------------------------- Validate an an Integer ----------------------------------------->

    <h2>Validate an Integer</h2>

    <?php
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }

    echo "<br><br>";

    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }
    ?>

    <hr>

    <!----------------------------------------- Validate an IP Address ----------------------------------------->

    <h2>Validate an IP Address</h2>

    <?php
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo ("$ip is a valid IP address");
    } else {
        echo ("$ip is not a valid IP address");
    }
    ?>

    <hr>

    <!----------------------------------------- Sanitize and Validate an Email Address ----------------------------------------->

    <h2>Sanitize and Validate an Email Address</h2>

    <?php
    $email = "john.doe@example.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }
    ?>

    <hr>

    <!----------------------------------------- Sanitize and Validate a URL ----------------------------------------->

    <h2>Sanitize and Validate a URL</h2>

    <?php
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo ("$url is a valid URL");
    } else {
        echo ("$url is not a valid URL");
    }
    ?>

    <hr>

    <!----------------------------------------- Validate an Integer Within a Range ----------------------------------------->

    <h2>Validate an Integer Within a Range</h2>

    <?php
    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        echo ("Variable value is not within the legal range");
    } else {
        echo ("Variable value is within the legal range");
    }
    ?>

    <hr>

    <!----------------------------------------- Validate IPv6 Address ----------------------------------------->

    <h2>Validate IPv6 Address</h2>

    <?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo ("$ip is a valid IPv6 address");
    } else {
        echo ("$ip is not a valid IPv6 address");
    }
    ?>

    <hr>

    <!----------------------------------------- Validate URL - Must Contain QueryString ----------------------------------------->

    <h2>Validate URL - Must Contain QueryString</h2>

    <?php
    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo ("$url is a valid URL with a query string");
    } else {
        echo ("$url is not a valid URL with a query string");
    }
    ?>

    <hr>

    <!----------------------------------------- Remove Characters With ASCII Value > 127 ----------------------------------------->

    <h2>Remove Characters With ASCII Value > 127</h2>

    <?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    ?>

    <hr>

    <!----------------------------------------- PHP Filter Functions ----------------------------------------->

    <h2 style="text-align: center;">PHP Filter Functions</h2>

    <!------------------- PHP filter_has_var() Function ------------------->


    <h2>PHP filter_has_var() Function</h2>

    <?php
    if (!filter_has_var(INPUT_GET, "email")) {
        echo ("Email not found");
    } else {
        echo ("Email found");
    }
    ?>

    <!------------------- PHP filter_id() Function ------------------->

    <h2>PHP filter_id() Function</h2>

    <?php
    echo (filter_id("validate_email"));
    ?>

    <!------------------- PHP filter_input() Function ------------------->

    <h2>PHP filter_input() Function</h2>

    <?php
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
        echo ("Email is not valid");
    } else {
        echo ("Email is valid");
    }
    ?>

    <!------------------- PHP filter_input_array() Function ------------------->

    <h2>PHP filter_input_array() Function</h2>

    <?php
    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "flags" => FILTER_FORCE_ARRAY,
            "options" => "ucwords"
        ),
        "age"   => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array("min_range" => 1, "max_range" => 120)
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );
    print_r(filter_input_array(INPUT_POST, $filters));
    ?>

    <!------------------- PHP filter_list() Function ------------------->

    <h2>PHP filter_list() Function</h2>

    <?php
    print_r(filter_list());
    ?>

    <!------------------- PHP filter_var() Function ------------------->

    <h2>PHP filter_var() Function</h2>

    <?php
    $email = "john.doe@example.com";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }
    ?>

    <!------------------- PHP filter_var_array() Function ------------------->

    <h2>PHP filter_var_array() Function</h2>

    <?php
    $data = array(
        'fullname' => 'Peter Griffin',
        'age' => '41',
        'email' => 'peter@example.com',
    );

    $mydata = filter_var_array($data);
    var_dump($mydata);

    ?>


</body>

</html>