<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 29/07/2016
 * Time: 14:19
 */

namespace App\Middleware;

use App\Util\Handle\Middleware;
use Slim\Http\Request;
use Slim\Http\Response;


class Main extends Middleware
{
    public function __invoke(Request $request, Response $response, callable $next)
    {
        $response = $response->withHeader('X-Timestamp', time());

        $response = $next($request, $response);

        return $response;
    }
}