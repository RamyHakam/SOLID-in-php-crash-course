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

    public function play()
    {
        //$keeper= new ElhadaryChild();
       $keeper=new ElhadaryFather();
        echo $keeper->Keeping();



    }


}