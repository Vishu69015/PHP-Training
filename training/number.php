
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <title>Number-Validation</title>
</head>

<body>


    <?php

    $indianNumber = $usaNumber = $germanyNumber = $hongKongNumber = $australiaNumber = "";
    $indianNumberError = $usaNumberError = $germanyNumberError = $hongKongNumberError = $australiaNumberError = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        if (empty($_POST['indianNumber'])) {
            $indianNumberError = "This Field is Required";
        } else {
            $indianNumber = test_input($_POST["indianNumber"]);
            if (preg_match("/^[6-9]\d{9}$/", $indianNumber)) {
                $indianNumberError = "Invalid Number";
            } else {
                $indianNumber = test_input($_POST["indianNumber"]);
            }
        }


        // *************************************

        if (empty($_POST["usaNumber"])) {
            $usaNumberError = "This Field is Required";
        } else {
            $usaNumber = test_input($_POST["usaNumber"]);

            if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $usaNumber)) {
                $usaNumberError = "Invalid Number";
            }
        }



        // *************************************

        if (empty($_POST["germanyNumber"])) {
            $germanyNumberError = "This Field is Required";
        } else {
            $germanyNumber = test_input($_POST["germanyNumber"]);

            if (!preg_match("(\(?([\d \-\)\–\+\/\(]+)\)?([ .\-–\/]?)([\d]+))", $germanyNumber)) {
                $germanyNumberError = "Invalid Number";
            }
        }



        // *************************************

        if (empty($_POST["hongKongNumber"])) {
            $hongKongNumberError = "This Field is Required";
        } else {
            $hongKongNumber = test_input($_POST["hongKongNumber"]);
            if (!preg_match("/^1[0-9]{10}$|^[569][0-9]{7}$/", $hongKongNumber)) {
                $hongKongNumberError = "Invalid Number";
            }
        }




        // *************************************

        if (empty($_POST["australiaNumber"])) {
            $australiaNumberError = "This Field is Required";
        } else {
            $australiaNumber = test_input($_POST["australiaNumber"]);
            if (!preg_match("(?:\+?61)?(?:\(0\)[23478]|\(?0?[23478]\)?)\d{8}", $australiaNumber)) {
                $australiaNumberError = "Invalid Number";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h1>Enter The Phone Number</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Indian Number: <input type="text" name="indianNumber" value="<?php echo $indianNumber ?>">
        <span class="error">* <?php echo $indianNumberError; ?></span>
        <br><br>

        USA Number: <input type="text" name="usaNumber" value="<?php echo $usaNumber ?>">
        <span class="error">* <?php echo $usaNumberError; ?></span>
        <br><br>

        Germany Number: <input type="text" name="germanyNumber" value="<?php echo $germanyNumber ?>">
        <span class="error">* <?php echo $germanyNumberError; ?></span>
        <br><br>

        Hong Kong Number: <input type="text" name="hongKongNumber" value="<?php echo $hongKongNumber ?>">
        <span class="error">* <?php echo $hongKongNumberError; ?></span>
        <br><br>

        Australia Number: <input type="text" name="australiaNumber" value="<?php echo $australiaNumber ?>">
        <span class="error">* <?php echo $australiaNumberError; ?></span>
        <br><br>


        <input type="submit" name="submit" value="Submit">

    </form>



    <?php
    echo "<h2>Your Input:</h2>";
    echo $indianNumber;
    echo "<br>";
    echo $usaNumber;
    echo "<br>";
    echo $germanyNumber;
    echo "<br>";
    echo $hongKongNumber;
    echo "<br>";
    echo $australiaNumber;
    ?>




</body>

</html>

