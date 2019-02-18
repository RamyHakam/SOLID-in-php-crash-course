<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/18/19
 * Time: 10:51 PM
 */

namespace  Classes;

class Match
{


    private  $attack;
    private  $defense;
    private  $keeper;

    public function __construct()
    {
        $this->attack= new Attack();
        $this->defense= new Defense();
        $this->keeper= new Keeper();


    }

    public  function  start(){
        echo "start play";
    }



}