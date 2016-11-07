<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 27/07/2016
 * Time: 14:51
 */

namespace App\Util;

use Slim\Container;


abstract class Handle
{
    protected $ci;
    protected $context;


    public function __construct(Container $ci)
    {
        $this->context = [
            'title' => 'Home'
        ];

        $this->ci = $ci;
    }
}