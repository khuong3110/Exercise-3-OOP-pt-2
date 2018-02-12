<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myLoad($class) {
	include_once('classes/' . strtolower($class) . '.class.php');
}
spl_autoload_register('myLoad');

$registerUser = new Register('newuser','regular');

if (isset($_POST['submit'])) {
  if (is_object($registerUser) ) {
    echo("The registered user's first name is " . $_POST['fname'] . "<br/>");
    echo("The registered user's last name is " . $_POST['lname'] . "<br/>");
    echo("The registered user's email name is " . $_POST['email'] . "<br/>");
    echo("<hr>");
    echo("Processing Complete");
  }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313 - Spring 2018 - Exercise 3 - OOP pt 2</title>
</head>
<body>


</body>
</html>
