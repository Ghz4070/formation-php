<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Interfaces\PlayerInterface;

class BattleController
{
    private $players = [];
    private $groupsOfLivingPlayers = [];

    public function __construct(PlayerInterface ...$players)
    {
        $this->players = $players;
        foreach($players as $player) {
            if (!isset($this->groupsOfLivingPlayers[get_class($player)])) {
                $this->groupsOfLivingPlayers[get_class($player)] = [];
            }

            $this->groupsOfLivingPlayers[get_class($player)][$player->getName()] = $player;
        }
    }

    public function fight()
    {
        echo "Les joueurs suivant sont dans l'arène<br>\n";

        foreach($this->players as $player) {
            echo get_class($player).' : '.$player->getName()."<br>\n";
        }

        $this->game(...$this->players);
    }

    private function game(PlayerInterface ...$players): void
    {
        while ($this->groupsHaveAtLeastOneSurvivor()) {
            $this->round(...$players);
        }
    }

    private function groupsHaveAtLeastOneSurvivor(): bool
    {
        foreach ($this->groupsOfLivingPlayers as $group) {
            if (count($group) < 1) {
                return false;
            }
        }

        return true;
    }

    private function round(PlayerInterface ...$players)
    {
        // Select player one by one for fight
    }
}
