<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 7/03/16
 * Time: 17:56
 */

namespace App;

trait OAuthIdentities
{
    /**
     * Get OAuth identities
     */
    public function oauthIdentities()
    {
        return $this->hasMany(\Acacha\Socialite\OAuthIdentity::class);
    }
}