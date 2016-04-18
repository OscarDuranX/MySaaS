<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 18/04/16
 * Time: 16:58
 */

namespace App;


class CreadorDePerfilesHTML
{

    public function show()
    {
        return "<div>
                Id: <b>". $this->id     ."</b></br>
                Name: " . $this->name . "
                </div>";
    }





}