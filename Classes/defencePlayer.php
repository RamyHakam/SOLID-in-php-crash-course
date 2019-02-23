<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:49 AM
 */

namespace Classes;


use Interfaces\DefenseInterface;
use Interfaces\PlayerInterface;

class defencePlayer implements PlayerInterface,  DefenseInterface
{

    public function Defense()
    {
        echo "defense";
    }
    public function play()
    {
        // TODO: Implement play() method.
        $this->Defense();
    }


}