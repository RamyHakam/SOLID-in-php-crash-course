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
   private  $player;

    public function __construct( Player $player)
    {
        $this->player=$player;


    }

    public  function  start(){
        echo "start play";
        $this->player->play();
    }



}