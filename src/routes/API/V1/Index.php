<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 29/07/2016
 * Time: 14:01
 */

namespace App\Route\API\V1;

use App\Util\Handle;
use App\Util\Handle\GET;
use Slim\Http\Request;
use Slim\Http\Response;


class Index extends Handle
{
    use GET;


    public function get(Request $request, Response $response)
    {
        /** @var \PDO $conn */


        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);

        return $response;
    }
}