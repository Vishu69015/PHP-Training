<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>

<body>

    <h1 style="text-align: center;">Exceptions</h1>

    <?php
    function divide1($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    // echo divide1(5, 0);  
    ?>

    <br><br>

    <hr>

    <!----------------------------------------------- The try...catch Statement ----------------------------------------------->

    <h2>The try...catch Statement</h2>

    <h3>Show a message when an exception is thrown:</h3>

    <?php
    function divide2($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide2(5, 0);
    } catch (Exception $e) {
        echo "Unable to divide.";
    }
    ?>

    <br><br>

    <hr>

    <!----------------------------------------------- The try...catch...finally Statement ----------------------------------------------->

    <h2>The try...catch...finally Statement</h2>

    <h3>Show a message when an exception is thrown and then indicate that the process has ended:</h3>

    <?php
    function divide3($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide3(5, 0);
    } catch (Exception $e) {
        echo "catch : Unable to divide. <br><br>";
    } finally {
        echo "finally :  Process complete.";
    }
    ?>

    <br><br>

    <hr>

    <!----------------------------------------------- The try...finally Statement ----------------------------------------------->

    <h2>The try...finally Statement</h2>

    <h3>Output a string even if an exception was not caught:</h3>


    <?php
    function divide4($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }
    try {
       echo divide4(5, 0) . "<br><br>";
    } 
    catch (Exception $e) {
        echo "Unable to divide. <br><br>";
    } 
    finally {
        echo "Process complete.";
    }

    ?>

    <br><br>

    <hr>

    <!----------------------------------------------- Functions ----------------------------------------------->

    <h3>Output information about an exception that was thrown:</h3>

    <?php
    function divide5($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide5(5, 0);
    } catch (Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message";
    }
    ?>

    <br><br><br>
    <hr>

    <h1 style="text-align: center;">PHP Exception Reference</h1>

    <!------------------------------------- PHP Exception Constructor ------------------------------------->

    <h2 style="color: red;">PHP Exception Constructor</h2>

    <?php
    function divide6($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }
    ?>

    <!------------------------------------- PHP Exception getCode() Method ------------------------------------->

    <h2>PHP Exception getCode() Method</h2>

    <?php
    try {
        throw new Exception("An error occurred", 120);
    } catch (Exception $e) {
        echo "Error code: " . $e->getCode();
    }
    ?>

    <!------------------------------------- PHP Exception getFile() Method ------------------------------------->

    <h2>PHP Exception getFile() Method</h2>

    <?php
    try {
        throw new Exception("An error occurred");
    } catch (Exception $e) {
        echo "Error in this file: " . $e->getFile();
    }
    ?>

    <!------------------------------------- PHP Exception getMessage() Method ------------------------------------->

    <h2>PHP Exception getMessage() Method</h2>

    <?php
    try {
        throw new Exception("An error occurred");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>

    <!------------------------------------- PHP Exception getLine() Method ------------------------------------->

    <h2>PHP Exception getLine() Method</h2>

    <?php
    try {
        throw new Exception("An error occurred");
    } catch (Exception $e) {
        echo $e->getLine();
    }
    ?>

    <!------------------------------------- PHP Exception getPrevious() Method ------------------------------------->

    <h2>PHP Exception getPrevious() Method</h2>

    <?php
    try {
        try {
            throw new Exception("An error occurred", 1);
        } catch (Exception $e1) {
            throw new Exception("Another error occurred", 2, $e1);
        }
    } catch (Exception $e2) {
        echo $previous = $e2->getPrevious();
        echo "<br><br>";
        echo $previous->getMessage();
    }
    ?>

    <!------------------------------------- PHP Exception getTrace() Method ------------------------------------->

    <h2>PHP Exception getTrace() Method</h2>

    <?php
    function myFunction($num)
    {
        throw new Exception("An error occurred");
    }

    try {
        myFunction(5);
    } catch (Exception $e) {
        print_r($e->getTrace());
    }
    ?>

    <!------------------------------------- PHP Exception getTraceAsString() Method ------------------------------------->

    <h2>PHP Exception getTraceAsString() Method</h2>

    <?php
    function myFunction1($num)
    {
        throw new Exception("An error occurred");
    }

    try {
        myFunction1(5);
    } catch (Exception $e) {
        print_r($e->getTraceAsString());
    }
    ?>

    <br><br><br>



</body>

</html>