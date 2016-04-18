<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 18/04/16
 * Time: 16:58
 */

namespace App;


class CreadorDePerfilesHTML extends AbstractProfiler
{

    public function show($user)
    {
        return  "<div>
                Id: <b>". $this->getuserId($user)     ."</b></br>
                Name: " . $user->name . "
                </div>";
    }







}