<?php

$connection = mysqli_connect('localhost', 'djeffery', '2021509');
if (!$connection) {
    die("Database connection failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'djeffery');
if (!select_db) {
  die ("Database selection failed" . mysqli_error($connection))
}
?>
