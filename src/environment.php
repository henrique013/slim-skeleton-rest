<?php
// Environment variable settings


$dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
$dotenv->overload();
$dotenv->required('ENV')->allowedValues(['development', 'production']);