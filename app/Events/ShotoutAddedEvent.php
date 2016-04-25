<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 25/04/16
 * Time: 16:32
 */

namespace App\Events;


use App\Providers\ShouldBroadcast;
use App\Shoutout;
use Illuminate\Queue\SerializesModels;

class ShotoutAddedEvent extends Event implements ShouldBroadcast
{

    use SerializesModels;

    public $shoutout;
    /**
     * ShotoutAddedEvent constructor.
     */
    public function __construct(Shoutout $shoutout)
    {
        $this->shoutout = $shoutout;
    }

    public function broadcastOn()
    {
        return['shoutout-added'];
    }
}