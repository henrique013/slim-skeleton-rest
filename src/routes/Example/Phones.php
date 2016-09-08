<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 29/07/2016
 * Time: 14:01
 */

namespace App\Route\Example;

use App\Util\Pagination;
use App\Util\Handle;
use App\Util\Handle\GET;
use Slim\Http\Request;
use Slim\Http\Response;


class Phones extends Handle
{
    use GET;


    private $phones = [
        '95519-0818',
        '96419-5510',
        '93135-6583',
        '97970-5250',
        '92919-8657',
        '97159-7392',
        '94558-2977',
        '91171-5374',
        '92740-0481',
        '92195-7634',
        '97153-7106',
        '97419-7608',
        '92484-3789',
        '99029-3735',
        '98420-6469'
    ];


    public function get(Request $request, Response $response)
    {
        $page = (int)$request->getParam('page', 1);
        $limit = 5;
        $total = count($this->phones);
        $offset = Pagination::offsetByPage($page, $limit);

        $json = array_slice($this->phones, $offset, $limit);


        $response = $response->withJson($json);

        Pagination::addHeaders($response, $total, $page, $limit);


        return $response;
    }
}