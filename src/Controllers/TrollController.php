<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Interfaces\MayDieInterface;
use Game\Interfaces\OpponentInterface;
use Game\Interfaces\WearingWeaponInterface;

class TrollController extends AbstractCharacter implements MayDieInterface, OpponentInterface, WearingWeaponInterface
{
    public function __construct($id)
    {
        parent::__construct($id);
    }

    public function takeDamage(float $damage): void
    {

    }

    public function describeItsDeath(): string
    {
        return "{$this->name()} seems to be dead!";
    }
}
