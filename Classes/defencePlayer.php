<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/23/19
 * Time: 9:49 AM
 */

namespace Classes;


use Interfaces\DefenseInterface;

class defencePlayer implements  DefenseInterface
{

    public function Defense()
    {
        echo "defense";
    }


}