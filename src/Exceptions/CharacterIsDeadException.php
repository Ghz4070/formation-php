<?php

declare(strict_types=1);

namespace Game\Character;

use Game\Interfaces\MayDieInterface;

class CharacterIsDeadException extends \Exception
{
    private $character;

    public function __construct(MayDieInterface $character)
    {
        parent::__construct("{$character->describeItsDeath()}\n");
        $this->character = $character;
    }
}