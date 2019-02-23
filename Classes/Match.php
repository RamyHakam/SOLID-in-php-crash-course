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
      private  $playerList;
    public function __construct( Array $players )
    {

        $this->playerList=$players;


    }

    public  function  start(){
        echo "start match ";
        echo "\n";

        foreach ($this->playerList as $player){
            $player->play();
            echo "\n";

        }
    }



}