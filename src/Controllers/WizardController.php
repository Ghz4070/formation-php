<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Interfaces\MayDieInterface;
use Game\Interfaces\OpponentInterface;

class WizardController extends AbstractCharacter implements MayDieInterface, OpponentInterface
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
        return "{$this->name()} is dead but will revive!";
    }
}
