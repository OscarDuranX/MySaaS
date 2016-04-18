<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 18/04/16
 * Time: 17:31
 */

namespace App;


abstract class AbstractProfiler implements Profile
{

    abstract function show($user);

    protected function getuserId($user)
    {
        return $user->id;
    }
}