<?php

declare(strict_types=1);

namespace Game\Controllers;

use Game\Character\CharacterIsDeadException;
use Game\Interfaces\MayDieInterface;

final class WizardController extends AbstractCharacter implements MayDieInterface
{
    public function takeDamage(float $damage): void
    {
        if ($damage >= $this->health) {
            throw new CharacterIsDeadException($this);
        }

        if (100 >= rand(0, 1000)) {
            $this->health -= $damage;
        }
    }

    public function describeItsDeath(): string
    {
        return "{$this->name()} is dead but will revive!";
    }
}
