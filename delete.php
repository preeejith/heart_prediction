<?php

$db = mysqli_connect("localhost","root","","heart");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>