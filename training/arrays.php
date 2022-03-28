<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>




<body>
    <h1 style="text-align :center">Types Of Array</h1>

    <!--******************** Index Array ********************-->

    <h4>Index Array</h4>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    ?>

    <!--******************** Associative Array ********************-->

    <h4>Associative Arrays</h4>
    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    echo "Peter is " . $age['Peter'] . " years old.<br>";
    echo "Ben is " . $age['Ben'] . " years old.<br>";
    echo "Joe is " . $age['Joe'] . " years old.<br>";

    echo "<h4>Accessing array with the for loop</h4>";

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

    <!--******************** Multidimensional Array ********************-->

    <h4>Multidimensional Arrays</h4>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );


    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br> <br>";

    echo "<h4>Accessing array with the for loop</h4>";

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row </b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    ?>

    <!--******************** array_change_key_case() Function ********************-->

    <h4>PHP array_change_key_case() Function</h4>

    <?php

    echo "Change all keys in an array to uppercase: <br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print_r(array_change_key_case($age, CASE_UPPER));


    echo "<br><br>Change all keys in an array to lowercase: <br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print_r(array_change_key_case($age, CASE_LOWER));

    ?>

    <!--******************** PHP array_chunk() Function ********************-->

    <h4>PHP array_chunk() Function</h4>

    <?php
    $cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
    print_r(array_chunk($cars, 2));
    ?>
    <br> <br>
    <?php
    $cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
    print_r(array_chunk($cars, 2, true));
    ?>

    <!--******************** PHP array_column() Function ********************-->

    <h4>PHP array_column() Function</h4>

    <?php
    // An array that represents a possible record set returned from a database
    $a = array(
        array(
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );

    $last_names = array_column($a, 'last_name');
    print_r($last_names);
    ?>

    <!--******************** PHP array_combine() Function ********************-->

    <h4>PHP array_combine() Function</h4>

    <?php
    $fname = array("Peter", "Ben", "Joe");
    $age = array("35", "37", "43");

    $c = array_combine($fname, $age);
    print_r($c);
    ?>

    <!--******************** PHP array_count_values() Function ********************-->

    <h4>PHP array_count_values() Function</h4>

    <?php
    $a = array("A", "Cat", "Dog", "A", "Dog");
    print_r(array_count_values($a));
    ?>

    <!--******************** PHP array_diff() Function ********************-->

    <h4>PHP array_diff() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue");

    $result = array_diff($a1, $a2);
    print_r($result);
    ?>

    <!--******************** PHP array_diff_assoc() Function ********************-->

    <h4>PHP array_diff_assoc() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "c" => "blue");

    $result = array_diff_assoc($a1, $a2);
    print_r($result);
    ?>

    <!--******************** PHP array_diff_key() Function ********************-->

    <h4>PHP array_diff_key() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "c" => "blue", "d" => "pink");

    $result = array_diff_key($a1, $a2);
    print_r($result);
    ?>

    <!--******************** PHP array_diff_uassoc() Function ********************-->

    <h4>PHP array_diff_uassoc() Function</h4>

    <?php
    function myfunction($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("d" => "red", "b" => "green", "e" => "blue");

    $result = array_diff_uassoc($a1, $a2, "myfunction");
    print_r($result);
    ?>

    <!--******************** PHP array_diff_ukey() Function ********************-->

    <h4>PHP array_diff_ukey() Function</h4>

    <?php
    function myfunction1($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_diff_ukey($a1, $a2, "myfunction1");
    print_r($result);
    ?>

    <!--******************** PHP array_fill() Function ********************-->

    <h4>PHP array_fill() Function</h4>

    <?php
    $a1 = array_fill(3, 4, "blue");
    $b1 = array_fill(0, 1, "red");
    print_r($a1);
    echo "------------------------index=3, Numbers to fill=4";
    echo "<br>";
    print_r($b1);
    echo "------------------------index=0, Numbers to fill=1";
    ?>

    <!--******************** PHP array_fill_keys() Function ********************-->

    <h4>PHP array_fill_keys() Function</h4>

    <?php
    $keys = array("a", "b", "c", "d");
    $a1 = array_fill_keys($keys, "blue");
    print_r($a1);
    ?>

    <!--******************** PHP array_filter() Function ********************-->

    <h4>PHP array_filter() Function</h4>

    <?php
    function test_odd($var)
    {
        return ($var & 1);
    }

    $a1 = array(1, 3, 2, 3, 4);
    print_r(array_filter($a1, "test_odd"));
    ?>

    <!--******************** PHP array_flip() Function ********************-->

    <h4>PHP array_flip() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $result = array_flip($a1);
    print_r($result);
    ?>

    <!--******************** PHP array_intersect() Function ********************-->

    <h4>PHP array_intersect() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue");

    $result = array_intersect($a1, $a2);
    print_r($result);
    ?>

    <!--******************** PHP array_intersect_assoc() Function ********************-->

    <h4>PHP array_intersect_assoc() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "c" => "blue");

    $result = array_intersect_assoc($a1, $a2);
    print_r($result);
    ?>

    <!--******************** PHP array_intersect_key() Function ********************-->

    <h4>PHP array_intersect_key() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "c" => "blue", "d" => "pink");

    $result = array_intersect_key($a1, $a2);
    print_r($result);
    ?>

    <!--******************** PHP array_intersect_uassoc() Function ********************-->

    <h4>PHP array_intersect_uassoc() Function</h4>

    <?php
    function myfunction2($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("d" => "red", "b" => "green", "e" => "blue");

    $result = array_intersect_uassoc($a1, $a2, "myfunction2");
    print_r($result);
    ?>

    <!--******************** PHP array_intersect_ukey() Function ********************-->

    <h4>PHP array_intersect_ukey() Function</h4>

    <?php
    function myfunction3($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_intersect_ukey($a1, $a2, "myfunction3");
    print_r($result);
    ?>

    <!--******************** PHP array_key_exists() Function ********************-->

    <h4>PHP array_key_exists() Function</h4>

    <?php
    $a = array("Volvo" => "XC90", "BMW" => "X5");
    if (array_key_exists("Volvo", $a)) {
        echo "Key exists!";
    } else {
        echo "Key does not exist!";
    }
    ?>

    <!--******************** PHP array_keys() Function ********************-->

    <h4>PHP array_keys() Function</h4>

    <?php
    $a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
    print_r(array_keys($a));
    ?>

    <!--******************** PHP array_map() Function ********************-->

    <h4>PHP array_map() Function</h4>

    <?php
    function myfunction4($v)
    {
        return ($v * $v);
    }

    $a = array(1, 2, 3, 4, 5);
    print_r(array_map("myfunction4", $a));
    ?>

    <!--******************** PHP array_merge() Function ********************-->

    <h4>PHP array_merge() Function</h4>

    <?php
    $a1 = array("red", "green");
    $a2 = array("blue", "yellow");
    print_r(array_merge($a1, $a2));
    ?>

    <!--******************** PHP array_merge_recursive() Function ********************-->

    <h4>PHP array_merge_recursive() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green");
    $a2 = array("c" => "blue", "b" => "yellow");
    print_r(array_merge_recursive($a1, $a2));
    ?>

    <!--******************** PHP array_multisort() Function ********************-->

    <h4>PHP array_multisort() Function</h4>

    <?php
    $a = array("Dog", "Cat", "Horse", "Bear", "Zebra");
    array_multisort($a);
    print_r($a);
    ?>

    <!--******************** PHP array_pad() Function ********************-->

    <h4>PHP array_pad() Function</h4>

    <?php
    $a = array("red", "green");
    print_r(array_pad($a, 5, "blue"));
    ?>

    <!--******************** PHP array_pop() Function ********************-->

    <h4>PHP array_pop() Function</h4>

    <?php
    $a = array("red", "green", "blue");
    array_pop($a);
    print_r($a);
    ?>

    <!--******************** PHP array_product() Function ********************-->

    <h4>PHP array_product() Function</h4>

    <?php
    $a = array(5, 5);
    echo (array_product($a));
    ?>

    <!--******************** PHP array_push() Function ********************-->

    <h4>PHP array_push() Function</h4>

    <?php
    $a = array("red", "green");
    array_push($a, "blue", "yellow");
    print_r($a);
    ?>

    <!--******************** PHP array_rand() Function ********************-->

    <h4>PHP array_rand() Function</h4>

    <?php
    $a = array("red", "green", "blue", "yellow", "brown");
    $random_keys = array_rand($a, 3);
    echo $a[$random_keys[0]] . "<br>";
    echo $a[$random_keys[1]] . "<br>";
    echo $a[$random_keys[2]];
    ?>

    <!--******************** PHP array_reduce() Function ********************-->

    <h4>PHP array_reduce() Function</h4>

    <?php
    function myfunction5($v1, $v2)
    {
        return $v1 . "-" . $v2;
    }
    $a = array("Dog", "Cat", "Horse");
    print_r(array_reduce($a, "myfunction5"));
    ?>

    <!--******************** PHP array_replace() Function ********************-->

    <h4>PHP array_replace() Function</h4>

    <?php
    $a1 = array("red", "green");
    $a2 = array("blue", "yellow");
    print_r(array_replace($a1, $a2));
    ?>

    <!--******************** PHP array_replace_recursive() Function ********************-->

    <h4>PHP array_replace_recursive() Function</h4>

    <?php
    $a1 = array("a" => array("red"), "b" => array("green", "blue"),);
    $a2 = array("a" => array("yellow"), "b" => array("black"));
    print_r(array_replace_recursive($a1, $a2));
    ?>


    <!--******************** PHP array_reverse() Function ********************-->

    <h4>PHP array_reverse() Function</h4>

    <?php
    $a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
    print_r(array_reverse($a));
    ?>

    <!--******************** PHP array_search() Function ********************-->

    <h4>PHP array_search() Function</h4>

    <?php
    $a = array("a" => "red", "b" => "green", "c" => "blue");
    echo array_search("red", $a);
    ?>

    <!--******************** PHP array_shift() Function ********************-->

    <h4>PHP array_shift() Function</h4>

    <?php
    $a = array("a" => "red", "b" => "green", "c" => "blue");
    echo array_shift($a);
    print_r($a);
    ?>

    <!--******************** PHP array_slice() Function ********************-->

    <h4>PHP array_slice() Function</h4>

    <?php
    $a = array("red", "green", "blue", "yellow", "brown");
    print_r(array_slice($a, 2));
    ?>

    <!--******************** PHP array_splice() Function ********************-->

    <h4>PHP array_splice() Function</h4>

    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "purple", "b" => "orange");
    array_splice($a1, 0, 2, $a2);
    print_r($a1);
    ?>

    <!--******************** PHP array_sum() Function ********************-->

    <h4>PHP array_sum() Function</h4>

    <?php
    $a = array(5, 15, 25);
    echo array_sum($a);
    ?>

    <!--******************** PHP array_udiff() Function ********************-->

    <h4>PHP array_udiff() Function</h4>

    <?php
    function myfunction6($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_udiff($a1, $a2, "myfunction6");
    print_r($result);
    ?>

    <!--******************** PHP array_udiff_assoc() Function ********************-->

    <h4>PHP array_udiff_assoc() Function</h4>

    <?php
    function myfunction7($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "blue", "c" => "green");

    $result = array_udiff_assoc($a1, $a2, "myfunction7");
    print_r($result);
    ?>

    <!--******************** PHP array_udiff_uassoc() Function ********************-->

    <h4>PHP array_udiff_uassoc() Function</h4>

    <?php
    function myfunction_key($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    function myfunction_value($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "green", "c" => "green");

    $result = array_udiff_uassoc($a1, $a2, "myfunction_value", "myfunction_key");
    print_r($result);
    ?>

    <!--******************** PHP array_uintersect() Function ********************-->

    <h4>PHP array_uintersect() Function</h4>

    <?php
    function myfunction8($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_uintersect($a1, $a2, "myfunction8");
    print_r($result);
    ?>

    <!--******************** PHP array_uintersect_assoc() Function ********************-->

    <h4>PHP array_uintersect_assoc() Function</h4>

    <?php
    function myfunction9($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "blue", "c" => "green");

    $result = array_uintersect_assoc($a1, $a2, "myfunction9");
    print_r($result);
    ?>

    <!--******************** PHP array_uintersect_uassoc() Function ********************-->

    <h4>PHP array_uintersect_uassoc() Function</h4>

    <?php
    function myfunction_key1($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    function myfunction_value1($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "green", "c" => "green");

    $result = array_uintersect_uassoc($a1, $a2, "myfunction_key1", "myfunction_value1");
    print_r($result);
    ?>

    <!--******************** PHP array_unique() Function ********************-->

    <h4>PHP array_unique() Function</h4>

    <?php
    $a = array("a" => "red", "b" => "green", "c" => "red");
    print_r(array_unique($a));
    ?>

    <!--******************** PHP array_unshift() Function ********************-->

    <h4>PHP array_unshift() Function</h4>

    <?php
    $a = array("a" => "red", "b" => "green");
    array_unshift($a, "blue");
    print_r($a);
    ?>

    <!--******************** PHP array_values() Function ********************-->

    <h4>PHP array_values() Function</h4>

    <?php
    $a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
    print_r(array_values($a));
    ?>

    <!--******************** PHP array_walk() Function ********************-->

    <h4>PHP array_walk() Function</h4>

    <?php
    function myfunction10($value, $key)
    {
        echo "The key $key has the value $value<br>";
    }
    $a = array("a" => "red", "b" => "green", "c" => "blue");
    array_walk($a, "myfunction10");
    ?>

    <!--******************** PHP array_walk_recursive() Function ********************-->

    <h4>PHP array_walk_recursive() Function</h4>

    <?php
    function myfunction11($value, $key)
    {
        echo "The key $key has the value $value<br>";
    }
    $a1 = array("a" => "red", "b" => "green");
    $a2 = array($a1, "1" => "blue", "2" => "yellow");
    array_walk_recursive($a2, "myfunction11");
    ?>

    <!--******************** PHP arsort() Function ********************-->

    <h4>PHP arsort() Function</h4>

    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

    <!--******************** PHP asort() Function ********************-->

    <h4>PHP asort() Function</h4>

    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    asort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

    <!--******************** PHP compact() Function ********************-->

    <h4>PHP compact() Function</h4>

    <?php
    $firstname = "Peter";
    $lastname = "Griffin";
    $age = "41";

    $result = compact("firstname", "lastname", "age");

    print_r($result);
    ?>

    <!--******************** PHP count() Function ********************-->

    <h4>PHP count() Function</h4>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    ?>

    <!--******************** PHP current() Function ********************-->

    <h4>PHP current() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";
    ?>

    <!--******************** PHP each() Function ********************-->

    <!-- <h4>PHP each() Function</h4> -->

    <?php
    // $people = array("Peter", "Joe", "Glenn", "Cleveland");
    // print_r (each($people));
    ?>

    <!--******************** PHP end() Function ********************-->

    <h4>PHP end() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    echo current($people) . "<br>";
    echo end($people);
    ?>

    <!--******************** PHP extract() Function ********************-->

    <h4>PHP extract() Function</h4>

    <?php
    $a = "Original";
    $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");
    extract($my_array);
    echo "\$a = $a; \$b = $b; \$c = $c";
    ?>

    <!--******************** PHP in_array() Function ********************-->

    <h4>PHP in_array() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    if (in_array("Glenn", $people)) {
        echo "Match found";
    } else {
        echo "Match not found";
    }
    ?>

    <!--******************** PHP key() Function ********************-->

    <h4>PHP key() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    echo "The key from the current position is: " . key($people);
    ?>


    <!--******************** PHP krsort() Function ********************-->

    <h4>PHP krsort() Function</h4>

    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    krsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

    <!--******************** PHP ksort() Function ********************-->

    <h4>PHP ksort() Function</h4>

    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

    <!--******************** PHP list() Function ********************-->

    <h4>PHP list() Function</h4>

    <?php
    $my_array = array("Dog", "Cat", "Horse");

    list($a, $b, $c) = $my_array;
    echo "I have several animals, a $a, a $b and a $c.";
    ?>

    <!--******************** PHP natcasesort() Function ********************-->

    <h4>PHP natcasesort() Function</h4>

    <?php
    $temp_files = array(
        "temp15.txt", "Temp10.txt",
        "temp1.txt", "Temp22.txt", "temp2.txt"
    );

    natsort($temp_files);
    echo "Natural order: ";
    print_r($temp_files);
    echo "<br />";

    natcasesort($temp_files);
    echo "Natural order case insensitve: ";
    print_r($temp_files);
    ?>

    <!--******************** PHP natsort() Function ********************-->

    <h4>PHP natsort() Function</h4>

    <?php
    $temp_files = array(
        "temp15.txt", "temp10.txt",
        "temp1.txt", "temp22.txt", "temp2.txt"
    );

    sort($temp_files);
    echo "Standard sorting: ";
    print_r($temp_files);
    echo "<br>";

    natsort($temp_files);
    echo "Natural order: ";
    print_r($temp_files);
    ?>

    <!--******************** PHP next() Function ********************-->

    <h4>PHP next() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";
    echo next($people);
    ?>

    <!--******************** PHP pos() Function ********************-->

    <h4>PHP pos() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo pos($people) . "<br>";
    ?>

    <!--******************** PHP prev() Function ********************-->

    <h4>PHP prev() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";
    echo next($people) . "<br>";
    echo prev($people);
    ?>

    <!--******************** PHP range() Function ********************-->

    <h4>PHP range() Function</h4>

    <?php
    $number = range(0, 5);
    print_r($number);
    ?>

    <!--******************** PHP reset() Function ********************-->

    <h4>PHP reset() Function</h4>

    <?php
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . "<br>";
    echo next($people) . "<br>";

    echo reset($people);
    ?>


    <!--******************** PHP rsort() Function ********************-->

    <h4>PHP rsort() Function</h4>

    <?php
   $cars=array("Volvo","BMW","Toyota");
   rsort($cars);
   
   $clength=count($cars);
   for($x=0;$x<$clength;$x++)
     {
     echo $cars[$x];
     echo "<br>";
     }
   
    ?>

    <!--******************** PHP shuffle() Function ********************-->

    <h4>PHP shuffle() Function</h4>

    <?php
    $my_array = array("red", "green", "blue", "yellow", "purple");

    shuffle($my_array);
    print_r($my_array);
    ?>


    <!--******************** PHP sizeof() Function ********************-->

    <h4>PHP sizeof() Function</h4>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo sizeof($cars);
    ?>


    <!--******************** PHP sort() Function ********************-->

    <h4>PHP sort() Function</h4>

    <?php
   $cars=array("Volvo","BMW","Toyota");
   sort($cars);
   
   $clength=count($cars);
   for($x=0;$x<$clength;$x++)
     {
     echo $cars[$x];
     echo "<br>";
     }
   
    ?>


    <!--******************** PHP uasort() Function ********************-->

    <h4>PHP uasort() Function</h4>

    <?php
    function my_sort($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $arr = array("a" => 4, "b" => 2, "c" => 8, "d" => 6);
    uasort($arr, "my_sort");
    ?>

    <!--******************** PHP uksort() Function ********************-->

    <h4>PHP uksort() Function</h4>

    <?php
    function my_sort1($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $arr = array("a" => 4, "b" => 2, "c" => 8, "d" => 6);
    uksort($arr, "my_sort1");
    ?>

    <!--******************** PHP usort() Function ********************-->

    <h4>PHP usort() Function</h4>

    <?php
    function my_sort2($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $a = array(4, 2, 8, 6);
    usort($a, "my_sort2");
    ?>


</body>

</html>