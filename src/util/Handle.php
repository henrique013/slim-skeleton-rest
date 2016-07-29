<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 27/07/2016
 * Time: 14:51
 */

namespace App\Util;


abstract class Handle
{
    protected $ci;


    public function __construct(\Slim\Container $ci)
    {
        $this->ci = $ci;
    }
}