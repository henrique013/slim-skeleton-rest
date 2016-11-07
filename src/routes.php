<?php
// Routes


$app->get('[/]', 'App\Route\Index:get');
$app->get('/api/v1[/]', 'App\Route\API\V1\Index:get');
