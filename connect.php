<?php

$user = 'root';
$pass = '';
$db = 'suhanasafar';

$db = new mysqli('localhost', $user, $pass, $db) or die("Sorry! database not connected!!");

echo "Connection set up successfully...";

?>