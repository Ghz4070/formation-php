<?php

declare(strict_types=1);

namespace Game\Interfaces;

interface OpponentInterface
{
    public function takeDamage(float $damage);

    public function health(): float;
}
