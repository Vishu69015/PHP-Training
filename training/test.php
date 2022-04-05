<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>



    <?php

    $n = 5;

    for ($i = 0; $i <= $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo " * ";
        }
        echo "<br>";
    }

    ?>
    <br><br>

    <?php

    $n = 5;

    for ($i = 0; $i <= $n; $i++) {
        for ($j = 0; $j <= $n; $j++) {

            if ($j <= ($n - $i)) {
                echo "<br>";
            } else {
                echo "* ";
            }
        }
    }

    ?>

    <br><br>


    <?php
    // PHP code to demonstrate printing
    // pattern of alphabets

    // Function to demonstrate
    // printing pattern
    function contalpha($n)
    {

        // initializing value
        // corresponding to 'A'
        // ASCII value
        $num = 65;

        // outer loop to handle
        // number of rows
        // n in this case
        for ($i = 0; $i < $n; $i++) {

            // inner loop to handle
            // number of columns
            // values changing acc.
            // to outer loop
            for ($j = 0; $j <= $i; $j++) {

                // explicitly converting
                // to char
                $ch = chr($num);

                // printing char value
                echo $ch . " ";
            }

            // incrementing number
            $num = $num + 1;

            // ending line after
            // each row
            echo "<br>";
        }
    }

    // Driver Code
    $n = 5;
    contalpha($n);

    ?>

    <br><br>

    <?php
    // PHP code to demonstrate
    // printing pattern of numbers

    // Function to demonstrate
    // printing pattern
    function numpat($n)
    {

        // initializing starting number
        $num = 1;

        // outer loop to handle
        // number of rows
        // n in this case
        for ($i = 0; $i < $n; $i++) {

            // inner loop to handle
            // number of columns
            // values changing acc.
            // to outer loop
            for ($j = 0; $j <= $i; $j++) {

                // printing number
                echo $num . " ";


                // incrementing number
                // at each column
                $num = $num + 1;
            }



            // ending line after
            // each row
            echo "<br>";
        }
    }

    // Driver Code
    $n = 5;
    numpat($n);

    ?>

    <br><br>

    <?php
    // PHP code to demonstrate
    // star pattern

    // Function to demonstrate
    // printing pattern
    function triangle($n)
    {

        // number of spaces
        $k = 2 * $n - 2;

        // outer loop to handle
        // number of rows
        // n in this case
        for ($i = 0; $i < $n; $i++) {

            // inner loop to handle
            // number spaces
            // values changing acc.
            // to requirement
            for ($j = 0; $j < $k; $j++)
                echo " ";

            // decrementing k after
            // each loop
            $k = $k - 1;

            // inner loop to handle
            // number of columns
            // values changing acc.
            // to outer loop
            for ($j = 0; $j <= $i; $j++) {

                // printing stars
                echo "* ";
            }

            // ending line after
            // each row
            echo "<br>";
        }
    }

    // Driver Code
    $n = 5;
    triangle($n);

    ?>



</body>

</html>