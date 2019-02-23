<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:55 AM
 */

namespace Classes;


use Interfaces\PlayerInterface;
use Players\ElhadaryChild;
use Players\ElhadaryFather;

class KeepingPlayer implements  PlayerInterface
{

    public function Keeping()
    {
        // TODO: Implement Keeping() method.
        $keeper= new ElhadaryChild();
        echo $keeper->Keeping();
    }

    public function Attack()
    {
        // TODO: Implement Attack() method.
    }

    public function Defense()
    {
        // TODO: Implement Defense() method.
    }


}