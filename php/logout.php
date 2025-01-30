<?php

session_start();
session_unset();
session_destroy();
$error = htmlentities('See you back soon :)');
header("Location:/restofile/template/index.php?msg=$error");