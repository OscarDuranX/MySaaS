<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 25/04/16
 * Time: 17:22
 */

namespace App;


class Shoutout
{
    public $user;

    public $content;

    /**
     * ShoutProves constructor.
     * @param $user
     * @param $content
     */
    public function __construct($user, $content)
    {
        $this->user = $user;
        $this->content = $content;
    }

}