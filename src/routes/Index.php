<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 29/07/2016
 * Time: 14:01
 */

namespace App\Route;

use App\Util\Handle\Route;
use Slim\Http\Request;
use Slim\Http\Response;


class Index extends Route
{
    public function __invoke(Request $request, Response $response)
    {
        /** @var \PDO $conn */
        //$conn = $this->ci->get('PDO');

        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);

        return $response;
    }
}