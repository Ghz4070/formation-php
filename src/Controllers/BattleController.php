<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Interfaces\PlayerInterface;

class BattleController
{
    private $players;

    public function __construct(PlayerInterface ...$players)
    {
        $this->players = $players;
        foreach($players as $player) {
            echo "Battle \n";
        }
    }

    public function fight()
    {
        foreach($this->players as $player) {

        }
    }

    /*private function round(Player ...$players)
    {
        // Select player one by one for fight
    }*/
}
