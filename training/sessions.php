
<!--  Session Start -->
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "light-violet";
$_SESSION["favanimal"] = "Panguins";

// echo "<pre> This is to declare the session variable value </pre>";

echo "Session variables are set." . "<br><br>";


echo "Favorite color is :- " . $_SESSION["favcolor"] . ".<br><br>";
echo "Favorite animal is :- " . $_SESSION["favanimal"] . ".";
echo "<br><br>";
print_r($_SESSION);

echo "<br><br>";
echo "To change a session variable, just overwrite it.";

echo "<br><br>";
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

echo "<br><br>";
echo "To remove all global session variables and destroy the session, use session_unset() and session_destroy():";

echo "<br><br>";
session_unset();
print_r($_SESSION);



echo "<br><br>";
session_destroy();
print_r($_SESSION);


?>

</body>
</html>