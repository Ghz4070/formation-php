<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Interfaces\FighterInterface;
use Game\Interfaces\LivingInterface;
use Game\Interfaces\OpponentInterface;
use Game\Interfaces\PlayerInterface;

abstract class AbstractCharacter implements PlayerInterface, LivingInterface, FighterInterface, OpponentInterface
{
    protected $health;
    protected $damage;
    protected $force;
    protected $name;

    public function __construct(string $id)
    {
        $this->health = rand(40, 500);
        $this->damage = rand(0, 20);
        $this->force = rand(1, 3);
        $this->name = $id;
    }

    public function health(): float
    {
        return $this->health;
    }

    public function damage(): float
    {
        return $this->damage;
    }

    public function force(): float
    {
        return $this->force;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isAlive(): bool
    {
        if (0 >= $this->health) {
            return false;
        }

        return true;
    }
}
