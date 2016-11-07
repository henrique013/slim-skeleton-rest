<?php
// Environment variable settings


$dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
$dotenv->overload();
$dotenv->required('MY_ENV')->allowedValues(['development', 'production']);