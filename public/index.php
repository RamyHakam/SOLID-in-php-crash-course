<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/18/19
 * Time: 10:50 PM
 */

require __DIR__ . '/../vendor/autoload.php';


 $players=[];

  for($index=1;$index<5;$index++){
      array_push($players, new \Classes\AttackPlayer());
  }

 for($index=1;$index<5;$index++){
    array_push($players, new \Classes\defencePlayer());
  }

 array_push($players, new \Classes\KeepingPlayer());




 $match = new \Classes\Match($players);
 $match->start();



