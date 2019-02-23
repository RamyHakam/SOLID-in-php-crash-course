<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:48 AM
 */

namespace Classes;


use Interfaces\PlayerInterface;

class AttackPlayer  implements  PlayerInterface
{

    public function play()
    {
        echo "attack";
    }

}