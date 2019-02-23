<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:55 AM
 */

namespace Classes;


use Interfaces\PlayerInterface;

class KeepingPlayer implements  PlayerInterface
{

    public function play()
    {
        // TODO: Implement play() method.
        echo "Goal Keeping";
    }


}