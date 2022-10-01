<?php

if (isset($_SESSION['email']))
    $email = $_SESSION['email'];
else
    $email = "";

if (isset($_SESSION['name']))
    $name = $_SESSION['name'];
else
    $name = "";

?>