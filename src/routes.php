<?php
// Routes


$app->get('[/]', 'App\Route\Index:get');
$app->get('/example/phones', 'App\Route\Example\Phones:get');
