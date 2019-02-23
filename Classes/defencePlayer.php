<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:49 AM
 */

namespace Classes;


use Interfaces\PlayerInterface;

class defencePlayer implements  PlayerInterface
{
    public function play()
    {
        echo "defence";
    }


}