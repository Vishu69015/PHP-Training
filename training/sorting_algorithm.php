<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Algorithms</title>
</head>

<body>

    <h1 style="text-align: center;">Sorting Algorithms</h1>

    <h2>Quick Sort</h2>

    <?php
    function quick_sort($array)
    {
        $lower = $greater = array();
        if (count($array) < 2) {
            return $array;
        }
        $pivot_key = key($array);
        $pivot = array_shift($array);
        foreach ($array as $val) {
            if ($val <= $pivot) {
                $lower[] = $val;
            } elseif ($val > $pivot) {
                $greater[] = $val;
            }
        }
        return array_merge(quick_sort($lower), array($pivot_key => $pivot), quick_sort($greater));
    }

    $test_array = array(30, 40, -21, 1, -1, 2, -6);
    echo "Original Array : ";
    echo implode(', ', $test_array);
    echo "<br><br> Sorted Array : ";
    echo implode(', ', quick_sort($test_array));

    ?>

    <hr>

    <!---------------------------------------------------------------- Merge Sort  ---------------------------------------------------------------->

    <h2>Merge Sort</h2>

    <?php
    function merge_sort($my_array)
    {
        if (count($my_array) == 1) return $my_array;
        $mid = count($my_array) / 2;
        $left = array_slice($my_array, 0, $mid);
        $right = array_slice($my_array, $mid);
        $left = merge_sort($left);
        $right = merge_sort($right);
        return merge($left, $right);
    }
    function merge($left, $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }

    $test_array = array(30, 40, -21, 1, -1, 2, -6);
    echo "Original Array : ";
    echo implode(', ', $test_array);
    echo "<br><br> Sorted Array : ";
    echo implode(', ', merge_sort($test_array));

    ?>


    <hr>

    <!---------------------------------------------------------------- Selection Sort  ---------------------------------------------------------------->

    <h2>Selection Sort</h2>

    <?php

    function selection_sort($array)
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }
            $array = swap_positions($array, $i, $min);
        }
        return $array;
    }

    function swap_positions($array1, $left, $right)
    {
        $backup_old_data_right_value = $array1[$right];
        $array1[$right] = $array1[$left];
        $array1[$left] = $backup_old_data_right_value;
        return $array1;
    }

    $test_array = array(30, 40, -21, 1, -1, 2, -6);
    echo "Original Array : ";
    echo implode(', ', $test_array);
    echo "<br><br> Sorted Array : ";
    echo implode(', ', selection_sort($test_array));

    ?>


    <hr>

    <!---------------------------------------------------------------- Insertion Sort  ---------------------------------------------------------------->

    <h2>Insertion Sort</h2>

    <?php

    function insertion_sort($array)
    {
        $l = count($array);

        for ($i = 0; $i < $l; $i++) {
            $temp = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $array[$j] > $temp) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $temp;
        }
        return $array;
    }

    $test_array = array(30, 40, -21, 1, -1, 2, -6);
    echo "Original Array : ";
    echo implode(', ', $test_array);
    echo "<br><br> Sorted Array : ";
    echo implode(', ', insertion_sort($test_array));

    ?>

    <hr>

    <!---------------------------------------------------------------- Bubble Sort  ---------------------------------------------------------------->

    <h2>Bubble Sort</h2>

    <?php

    function bubble_sort($array)
    {
        $l = count($array);
        for ($i = 0; $i < $l; $i++) {
            for ($j = 0; $j < $l - 1; $j++) {

                if ($array[$i] < $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        return $array;
    }

    $test_array = array(30, 40, -21, 1, -1, 2, -6);
    echo "Original Array : ";
    echo implode(', ', $test_array);
    echo "<br><br> Sorted Array : ";
    echo implode(', ', bubble_sort($test_array));

    ?>

    <br><br><br>

</body>

</html>