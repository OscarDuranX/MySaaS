<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 18/04/16
 * Time: 17:14
 */

namespace App;


class CreadorDePerfilesJson extends AbstractProfiler
{
    public function show($user)
    {
        return "<JSON>
                Id: <b>". $this->getuserId($user)     ."</b></br>
                Name: " . $user->name . "
                </JSON>";

    }

}