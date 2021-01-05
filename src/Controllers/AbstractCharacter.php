<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Interfaces\FighterInterface;
use Game\Interfaces\LivingInterface;
use Game\Interfaces\PlayerInterface;

abstract class AbstractCharacter implements PlayerInterface, LivingInterface, FighterInterface
{
    protected $health;
    protected $damage;
    protected $force;
    protected $name;

    public function __construct($id)
    {
        $this->health = rand(50, 100);
        $this->damage = rand(20, 40);
        $this->force = rand(1, 5);
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
