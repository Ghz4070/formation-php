<?php

declare(strict_types=1);

namespace Game\Interfaces;

interface FighterInterface
{
    public function damage(): float;

    public function force(): float;
}
