<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:55 AM
 */

namespace Classes;


use Interfaces\KeepingInterface;
use Players\ElhadaryChild;

class KeepingPlayer implements  KeepingInterface
{

    public function Keeping()
    {
        // TODO: Implement Keeping() method.
        $keeper= new ElhadaryChild();
        echo $keeper->Keeping();
    }

}